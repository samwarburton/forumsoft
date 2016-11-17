<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    //

    public function store(Request $request, $id)
    {

    	if (Auth::check()) {
    // The user is logged in...
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->thread_id = $id;
        $comment->save();
        return redirect('threads/');
}
     else {
     	return redirect('login');
     }

    }
}
