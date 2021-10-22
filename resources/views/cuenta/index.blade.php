@extends('layouts.app')
@section('url', __('/home'))
@section('css', __(' href=css/formularios.css  rel=stylesheet'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2" >
            <div class="list-group">
                <li >
                    Opciones:
                </li>
                <br>
                <li type="" class="list-group-item list-group-item-action" disabled="disabled">
                    <a href="" class="list-group-item list-group-item-action" disabled> Mi cuenta </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/infoTienda/{{$tienda}}" class="list-group-item list-group-item-action" disabled> Mi tienda </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/cuenta/{{Auth::user()->id}}/edit" class="list-group-item list-group-item-action" disabled> Editar </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/cuenta/{{Auth::user()->id}}/confirmEli" class="list-group-item list-group-item-action" disabled> Eliminar cuenta </a></li>
                <hr>
                <li >
                    Opciones Tienda:
                </li>
                <br>
                <li type="" class="list-group-item list-group-item-action" disabled="disabled">
                    <a href="/infoTienda/{{$tienda}}" class="list-group-item list-group-item-action" disabled> Mi Tienda </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="" class="list-group-item list-group-item-action" disabled> Mi Cuenta </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/miTienda/{{Auth::user()->id}}/edit" class="list-group-item list-group-item-action" disabled> Editar Tienda </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/miTienda/{{Auth::user()->id}}/eliminar" class="list-group-item list-group-item-action" disabled> Eliminar Tienda </a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/miTienda/{{Auth::user()->id}}/miTienda" class="list-group-item list-group-item-action" disabled> ¡Ir a mi tienda! </a></li>
            </div>

        </div>