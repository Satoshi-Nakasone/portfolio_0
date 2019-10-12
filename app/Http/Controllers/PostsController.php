<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Comment;
use App\Http\Requests\postRequest;


class PostsController extends Controller
{
  public function index() //記事投稿フォームへ移動
  {
      $user = Auth::user();
      return view('posts',['user'=>$user]);
  }

  public function store(postRequest $request) //記事データ投稿
  {
      $post = new Post();
      $post->create($request->validated());
      return redirect()->route('home');
  }

  public function edit(Post $post)  //記事編集画面移動
  {
      $user = Auth::user();
      return view('postsEdit',['post'=> $post,'user' => $user]);
  }

  public function detail(Post $post)  //議事詳細画面移動
  {
      $post_id = $post->id;
      $comments = DB::table('comments')->where('post_id', '=', $post_id)->get();
      return view('postDetail',['post'=> $post , 'comments' => $comments]);
      //return view('postDetail',['post'=> $post]);
  }

  public function update(postRequest $request, Post $post) //記事データ編集
  {
      $post->update($request->validated());
      return redirect()->route('home');
  }

  public function delete(Post $post) //記事データ削除
  {
      $delete_post = Post::findOrFail($post->id);
      $delete_post->delete();
      return redirect()->route('home');
  }
}
