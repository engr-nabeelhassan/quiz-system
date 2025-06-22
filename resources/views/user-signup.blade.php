<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <title>User Signup</title>
</head>
<body>
<x-user-navbar></x-user-navbar>
<div class=" bg-gray-100 flex items-center justify-center min-h-screen">
    <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class=" text-2xl text-center text-gray-800 mb-6">User Signup</h2>
    @error('user')
        <div class="text-red-500">{{$message}}</div>
    @enderror
    <form action="/user-signup" method="post" class="space-y-4">
        @csrf 
        <div>
            <label for="" class=" text-gray-600 mb-1">User Name</label>
            <input type="text" name="name" placeholder="Enter User name"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            @error('name')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="" class=" text-gray-600 mb-1">User Email</label>
            <input type="email" name="email" placeholder="Enter User email"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            @error('email')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        
        <div>
            <label for="" class=" text-gray-600 mb-1">User Password</label>
            <input type="password" name="password" placeholder="Enter User password"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            @error('password')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="" class=" text-gray-600 mb-1">User Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Enter User confirm password"
            class=" w-full px-4 py-2 border border-gray-300 rounded-xl">
            @error('password_confirmation')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class=" w-full py-2 bg-blue-500 text-white rounded-xl">Signup</button>
    </form>
    </div>
</div>
</body>
</html>