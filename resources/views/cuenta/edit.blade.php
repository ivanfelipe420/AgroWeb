@extends('layouts.app2')
@section('url', __('/home'))

@section('content') 
<!--opciones-->
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
            <h2>Editar perfil:</h2>
                <form action="/cuenta/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                    @csrf   
                        @method('put')
                        <div class="form-group">
                            <label for="Nombre">Digite nombre</label>
                            <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" value="{{Auth::user()->name}}">
                                <br>
                            <label for="telefono">Digite telefono</label>
                            <input type="text" class="form-control" id="cajaTelefono" name="cajaTelefono" value="{{Auth::user()->telefono}}">
                        </div>
                        <br>
                    <button class="btn btn-lg btn-primary" type="submit">Editar</button>
                </form>
            <br>
        </div>
    </div>  
</div>
@endsection