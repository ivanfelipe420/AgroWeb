@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
                <img src="/imagenes/productos/{{$Productos->imagen}}"  alt="{{$Productos->nombrePro}}" class="img-fluid" height="60%" width="60%"> 
        </div>
        <div class="col-5">
            <h1>{{$Productos->nombrePro}}</h1>
            <h4>${{$Productos->precioPro}} x {{$Productos->unidadPro}}</h4>
            <br>
            <p>{{$Productos->descripcionPro}}</p>
            <br><br>
            <form action="/productos" method="POST" enctype="multipart/form-data">
                    @csrf
                <button class="btn btn-lg btn-primary" type="submit">¡Añadir al carrito!</button>
            </form><br>
            <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
        </div>
        <div class="col-2">
        <a href="/productos/{{$Productos->id}}/edit" style="background: rgb(115, 188, 200);border-radius: 10px;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                Editar
            </a>
        </div>
    </div>  
</div>
@endsection