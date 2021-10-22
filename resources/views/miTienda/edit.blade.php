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
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Editar {{$tienda->nombreTienda}}:</h2>
                @if($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  
                <form action="/miTienda/{{$tienda->id}}" method="POST" enctype="multipart/form-data">
                @method('patch')

                    @csrf
                    <div class="form-group">
                    <div class="form-group">
                        <label for="nombre">Nombre de la tienda:</label>
                        <input type="text" class="form-control" id="cajaNombreTE" name="cajaNombreTE" placeholder="Tienda" value="{{$tienda->nombreTienda}}"required>
                        <label for="descripcion">Dueño:</label>
                        <input type="text" class="form-control" id="cajaDueñoTE" name="cajaDueñoTE" placeholder="Nombre del dueño" value="{{$tienda->nombrePropietario}}"required>
                        <label for="descripcion">Telefono:</label>
                        <input type="text" class="form-control" id="cajaTelefonoTE" name="cajaTelefonoTE" placeholder="Telefono" value="{{$tienda->telefono}}"required>
                        <label for="descripcion">Direccion:</label>
                        <input type="text" class="form-control" id="cajaDireccionTE" name="cajaDireccionTE" placeholder="Direccion" value="{{$tienda->direccion}}"required>
                        <label for="descripcion">Email:</label>
                        <input type="text" class="form-control" id="cajaEmailT" name="cajaEmailT" placeholder="Email" value="{{$tienda->email}}"required>     
                        
                        <input type="hidden" class="form-control" id="cajaidtiendausuario" name="cajaidtiendausuario" placeholder="id usuario" value="{{Auth::user()->id}}" readonly>   
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Guardar</button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>

                </form>
                            
            </div>
        </div><br>
    </div>
</div>



@endsection