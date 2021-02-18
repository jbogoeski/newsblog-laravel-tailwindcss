<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = DB::table('videos')->orderBy('id', 'DESC')->paginate(5);

        return view('admin.gallery.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.video.create');
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
        $data['embed_code'] = $request->embed_code;
        $data['title_en'] = $request->title_en;
        $data['title_mk'] = $request->title_mk;
        $data['type'] = $request->type;
        DB::table('videos')->insert($data);
        return redirect()->back()->with('status', 'Video Created Successfully');

        

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
        $video = DB::table('videos')->where('id', $id)->first();

        return view('admin.gallery.video.edit', compact('video'));
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
        $data['embed_code'] = $request->embed_code;
        $data['title_en'] = $request->title_en;
        $data['title_mk'] = $request->title_mk;
        $data['type'] = $request->type;
        DB::table('videos')->where('id', $id)->update($data);
        return redirect()->route('admin.video.index')->with('status', 'Video Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('videos')->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Video Updated Successfully');
    }
}
