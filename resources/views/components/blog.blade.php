<div class="card flex cursor-pointer {{$loop ? 'flex-row-reverse' : ''}}  justify-between w-full  gap-10 px-5 mb-5">
    <div class="w-full h-auto">
        <img src="/storage/{{$blog->img_path ? $blog->img_path : 'https://images.pexels.com/photos/3098970/pexels-photo-3098970.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load'}}" alt="" srcset="">
    </div>
    <div class="flex flex-col gap-6 p-3">
        <a class="font-bold text-2xl text-black" href="/blogs/{{$blog->slug}}">{{$blog->title}}</a>
            <a href="/?username={{$blog->user->name}}" class=" font-semibold  text-slate-700 ">By {{$blog->user->name}} -- {{$blog->created_at->diffForHumans()}}</a>
            <a href="/?category={{$blog->category->slug}}" class=" cursor-pointer font-semibold text-blue-600">{{$blog->category->name}}</a>                        
        <p class=" text-slate-700 text-md leading-8 ">{{$blog->body}}</p>
        <a href="/blogs/details/{{$blog->slug}}" class=" w-fit p-2 rounded bg-blue-600 text-white border-none hover:bg-blue-900 transition-all duration delay-75">Continue Reading-></a>
    </div>
</div>