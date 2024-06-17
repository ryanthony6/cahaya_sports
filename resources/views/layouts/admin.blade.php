<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cahaya Sports | Home </title>

    <!-- Lucide Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lucide-icons/font/lucide.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-transparent fixed-top bg-white shadow-sm">

        <div class="container">
            <a class="navbar-brand text-black" href="{{ url('/') }}">
                Cahaya Sports
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        </div>
    </nav>

    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-dark text-white">
            <div class="p-4">
                <h4 class="text-center">Menu</h4>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="{{ route('admin.home') }}" class="d-flex text-white align-items-center gap-1">
                            @include('icons/dashboard-layout') Dashboard
                        </a>
                    <li>
                        <a href="{{ route('admin.statistics') }}" class="d-flex text-white align-items-center gap-2">
                            @include('icons/chart') Statistics</a>
                    </li>

                    </li>
                    <li>
                        <a href="{{ route('admin.schedules') }}"
                            class="d-flex text-white align-items-center gap-2">@include('icons/schedule')Schedules</a>
                    </li>
                    <li>
                        <a href="#"
                            class="d-flex text-white align-items-center gap-2">@include('icons/order')
                            Orders</a>
                    </li>
                    <li>
                        <a href="#"
                            class="d-flex text-white align-items-center gap-2">@include('icons/comment')
                            Review</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="content" class="flex-grow-1">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
