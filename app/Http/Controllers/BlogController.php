<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){


        return view('blogs',[
            'blogs'=>Blog::latest()->filter(request(['search','category','username']))->paginate(3)->withQueryString(),
            'categories'=>Category::all(),
        ]);
    }

}
