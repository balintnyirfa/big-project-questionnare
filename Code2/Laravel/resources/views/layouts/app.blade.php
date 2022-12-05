<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    @livewireStyles
</head>
<body style="background: linear-gradient(150.32deg, #C86FFF 0%, #C586FF 18.62%, #C19DFF 35.17%, #BEB4FF 53.27%, #BACAFF 71.37%, #B7E1FF 84.3%, #B3F8FF 99.3%) !important; background-size: cover; background-repeat: no-repeat;">
    @livewireScripts
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light navbar-dark sticky-top" style="background-color: rgba(137, 137, 137, 50%) !important; border-radius: 0px 0px 24px 24px;">
            <div class="container-fluid">
                <a class="navbar-brand d-lg-none" href="{{ url('/') }}">Textlux</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <a class="navbar-brand m-0">Testlux</a>
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Bejelentkezés') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Regisztráció') }}</a>
                                </li>
                            @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="/questionnaires">Kérdőívek</a>
                                </li>
                                
                            
                        @else
                            @if (Auth::user()->isAsker != 0)
                                <li class="nav-item">
                                    <a class="nav-link" href="/create/questionnaire">Új kérdőív</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="/questionnaires">Kérdőívek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Kijelentkezés') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div style="margin-top: 5rem;">
        <main class="py-4">
            @yield('content')
        </main>
        <div>
    </div>
</body>
</html>
