<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Oswald|PT+Sans" rel="stylesheet">    

    <!-- Styles -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="cabecera-de-pagina">
            <div class="logo">
            <img src="images/Logo.png" alt="logo">
            </div>
                <div class="menu-movil">
            <span></span>
            <span></span>
                <span></span>
            </div>
            <!-- Right Side Of Navbar -->
            <nav class="navegacion-principal">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="{{ route('faq') }}">Preguntas Frecuentes</a>
                <!-- Authentication Links -->
                @guest
                    <a href="{{ route('login') }}">Ingresar</a>
                    <a href="{{ route('register') }}">Registro</a>
                    
                @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </nav>
        </div>
    </header>
    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <div class="pie_de_pagina">
            <div class="contenido">
            <a href="#">Ayuda</a>
            <a href="#">Informacion</a>
            <a href="#">Privacidad</a>
            <a href="#">Condiciones</a>
            </div>
            <div class="redes-sociales">
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-twitter-square"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>        

    
</body>
</html>
