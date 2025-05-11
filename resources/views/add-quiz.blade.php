<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Quiz</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}} ></x-navbar>
    <div class=" bg-gray-100 flex flex-col items-center min-h-screen pt-5">
    <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        @if(!session('quizDetails'))
    <h2 class=" text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
    <form action="/add-quiz" method="get" class="space-y-4">
        <div>
            <input type="text" name="quiz" placeholder="Enter Quiz name"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
        </div>

        <div>
            <select type="text" name="category_id"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class=" w-full py-2 bg-blue-500 text-white rounded-xl">Add</button>
    </form>
    @else
    <span class=" text-green-500 font-bold">Quiz : {{session('quizDetails')->name}}</span>
    <h2 class=" text-2xl text-center text-gray-800 mb-6">Add MCQs</h2>
    <form action="add-mcq" method="post" class="space-y-4">
        @csrf
    <div>
            <textarea type="text" name="question" placeholder="Enter Your Question"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl"></textarea>
        </div>
        <div>
            <input type="text" name="a" placeholder="Enter First option"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
        </div>
        <div>
            <input type="text" name="b" placeholder="Enter Second option"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
        </div>
        <div>
            <input type="text" name="c" placeholder="Enter Third option"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
        </div>
        <div>
            <input type="text" name="d" placeholder="Enter Fourth option"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
        </div>
        <div>
            <select  name="correct_ans" 
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            <option>Select Right Answer</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
</select>
        </div>
        <button type="submit" name="submit" value="add-more" class=" w-full py-2 bg-blue-500 text-white rounded-xl">Add More</button>
        <button type="submit" name="submit" value="done" class=" w-full py-2 bg-green-500 text-white rounded-xl">Add and Submit</button>
    </form>
    @endif
    </div>
</body>