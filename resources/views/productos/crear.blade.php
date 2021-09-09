@extends('layouts.app')

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Agregar un nuevo producto:</h2>
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
                <form action="/productos" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Nombre">Nombre del producto:</label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Ahuyama" value="{{old('cajaNombre')}}">
                        <label for="Nombre">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Ahuyama Zapayo fresca por Libra" value="{{old('cajaDescripcion')}}">
                        <label for="Nombre">Categoria:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria" value="{{old('cajaCategoria')}}">
                            <option selected>Abrir este menú de selección</option>
                            <option value="Verduras">Verduras</option>
                            <option value="Frutas">Frutas</option>
                        </select>



                        <label for="Nombre">Unidad:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaUnidad" name="cajaUnidad" value="{{old('cajaCategoriaUnidad')}}">
                            <option selected>Abrir este menú de selección</option>
                            <option value="Libra">Libra</option>
                            <option value="Kilo">Kilo</option>
                            <option value="Unidad">Unidad</option>
                            <option value="Gramo">Gramo</option>
                            <option value="Manojo">Manojo</option>
                        </select>
                        <label for="Nombre">Precio:</label>
                        <input type="text" class="form-control" id="cajaPrecio" name="cajaPrecio" placeholder="2000" value="{{old('cajaPrecio')}}">
                        <label for="Nombre">¡Pon imagen!</label>
                        <input type="file" class="form-control" id="cajaImg" name="cajaImg" value="{{old('cajaImg')}}">
                                            
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                </form>
                            
            </div>
        </div><br>
        <a href="/" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>
@endsection