@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                  <div>ログインしてます{{$user->name}}さん</div>
                  <form method="post" action="{{ url('/posts') }}">
                    @csrf
                    <p>
                      <input type="text" name="title" placeholder="title">
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </p>
                    <div>
                      <textarea id="editor" name="body" rows="8" cols="40"></textarea>
                    </div>
                    <input type="submit" value="送信">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
