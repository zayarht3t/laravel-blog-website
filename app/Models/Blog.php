<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "intro",
        "body"
    ];

    protected $with = ['category', 'user'];

    public function scopeFilter($query,$filter){
        $query->when($filter['search']??false, function($query, $search){
            $query->where(function ($query) use ($search){
                $query->where('title','LIKE','%'.$search.'%')
                ->orWhere('body','LIKE','%'.$search.'%');
            });

    });

    $query->when($filter['category']??false, function($query, $slug){
        $query->whereHas('category',function ($query) use ($slug){
            $query->where('slug',$slug);
        });
    });

    $query->when($filter['username']??false, function($query, $username){
        $query->whereHas('user',function ($query) use ($username){
            $query->where('name',$username);
        });
    });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
};
?>


