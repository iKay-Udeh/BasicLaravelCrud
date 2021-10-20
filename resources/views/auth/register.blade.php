@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-gray-800 w-10/12 lg:w-4/12 text-center rounded-lg">
            <div class="mt-2 mb-2">
                <h3 class="text-lg lg:text-2xl font-bold uppercase text-white">
                    Register
                </h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 @error('name') border-red-600 @enderror" name="name" placeholder="Enter your full name">
                @error('name')
                    <div class="text-red-600">
                        <em>{{ $message }}</em>
                    </div>
                @enderror
                <input type="email" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 @error('email') border-red-600 @enderror" name="email" placeholder="Enter email">
                @error('email')
                    <div class="text-red-600">
                        <em>{{ $message }}</em>
                    </div>
                @enderror
                <input type="password" class="w-8/12 rounded-lg p-2 m-2 border-1 bg-gray-500 @error('password') border-red-600 @enderror" name="password" placeholder="Enter password">
                @error('password')
                    <div class="text-red-600">
                        <em>{{ $message }}</em>
                    </div>
                @enderror
                <input type="password" class="w-8/12 rounded-lg p-2 m-2 border-1 bg-gray-500" name="password_confirmation" placeholder="Repeat password">
                <button type="submit" class="w-8/12 rounded-lg m-2 p-2 border-2 bg-blue-500 border-blue-500 text-white font-bold">Register</button>
            </form>
        </div>
    </div>
@endsection