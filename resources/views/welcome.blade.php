@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col">
@forelse($posts as $post)
<h2>
<a href="{{ url('posts/detail',$post->id)}}">{{ $post->title }}</a>
</h2>
<p>{{ $post->body }}</p>
<p>{{ $post->created_at}}</p>
@empty
<p>記事がありません</p>
@endforelse
</div>
</div>
</div>
@endsection
