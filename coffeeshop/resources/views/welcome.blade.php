<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>Coffee Shop</title>
    </head>
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex navbar-welcome py-2">
            <a class="navbar-brand mx-4" href="#">
                <span class="logo">
                    Coffee<span class="img-fluid"><img src="{{asset('img/icons8-coffee-64 (2).png')}}" class="logo-img" alt="coffee logo"></span>Shop
                </span>
            </a>
            <button class="navbar-toggler mx-4" type="button" data-bs-toggle="collapse" data-bs-target="#menuItems" aria-controls="menuItems" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end mx-4" id="menuItems">
                <ul class="navbar-nav">
                    <li class="nav-item">
                            @if (Route::has('login'))
                                <div class="d-flex flex-column flex-lg-row">
                                    @auth
                                        <div class="">
                                            <a href="{{ url('/home') }}" class="">Home</a>
                                        </div>
                                    @else
                                        <div class="me-3 mt-2 mt-lg-0">
                                            <a href="{{ route('login') }}" class="btn btn-one">Log in</a>
                                        </div>
                                        @if (Route::has('register'))
                                            <div class="mt-3 mt-lg-0">
                                                <a href="{{ route('register') }}" class="btn btn-one">Register</a>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
