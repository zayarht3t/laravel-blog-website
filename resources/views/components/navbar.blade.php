<div class="w-full py-6 h-14 flex items-center justify-center mb-20 mt-5  top-0">
    <nav class=" nav py-16 px-5 w-full md:w-4/6 flex items-center justify-between fixed">
        <div class="">
            <h1 class=" font-extrabold text-4xl  text-slate-600 cursor-pointer">Medis</h1>
        </div>
        <div class=" hidden md:flex items-center text-black text-md justify-center gap-5">
            <a class="font-bold text-slate-800 text-lg hover:text-blue-900 hover:underline transition-all duration-100">HOME</a>
            <a class="font-bold text-slate-800 text-lg hover:text-blue-900 hover:underline transition-all duration-100" href="0">PORTFOLIO</a>
            <a class=" font-bold text-slate-800 text-lg hover:text-blue-900 hover:underline transition-all duration-100" href="0">ABOUT</a>
            <a class=" font-bold text-slate-800 text-lg hover:text-blue-900 hover:underline transition-all duration-100" href="0">CONTACT</a>
            <a class=" font-bold text-slate-800 text-lg hover:text-blue-900 hover:underline transition-all duration-100" href="#subscribe">SUBSCRIBE</a>
            @guest
                <a class="px-4 py-2 bg-blue-700 rounded-md text-white border-none cursor-pointer" href="/login">SIGNIN</a>
            @else
                <div class="flex gap-5 flex-col items-center">
                    <p>{{auth()->user()->name}}</p>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="p-2 bg-orange-500 border-none rounded text-white">LOGOUT</button>
                    </form>
                </div>
                
            @endguest
            
        </div>
    </nav>
</div>