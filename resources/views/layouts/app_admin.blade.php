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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/community.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <style>body{background-color: #dc8ba7;}</style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('????????????') }}</a>
                            </li>
                            @if (Route::has('admin.register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.register') }}">{{ __('????????????') }}</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('???????????????') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            <div class="row">
                <div class="col-sm-12 col-md-2 p-0"> {{-- p-0???padding???0????????? --}}
                    <div class="card">
                        <div class="card-header">????????????</div>
                        <ul class="list-group list-group-flush">
                            <a href={{ route('community') }} class="list-group-item"><i class="fas fa-gamepad"></i>??????????????????</a>
                            <a href={{ route('notice') }} class="list-group-item"><i class="fas fa-exclamation-circle"></i>????????????</a>
                            <a href={{ route('nice/from-partner') }} class="list-group-item"><i class="fas fa-thumbs-up"></i>?????????</a>
                            <a href={{ route('chat') }} class="list-group-item"><i class="fas fa-comments"></i>????????????</a>
                            <a href={{ route('profile') }} class="list-group-item"><i class="fas fa-id-badge"></i>??????????????????</a>
                            <a href={{ route('status') }} class="list-group-item"><i class="fas fa-user-circle"></i>?????????????????????</a>
                            <a href={{ route('contact') }} class="list-group-item"><i class="fas fa-file-contract"></i>??????????????????</a>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 cont-1">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>
