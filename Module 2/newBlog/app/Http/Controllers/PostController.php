<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
   public function index()
   {
       $posts = Post::paginate(3);
       return view('post.list', compact('posts'));
   }

   public function create()
   {
       $categories = Category::All();
       return view('post.create', compact('categories'));
   }

   public function store()
   {
       $post = new Post;
       $post->title = request('title');
       $post->content = request('content');
       $post->writer = request('writer');
       $post->id_cate = request('id_cate');

       $post->save();
       return redirect()->route('post.index');
   }

   public function edit($id)
   {
        $post = Post::findOrFail($id);
        $categories = Category::All();
        return view('post.edit', compact('post', 'categories'));
   }

   public function update($id)
   {
        $post = Post::findOrFail($id);
        $post->title = request('title');
        $post->content = request('content');
        $post->writer = request('writer');
        $post->id_cate = request('id_cate');

        $post->save();
        return redirect()->route('post.index');
   }

   public function delete($id)
   {
       $post = Post::findOrfail($id);
       $post->delete();
       return redirect()->route('post.index');
   }

   public function show($id)
   {
        $post = Post::findOrFail($id);      
        return view('post.show', compact('post'));
   }

   public function search()
   {
       $key = request('key');
       if($key === null)
       {
           return redirect('post.index');
       }
       $posts = Post::where('title', 'LIKE', '%' . $key . '%')->paginate(5);
       return view('post.search', compact('posts'));
   }
}
