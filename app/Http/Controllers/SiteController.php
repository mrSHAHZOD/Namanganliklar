<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
class SiteController extends Controller
{

    public function index()
    {
        $category = Category::limit(8)->latest()->get();
        $posts = Post::limit(6)->inRandomOrder()->get();
        $p_news = Post::limit(5)->inRandomOrder()->get();
        $latest_news = Post::all();
        return view('welcome', compact('category', 'posts','latest_news','p_news') );
    }


    public function article($id)
    {
        $posts = Post::limit(3)->where('id', '!=', $id)->inRandomOrder()->get();
        $category = Category::limit(5)->latest()->get();
        $p_news = Post::limit(5)->inRandomOrder()->get();
        $post = Post::find($id);

        return view('pages.article',compact('category', 'post', 'posts','p_news'));
    }


    public function posts($id)
    {
        $p_news = Post::limit(5)->where('id', '!=', $id)->inRandomOrder()->get();
        $latestPosts = \App\Models\Post::limit(6)->latest()->get();
        $latest_news = Post::all();
        $category = Category::limit(5)->latest()->get();

        return view('pages.list',compact('category','latest_news','p_news','latestPosts'));
    }

    public function contact()
    {
        $category = Category::limit(5)->latest()->get();

        return view('pages.contact',compact('category'));
    }


    public function messages(Request $request)
    {
        DB::table('messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
            'status' => 0,
        ]);

         return back()->with('success', 'Xabar jo`natildi');
    }










/*     public function category($name_uz)
    {
        $category = \App\Models\Category::where('name_uz', $name_uz)->first();
        $posts = $category->posts()->paginate(6);

        return view('pages.list', compact('category', 'posts'));
    }

  /*   public function get_article()
    {
        $category = \App\Models\Category::limit(6)->latest()->get();

        $posts = \App\Models\Post::limit(6)->latest()->get();

        return view('pages.article',compact('posts', 'category'));

    } */

  /*   public function get_contact()
    {
        return view('pages.contact');

    }


    public function get_list()
    {
        return view('pages.list');

    }
    public function post_messages(Request $request)
    {
        DB::table('messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
            'status' => 0,
        ]);

         return back()->with('success', 'Xabar jo`natildi');
    }*/

  /*   public function post_audits(Request $request)
    {
        DB::table('audits')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
            'status' => 0,
        ]);

        return back()->with('success', 'Xabar jo`natildi');
    } */
}
