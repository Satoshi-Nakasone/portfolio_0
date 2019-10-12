<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController extends Controller
{
  public function index() //記事投稿フォームへ移動
  {
      $user = Auth::user();
      return view('posts',['user'=>$user]);
  }

  public function store(Request $request) //記事データ投稿
  {
      $request->validate([
        'title' => 'bail|required|max:255',
        'body' => 'required|max:10000'
        ]);

      $post = new Post();
      $post->create($request->all());
      return redirect()->route('home');
  }

  public function edit(Post $post)  //記事編集画面移動
  {
      $user = Auth::user();
      return view('postsEdit',['post'=> $post,'user' => $user]);
  }

  public function detail(Post $post)  //議事詳細画面移動
  {
      //$user = Auth::user();
      return view('postDetail',['post'=> $post]);
  }

  public function update(Request $request, Post $post) //記事データ編集
  {
    $request->validate([
      'title' => 'bail|required|max:255',
      'body' => 'required|max:10000'
      ]);

      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect()->route('home');
  }

  public function delete(Post $post) //記事データ削除
  {
      $delete_post = Post::findOrFail($post->id);
      $delete_post->delete();
      return redirect()->route('home');
  }
}
