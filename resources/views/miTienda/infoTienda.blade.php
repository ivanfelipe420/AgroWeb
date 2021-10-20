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
                <li type="" class="list-group-item list-group-item-action" disabled="disabled">{{$tienda->nombrePropietario}}</li>
            <h2>Dirección de tu tienda:</h2>
                <li type="" class="list-group-item list-group-item-action" disabled="disabled">{{$tienda->direccion}}</li>
            <h2>Informacion de contacto</h2>
                <li type="" class="list-group-item list-group-item-action" disabled="disabled">Correo de tu tienda: {{$tienda->direccion}}</li>
                <li id="telefono" type="" class="list-group-item list-group-item-action" disabled="disabled">Telefono de tu tienda: {{$tienda->telefono}}</li>
        </div>
    </div>  
</div>
@endsection