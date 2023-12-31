
<x-layout>
    <x-wrapper>
        <div class="my-4 flex flex-col gap-5 items-center justify-center">
            <h1 class="text-black text-2xl font-bold">{{$currentBlog->title}}</h1>
            <img src="https://images.pexels.com/photos/3098970/pexels-photo-3098970.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" class="w-[400px]" alt="">
            <div class="flex items-center justify-center flex-col gap-3">
                <p class="font-semibold font-sans text-slate-600 text-lg">Author - {{$currentBlog->user->name}}</p>
                <p class="font-semibold font-sans text-slate-600 text-md">Date - {{$currentBlog->created_at->diffForHumans()}}</p>
                <a href="" class=" w-fit p-1 text-sm bg-orange-300 text-black rounded">{{$currentBlog->category->name}}</a>
                <form action="/blogs/{{$currentBlog->slug}}/subscription" method="POST">
                    @csrf
                    @auth
                        @if (auth()->user()->isSubscribed($currentBlog))
                            <button type="submit" class="px-3 py-2 w-fit bg-red-700 text-white rounded float-left border-none shadow-md">unsubscribe</button>
                        @else
                        <button type="submit" class="px-3 py-2 w-fit bg-orange-700 text-white rounded float-left border-none shadow-md">subscribe</button>
                        @endif
                    @endauth
                      
                </form>
            </div>
            <p class="md:w-[60%] text-lg font-serif text-center">{{$currentBlog->body}}</p>
        </div>
        <x-comment :comments="$currentBlog->comments()->paginate(4)" :currentBlog="$currentBlog"/>
        <x-paginator :blogs="$blogs"/>
        <div class="flex h-full flex-col items-center gap-8 w-full justify-center mb-5">
            @foreach ($blogs as $blog )
            <div class="flex w-4/6 flex-col  justify-between gap-10">
                <x-blog :blog="$blog" :loop="$loop->even"/>
            </div>    
            @endforeach
        </div>

    </x-wrapper>
</x-layout>