<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websitesetting = DB::table('websitesettings')->first();

        return view('admin.setting.websitesetting.edit', compact('websitesetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['address_en'] = $request->address_en;
        $data['address_mk'] = $request->address_mk;
        $data['phone_en'] = $request->phone_en;
        $data['phone_mk'] = $request->phone_mk;
        $data['email'] = $request->email;

        $oldimage =  $request->oldlogo;

        $image = $request->logo;
        if($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(320,130)->save('images/website/'. $image_one);
            $data['logo'] = 'images/website/'.$image_one;
            DB::table('websitesettings')->where('id', $id)->update($data);
            if(file_exists($oldimage))
            {
                unlink($oldimage);
            }
        return redirect()->back()->with('status', 'Website Settings Updated Successfully no image');

        } else {
            $data['logo'] = $oldimage;
            DB::table('websitesettings')->where('id', $id)->update($data);
        
            return redirect()->back()->with('status', 'Website Settings Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
