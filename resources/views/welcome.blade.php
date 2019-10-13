<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="content">
            @if (Route::has('login'))
                <div class="content">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              @forelse($posts as $post)
              <div class="card" >
              <a href="{{ url('posts/detail',$post->id)}}">{{ $post->title }}</a>
                    <p>{{ $post->body }}</p>
                    <p>{{ $post->created_at }}</p>
              </div>
              @empty
              <div class="card">
                    <li>記事がありません</li>
              </div>
              @endforelse
            </div>
        </div>
    </body>
</html>
