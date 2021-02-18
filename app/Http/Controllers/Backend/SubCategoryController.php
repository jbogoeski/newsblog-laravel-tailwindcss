<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::with('category:category_en,id')->orderBy('id', 'desc')->paginate(5);
        

        return view('admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create', compact('categories'));
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
            'subcategory_en' => 'required|min:3|unique:sub_categories',
            'subcategory_mk' => 'required|min:3|unique:sub_categories',
            'category_id'    => 'required',
        ]);
        $subcategory = new SubCategory;
        $subcategory->subcategory_en = $request->subcategory_en;
        $subcategory->subcategory_mk = $request->subcategory_mk;
        $subcategory->category_id = $request->category_id;
        $subcategory = SubCategory::create($data);
        return redirect()->back()->with('status', 'SubCategory Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $categories = Category::all();

        return view('admin.subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $data = $request->validate([
            'subcategory_en' => 'min:3',
            'subcategory_mk' => 'min:3',
            'category_id'    => 'required', 
        ]);

        $subcategory->update($request->all());
      
        return redirect()->back()->with('status', 'Subcategory Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->back()->with('status', 'Subcategory Deleted Successfully');
    }
}
