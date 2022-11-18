<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Testlux</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/Code/resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        html{
            height: 100%;
        }
        @media only screen and (min-width: 1200px){
            .befogo{
                width: 75%;
            }
        }

        @media only screen and (min-width: 992px){
            .befogo{
                width: 75%;
            }
        }

        @media only screen and (max-width: 768px){
            .befogo{
                width: 100%;
            }
        }

        @media only screen and (max-width: 600px){
            .befogo{
                width: 100%;
            }
        }
    </style>
</head>
<body style="background: linear-gradient(150.32deg, #C86FFF 0%, #C586FF 18.62%, #C19DFF 35.17%, #BEB4FF 53.27%, #BACAFF 71.37%, #B7E1FF 84.3%, #B3F8FF 99.3%) !important; background-size: cover; background-repeat: no-repeat;">
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light navbar-dark" style="background-color: rgba(137, 137, 137, 50%) !important; border-radius: 0px 0px 24px 24px;">
            <div class="container-fluid befogo">
                <a class="navbar-brand d-lg-none">Testlux</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">Valami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Valami</a>
                        </li>
                    </ul>
                    <a class="navbar-brand m-0">Testlux</a>
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
