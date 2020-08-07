<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentCreateRequest;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(CommentCreateRequest $request, $id) {
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'post_id' => $id
        ]);

        return redirect(route('post.single', $id));
    }
}
