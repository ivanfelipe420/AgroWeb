@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Crear una tienda</h2>
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
                <form action="/miTienda" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <!-- Formulario -->
                    <div class="form-group">
                        <label for="nombre">Nombre de la tienda:</label>
                        <input type="text" class="form-control" id="cajaNombreT" name="cajaNombreT" placeholder="Tienda" value="{{old('cajaNombre')}}">
                        <label for="descripcion">Dueño:</label>
                        <input type="text" class="form-control" id="cajaDueñoT" name="cajaDueñoT" placeholder="Nombre del dueño" value="{{old('cajaDescripcion')}}">
                        <label for="descripcion">Telefono:</label>
                        <input type="text" class="form-control" id="cajaTelefonoT" name="cajaTelefonoT" placeholder="Telefono" value="{{old('cajaDescripcion')}}">
                        <label for="descripcion">Direccion:</label>
                        <input type="text" class="form-control" id="cajaDireccionT" name="cajaDireccionT" placeholder="Direccion" value="{{old('cajaDescripcion')}}">
                        <label for="descripcion">Email:</label>
                        <input type="text" class="form-control" id="cajaEmailT" name="cajaEmailT" placeholder="Email" value="{{old('cajaDescripcion')}}">               
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection