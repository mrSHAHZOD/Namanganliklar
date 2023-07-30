<?php

namespace App\Http\Controllers\admin;
use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{

    public function index()
    {
        $posts =  Post::orderBy('id', 'DESC')->get();

        return view('admin.posts.index', compact('posts'));

    }


    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags' ));

    }


    public function store(Request $request, Post $post)
    {
        $requestData = $request->all();

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }



       $post = Post::create($requestData);
       $post->tags()->attach($request->tag_id);


        return redirect()->route('admin.posts.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show( $id)
    {
        $posts = Post::find($id);
        return view('admin.posts.show',compact('posts'));

    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags =Tag::all();


        return view('admin.posts.edit', compact('post', 'categories','tags'));
    }


    public function update(Request $request, Post $post)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'posts', $user , $post));

        $requestData = $request->all();

        if ($request->hasFile('img'))
        {

            $posts = Post::find($id);

            if (isset($posts->img) && file_exists(public_path('/images/'.$posts->img))) {
                unlink(public_path('/images/' . $posts->img));

                $file = $request->file('img');
                $imageName = $file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }

        }



        Post::find($id)->update($requestData);
        // $post->update($request->all());

        $post->tags()->sync($request->tag_id);

        return redirect()->route('admin.posts.index')->with('danger', 'Malumot mavaffaqiyatli ozgartirildi');

    }


    public function destroy(Post $post)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'posts', $user , $post));



        $post->tags()->detach();
        $post->delete();
        return redirect()->route('admin.posts.index')->with('post','success', 'Malumot mavaffaqiyatli ochirildi');

    }


}
