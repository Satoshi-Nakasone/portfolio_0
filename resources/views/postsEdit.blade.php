@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts Edit</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                  <div>ログインしてます{{$user->name}}さん</div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  <form method="post" action="{{ url('posts', $post->id) }}">
                    @csrf
                    @method('patch')
                    <p>
                      <input type="text" name="title" placeholder="title" value="{{ old('title',$post->title)}}">
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </p>
                    <div>
                      <textarea id="editor" name="body" rows="8" cols="40" placeholder="body">{{ old('body',$post->body)}}</textarea>
                    </div>
                    <input type="submit" value="編集">
                  </form>

                  <form method="post" action="{{ url('posts/delete', $post->id) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="削除">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
