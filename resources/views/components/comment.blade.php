<div class="flex gap-5 w-full justify-center">
    <input type="text" placeholder="your comment..."  class="px-3 md:w-4/5 py-2 border-[1px] border-gray-500 rounded">
    <button class="px-3 py-2 w-fit bg-blue-700 text-white rounded border-none shadow-md">post</button>  
</div>
<div class="w-full flex flex-col ">
    <p class="text-2xl font-bold">Comments({{count($comments)}})</p>
    @foreach ($comments as $comment )
        <x-single-comment :comment="$comment"/>
    @endforeach
    
</div>