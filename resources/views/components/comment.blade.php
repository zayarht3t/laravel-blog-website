<form method="POST" action="/blogs/{{$currentBlog->slug}}/comment" class="flex gap-5 w-full flex-col justify-center items-center ">
    @csrf
    <textarea id="" name="body"  cols="30" rows="7" class="px-3 md:w-4/5 py-2 border-[1px] border-gray-500 rounded">{{old('body')}}</textarea>
    @error('body')
        <p class="text-red-700 text-sm">{{$message}}</p>
    @enderror
    <button type="submit" class="px-3 py-2 w-fit bg-blue-700 text-white rounded float-left border-none shadow-md">post</button>  
</form>
<div class="w-full flex flex-col ">
    <p class="text-2xl font-bold">Comments({{count($comments)}})</p>
    @foreach ($comments as $comment )
        <x-single-comment :comment="$comment"/>
    @endforeach
    {{$comments->links()}}
    
    
</div>