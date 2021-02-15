<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Backend\AreaController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\User\MainUserController;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Backend\SubAreaController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SettingSeoController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SettingSocialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

// ADMIN DASHBOARD
Route::group(['prefix'=>'admin','middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.blank');
})->name('dashboard1');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('user.index');
})->name('dashboard');

// USER ALL ROUTES
Route::get('/user/logout', [MainUserController::class, 'logout'])->name('user.logout');
Route::get('/user/profil', [MainUserController::class, 'userProfile'])->name('profileuser');
Route::post('/user/profil/update', [MainUserController::class, 'userProfileStore'])->name('profileuser.store');
Route::get('/user/password/view', [MainUserController::class, 'userPassword'])->name('user.password.view');
Route::post('/user/password/updates', [MainUserController::class, 'userPasswordUpdate'])->name('user.password.update');


// ADMIN ALL ROUTES
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profil', [MainAdminController::class, 'adminProfile'])->name('profileadmin');
Route::get('/admin/profil/edit', [MainAdminController::class, 'adminProfileEdit'])->name('profile.admin.edit');
Route::post('/admin/profil/update', [MainAdminController::class, 'AdminProfileStore'])->name('profile.admin.update');
Route::get('/admin/password/view', [MainAdminController::class, 'adminPassword'])->name('admin.change.password');
Route::post('/admin/password/update', [MainAdminController::class, 'adminPasswordUpdate'])->name('admin.password.update');


// ADMIN CATEGORY ROUTES

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('area', AreaController::class);
    Route::resource('subarea', SubAreaController::class);
    Route::resource('post', PostController::class);
    Route::resource('social', SettingSocialController::class);
    Route::resource('seo', SettingSeoController::class);
    Route::resource('ads', AdsController::class);


});

Route::get('/get/subcategory/{category_id}', [PostController::class, 'getSubCategory']);
Route::get('/get/subarea/{area_id}', [PostController::class, 'getSubArea']);



//Frontend

//Multi langugage routes

Route::get('/language/mkd', [FrontendController::class, 'Mkd'])->name('language.mkd');
Route::get('/language/english', [FrontendController::class, 'English'])->name('language.english');


// single post

Route::get('/post/{id}', [FrontendController::class, 'singlePost'])->name('view.post');


// category and subcategory post routes

Route::get('/catpost/{id}/{category_en}', [FrontendController::class, 'categoryPost'])->name('post.category');

Route::get('/subpost/{id}/{subcategory_en}', [FrontendController::class, 'subcategoryPost'])->name('post.subcategory');


// search area homepage jquery
Route::get('/get/subarea/frontend/{area_id}', [FrontendController::class, 'getSubarea']);


// search form area
Route::get('/search/area', [FrontendController::class, 'searchArea'])->name('search.areas');
