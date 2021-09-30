@extends('layouts.app2')

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
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Ahuyama" value="{{old('cajaNombre')}}">
                        <label for="Nombre">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Ahuyama Zapayo fresca por Libra" value="{{old('cajaDescripcion')}}">
                        
                        
                        <label for="Nombre">Categoria:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria"  value="{{old('cajaCategoria')}}">
                            @foreach($categorias as $categorias)
                                <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
                            @endforeach
                        </select>



                        <label for="Nombre">Unidad:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaUnidad" name="cajaUnidad" value="{{old('cajaCategoriaUnidad')}}">
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
                    <button class="btn btn-lg btn-primary" type="submit">Guardar</button>
                </form>
                            
            </div>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>



@endsection