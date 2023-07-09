<div class="flex p-5 shadow-md flex-col gap-5 rounded my-3">
    <div class="flex items-center gap-5">
        <div class=" w-14 h-14 rounded-full bg-green-300"></div>
       <div class="flex flex-col gap-2">
            <p class="font-bold text-xl font-sans">{{$comment->user->name}}</p>
            <p class="font-semibold text-sm font-sans">{{$comment->created_at->diffForHumans()}}</p>
       </div>
    </div>
    <div class="">
        {{$comment->body}}
    </div>
</div>