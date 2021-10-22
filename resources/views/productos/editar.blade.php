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
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                </svg>
                @if(session()->exists('message'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            {{session('message')}}
                        </div>
                    </div>
                @endif
                <form action="/productos/{{$productosM->id}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="Nombre">Nombre del producto:</label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Ahuyama" value="{{$productosM->nombrePro}}">
                        
                        <label for="Nombre">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Ahuyama Zapayo fresca por Libra" value="{{$productosM->descripcionPro}}">
                        
                        
                        <label for="Nombre">Categoria de tu tienda:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria" title="Recuerda que así podran más rápido tus productos en tu tienda">
                            <option value="">Abrir este menú de selección</option>
                                @foreach($cateTiendas as $cateTiendas)
                                    <option value="{{$cateTiendas->id}}">{{$cateTiendas->nombre}}</option>
                                @endforeach
                        </select>



                        <label for="Nombre">Unidad:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaUnidad" name="cajaUnidad" value="{{$productosM->unidadPro}}">
                            <option value="">Abrir este menú de selección</option>
                            <option value="Libra">Libra</option>
                            <option value="Kilo">Kilo</option>
                            <option value="Unidad">Unidad</option>
                            <option value="Gramo">Gramo</option>
                            <option value="Manojo">Manojo</option>
                        </select>

                        <label for="Nombre">Precio:</label>
                        <input type="text" class="form-control" id="cajaPrecio" name="cajaPrecio" placeholder="2000" value="{{$productosM->precioPro}}">
                        

                        <label for="Cantidad">¿Qué cantidad tienes para ofrecer?</label>
                        <input type="text" class="form-control" id="cajaCantidad" name="cajaCantidad" placeholder="50">


                        <label for="Nombre">Categoria:<p style="display: inline; color:red;font-size:15px;"> Recuerda que así podrán encontrar más rápido en AgroWeb</p></label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoriaAgro" name="cajaCategoriaAgro" title="Recuerda que así podran más rápido tus productos en tu tienda" >
                        <option value="">Abrir este menú de selección</option>
                            @foreach($categorias as $categorias)
                                <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
                            @endforeach
                        </select>         
                        <br>
                        <!-- Imagen -->
                        <label for="Imagen">¡Edita tu imagen!</label>
                            <div class="card" style="width: 350px;">
                            <script>
                                function init() {
                                    var inputFile = document.getElementById('cajaImg');
                                    inputFile.addEventListener('change', mostrarImagen, false);
                                }

                                function mostrarImagen(event) {
                                    var file = event.target.files[0];
                                    var reader = new FileReader();
                                    reader.onload = function(event) {
                                        var img = document.getElementById('img1');
                                        img.src= event.target.result;
                                    }
                                reader.readAsDataURL(file);
                                }

                                window.addEventListener('load', init, false);
                                
                                
                            </script>
                            <img id ="img1" src="/imagenes/productos/{{$productosM->imagen}}" class="card-img-top" alt="..." style="margin:40px; border: black 15px solid; border-radius: 10px;width:250px; height:250px;">
                                <br/>
                                <div class="card-body">
                                    <p class="card-text"><input type="file" class="form-control" id="cajaImg" name="cajaImg"></p>
                                </div>
                            </div>
                        <br>
                        <!-- cierre Imagen -->
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Guardar</button>
                </form>
                            
            </div>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>



@endsection