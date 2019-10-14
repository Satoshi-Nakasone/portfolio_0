@extends('layouts.app')

@section('content')

<!-- <div class="container"> -->
  <div class="container">

              <div class="row">
                @forelse ($posts as $post)
                <div class="col-xs-6 col-sm-4 col-md-3 p-1" >
                  <div class="card rounded">
                  <div class="item-box-blog  bg-warning m-1">
                    <div class="item-box-blog-image bg-danger">
                      <!--Date-->
                      <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{{ $post->created_at }}</span> </div>
                      <!--Image-->
                      <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg" class="w-50 h-50"> </figure>
                    </div>
                    <div class="item-box-blog-body bg-secondary">
                      <!--Heading-->
                      <div class="item-box-blog-heading bg-success">
                        <a href="{{ url('posts/detail',$post->id)}}" tabindex="0">
                          <h5>{{ $post->title}}</h5>
                        </a>
                      </div>
                      <!--Text-->
                      <div class="item-box-blog-text">
                        <p>{{ $post->body}}</p>
                      </div>
                      <div class="mt"> <a href="{{ url('posts/detail',$post->id)}}" tabindex="0" class="btn bg-blue-ui white read">続きを読む</a> </div>
                      <!--Read More Button-->
                    </div>
                  </div>
                    </div>
                </div>

                @empty
                <div>記事がありません</div>
                @endforelse

              </div>
              <!--.row-->
              <div class="col-sm-2">
                {{ $posts->links() }}
              </div>
  </div>

<!-- </div> -->
@endsection
