@extends('layouts.app')
<?php
if (Auth::guest()){
    $idUsuario=0;
}else{
  $idUsuario=Auth::user()->id;
}
$idproductoTienda=$Productos->idUsuario;
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))

@section('content')

<div class="container" style="background:white">
    <div class="row">
        <div class="col-5">
                <img src="/imagenes/productos/{{$Productos->imagen}}"  alt="{{$Productos->nombrePro}}" class="img-fluid" height="60%" width="60%"> 
        </div>
        <div class="col-5">
            <h1>{{$Productos->nombrePro}}</h1>
            <h4>${{$Productos->precioPro}} x {{$Productos->unidadPro}}</h4>
            <br>
            <p>{{$Productos->descripcionPro}}</p>
            <br><br>

                
            <br><br>
            
        </div>
        <div class="col-2">
        <?php
              if($idUsuario == $idproductoTienda){
                echo '<a href="/productos/{{$Productos->id}}/edit" type="button" class="btn btn-outline-secondary"> Editar</a>';
              }
              <br><br>
           <a href="/productos/{{$Productos->id}}/promocion" type="button" class="btn btn-warning">  ¡Poner en <br>promoción! </a>
   
            <br>
            <br>
            <form action="/productos/{{$Productos->id}}/quitarPromo" method="POST" enctype="multipart/form-data">
            @csrf
            <button  class="btn btn-outline-danger">
                ¡Quitar <br>promoción!
            </button>
            <br><br>
            </form>
            
            <form action="/productos/{{$Productos->id}}" method="POST">
            @csrf
            @method('delete')
            <button  class="btn btn-danger">Eliminar</button>
            <br>
          ?>
 
        
        </div>
</div>
<br>
<div class="d-grid gap-2">
  <button class="btn btn-success"  type="button">¡Añadir al carrito!</button>
  <a class="btn btn-outline-success"  href="{{ url()->previous() }}" type="button">atras</a>
</div>

@endsection