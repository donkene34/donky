<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <aside style="">
        <nav class="nav1 d-flex flex-column align-items-center">
            <div class="menu btn_menu ">
                <h3><i class="fas fa-bars"></i></h3>
            </div>
            <div class="menu d-flex justiy-content-around flex-column align-items-center">
                <i class="fas fa-home"></i>
                <span class="titre"><a class="titre-menu " href="{{ route('video.index') }}">Acceuil</a></span>
            </div>
            <div class="menu d-flex justiy-content-around flex-column align-items-center">
                <i class="fas fa-fire"></i>
                <span class="titre"><a class="titre-menu " href="{{ route('video.index') }}">Tendances</a></span>
            </div>
            <div class="menu d-flex justiy-content-around flex-column align-items-center">
                <i class="fas fa-book"></i>
                <span class="titre"><a class="titre-menu " href="{{ route('video.index') }}">Abonnement</a></span>

            </div>
            <div class="menu d-flex justiy-content-around flex-column align-items-center">
                <i class="fas fa-book"></i>
                <span class="titre"><a class="titre-menu " href="{{ route('video.index') }}">Bibliotheque</a></span>
            </div>
        </nav>
    </aside>
    <aside class="pt-3 display_none">
        <nav>
            <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-home ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">Acceuil</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-fire ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">Tendances</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-video ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">Abonnement</p>
                </a>
             </div>
             <hr>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-book ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">Bibliotheque</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-sync ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">historique</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-home ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">vos videos</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-thumbs-up ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">video "j'aime"</p>
                </a>
             </div>
        </nav>
        <hr>
        <h6 class="text-secondary text-center">ABONNEMENT</h6>
        <nav>
            <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                    <div class="rounded-circle h-25 w-25 bg-danger"></div>
                    <p class="ml-4 mt-3 font-weight-bolder text-capitalize">nom</p>
                </a>
            </div>
        </nav>
        <hr>
        <h6 class="text-secondary text-center">AUTRES CONTENUS YOUTUBE</h6>
        <nav>
            <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
             <div class="lien1">
                <a href="" class="d-flex text-secondary align-items-center">
                     <i class="fas fa-clock ml-4"></i>
                     <p class="ml-4 mt-3 font-weight-bolder text-capitalize">a regarder plus tard</p>
                </a>
             </div>
        </nav>
        <hr>
    </aside>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top justify-content-between">
            <a class="navbar-brand text-primary logo" href="{{ url('/') }}"><h4><i class="fab fa-youtube"></i>Donky</h4></a>
            <form class="d-flex align-items-center" action="" method="post">
                <input type="search" placeholder="Rechercher" class="search" name="" id="" class="">
                <input type="submit" class="submit bg-gray border border-gray" value="">
                <i class="fas fa-search icone-search"></i>
            </form>

            <div class="logos  d-flex align-items-center">
                <div class="icone mr-4">
                    <a class="text-dark" href="{{ route('video.create') }}"><i class="fas fa-video"></i></a>
                </div>
                <div class="icone mr-4">
                    <i class="fas fa-grip-horizontal"></i>
                </div>
                <div class="icone mr-4">
                    <i class="fas fa-bell"></i>
                </div>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <div class="pp d-flex justify-content-center align-items-center rounded-circle border border-gray">
                                {{ substr(Auth::user()->pseudo,0,1) }}
                            </div>

                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div> --}}
                        </li>
                    @endguest
                </ul>
            </div>
            </div>
        </nav>

        <main class="py-4 mt-5 main">
            @yield('content')
        </main>
    </div>
</body>
</html>
