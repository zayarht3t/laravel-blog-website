<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</head>
<body class="w-full h-full">
    <x-navbar/>
    @if (session('success'))
        <x-wrapper>
            <div class="p-4 mb-4 text-lg font-bold text-green-800 rounded-lg bg-green-50 " role="alert">
            <span class="font-medium">{{session('success')}}</span>
            </div>
        </x-wrapper>        
    @endif

      
    {{$slot}}
    <x-footer/>
</body>
</html>

{{-- box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; --}}