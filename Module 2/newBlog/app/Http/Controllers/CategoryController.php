<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::All();
        return view('category.list', compact('categories'));
    }

    function create()
    {
        return view('category.create');
    }

    function store()
    {
        $category = new Category;
        $category->name_category = request('namecategory');
        $category->description =request('description');

        $category->save();
        return redirect()->route('category.create');
    }

    function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    function update($id)
    {
        $category = Category::findOrFail($id);
        $category->name_category = request('namecategory');
        $category->description = request('description');

        $category->save();
        return redirect()->route('category.index');
    }

    function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
