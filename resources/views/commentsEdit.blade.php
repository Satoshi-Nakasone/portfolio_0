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
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  <form method="post" action="{{ url('comment', $comment->id) }}">
                    @csrf
                    @method('patch')
                    <p>
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                      <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
                    </p>
                    <div>
                      <textarea id="editor" name="body" rows="8" cols="40" placeholder="body">{{ old('body',$comment->body)}}</textarea>
                    </div>
                    <input type="submit" value="編集">
                  </form>
                  <form method="post" action="{{ url('comment/delete', $comment->id) }}">
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
