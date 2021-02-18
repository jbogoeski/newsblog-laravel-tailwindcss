<?php

namespace App\Http\Controllers\Backend;

use App\Models\Area;
use App\Models\SubArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subareas = SubArea::with('area:area_en,id')->orderBy('id', 'desc')->paginate(5);
        

        return view('admin.subarea.index', compact('subareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('admin.subarea.create', compact('areas'));
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
            'subarea_en' => 'required|min:3|unique:sub_areas',
            'subarea_mk' => 'required|min:3|unique:sub_areas',
            'area_id'    => 'required',
        ]);
        $subarea = new SubArea;
        $subarea->subarea_en = $request->subarea_en;
        $subarea->subarea_mk = $request->subarea_mk;
        $subarea->area_id = $request->area_id;
        $subarea = SubArea::create($data);
        return redirect()->back()->with('status', 'SubArea Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubArea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function show(SubArea $subarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubArea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function edit(SubArea $subarea)
    {
        $areas = Area::all();

        return view('admin.subarea.edit', compact('subarea', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubArea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubArea $subarea)
    {
        $data = $request->validate([
            'subarea_en' => 'min:3',
            'subarea_mk' => 'min:3',
            'area_id'    => 'required', 
        ]);

        $subarea->update($request->all());
      
        return redirect()->back()->with('status', 'SubArea Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubArea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubArea $subarea)
    {
        $subarea->delete();

        return redirect()->back()->with('status', 'SubArea Deleted Successfully');
    }
}
