@extends('layouts.app2')

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
<div class="container" style="background:rgb(240, 240, 193); border-radius:20px; padding:20px;">
    <div class="row">
        <div class="col-2">
            <a href="/cuenta" class="btn btn-outline-success " >Mi cuenta</a><br><br>
            <a href="" class="btn btn-outline-success" >Mi tienda</a>
        </div>
        <div class="col-10">
            <a href="/miTienda" class="btn btn-outline-success" >¡Ir a mi tienda!</a>
            <h2>Nombre de mi tienda:</h2>
            <h5>{{$tienda->nombreTienda}}</h5>
            <h2>Representante legal:</h2>
            <h5>{{$tienda->nombrePropietario}}</h5>
            <h2>Dirección de tu tienda:</h2>
            <h5>{{$tienda->direccion}}</h5>
            <h2>Informacion de contacto</h2>
            <h5>Correo de tu tienda: {{$tienda->email}}</h5>
            
            <h5 id="telefono">Telefono de tu tienda: {{$tienda->telefono}}</h5>
            <a href="" class="btn btn-outline-success" >Editar</a>
            <a href="" class="btn btn-outline-success">Eliminar mi cuenta</a>
        </div>
    </div>  
</div>
@endsection