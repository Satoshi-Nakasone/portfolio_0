<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function start() //welcome
     {
       $posts = DB::table('posts')->get();
       return view('welcome',['posts'=> $posts]);
     }

    public function index() //ログイン後メイン画面へ移動
    {
        $user = Auth::user();
        $user_id = $user->id;
        $posts = DB::table('posts')->where('user_id', '=', $user_id)->get();
        return view('home',['posts'=> $posts,'user' => $user]);
    }
}
