@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
<<<<<<< HEAD
            <h2>{{Auth::user()->name}}, se eliminará tu Tienda {{$eliminarT->nombreTienda}} permanentemente. ¿Estas segur@?</h2>
            <form action="/miTienda/{{Auth::user()->id}}" method="POST">
                @csrf   
                @method('delete')
                <input type="hidden"class="form-control" id="idEliminar" name="idEliminar"  value="{{$eliminarT->id}}" >
                <button href="/home" class="btn btn-outline-danger">Borrar</button><br><br>
            </form>

            <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>
@endsection 
=======
            <h2>Eliminar Mi Tienda:</h2>
                    <!-- Formulario -->     
                <form action="/categorias" method="post">
                        @csrf
                        @method('delete')
                        <div class="form-group">
                        <h2>{{Auth::user()->name}}, se eliminará tu Tienda {{$eliminarT->nombreTienda}} permanentemente. ¿Estas segur@?</h2>
                                <form action="/miTienda/{{Auth::user()->id}}" method="POST">
                                @csrf   
                                @method('delete')
                                <input type="hidden"class="form-control" id="idEliminar" name="idEliminar"  value="{{$eliminarT->id}}" >
                                <button href="/home" class="btn btn-outline-danger">Borrar</button><br><br>
                            </form>

            <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
        </div><br>
        
    </div>
</div>

@endsection
>>>>>>> 9b33cbcd6d1881c3aeb87487b90744275b633360
