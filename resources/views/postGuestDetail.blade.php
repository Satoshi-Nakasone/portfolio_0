@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card" >
                  <h1>タイトル：{{ $post->title }}</h1>
                  <p>本文：{{ $post->body }}</p>
                  <p>投稿日：{{ $post->created_at }}</p>
                </div>
                <div class="card" >
                  <p>コメント</p>
                  @forelse($comments as $comment)
                  <div class="card" >
                  <ul>
                        <li>{{ $comment->body }}</li>
                  </ul>
                  </div>
                  @empty
                  <div class="card">
                        <li>コメントがありません</li>
                  </div>
                  @endforelse
                  <p>コメントを投稿する</p>
                </div>
        </div>
    </div>
</div>
@endsection
