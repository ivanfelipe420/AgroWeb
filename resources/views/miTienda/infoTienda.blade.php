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

<div class="container">
    <div class="row">
        <div class="col-2">
        <li type="" class="list-group-item list-group-item-action" disabled="disabled">
            <a href="#" class="list-group-item list-group-item-action" disabled>Mi Tienda</a></li>
        <li type="button" class="list-group-item list-group-item-action">
            <a href="/cuenta" class="list-group-item list-group-item-action" disabled>Mi Cuenta</a></li>
        <li type="button" class="list-group-item list-group-item-action">
            <a href="" class="list-group-item list-group-item-action" disabled>Editar Tienda</a></li>
        <li type="button" class="list-group-item list-group-item-action">
            <a href="" class="list-group-item list-group-item-action" disabled>Eliminar Tienda</a></li>
        <li type="button" class="list-group-item list-group-item-action">
            <a href="/miTienda/{{Auth::user()->id}}/miTienda" class="list-group-item list-group-item-action" disabled>¡Ir a mi tienda!</a></li>
        </div>
        <div class="col-10">
            <h2>Nombre de mi tienda:</h2>
            <li type="" class="list-group-item list-group-item-action" disabled="disabled">{{$tienda->nombreTienda}}</li>
            <h2>Representante legal:</h2>
            <h5>{{$tienda->nombrePropietario}}</h5>
            <h2>Dirección de tu tienda:</h2>
            <h5>{{$tienda->direccion}}</h5>
            <h2>Informacion de contacto</h2>
            <h5>Correo de tu tienda: {{$tienda->email}}</h5>
            
            <h5 id="telefono">Telefono de tu tienda: {{$tienda->telefono}}</h5>
        </div>
    </div>  
</div>
@endsection