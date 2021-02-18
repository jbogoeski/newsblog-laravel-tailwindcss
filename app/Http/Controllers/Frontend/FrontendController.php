<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\SubArea;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function Mkd()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'mkd');

        return redirect()->back();
    }

    public function English()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'english');

        return redirect()->back();
    }

    public function singlePost($id)
    {
        $post = DB::table('posts')
                    ->join('categories', 'posts.category_id', 'categories.id')
                    ->join('sub_categories', 'posts.subcategory_id', 'sub_categories.id')
                    ->join('users', 'posts.user_id', 'users.id')
                    ->select('posts.*',
                     'categories.category_en', 
                     'categories.category_mk', 
                     'sub_categories.subcategory_en', 
                     'sub_categories.subcategory_mk',
                     'users.name'
                    )->where('posts.id', $id)->first();

        return view('frontend.single_post', compact('post'));
    }

    public function categoryPost($id, $category_en)
    {
        $catposts = Post::where('category_id', $id)->orderBy('id', 'desc')->paginate(2);

        return view('frontend.categoryPost', compact('catposts'));
    }

    public function subcategoryPost($id, $subcategory_en)
    {
        $subposts = Post::where('subcategory_id', $id)->orderBy('id', 'desc')->paginate(2);

        return view('frontend.subcategoryPost', compact('subposts'));
    }

    public function getSubarea($area_id)
    {
        $subareas = SubArea::where('area_id', $area_id)->get();
        return response()->json($subareas);
    }

    public function searchArea(Request $request)
    {
        $area_id = $request->area_id;
        $subarea_id = $request->subarea_id;

        $catposts = Post::where('area_id', $area_id)->where('subarea_id', $subarea_id)->orderBy('id', 'desc')->paginate(5);
        return view('frontend.categoryPost', compact('catposts'));
    }

}
