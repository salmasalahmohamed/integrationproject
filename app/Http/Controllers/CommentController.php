<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function store(Request $request )
    {
       $comment=new Comment();
       $comment->message=$request->message;
       $comment->save();
      return response('message sent');
    }
}
