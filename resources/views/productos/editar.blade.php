@extends('layouts.app2')
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
            <h2>Editar {{$productosM->nombrePro}}:</h2>
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
                <form action="/productos/{{$productosM->id}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="Nombre">Nombre del producto:</label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Ahuyama" value="{{$productosM->nombrePro}}"required>
                        <label for="Nombre">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Ahuyama Zapayo fresca por Libra" value="{{$productosM->descripcionPro}}"required>
                        
                        
                        <label for="Nombre">Categoria:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria"  value="{{$productosM->categorias_id}}"required>
                        <option value="">Abrir este menú de selección</option>
                        @foreach($categorias as $categorias)
                                <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
                            @endforeach
                        </select>



                        <label for="Nombre">Unidad:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaUnidad" name="cajaUnidad" value="{{$productosM->unidadPro}}"required>
                            <option value="">Abrir este menú de selección</option>
                            <option value="Libra">Libra</option>
                            <option value="Kilo">Kilo</option>
                            <option value="Unidad">Unidad</option>
                            <option value="Gramo">Gramo</option>
                            <option value="Manojo">Manojo</option>
                        </select>
                        <label for="Nombre">Precio:</label>
                        <input type="text" class="form-control" id="cajaPrecio" name="cajaPrecio" placeholder="2000" value="{{$productosM->precioPro}}"required>
                        <br>
                        <div class="card" style="width: 350px;">
                            <img src="/imagenes/productos/{{$productosM->imagen}}" class="card-img-top" alt="..." style="margin:40px; border: black 15px solid; border-radius: 10px;width:250px; height:250px;">
                            <div class="card-body">
                                <p class="card-text"><input type="file" class="form-control" id="cajaImg" name="cajaImg" value="{{$productosM->imagen}}" required></p>
                            </div>
                        </div>
                            
                                     
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Guardar</button>
                </form>
                            
            </div>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>



@endsection