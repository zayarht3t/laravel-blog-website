<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberMail;

class CommentController extends Controller
{
    protected $guarded = [];

    public function store(Blog $blog){
        $formData = request()->validate([
            'body' => 'required|min:3',
        ]);

        $subscribers = $blog->subscribers->filter(fn ($subscriber)=> $subscriber->id != auth()->id());
        $subscribers->each(function ($subscriber) use ($blog){
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
            
        });
        $blog->comments()->create(['body' => $formData['body'],'user_id'=>auth()->id()]);

        return back();
    }
}
