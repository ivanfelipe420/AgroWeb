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
<h1 style="text-align: center;">¡¡¡¡Disfruta las promociones!!!!</h1>
<div style="padding: 30px;">

    <div class="row justify-content-end">
    @foreach($oferta as $oferta)
        <div class="col-2">
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

<a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>

@endsection
