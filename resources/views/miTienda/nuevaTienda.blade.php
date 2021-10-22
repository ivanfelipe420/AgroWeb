@extends('layouts.app')
<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\carritoController;
use App\Http\Controllers\tiendaControlador;
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))

@section('content')
<p>Hola Crea tu tienda</p>

@endsection