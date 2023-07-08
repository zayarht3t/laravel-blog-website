<form action="" method="GET" class="flex justify-between gap-5 w-full">
    <input type="text" name="search" placeholder="search..." class="px-3 py-2 w-[100%]  rounded border-[1px] border-slate-800">
    @if (request('search'))
       <input type="hidden" name="search" value={{request('search')}} placeholder="search..." class="px-3 py-2 w-[100%]  rounded border-[1px] border-slate-800"> 
    @endif
    @if (request('username'))
    <input type="hidden" name="username" value={{request('username')}} placeholder="search..." class="px-3 py-2 w-[100%]  rounded border-[1px] border-slate-800"> 
 @endif
 @if (request('category'))
 <input type="hidden" name="category" value={{request('category')}} placeholder="search..." class="px-3 py-2 w-[100%]  rounded border-[1px] border-slate-800"> 
@endif
    
    <button  type="submit" class="px-2 py-2 w-fit bg-blue-700 text-white rounded border-none shadow-md">Search</button>
</form>