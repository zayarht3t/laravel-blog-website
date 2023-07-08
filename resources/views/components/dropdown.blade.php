<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center  border-[1px] border-slate-800  dark:focus:ring-blue-800" type="button">{{isset($currentCategory) ? $currentCategory->name : 'Category'}} <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
        @foreach ($categories as $category )
        <li>
            <a href="/?category={{$category->slug}}{{request('username') ? '&username='.request('username') : ''}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$category->name}}</a>
        </li>            
        @endforeach
    </ul>
</div>