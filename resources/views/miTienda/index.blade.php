@extends('layouts.app')
<?php
use App\Http\Controllers\carritoController;
use App\Http\Controllers\tiendaControlador;
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{$tienda->nombreTienda}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
      </ul>
      <?php
          if (Auth::guest()){
              $idUsuario=0;
          }else{
            $idUsuario=Auth::user()->id;
          }
          $idTienda=$tienda->idtiendausuario;
          if($idUsuario == $idTienda){
            echo'<form class="d-flex" action="/productos/create">';
            echo'<button class="btn btn">';
            echo'<i class="bi-cart-fill me-1">';
            echo'<img src="/Imagenes/subir.ico" title="¡Sube tu producto!">';
            echo'<span class="badge bg-dark text-white ms-1 rounded-pill"></span>';
            echo'</i>';
            echo'</button>';
            echo'</form>';
          }
      ?>
      
    </div>
  </div>
</nav>
<!-- cierre nav -->

<div class="row justify-content-center" >
    <div class="cover d-flex justify-content-center align-items-center flex-column">
        <h1>{{$tienda->nombreTienda}}<h1>
    </div>
    <div class="card" style="width: 18rem; height:11rem; border: 0px">
    <div class="card-body">
      <h5 class="card-title">Categorias del vendedor</h5>
      
      @foreach($cateTiendas as $cateTiendas)
          <p class="card-text">{{$cateTiendas->nombre}}</p>
      @endforeach
      <?php
          if (Auth::guest()){
              $idUsuario=0;
          }else{
            $idUsuario=Auth::user()->id;
          }
          $idTienda=$tienda->idtiendausuario;
          if($idUsuario == $idTienda){
            echo '<a href="/categorias/create" class="btn btn-outline-success" disabled>Crear Categoria</a>';
            echo '<br>';
            echo '<br>';
            echo '<a href="/categorias" class="btn btn-outline-success" disabled>Editar categorias</a>';
          }
      ?>
    </div>
    <br>
    <div class="card" style="width: 18rem; height:11rem; margin-left: -1px; border: 0px">
      <div class="card-body">
        <h5 class="card-title">Detalles de la empresa</h5>
        <p class="card-text">{{$tienda->descripcion}}</p> 
        <p class="card-text">Telefono: {{$tienda->telefono}}</p> 
        <p class="card-text">Email: {{$tienda->email}}</p> 
        <p class="card-text">Nos ubicamos: {{$tienda->direccion}}</p> 
          <?php
              if($idUsuario == $idTienda){
                echo '<a href="/miTienda/{{Auth::user()->id}}/edit" class="btn btn-outline-success" disabled>Editar mi información</a>';
              }
          ?>
          
          </ul>
      </div>
      <ul class="socialIcons">
  <li class="facebook"><a href=""><i class="fa fa-fw fa-facebook"></i>Facebook</a></li>
  <li class="whatsapp"><a href=""><i class="fa fa-fw fa-twitter"></i>WhatsApp</a></li>
  <li class="telefono"><a href=""><i class="fa fa-fw fa-instagram"></i>Telefono</a></li>
  <li class="email"><a href=""><i class="fa fa-fw fa-steam"></i>Email</a></li>
    </div>

</div>

    @foreach($Productos as $Productos)
      <div class="col-2">
        <a href="/productos/{{$Productos->id}}" >
          <img width="100%" height="100%" src="/imagenes/productos/{{$Productos->imagen}}" class="rounded float-end img-thumbnail img-fluid" alt="{{$Productos->nombrePro}}">
        </a>
        <div class="card-body">
          <a href="/productos/{{$Productos->id}}" style="text-decoration: none; color:black"><h4 class="card-text text-center">{{$Productos->nombrePro}}</h4></a>
                                
          <p class="card-text text-center">${{$Productos->precioPro}} x {{$Productos->unidadPro}}</p>
          <p></p>


          @if(carritoController::productoYaEstaEnCarrito($Productos->id))
              <p class="card-text text-center">${{$Productos->precioPro,2}}</p>
                        <form action="/eliminarCarrito" method="POST" enctype="multipart/form-data">
                          @csrf   
                          <input type="hidden" name="id_producto" value="{{$Productos->id}}">
                            <button class="btn btn-success" disabled>
                                En el carrito
                            </button>
                            <button class="btn btn-danger">
                              🗑️
                            </button>
                        </form>
          @else
                    <form action="/agregarCarrito" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="id_producto" id="id_producto" value="{{$Productos->id}}">
                        <button class="btn btn-lg btn-primary text-center">
                            ¡Al carrito!
                        </button>
                    </form>
          @endif
           <br><br><br><br><br><br><br><br>
        </div>    
      </div>
    @endforeach

     


<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6168d9226c54f40014a7f9d2&product=inline-share-buttons" async="async"></script>
@endsection