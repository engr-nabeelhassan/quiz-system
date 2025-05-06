<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Category</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}} ></x-navbar>
    @if(session('category'))
    <div class=" bg-green-700 text-white pl-5">{{session('category')}}</div>
    @endif
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen pt-5">
    <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class=" text-2xl text-center text-gray-800 mb-6">Add Category</h2>
    <form action="/add-category" method="post" class="space-y-4">
        @csrf 
        <div>
            <input type="text" name="category" placeholder="Enter Category name"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            @error('category')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class=" w-full py-2 bg-blue-500 text-white rounded-xl">Add</button>
    </form>
    </div>
    <div class="w-200">
        <h2 class="text-2xl text-blue-500 p-2">Category List</h2>
        <ul class="border border-gray-300">
        <li class="p-1.5 font-bold">
            <ul class="flex justify-between">
                <li class="w-30">S: No</li>
                <li class="w-70">Name</li>
                <li class="w-70">Creator</li>
                <li class="w-30">Action</li>
            </ul>
        </li>
            @foreach($categories as $category)
            <li class="even:bg-gray-200 p-1">
                <ul class="flex justify-between">
                    <li class="w-30">{{$category->id}}</li>
                    <li class="w-70">{{$category->name}}</li>
                    <li class="w-70">{{$category->creator}}</li>
                    <li class="w-30">
                        <a href="category/delete/{{$category->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="21px" viewBox="0 -960 960 960" width="21px" fill="#EA3323"><path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/></svg>
                        </a>
                    </li>
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
    </div>
</body>
</html>