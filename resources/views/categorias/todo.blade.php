@extends('layouts.app')

<?php
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))



@section('content')
<div style="padding: 30px;">
    <h1>Estos son los productos de   </h1>
    <div class="row justify-content-end">
    @foreach($productos as $productos)

        <div class="col-2">
            <a href="/productos/{{$productos->id}}" >
                <img width="100%" height="100%" src="imagenes/productos/{{$productos->imagen}}" class="rounded float-end img-thumbnail img-fluid" alt="{{$productos->nombrePro}}">
            </a>
            <div class="card-body">
                <a href="/productos/{{$productos->id}}" style="text-decoration: none; color:black"><h4 class="card-text text-center">{{$productos->nombrePro}}</h4></a>
                    
                    <p class="card-text text-center">${{$productos->precioPro}} x {{$productos->unidadPro}}</p>
                    <a href="/" class="btn btn-lg btn-primary text-center" disabled>¡Al carrito!</a>
            </div>    
        </div>
    @endforeach 
    </div>
   
</div>

@endsection