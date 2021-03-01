<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::orderBy('id', 'DESC')->get();

        return view('admin.posts.index', compact('data'));
    }

    public function show($slug)
    {
        $data = Post::where('slug', $slug)->get();
        // dd($data);
        return view('pages.post', compact('data'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.posts.create', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);
        $data['image'] = $request->file('image')->store('upload/images', 'public');
        auth()->user()->posts()->create($data);


        return redirect()->route('post');
    }

    public function destroy($slug)
    {
        $data = Post::where('slug', $slug);
        $data->delete();

        return redirect()->route('post');
    }


    public function edit($slug)
    {
        $data = Post::where('slug', $slug)->firstOrFail();
        $category = Category::all();
        return view('admin.posts.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('upload/images', 'public');
        }
        Post::findOrfail($id)->update($data);
        return redirect()->route('post');
    }
}
