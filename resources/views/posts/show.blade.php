@extends('layouts.app')

@section('content')
<div class="flex justify-center m-2">
    <div class="mt-2 mb-2 p-2 bg-gray-800 text-center w-8/12 rounded-lg">
        <h3 class="m-2 font-bold text-white">
            Post
        </h3>
        @if(session('update'))
            <div class="m-2 text-white font-bold">
                {{ session('update') }}
            </div>
        @endif
        <div class="w-8/12 rounded-lg bg-gray-800 text-center font-bold text-lg mb-4 m-auto">
            {{ $post->title }}
        </div>
        <div class="w-8/12 rounded-lg bg-gray-800 text-center mb-4 m-auto">
            {{ $post->body }}
        </div>
        <div class="w-8/12 m-auto mb-2 p-2">
            <form action="{{ route('posts.edit', $post->id) }}" method="get">
                @csrf
                <button type="submit" class="w-4/12 rounded-lg m-2 p-2 border-2 bg-blue-500 border-blue-500 text-white font-bold">Edit</button>
            </form>
        </div>
        <div class="w-8/12 mb-2 p-2 m-auto">
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-4/12 rounded-lg m-2 p-2 border-2 bg-red-600 border-red-600 text-white font-bold">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection