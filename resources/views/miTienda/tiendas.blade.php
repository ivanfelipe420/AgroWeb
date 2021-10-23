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
<section> 
        <div class="container px-4 px-lg-5 mt-5">
            <h4> Tiendas disponibles </h4>
            @foreach($tiendas as $tiendas)
            <a type="Button" class="btn btn-light" href="/miTienda/{{$tiendas->id}}/miTienda" >
                    <img src="Imagenes/tienda.ico" alt="Tienda">
                    <br> {{$tiendas->nombreTienda}}
                </a>
            @endforeach

        </div>
</section>
@endsection