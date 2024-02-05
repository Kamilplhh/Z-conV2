<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Punkt Odniesienia">

    <title>Z-con</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-bottom/">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    @vite('resources/js/app.js')
</head>

<body>
    @section('navbar')
    <div class="navbar">
        @if (Route::has('login'))
        @auth
            <a href="{{ url('/account') }}">{{ Auth::user()->name }}</a>
            <a class="nav-link d-flex justify-content-end" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Wyloguj się
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>