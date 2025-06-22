<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Category</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>    
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen pt-5">
    <h2 class=" text-2xl text-center text-lime-900 mb-6 font-bold">Category List : {{$category}}</h2>
        <a class="bg-amber-400 text-white px-4 py-2 rounded mb-6 inline-block hover:bg-amber-500" href="/">Back</a>
    <div class="w-200">
        <ul class="border border-gray-300">
        <li class="p-1.5 font-bold">
            <ul class="flex justify-between">
                <li class="w-40">Quiz ID</li>
                <li class="w-90">Name</li>
                <li class="w-40">Total Mcq</li>
                <li class="w-30">Action</li>
            </ul>
        </li>
            @foreach($quizData as $item)
            <li class="even:bg-gray-200 p-1">
                <ul class="flex justify-between">
                    <li class="w-40">{{$item->id}}</li>
                    <li class="w-90">{{$item->name}}</li>
                    <li class="w-40">{{$item->mcq_count}}</li>
                    <li class="w-30">
                    <a href="/user-start-quiz/{{$item->id}}/{{$item->name}}" class="text-lime-600 font-bold ">
                        Attempt Quiz
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