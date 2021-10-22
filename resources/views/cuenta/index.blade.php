@extends('layouts.app')
@section('url', __('/home'))
@section('css', __(' href=css/formularios.css  rel=stylesheet'))
@section('content')

<div class="container">
    <div class="row">
        <div class="col-2" >
            <div class="list-group">
                <li type="Text" >
                    Opciones:
                </li>
                <br>
                <li type="" class="list-group-item list-group-item-action" disabled="disabled">
                    <a href="" class="list-group-item list-group-item-action" disabled>Mi cuenta</a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/infoTienda/{{$tienda}}" class="list-group-item list-group-item-action" disabled>Mi tienda</a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/cuenta/{{Auth::user()->id}}/edit" class="list-group-item list-group-item-action" disabled>Editar</a></li>
                <li type="button" class="list-group-item list-group-item-action">
                    <a href="/cuenta/{{Auth::user()->id}}/confirmEli" class="list-group-item list-group-item-action" disabled>Eliminar cuenta</a></li>
            </div>
        </div>

        <div class="col-10">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Informacion basica:
                </button>
                    <li type="" class="list-group-item list-group-item-action" disabled="disabled">Nombre: {{Auth::user()->name}}</li>
                    <li type="button" class="list-group-item list-group-item-action">Correo: {{Auth::user()->email}}</li>
  
                <?php
                    $telefono=Auth::user()->telefono;
                    if ($telefono==NULL) {
                        echo "<li type='button' class='list-group-item list-group-item-action'>A fourth button item</li>";
                    }else{
                        echo "<li type='button' class='list-group-item list-group-item-action'>Telefono: $telefono</li>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
@endsection 


