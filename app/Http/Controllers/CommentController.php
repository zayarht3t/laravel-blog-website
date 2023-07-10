<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class CommentController extends Controller
{
    protected $guarded = [];

    public function store(Blog $blog){
        $formData = request()->validate([
            'body' => 'required|min:3',
        ]);

        $blog->comments()->create(['body' => $formData['body'],'user_id'=>auth()->id()]);

        return back();
    }
}
