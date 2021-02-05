<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainAdminController extends Controller
{
    public function adminProfile()
    {
        $adminData = Admin::find(1);
        return view('admin.profile.viewProfile', compact('adminData'));
    }

    public function adminProfileEdit()
    {
        $editDataAdmin = Admin::find(1);
        return view('admin.profile.editProfile', compact('editDataAdmin'));
    }

    public function AdminProfileStore(Request $request)
    {
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        if($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            // @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
            $filename = date('ymdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images/'), $filename);
            $data['profile_photo_path'] = $filename;
        }

        $data->save();
        return redirect()->back()->with('status', 'Profile updated');
    }

    public function adminPassword()
    {
        return view('admin.profile..password.viewPassword');        
    }

    public function AdminPasswordUpdate(Request $request)
    {
        $validateDate = $request->validate([
            'oldpassword' => 'required',
            'password'    => 'required|confirmed',
        ]);

        $hashedPassword = Admin::find(1)->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();

            return redirect()->route('admin.logout');
        } else {
            
            return redirect()->back()->with('error', 'Inserted Current Password Invalid');
        } 
    } // end method
}
