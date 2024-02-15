<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|min:5|max:64',
            'description' => 'required|min:5|max:1000'
        ]);
        $post = Post::create($validation);
        return redirect('/posts/' . $post->id);
    }

    public function show(string $id)
    {
    $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        // return view('posts.edit', ['post' => $post]); // same as below
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
        'title' => 'required|min:5|max:64',
        'description' => 'required|min:5|max:1000'
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);
        // return redirect('/posts/' . $post->id)->with('success', 'Updated Successfully!');
        return redirect()->route('posts.show', $post->id)->with('success', 'Updated Successfully!');
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post deleted successfully');
    }
}
