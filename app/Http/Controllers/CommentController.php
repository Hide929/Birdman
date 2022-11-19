<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    
        public function comment(Request $request, Post $post, Comment $comment)
    {
        //dd($post);
        $comment->post_id = $post->id;
        $input = $request['comment'];
        $comment->fill($input)->save();
        //dd($input);
        return redirect('/posts/' . $post->id);
    }
    
}

