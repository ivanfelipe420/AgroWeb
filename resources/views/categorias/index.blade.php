@extends('layouts.app')
@<?php
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))

@section('content')
<section >

    <div class="row justify-content-end"> 
    @foreach($Productos as $Productos)
        <div class="col-2">
            <a href="/productos/{{$Productos->id}}" >
                <img width="100%" height="100%" src="/imagenes/productos/{{$Productos->imagen}}" class="rounded float-end img-thumbnail img-fluid" alt="{{$Productos->nombrePro}}">
            </a>
            <div class="card-body">
                <a href="/productos/{{$Productos->id}}" style="text-decoration: none; color:black"><h4 class="card-text text-center">{{$Productos->nombrePro}}</h4></a>
                    
                    <p class="card-text text-center">${{$Productos->precioPro}} x {{$Productos->unidadPro}}</p>
                    <a href="/" class="btn btn-lg btn-primary text-center" disabled>¡Al carrito!</a>
            </div>    
        </div>
    @endforeach 
    </div>
</section> 
@endsection