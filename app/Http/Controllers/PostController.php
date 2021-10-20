<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct ()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', ['posts' => $posts]);
    }

    public function store (Request $request) 
    {
        $this->validate($request, [
            'title' => 'max:200|required',
            'body' => 'max:5000|required',
        ]);

        $request->user()->posts()->create($request->only('title', 'body'));

        return redirect()->route('posts')->with('success', 'Post Successful!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show')->with('post', $post);

    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts')->with('message', 'Post has been deleted successfully');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        

        $this->validate($request, [
            'title' => 'max:200|required',
            'body' => 'max:5000|required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('posts.show', $post->id)->with('update', 'Post has been updated successfully');
    }
}
