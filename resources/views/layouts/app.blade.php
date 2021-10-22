<?php 
use App\Http\Controllers\HomeController;
?>
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
                <a class="navbar-brand" href="@yield('url')">
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
                
            
            <form class="d-flex" action="/myCart"> 
                <button class="btn btn">
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
                <a class="btn btn" href="/cuenta">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/ajustes.ico" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </a> 
                <!-- boton ir a tienda -->
                
                
                @if(HomeController::userEstaEnTienda())
                &nbsp;&nbsp;&nbsp;
                  <a class="btn btn" href="/miTienda/{{Auth::user()->id}}/miTienda">
                      <i class="bi-cart-fill me-1">
                          <img src="/Imagenes/tiendaa.ico" alt="">
                          <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                      </i>
                  </a> 
                @else
                 
                @endif
                <!-- boton ir a tienda -->  
                &nbsp;&nbsp;&nbsp;        
                <a class="btn btn"  href="{{ route('logout') }}"
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
     <!-- Categorias -->
     <div  class="pushbar-categorias" data-pushbar-id="pushbar-categorias"  data-pushbar-direction="left">
			<h1>CATEGORIAS</h1>
            <table class="table table-striped">
            <tr>
            <td><a href="/promocion">Promociones</a></td>
            </tr>
            <tr>

                <td>
                    @foreach($cates as $cates)
                      <a class="" href="/home/categorias/{{$cates->id}}">{{$cates->nombre}}</a>
                    @endforeach
                  </td>
                </tr>



                <tr>
            <td><a href="/productos">Productos</a></td>
            </tr>
            </table>
            </div> 
      <!-- cierre Categorias --> 
       <!--boton depegable -->
       <!--boton flotante derecha -->
       
       <form class="botonDespe">
       <button id="boton1" type="button" class="btn btn-outline-success" data-pushbar-target="pushbar-carrito">
           <img src="/Imagenes/carrito.svg" alt=""></button>
      </form>
        <!--boton flotante izquierda -->
        <form class="botonDespe">
       <button id="boton2" type="button" class="btn btn-outline-success" data-pushbar-target="pushbar-categorias">
           <img src="/Imagenes/menu.svg" alt=""></button>
      </form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<div  >
<footer class="contac">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span><center><strong>Contactos:</strong></center></span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Advertencia
          </h6>
          <p>
            esta pagina garantiza la comunicacion entre el cliente y el vendedor, no nos hacemos responsables de la entrega del producto ni su garantia. eso le corresponde al establecimiento o al vendedor solicitado .
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           FRUVERS
          </h6>
          <p>
            <a href="#!" class="text-reset">Canasta campesina-madrid</a>
          </p>
          <p>
            <a href="#!" class="text-reset">camacho-Funza</a>
          </p>
          <p>
            <a href="#!" class="text-reset">La Gran Cocecha-madrid</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Corabastos-facatativa</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          Telefono
          </h6>
          <p>
            <a href="#!" class="text-reset">+57 314 567 8832</a>
          </p>
          <p>
            <a href="#!" class="text-reset">+57 312 367 8832</a>
          </p>
          <p>
            <a href="#!" class="text-reset">+57 301 557 8832</a>
          </p>
          <p>
            <a href="#!" class="text-reset">+57 310 567 8832</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
              Contact
          </h6>
          <p><i class="fas fa-home me-3"></i>Madrid,Cundinmarca</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
          correofruvers@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i>+57 314 567 8832</p>
          <p><i class="fas fa-print me-3"></i>+57 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="/home">AgroWeb </a>
  </div>
  <!-- Copyright -->
</footer>
</div>
<!-- cierre Footer --> 
    
    <script  type="text/javascript" src="{{ asset('js/pushbar.js') }}"></script>
        <script src="Js/pushbar.js"></script>
        <script type="text/javascript">const pushbar = new Pushbar({blur:true,overlay:true,});	</script>
</body>
</html>
