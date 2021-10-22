@extends('layouts.app')
<?php
 
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))


@section('content') 

<!--carrusel-->

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


<!--cards -->
<section>
        <div class="container mt-5">
            <div class="row">
                <div class="col justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="Imagenes/tienda.ico" class="center" width="90" height="90" alt="Imagen">
                        <div class="card-body">
                            <h5 class="card-title"> Conocemos </h5>
                            <p class="card-text"> Catalogos de ofertas </p>
                            <a type="button" href="/conocenos" class="btn btn-outline-dark"> Conoce mas </a> 
                        </div>
                    </div>
                </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="Imagenes/tienda.ico" width="75" height="75" alt="Imagen">
                    <div class="card-body">
                        <h5 class="card-title"> Tiendas disponibles </h5>
                        <p class="card-text"> Contactate con la tienda </p>
                        <a type="button" href="/tiendasAll" class="btn btn-outline-dark"> Conoce nuestras tiendas </a>  
                    </div>
                </div>
            </div>
            

            @if(HomeController::userEstaEnTienda())
            
            @else
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="Imagenes/tienda.ico" width="75" height="75" alt="Imagen">
                    <div class="card-body">
                        <h5 class="card-title"> Crea tu tienda </h5>
                        <p class="card-text"> Conoce como crearla </p>
                        <a type="button" href="/miTienda/create" class="btn btn-outline-dark"> Crea tu Tienda </a>
                    </div>
                </div>
            </div>
            @endif


        </div>
    </section>
    <!--fin cards-->

        <!-- Border-radius categorias -->
        <section>
            <div class="container px-4 px-lg-5 mt-5">
                <h4> Categorias </h4>
                @foreach ($categorias as $categorias)
                    <a type="Button" class="btn btn-light" href="contactos.html" >
                        <img src="Imagenes/categorias/{{$categorias->imagen}}" alt="">
                        <br> {{$categorias->nombre}} 
                    </a>
                @endforeach
            </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Vusta de los productos mas vendidos -->
    <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">¡Vamos, echa un vistazo!</h2>
                <!-- produto -->
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- producto -->
                
                    @foreach($productos as $productos)    
                    <div class="col mb-5">
                        <div class="card h-100">
                            <a href="/productos/{{$productos->id}}">
                            <img class="card-img-top" src="imagenes/productos/{{$productos->imagen}}" alt="{{$productos->nombrePro}}" title="{{$productos->nombrePro}} de tiendaPepito">
                            </a>
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <a href="/productos/{{$productos->id}}" style="text-decoration: none; color:black">
                                        <h5 class="fw-bolder">{{$productos->nombrePro}}</h5>
                                        ${{$productos->precioPro}} x {{$productos->unidadPro}}
                                    </a> 
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    <!-- div en ofertaaaaa
                        <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                            <img class="card-img-top" src="Imagenes/manzana.jpg" alt="Manzanas" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Manzanas</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </section>
        <!-- segundo carrusel info -->


<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Imagenes/banerTienda.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Imagenes/banerTienda2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Imagenes/promocionesAgroweb.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
</section>

<!-- Vusta de los productos mas vendidos -->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4"> Productos en Oferta </h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($oferta as $oferta)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Descuento </div>
                            <a href="/productos/{{$oferta->id}}">
                            <img class="card-img-top" src="imagenes/productos/{{$oferta->imagen}}" alt="{{$oferta->nombrePro}}" title="{{$oferta->nombrePro}} de tiendaPepito">
                            </a>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> {{$oferta->nombrePro}} </h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">{{$oferta->precioPro}}</span>
                                    {{$oferta->precioPromo}}
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
</section>

        <!-- Border-radius tiendas -->
        <section> 
        <div class="container px-4 px-lg-5 mt-5">
            <h4> Tiendas mas buscadas </h4>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
                <a type="Button" class="btn btn-light" href="/tiendasAll" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> Tienda 
                </a>
        </div>
</section>

@endsection
