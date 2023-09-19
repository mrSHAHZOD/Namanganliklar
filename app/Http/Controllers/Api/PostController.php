<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

           'title_uz'  => 'required',
            'title_ru'  => 'required',
            'img'  => 'required',
            'body_uz'  => 'required',
            'body_ru'  => 'required',
            'views'  => 'required',
        ]);
        $posts = Post::create($request->all());
        return $posts;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title_uz'  => 'required',
             'title_ru'  => 'required',
             'img'  => 'required',
             'body_uz'  => 'required',
             'body_ru'  => 'required',
             'views'  => 'required',
             'category_id'  => 'required',
         ]);
         $posts = Post::update($request->all());
         return $posts;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post ->delete();
        return "Success" ;
    }
}
