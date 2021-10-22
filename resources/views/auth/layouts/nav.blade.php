<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
    crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link  href="{{ asset('css/pushbar.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/botones.css') }}" rel="stylesheet">
    <link  href="{{ asset('app/pushbar.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/estiloRegistrer.css') }}" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcun icon" type="imagen/x-icon" href="/Imagenes/logos.ico">
    <title>AgroWeb</title>
    <!-------------------------------------------------------------------  -->
    
</head>
<body>
    <!-- Encabezado -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
             <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/Imagenes/logos.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    AgroWeb
                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                </div>
                    
            
            <!-- Authentication Links -->
            @guest
              @if (Route::has('login'))
                                
                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                
              @endif
              @if (Route::has('register'))
                                
              <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                
              @endif
              @else
                <a class="btn btn-outline-dark" href="/cuenta">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/user.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </a>    
                &nbsp;&nbsp;&nbsp;        
                <a class="btn btn-outline-dark" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/salir.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>           
            @endguest
            <!-- Salir Authentication Links -->
        </nav>
<!-- Fin del nav Encabezado -->
<main class="py-4">
    @yield('content')
</main>
</body>