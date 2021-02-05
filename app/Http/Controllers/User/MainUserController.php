<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainUserController extends Controller
{
    //
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function userProfile()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        return view('user.profile.viewProfile', compact('user'));
    }

    public function userProfileEdit()
    {
        $id = Auth::user()->id;
        $editUser = User::find($id);

        return view('user.profile.viewProfile', compact('editUser'));
    }

    public function userProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        if($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename = date('ymdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images/'), $filename);
            $data['profile_photo_path'] = $filename;
        }

        $data->save();
        return redirect()->back()->with('status', 'Profile updated');
    }

    public function userPassword()
    {
        return view('user.profile.editPassword', ['user' => Auth::user()]);        
    }

    public function userPasswordUpdate(Request $request)
    {
        $validateDate = $request->validate([
            'oldpassword' => 'required',
            'password'    => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login');
        } else {
            
            return redirect()->back()->with('error', 'Current Password Invalid');
        } 
    } // end method
}
