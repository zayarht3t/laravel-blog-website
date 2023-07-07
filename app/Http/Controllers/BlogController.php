<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest();
        if(request('search')){
            $blogs = $blogs->where('title','LIKE','%'.request('search').'%')
                            ->orWhere('body','LIKE','%'.request('search').'%');
        }

        return view('blogs',[
            'blogs'=>$blogs->get(),
            'categories'=>Category::all(),
        ]);
    }
}
