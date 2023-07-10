<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function get_index()
    {
        $news = DB::table('news')->orderBy('id', 'DESC')->get();

        return view('admin.news.index', compact('news'));
    }

    public function get_create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        news::create($request->all());

        return redirect()->route('admin.news.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $news = news::find($id);

        return view('admin.news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = news::find($id);

        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        news::find($id)->update($request->all());

        return redirect()->route('admin.news.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        news::find($id)->delete();

        return redirect()->route('admin.news.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }

}
