<?php

namespace App\Http\Controllers\Backend;

use App\Models\Area;
use App\Models\Post;
use App\Models\Admin;
use App\Models\SubArea;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    /**
     * Display a listing of the subarea
     * from Area.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubArea($area_id)
    {
        $subareas = SubArea::where('area_id', $area_id)->get();
        return response()->json($subareas);
    }


    /**
     * Display a listing of the subcategory
     * from category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubCategory($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->get();
        return response()->json($subcategories);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status', 1)->orderBy('id', 'desc')->paginate(10);

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $areas = Area::all();
        
        return view('admin.post.create', compact('categories', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
            Image::make($image)->resize(500,300)->save('images/post_images/'.$image_one);
            $image = 'images/post_images/'.$image_one;
            $inputs = $request->all();
            $inputs['image'] = $image;
            $inputs['post_date'] = Carbon::now();
            $inputs['post_month'] = Carbon::now()->format('M');
            Post::create($inputs);
        }else{
            return Redirect()->back()->with('status', 'error something');
        } 
        // End Condition

        return redirect()->back()->with('status', 'Post Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $areas = Area::all();
        $subcategories = SubCategory::where('category_id', $post->category_id)->get();
        $subareas = SubArea::where('area_id', $post->area_id)->get();
        return view('admin.post.edit', compact('post', 'categories', 'areas', 'subcategories', 'subareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
            Image::make($image)->resize(500,300)->save('images/post_images/'.$image_one);
            $image = 'images/post_images/'.$image_one;
            File::exists($post->image) ? File::delete($post->image) : false;
            $post->image = $image;
            $post->update();
        }

        $post->update($request->except('image'));
        return Redirect()->back()->with('status', 'Post Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        File::exists($post->image) ? File::delete($post->image) : false;
        $post->delete();

        return redirect()->back()->with('status', 'Post Deleted Successfully');
    }
}
