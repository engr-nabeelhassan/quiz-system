<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Category</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-user-navbar></x-user-navbar>
<div class="flex flex-col min-h-screen items-center bg-gray-100">
<h1 class="text-4xl p-5 text-lime-900 font-bold">Check Your Skills</h1>
<div class="w-full max-w-md">
    <div class="relative">
        <input class="w-full px-4 py-3 text-gray-800 border border-gray-300 rounded-2xl shadow" type="text" placeholder="Search Quiz....">
        <button class="absolute right-5 top-3.5">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#264E5B"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </button>
    </div>
</div>
<div class="w-200">
        <h2 class="text-2xl text-lime-900 p-2 my-5">Category List</h2>
        <ul class="border border-gray-300">
        <li class="p-1.5 font-bold">
            <ul class="flex justify-between">
                <li class="w-30">S: No</li>
                <li class="w-100">Name</li>
                <li class="w-40">Total Quiz</li>
                <li class="w-30">Action</li>
            </ul>
        </li>
            @foreach($categories as $key=>$category)
            <li class="even:bg-gray-200 p-1">
                <ul class="flex justify-between">
                    <li class="w-30">{{$key+1}}</li>
                    <li class="w-100">{{$category->name}}</li>
                    <li class="w-40">{{$category->quizzes_count}}</li>
                    <li class="w-30 flex">
                        <a href="user-quiz-list/{{$category->id}}/{{$category->name}}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#264E5B"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                        </a>
                    </li>
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<x-footer-user></x-footer-user>
</body>










