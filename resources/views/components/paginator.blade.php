<x-wrapper>
        {{$blogs->links()}}
        <h1 class="text-4xl font-bold font-sans text-black">UIT BLOGS</h1>
        <div class="flex gap-10">
            <x-category-dropdown/>
        </div>
        <x-search/>

</x-wrapper>