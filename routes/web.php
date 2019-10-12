<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', 'HomeController@start');
Route::get('/', function () {
  $posts = DB::table('posts')->get();
  return view('welcome',['posts'=> $posts]);
    //return view('welcome');
});

Auth::routes();

//ログイン後メイン画面へ移動
Route::get('/home', 'HomeController@index')->name('home');

//記事投稿フォームへ移動
Route::get('posts', 'PostsController@index');
//記事編集画面移動
Route::get('posts/edit/{post}', 'PostsController@edit');
//議事詳細画面移動
Route::get('posts/detail/{post}', 'PostsController@detail');
//記事データ投稿
Route::post('posts','PostsController@store');
//記事データ編集
Route::patch('posts/{post}','PostsController@update');
//記事削除
Route::delete('posts/delete/{post}','PostsController@delete');
