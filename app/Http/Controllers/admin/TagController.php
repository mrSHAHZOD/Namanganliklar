<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Events\AuditEvent;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->get();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request,Tag $tags)
    {
        Tag::create($request->all());

        return redirect()->route('admin.tags.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }


    public function show( $id)
    {
        $tags = Tag::find($id);
        return view('admin.tags.show',compact('tags'));

    }

    public function update(Request $request, Tag $tag)
    {
        Tag::find($id)->update($request->all());

        return redirect()->route('admin.tags.index')->with('danger', 'Malumot mavaffaqiyatli ozgartirildi');

    }


    public function destroy(Tag $tag)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'tags', $user , $tag));

        // tag::find($id)->delete();
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');

    }
}
