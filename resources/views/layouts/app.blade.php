<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic CRUD</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-500 h-screen antialiased leading-none font-sans">
    <header class="flex justify-between">
        <ul class="flex">
            <a class="mx-2 p-2" href="{{ route('home') }}">
                Home
            </a>
            <a class="mx-2 p-2" href="{{ route('posts') }}">
                Posts
            </a>
        </ul>
        <ul class="flex">
            @auth
            <li class="mx-2 p-2">
                {{ auth()->user()->name }}
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="mx-2 p-2">
                    Logout
                </button>
            </form>
            @endauth
            @guest
            <a class="mx-2 p-2" href="{{ route('login') }}">
                Login
            </a>
            <a class="mx-2 p-2" href="{{ route('register') }}">
                Register
            </a>
            @endguest
        </ul>
    </header>
    @yield('content')
    </body>
</html>