<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Category</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}} ></x-navbar>    
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen pt-5">
    <h2 class=" text-2xl text-center text-gray-800 mb-6">All Curent MCQ's</h2>
        <a class="bg-amber-400 text-white px-4 py-2 rounded mb-6 inline-block hover:bg-amber-500" href="/add-quiz">Back</a>
    <div class="w-200">
        <ul class="border border-gray-300">
        <li class="p-1.5 font-bold">
            <ul class="flex justify-between">
                <li class="w-30">MCQ ID</li>
                <li class="w-170">Question</li>
            </ul>
        </li>
            @foreach($mcqs as $mcq)
            <li class="even:bg-gray-200 p-1">
                <ul class="flex justify-between">
                    <li class="w-30">{{$mcq->id}}</li>
                    <li class="w-170">{{$mcq->question}}</li>
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>