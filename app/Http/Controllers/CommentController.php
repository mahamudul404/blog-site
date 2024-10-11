<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id =Auth::user()->id;
        $comment->post_id = $id;
        $comment->save();
        return redirect()->back();
    }

    //user can delete comment
    public function delete($id)
    {
        //user can delete only his comment
        $comment = Comment::find($id);
        if ($comment->user_id == Auth::user()->id) {
            $comment->delete();
        }
        return redirect()->back();
    }
}
