<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.categories.index', compact('data'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);
        // dd($data);
        Category::create($data);

        return redirect()->route('category');
    }

    public function edit($slug)
    {
        $data = Category::where('slug', $slug)->firstOrFail();

        return view('admin.categories.edit', compact('data'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();
        Category::findOrfail($id)->update($data);

        return redirect()->route('category');
    }

    public function destroy($slug)
    {
        // $data = Category::where('slug', $slug);
        // $data->delete();

        return redirect()->route('category');
    }
}
