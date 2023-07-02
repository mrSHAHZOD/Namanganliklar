<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('admin.posts.index', compact('posts'));

    }


    public function create()
    {
        return view('admin.posts.create');

    }


    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('admin.posts.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show(Post $post)
    {
        return view('admin.posts.create');

    }


    public function edit(Post $post)
    {
        return view('admin.posts.create');

    }


    public function update(Request $request, Post $post)
    {
        Post::find($id)->update($request->all());

        return redirect()->route('admin.posts.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');

    }


    public function destroy(Post $post)
    {
        Post::find($id)->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');

    }
}