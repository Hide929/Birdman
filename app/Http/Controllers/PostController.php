<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
        public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post, Comment $comment)
    {
        //dd($post->id);
        return view('posts/show')->with(['post' => $post, 'comments' => $comment -> where('post_id',$post->id) -> get()]);   
       
    }
    
        public function create()
    {
        return view('posts/create');
    }
    
         public function reply(Post $post)
    {
        return view('posts/reply')->with(['post' =>$post]); //postデータを返信画面に移動するときに渡す
    }
    
        public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    
}

