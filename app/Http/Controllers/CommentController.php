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
      return redirect()->route('detail', [$request->post_id]);
  }

  public function edit(Comment $comment)  //コメント編集画面移動
  {
      $user = Auth::user();
      return view('commentsEdit',['comment'=> $comment , 'user' => $user]);
  }

  public function update(commentRequest $request , Comment $comment) //コメントデータ編集
  {
      $comment->update($request->validated());
      return redirect()->route('detail', [$request->post_id]);
  }

  public function delete(Comment $comment) //コメントデータ削除
  {
      $delete_comment = Comment::findOrFail($comment->id);
      $delete_comment ->delete();
      return redirect()->route('detail', [$delete_comment->post_id]);
  }
}
