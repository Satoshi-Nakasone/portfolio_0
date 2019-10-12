<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\Http\Requests\commentRequest;

class CommentController extends Controller
{
  public function store(commentRequest $request) //コメント投稿
  {
      $comment = new Comment();
      $comment->create($request->validated());
      return redirect('/home');
  }
}
