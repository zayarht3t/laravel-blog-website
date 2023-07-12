<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[BlogController::class,'index']);

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('blogs',[
//         'blogs'=>$category->blogs,
//         'categories'=>Category::all(),
//         'currentCategory'=>$category
//     ]);
// });

Route::get('/blogs/{blog:slug}', function(Blog $blog){
    return view('blogs',[
        'blogs'=>$blog
    ]);
});

Route::get('/blogs/details/{blog:slug}', function(Blog $blog){
    return view('blogDetail',[
        'currentBlog'=>$blog,
        'blogs'=>Blog::latest()->paginate(3)->withQueryString()
    ]);
});

Route::get('/authors/{author:name}', function(User $author){
    return view('blogs',[
        'blogs'=>$author->blogs
    ]);
});

Route::get('/register', [AuthController::class,'create'])->middleware('guest');
Route::post('/register', [AuthController::class,'store'])->middleware('guest');
Route::get('/login', [AuthController::class,'login'])->middleware('guest');
Route::post('/login', [AuthController::class,'storeLogin'])->middleware('guest');
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');

Route::post('/blogs/{blog:slug}/comment',[CommentController::class,'store'])->middleware('auth');
Route::post('/blogs/{blog:slug}/subscription',[BlogController::class,'subscriptionHandler'])->middleware('auth');

Route::get('/admin/blogs/create',[BlogController::class,'create'])->middleware('admin');
Route::post('/admin/blogs/create',[BlogController::class,'postCreate'])->middleware('admin');