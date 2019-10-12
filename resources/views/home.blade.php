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
                <a href="{{ url('posts') }}">新規記事投稿</a>
                </div>
            </div>

            <div class="card">
                ログインしてます{{$user->name}}さん
                @forelse($posts as $post)
                <div class="card" >
                <ul>
                      <li>{{ $post->title }}</li>
                      <li>{{ $post->body }}</li>
                      <li>{{ $post->created_at }}</li>
                      <a href="{{ url('posts/edit',$post->id)}}">編集</a>
                </ul>
                </div>
                @empty
                <div class="card">
                      <li>記事がありません</li>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
