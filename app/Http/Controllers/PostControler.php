<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostControler extends Controller
{
   public function index()
   {
        $posts = Post::get();
        return view('article',compact('posts'));
   }

   public function store(Request $request)
   {
        /*dd($request);
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();(premiere methode)*/


        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect()->back();

   }

   public function edit($id)
   {
            $post = Post::find($id);
            return view('edit_article',compact('post'));
   }

   public function update(Request $request, $id)
   {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('article');
   
   }
   public function delete($id)
   {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
   }
}
