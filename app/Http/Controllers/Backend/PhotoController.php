<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = DB::table('photos')->orderBy('id', 'DESC')->paginate(5);

        return view('admin.gallery.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en' => 'required',
            'title_mk' => 'required',
            'type' => 'required',
            'photo' => 'required',
        ]);

        $data = array();
        $data['title_en'] = $request->title_en;
        $data['title_mk'] = $request->title_mk;
        $data['type'] = $request->type;
        $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();


        if ($request->hasFile('photo')) {
            $image = $request->photo;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
            Image::make($image)->resize(500,300)->save('images/photo_gallery/'.$image_one);
            $image = 'images/photo_gallery/'.$image_one;
            $data['photo'] = $image;
            DB::table('photos')->insert($data);
        }


        return redirect()->route('admin.photo.index')->with('status', 'Created Successfully');
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
        $photo = DB::table('photos')->where('id', $id)->sole();

        return view('admin.gallery.photo.edit', compact('photo'));
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
        $data['title_en'] = $request->title_en;
        $data['title_mk'] = $request->title_mk;
        $data['type'] = $request->type;
        $data['updated_at'] = \Carbon\Carbon::now();
        $oldphoto = $request->oldphoto;

        if ($request->hasFile('photo')) {

            $image = $request->photo;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
            Image::make($image)->resize(500,300)->save('images/photo_gallery/'.$image_one);
            $image = 'images/photo_gallery/'.$image_one;
            $data['photo'] = $image;
            DB::table('photos')->where('id', $id)->update($data);
            unlink($oldphoto);
        } else {
            DB::table('photos')->where('id', $id)->update($data);
        }



        return redirect()->route('admin.photo.index')->with('status', 'Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $photos = DB::table('photos')->where('id', $id)->first();
        File::exists($photos->photo) ? File::delete($photos->photo) : false;
        DB::table('photos')->where('id', $id)->delete();

        return redirect()->back()->with('status', 'Photo Deleted Successfully');
    }
}
