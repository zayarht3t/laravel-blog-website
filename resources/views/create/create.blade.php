<x-layout>
    <x-wrapper>
        <div class="w-full h-fit my-6 flex items-center justify-center">
            <form action="" enctype="multipart/form-data" method="POST" class="w-full p-2 md:w-3/4 border-[1px] border-slate-500 md:p-6 h-fit flex flex-col gap-5 rounded-md shadow">
                @csrf
                <h1 class="text-2xl md:text-3xl font-sans text-black font-bold">Create Blog</h1>
                <div>
                    <label for="title" class="block mb-2 text-lg font-medium text-gray-900 ">Blog Title</label>
                    <input type="text" value="{{old('title')}}" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title" required="">
                    @error('title')
                        <p class=" text-red-600">{{$message}}</p>
                    @enderror
                    
                </div>
                <div>
                    <label for="slug" class="block mb-2 text-lg font-medium text-gray-900 ">Slug</label>
                    <input type="text" value="{{old('slug')}}" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="slug" required="">
                    @error('slug')
                        <p class=" text-red-600">{{$message}}</p>
                    @enderror
                    
                </div>
                <div>
                    <label for="intro" class="block mb-2 text-lg font-medium text-gray-900 ">Intro</label>
                    <input type="text" value="{{old('intro')}}" name="intro" id="intro" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="intro" required="">
                    @error('intro')
                        <p class=" text-red-600">{{$message}}</p>
                    @enderror
                    
                </div>
                <div>
                    <label for="photo" class="block mb-2 text-lg font-medium text-gray-900 ">Photo</label>
                    <input type="file" value="{{old('thumbnail')}}" name="thumbnail" id="photo" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="b10-blabla" required="">
                    @error('thumbnail')
                        <p class=" text-red-600">{{$message}}</p>
                    @enderror
                    
                </div>
                <div class="w-fit p-2">
                    <label for="countries" class="block mb-2 text-lg font-medium text-gray-900">Categories</label>
                    <select id="countries" name="category_id" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-40 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($categories as $category) 
                            <option {{$category->id == old('category_id') ? 'selected' : '0'}} value="{{$category->id}}">{{$category->name}}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="body" class="black mb-2 text-lg font-medium text-gray-900">Body</label>
                    <textarea class="border-[1px] border-slate-900 p-2" name="body" id="body" cols="30" rows="10"></textarea>
                    @error('body')
                    <p class=" text-red-600">{{$message}}</p>
                @enderror
                </div>
                <button type="submit" class="w-fit text-lg bg-blue-700 text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg  px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create </button>
            </form>

        </div>
    </x-wrapper>
</x-layout>