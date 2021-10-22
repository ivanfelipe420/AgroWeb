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

                @if(session()->exists('message'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            {{session('message')}}
                        </div>
                    </div>
                @endif
                
                
               
                <form action="/categorias" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <!-- Formulario -->
                    <div class="form-group">
                        <label for="nombre">Nombre de la categoria: <p style="display: inline; color:red;font-size:20px;">*</p></label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Frutas" required>
                                                                    
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                </form>
                            
            </div>
        </div><br>
        <a href="/miTienda/{{Auth::user()->id}}/miTienda" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>

@endsection