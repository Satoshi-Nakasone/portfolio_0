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
                  <h1>{{ $post->title }}</h1>
                      <p>{{ $post->body }}</p>
                      <p>{{ $post->created_at }}</p>
                </div>
                <div class="card" >
                  @forelse($comments as $comment)
                  <div class="card" >
                  <ul>
                        <li>{{ $comment->body }}</li>
                        <a href="{{ url('posts/edit',$post->id)}}">編集</a>
                  </ul>
                  </div>
                  @empty
                  <div class="card">
                        <li>コメントがありません</li>
                  </div>
                  @endforelse
                  <h1>コメントを投稿する</h1>
                  <form method="post" action="{{ url('/posts/comment/{post}') }}">
                    @csrf
                    <div>
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <textarea  name="body" rows="8" cols="40"></textarea>
                    </div>
                    <input type="submit" value="送信">
                  </form>
                </div>
        </div>
    </div>
</div>
@endsection
