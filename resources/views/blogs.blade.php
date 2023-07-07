<x-layout>
    <div class="flex h-full flex-col items-center gap-8 w-full justify-center mb-5">
        @foreach ($blogs as $blog )
        <div class="flex w-4/6 flex-col  justify-between gap-10">
            <x-blog :blog="$blog" :loop="$loop->even"/>
        </div>    
        @endforeach
    </div>
    <x-paginator :categories="$categories" :currentCategory="$currentCategory??null"/>
</x-layout>

