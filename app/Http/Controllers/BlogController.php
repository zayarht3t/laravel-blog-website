<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){


        return view('blogs',[
            'blogs'=>Blog::latest()->filter(request(['search','category','username']))->paginate(3)->withQueryString(),
            'categories'=>Category::all(),
        ]);
    }

    public function subscriptionHandler(Blog $blog){
        if(auth()->user()->isSubscribed($blog)){
            $blog->unSubscribe();
        }else{
            $blog->subscribe();
        }

        return back();
    }

    public function create(){
        return view('create.create',[
            'categories'=>Category::all(),
        ]);
    }

    public function postCreate(){
        
        $formData = request()->validate([
            'title' => ['required','min:5','max:255',Rule::unique('blogs','title')],
            'slug' => ['required','min:5','max:255',Rule::unique('blogs','slug')],
            'intro' => ['required','min:5','max:255'],
            'body' => ['required','min:5'],
            'category_id'=>['required',Rule::exists('categories','id')]
        ]);
        $path =  request()->file('thumbnail')->store('thumbnails');
        if($path){
            $formData['img_path'] = $path;
            $formData['user_id'] = auth()->id();
        }

        Blog::create($formData);

        return redirect('/');
    }
}
