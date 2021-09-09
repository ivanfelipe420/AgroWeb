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
    <!-- favicon -->
    <link rel="shortcun icon" type="imagen/x-icon" href="/Imagenes/logos.ico">

    <title>AgroWeb</title>

    <!-------------------------------------------------------------------  -->
    
</head>
<body>
    <div id="app">
        <!-- Encabezado -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

            <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/Imagenes/menu.svg" alt="menu svg">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Verduras</a></li>
            <li><a class="dropdown-item" href="#">Vegetales</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Frutas</a></li>
          </ul>
          
                <a class="navbar-brand" href="/">
                    <img src="/Imagenes/logos.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    AgroWeb
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Lado derecho de la barra de navegación -->
                    <ul class="navbar-nav ml-auto">
                    <div> <!-- poner a la izquiera por fa, en el css, no sé como. AttYessica -->
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/">
                                        Mi cuenta
                                    </a>  
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
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
            <form class="d-flex" > 
                <button class="btn btn-outline-dark" data-pushbar-target="pushbar-carrito">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/carrito.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </button>
            </form>
        </nav>
        <!-- Fin del nav (Encabezado) -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Carrito de compras -->
    <div  class="pushbar-carrito" data-pushbar-id="pushbar-carrito"  data-pushbar-direction="right">
			<h1>CARRITO DE COMPRAS</h1>
            <form action="carrito">
                <button class="btn btn-outline-dark" type="submit" >
                        Finalizar compra
                    </button>
            </form>
	</div>
       <!--boton depegable -->
       <form class="botonDespe">
       <button id="boton1" type="button" class="btn btn-dark" data-pushbar-target="pushbar-carrito">
           <img src="/Imagenes/carrito.svg" alt=""></button>
      </form>
    
    <script  type="text/javascript" src="{{ asset('js/pushbar.js') }}"></script>
        <script src="Js/pushbar.js"></script>
        <script type="text/javascript">const pushbar = new Pushbar({blur:true,overlay:true,});	</script>
</body>
</html>
