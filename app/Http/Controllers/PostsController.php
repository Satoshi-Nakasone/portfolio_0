<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
  public function index()
  {
      $user = Auth::user();
      return view('posts')->with('user', $user);
  }

  public function store(Request $request)
  {
      $post = new Post();
      $post->user_id = $request->user_id;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();

      return "success";
  }
}
