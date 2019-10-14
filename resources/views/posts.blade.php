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
                <div class="card-body">
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
                  <div class="form-group row">
                  <form method="post" action="{{ url('/posts') }}">
                    @csrf
                    <p class="form-group">
                      <input type="text" name="title" placeholder="title" class="form-control">
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </p>
                    <div class="form-group">
                      <textarea id="editor" name="body" rows="8" cols="40" class="form-control" ></textarea>
                    </div>
                    <input type="submit" value="送信" class="btn btn-primary">
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
