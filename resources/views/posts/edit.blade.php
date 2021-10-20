@extends('layouts.app')

@section('content')
    <div class="flex justify-center m-2">
        <div class="mt-2 mb-2 p-2 bg-gray-800 text-center w-8/12 rounded-lg">
            <h3 class="m-2 font-bold text-white">
                Edit Post
            </h3>
            <div class="mb-2">
                <form method="post" action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    <input type="text" value="{{ $post->title }}" name="title" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 @error('title') border-red-600 @enderror">
                    @error('title')
                        <div class="text-red-600">
                            <em>{{ $message }}</em>
                        </div>
                    @enderror
                    <textarea name="body" class="w-8/12 rounded-lg m-2 p-2 border-1 bg-gray-500 @error('body') border-red-600 @enderror" rows="4" cols="60">{{ $post->body }}</textarea>
                    @error('body')
                        <div class="text-red-600">
                            <em>{{ $message }}</em>
                        </div>
                    @enderror
                    <button type="submit" class="w-4/12 border-blue-500 border-1 bg-blue-500 rounded-lg m-2 p-2 text-white font-bold">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection