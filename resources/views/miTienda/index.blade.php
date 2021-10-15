@extends('layouts.app')
@section('url', __('/home'))


@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Vegetales</a></li>
            <li><a class="dropdown-item" href="#">Frutas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Verduras</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">categorias</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="cover d-flex justify-content-center align-items-center flex-column">
    <h1>Mi Tienda<h1>
</div>
<div class="row justify-content-center">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Detalles</h5>
    <p class="card-text">En esta seccion podras encontrar los detalles de nuestra tienda.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">telefono</li>
    <li class="list-group-item">Donde nos ubiacmos</li>
    <li class="list-group-item">Mas informaciion</li>
  </ul>

  <div class="card-body">
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
      <a type="Button" class="btn btn-light" href="contactos.html" >
           <img src="Imagenes/facebook.ico"></a>
      <a type="Button" class="btn btn-light" href="contactos.html" >
           <img src="Imagenes/whatsapp.ico"></a>
      <a type="Button" class="btn btn-light" href="contactos.html" >
           <img src="Imagenes/instagram.ico"></a>
      <a type="Button" class="btn btn-light" href="contactos.html" >
           <img src="Imagenes/compartir.ico"></a>
      </div>
  </div>
  <a href="/miTienda/{{Auth::user()->id}}/create" class="btn btn-outline-success" disabled>Crear tienda</a>
  <div class="card-body">
    <h5 class="card-title">Categorias</h5>
    <p class="card-text"> ! Aca puedes crear todas categorias ! </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Frutas</li>
    <li class="list-group-item">Vegetales</li>
    <li class="list-group-item">Verduras</li>
  </ul>
  <a href="/miTienda/{{Auth::user()->id}}/create" class="btn btn-outline-success" disabled>Crear Categoria</a>
</div>

    @foreach($Productos as $Productos)
        
        <div class="col-2">
            <a href="/productos/{{$Productos->id}}" >
                <img width="100%" height="100%" src="imagenes/productos/{{$Productos->imagen}}" class="rounded float-end img-thumbnail img-fluid" alt="{{$Productos->nombrePro}}">
            </a>
            <div class="card-body">
                <a href="/productos/{{$Productos->id}}" style="text-decoration: none; color:black"><h4 class="card-text text-center">{{$Productos->nombrePro}}</h4></a>
                    
                    <p class="card-text text-center">${{$Productos->precioPro}} x {{$Productos->unidadPro}}</p>
                    <a href="/" class="btn btn-lg btn-primary text-center" disabled>¡Al carrito!</a>
            </div>    
        </div>
    @endforeach 
    
    </div>
<!-- Botones para subir productos -->

@can('Crear Producto')
<form action="/productos/create">
    <button class="btn btn-outline-dark" type="submit">
        Subir productos
    </button>
    @endcan
</form> 
<form action="/productos">
@can('Crear Producto')
    <button class="btn btn-outline-dark" type="submit">
        Productos
    </button> 
    @endcan
</form> 
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6168d9226c54f40014a7f9d2&product=inline-share-buttons" async="async"></script>
@endsection