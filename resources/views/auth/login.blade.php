@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-gray-800 w-10/12 lg:w-4/12 text-center rounded-lg">
            <div class="mt-2 mb-2">
                <h3 class="text-lg lg:text-2xl font-bold uppercase text-white">
                    Login
                </h3>
            @if(session('status'))
                <div class="bg-red-600 text-center text-white font-bold w-10/12 rounded-lg mt-2 p-2 m-auto">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <input type="email" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 border-gray-900" name="email" placeholder="Enter email">
                <input type="password" class="w-8/12 rounded-lg p-2 m-2 border-1 bg-gray-500 border-gray-900" name="password" placeholder="Enter password">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="text-white">Remember me</label>
                </div>
                <button type="submit" class="w-8/12 rounded-lg m-2 p-2 border-2 bg-blue-500 border-blue-500 text-white font-bold">Login</button>
            </form>
        </div>
    </div>
@endsection