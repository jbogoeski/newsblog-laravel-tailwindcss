<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = DB::table('ads')->orderBy('id', 'desc')->get();

        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['link'] = $request->link;
        $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
        

        if ($request->type == 2) {
            $image = $request->ads;
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(970,90)->save('images/ads_images/'.$image_one);
                $data['ads'] = 'images/ads_images/'.$image_one;
                $data['type'] = 2;
                DB::table('ads')->insert($data);
        } else {
            $image = $request->ads;
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,500)->save('images/ads_images/'.$image_one);
                $data['ads'] = 'images/ads_images/'.$image_one;
                $data['type'] = 1;
                DB::table('ads')->insert($data);
        }

        return redirect()->route('admin.ads.index')->with('status', 'Created Successfully');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = DB::table('ads')->where('id', $id)->first();
        File::exists($ads->ads) ? File::delete($ads->ads) : false;
        $adss = DB::table('ads')->where('id', $id)->delete();

        return redirect()->back()->with('status', 'Ads Deleted Successfully');
    }
}
