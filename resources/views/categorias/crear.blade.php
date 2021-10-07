@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Agregar una nueva categoria:</h2>
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
                <form action="/categorias" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <!-- Formulario -->
                    <div class="form-group">
                        <label for="nombre">Nombre de la categoria:</label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Frutas" value="{{old('cajaNombre')}}">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Descripcion frutas" value="{{old('cajaDescripcion')}}">
                                                                    
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                </form>
                            
            </div>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>

@endsection