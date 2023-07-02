<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();
        return view('admin.news.index', compact('news'));
    }


    public function create()
    {

        return view('admin.news.create');
    }


    public function store(Request $request)
    {
        News::create($request->all());

       
        return redirect()->route('admin.news.index');
    }


    public function show(News $news)
    {
        return view('admin.news.show');
    }


    public function edit(News $news)
    {
        return view('admin.news.edit');
    }


    public function update(Request $request, News $news)
    {
        Post::find($id)->update($request->all());

        return redirect()->route('admin.news.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');

    }


    public function destroy(News $news)
    {
        Post::find($id)->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');

    }
}
