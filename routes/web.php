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

Route::get('/', 'HomeController@start');
Auth::routes();

//Guest用記事詳細画面移動
Route::get('posts/guestdetail/{post}', 'HomeController@detail');
//ログイン後メイン画面へ移動
Route::get('/home', 'HomeController@index')->name('home');

//要認証ルーティング
Route::group(['middleware' => 'auth'], function() {
//記事投稿フォームへ移動
Route::get('posts', 'PostsController@index');
//記事編集画面移動
Route::get('posts/edit/{post}', 'PostsController@edit');
//議事詳細画面移動
Route::get('posts/detail/{post}', 'PostsController@detail')->name('detail');
//記事データ投稿
Route::post('posts','PostsController@store');
//記事データ編集
Route::patch('posts/{post}','PostsController@update');
//記事削除
Route::delete('posts/delete/{post}','PostsController@delete');
//コメント投稿
Route::post('posts/comment/{posts}','CommentController@store');
//コメント編集画面移動
Route::get('posts/comment/edit/{comment}','CommentController@edit');
//コメントデータ編集
Route::patch('comment/{comment}','CommentController@update');
//コメント削除
Route::delete('comment/delete/{comment}','CommentController@delete');

});
