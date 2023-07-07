<x-wrapper>
        <p>Paginator</p>
        <h1 class="text-4xl font-bold font-sans text-black">UIT BLOGS</h1>
        <div class="flex gap-10">
            <x-dropdown :categories="$categories" :currentCategory="$currentCategory"/>
        </div>
        <x-search/>

</x-wrapper>