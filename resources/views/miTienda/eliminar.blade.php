@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
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