<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\Comment as CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request)
    {
        $model = $request->checkCommentable();
        $model->comments()->save(Comment::make($request->only(['text'])));
        return back()->with('comment add', '');
    }
}
