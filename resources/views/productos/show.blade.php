@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
                <img src="/imagenes/productos/{{$Productos->imagen}}"  alt="{{$Productos->nombrePro}}" class="img-fluid" height="60%" width="60%"> 
        </div>
        <div class="col-6">
            <h1>{{$Productos->nombrePro}}</h1>
            <h4>${{$Productos->precioPro}} x {{$Productos->unidadPro}}</h4>
            <br>
            <p>{{$Productos->descripcionPro}}</p>
            <br><br>
            <form action="/productos" method="POST" enctype="multipart/form-data">
                    @csrf
                <button class="btn btn-lg btn-primary" type="submit">¡Añadir al carrito!</button>
            </form><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Atras</a>
        </div>
        
    
</div>
@endsection