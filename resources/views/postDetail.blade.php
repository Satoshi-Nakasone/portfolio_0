@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
                <div class="card" >
                  <p>タイトル：{{ $post->title }}</p>
                  <p>本文：{{ $post->body }}</p>
                  <p>投稿日：{{ $post->created_at }}</p>
                </div>
                <div class="card" >
                  <p>コメント</p>
                  @forelse($comments as $comment)
                  <div class="card" >
                  <ul>
                        <li>{{ $comment->body }}</li>
                        @if($comment->user_id === $user->id)
                        <a href="{{ url('posts/comment/edit',$comment->id)}}">編集</a>
                        @endif
                  </ul>
                  </div>
                  @empty
                  <div class="card">
                        <li>コメントがありません</li>
                  </div>
                  @endforelse
                  <p>コメントを投稿する</p>
                  <form method="post" action="{{ url('/posts/comment/{post}') }}">
                    @csrf
                    <div>
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                      <textarea  name="body" rows="2" cols="60"></textarea>
                    </div>
                    <input type="submit" value="送信">
                  </form>
                </div>
        </div>
    </div>
</div>
@endsection
