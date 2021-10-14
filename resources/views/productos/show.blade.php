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

                <a class="btn btn-lg btn-primary" type="submit">¡Añadir al carrito!</a>
            <br><br>
            <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
        </div>
        <div class="col-2">
        <a href="/productos/{{$Productos->id}}/edit" style="background: rgb(115, 188, 200);border-radius: 10px;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                Editar
            </a><br><br>
            <a href="/productos/{{$Productos->id}}/promocion" style="background: green;border-radius: 10px;text-align: center;text-decoration: none;display: inline-block;font-size: 20px;color:white;">
                ¡Poner en promoción!
        </a><br><br>
            <form action="/productos/{{$Productos->id}}/quitarPromo" method="POST" enctype="multipart/form-data">
            @csrf
            <button style="background: red;border-radius: 10px;text-align: center;text-decoration: none;display: inline-block;font-size: 20px;color:white;">
                ¡Quitar promoción!
            </button>
            </form>
            <br><br>
            <form action="/productos/{{$Productos->id}}" method="POST">
            @csrf
            @method('delete')
            <button type="button"  style="background:red;border-radius: 10px;border:none;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">Eliminar</button>
        </form>
        </div>
    
</div>
@endsection