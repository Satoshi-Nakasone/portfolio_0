<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token"
			content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}
		</title>
		<!-- Scripts -->
		<script src="{{ mix('js/app.js') }}" defer></script>
		<!-- Fonts -->
		<link rel="dns-prefetch"
			href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito"
			rel="stylesheet">
		<!-- Styles -->
		<link rel="stylesheet"
			href="{{ mix('css/app.css') }}">
	</head>
	<body>
		<div class="container">
			<h1>
				<a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}
				</a>
			</h1>
		</div>
		<div id="app">
			<nav class="navbar navbar-expand-md navbar-dark bg-dark  shadow-sm">
				<div class="container">
					<button class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="{{ __('Toggle navigation') }}">
						<span class="navbar-toggler-icon">
						</span>
					</button>
					<!--レスポンシブの際のハンバーガーメニューのボタン-->
					<div class="collapse navbar-collapse"
						id="navbarSupportedContent">
						<!--ナビバー内のメニュー-->
						<!-- Left Side Of Navbar -->
						<ul class="navbar-nav  mr-auto">
							<li class="nav-item">
								<a class="nav-link"
									href="{{ url('/') }}">
									<span>HOME
									</span>
								</a>
							</li>@guest
							<li class="nav-item">
								<a class="nav-link"
									href="{{ route('login') }}">
									<span>{{ __('Login') }}
									</span>
								</a>
							</li>@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link"
									href="{{ route('register') }}">
									<span>{{ __('Register') }}
									</span>
								</a>
							</li>@endif @else
							<li class="nav-item">
								<a class="nav-link"
									href="{{ route('logout') }}"
									onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
									<span>{{ __('Logout') }}
									</span>
								</a>
								<form id="logout-form"
									action="{{ route('logout') }}"
									method="POST"
									style="display: none;">@csrf
								</form>@if (Route::has('login'))
								<li class="nav-item">@auth
									<a class="nav-link"
										href="{{ url('/home') }}">
										<span>管理画面
										</span>
									</a>@else
									<a class="nav-link"
										href="{{ route('login') }}">
										<span>Login
										</span>
									</a>@if (Route::has('register'))
									<a class="nav-link"
										href="{{ route('register') }}">Register
									</a>@endif @endauth
								</li>@endif
							</li>@endguest
						</ul>
					</div>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2"
							type="text"
							placeholder="Search"
							aria-label="Search">
						<button class="btn btn-outline-secondary my-2 my-sm-0"
							type="submit">Search
						</button>
					</form>
				</div>
			</nav>
			<main class="py-4">@yield('content')
			</main>
		</div>
	</body>
</html>
