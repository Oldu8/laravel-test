<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comment as CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request)
    {
        $request->checkCommentable();
    }
}
