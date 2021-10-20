@extends('layouts.app')

@section('content')
    <div class="flex justify-center m-2">
        <div class="mt-2 mb-2 p-2 bg-gray-800 text-center w-8/12 rounded-lg">
            <h3 class="m-2 font-bold text-white">
                Posts
            </h3>
            @if(session('success'))
                <div class="m-2 text-white font-bold">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('message'))
                <div class="m-2 text-white font-bold">
                    {{ session('message') }}
                </div>
            @endif
            <div class="mb-2">
                <form method="post" action="{{ route('posts') }}">
                    @csrf
                    <input type="text" name="title" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 @error('title') border-red-600 @enderror" placeholder="Enter Title">
                    @error('title')
                        <div class="text-red-600">
                            <em>{{ $message }}</em>
                        </div>
                    @enderror
                    <textarea name="body" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 @error('body') border-red-600 @enderror" rows="4" cols="60" placeholder="New post"></textarea>
                    @error('body')
                        <div class="text-red-600">
                            <em>{{ $message }}</em>
                        </div>
                    @enderror
                    <button type="submit" class="w-4/12 border-blue-500 border-1 bg-blue-500 rounded-lg m-2 p-2 text-white font-bold">Post</button>
                </form>
            </div>
            @if($posts->count())
                @foreach ($posts as $post)
                <div class="w-8/12 rounded-lg bg-gray-800 text-center mb-4 m-auto">
                    <a href="{{ route('posts.show', $post->id) }}"><span class='font-bold'>{{ $post->user->name }}</span><span>  {{ $post->created_at->diffForHumans() }}</span><br>{{ $post->title }}</a>
                </div>
                @endforeach
                {{ $posts->links() }}
            @else
                <div class="w-8/12 rounded-lg bg-gray-800 text-center mb-4 m-auto">
                    <p>Oops.... Seems there are no posts yet</p>
                </div>
            @endif
        </div>
        
    </div>
@endsection