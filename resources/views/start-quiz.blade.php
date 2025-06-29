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
    <h1 class=" text-4xl text-center text-lime-900 mb-6 font-bold">{{$quizName}}</h1>
        <a class="bg-amber-400 text-white px-4 py-2 rounded mb-6 inline-block hover:bg-amber-500" href="/">Back</a>
    <h3 class=" text-lg text-center text-lime-900 mb-6 font-bold">The Quiz Container {{$quizCount}} And No Limit To Attempt This Quiz</h3>
    <h2 class=" text-2xl text-center text-lime-900 mb-6 font-bold">Good Luck</h2>
    @if(session('user'))
    <a href="" class="px-4 py-2 bg-blue-500 text-white rounded-md">Start Quiz</a>
    @else
    <a href="/user-signup-quiz" class="px-4 py-2 bg-blue-500 text-white rounded-md">Login/SignUp for Start Quiz</a>
    @endif
</div>
</body>
</html>