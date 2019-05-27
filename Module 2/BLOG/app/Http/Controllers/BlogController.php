<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog; // goi den model

class BlogController extends Controller
{
    function index()
    {
        $blog = new Blog;
        $blogAll = $blog->all();
        return view('list', compact('blogAll'));
    }

    function create()
    {
        return view('create');
    }

    function store()
    {
        $blog = new Blog;
        $blog->title = request('title');
        $blog->content = request('content');
        $blog->writer = request('writer');
        $blog->comment = request('comment');

        $blog->save();
        return redirect('index');
    }

    function edit($id)
    {
        $blog = new Blog;
        $blog = Blog::findOrFail($id);
        return view('edit', compact('blog'));
    }

    function update($id)
    {
        $blog = new Blog;
        $blog = Blog::findOrFail($id);
        $blog->title = request('title');
        $blog->content = request('content');
        $blog->writer = request('writer');
        $blog->comment = request('comment');

       echo $blog->save();
       return redirect('index');
    }

    function destroy($id)
    {
       
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('index');
    }

    function show($id)
    {
        $blog= Blog::findOrFail($id);
        return view('show', compact('blog'));
    }
}
