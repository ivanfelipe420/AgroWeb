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
    <div id="app">
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
                    <!-- Lado izquierdo de la barra de navegación -->


                <!-- <ul class="navbar-nav ml-auto">
                  <div> 
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                  &nbsp;&nbsp;&nbsp;
                </ul>   -->   
                
                
            <form class="d-flex" > 
                <button class="btn btn-outline-dark" data-pushbar-target="pushbar-carrito">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/carrito.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </button>
            </form>
            &nbsp;&nbsp;&nbsp;
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


<!-- carrusel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner" style="width: 90%;margin:0 auto">
          <div class="carousel-item active">
            <img src="/Imagenes/banner1.png" class="d-block w-100" alt="Imagenes de naranjas">
          </div>
          <div class="carousel-item">
            <img src="/Imagenes/banner2.png" class="d-block w-100" alt="Imagens de berengenas">
          </div>
          <div class="carousel-item">
            <img src="/Imagenes/banner3.png" class="d-block w-100" alt="Campo cultivo">
          </div>
          <div class="carousel-item">
            <img src="/Imagenes/banner4.png" class="d-block w-100" alt="Imagenes de naranjas">
          </div>
          <div class="carousel-item">
            <img src="/Imagenes/banner4.png" class="d-block w-100" alt="Imagenes de naranjas">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!--cierre carrusel-->



        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Carrito de compras -->
    <div  class="pushbar-carrito" data-pushbar-id="pushbar-carrito"  data-pushbar-direction="right">
			<h1>CARRITO DE COMPRAS</h1>
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">productos</th>
      <th scope="col">Precio</th>
      <th scope="col">cantidad</th>
      <th scoxpe="col">img</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>manzanas</td>
      <td>5.200</td>
      <td>@2 lb</td>
      <td><img src="Imagenes/manzana.jpg" width="50px" height="50px"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
            </table>
            <form action="carrito">
                <button class="btn btn-outline-light" type="submit" >Finalizar compra</button>
            </form>
	</div>
    
       <!--boton depegable -->
       <!--boton flotante derecha -->
       <form class="botonDespe">
       <button id="boton1" type="button" class="btn btn-outline-success" data-pushbar-target="pushbar-carrito">
           <img src="/Imagenes/carrito.svg" alt=""></button>
      </form> 

    
    <script  type="text/javascript" src="{{ asset('js/pushbar.js') }}"></script>
        <script src="Js/pushbar.js"></script>
        <script type="text/javascript">const pushbar = new Pushbar({blur:true,overlay:true,});	</script>
</body>
</html>