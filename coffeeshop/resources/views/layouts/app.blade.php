<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex navbar-welcome py-2">
            <a class="navbar-brand mx-4" href="{{Route('home')}}">
                <span class="logo">
                    Coffee<span class="img-fluid"><img src="{{asset('img/icons8-coffee-64 (2).png')}}" class="logo-img" alt="coffee logo"></span>Shop
                </span>
            </a>
            <button class="navbar-toggler mx-4" type="button" data-bs-toggle="collapse" data-bs-target="#menuItems" aria-controls="menuItems" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuItems">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto me-4">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-one me-3 mt-2 mt-lg-0 ms-4 ms-lg-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-one mt-3 mt-lg-0 ms-4 ms-lg-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-user ms-4 ms-lg-0 mt-3 mt-lg-0 btn btn-one" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end ms-4 ms-lg-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">
                                    {{ __('Edit Profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="text-center text-lg-start footer-one position-absolute w-100">
        <div class="container d-flex justify-content-center py-5">
            <button type="button" class="btn btn-footer btn-lg btn-floating mx-2">
                <i class="bi bi-facebook text-center"></i>
            </button>
            <button type="button" class="btn btn-footer btn-lg btn-floating mx-2">
                <i class="bi bi-instagram text-center"></i>
            </button>
            <button type="button" class="btn btn-footer btn-lg btn-floating mx-2">
                <i class="bi bi-twitter text-center"></i>
            </button>
            <button type="button" class="btn btn-footer btn-lg btn-floating mx-2">
                <i class="bi bi-youtube text-center"></i>
            </button>
        </div>
        <!-- Copyright -->
        <div class="text-center text-white p-3 footer-two">
            © 2023 Copyright:
            <a class="text-white text-decoration-none fw-bolder" href="https://youcode.ma/">YouCode</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
