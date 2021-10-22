@extends('layouts.app')
<?php
    $i=0;
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))

@section ('content') 
<div class="content" style="margin-left: 100px; margin-right: 100px">
                <div class=row>
                     <div class="col">
                         <h2>Categorias</h2>
                         <table class="table table-striped table-hover">
                             <tr> 
                                 <th>Id</th> 
                                 <th>Nombre de la categoria</th>
                                 <th>Editar</th>
                                 <th>Eiliminar</th>
                             </tr>  
                             @foreach($Categorias as $Categorias)
                             <?php

                                 $i=$i+1;
                             ?>
                              <tr>
                                  <td>{{$Categorias->id}}</td>
                                  <td>{{$Categorias->nombre}}</td>
                                  <td>
                                    <a id="btnEditar{{$i}}" type="button" class="btn btn-danger" onclick="cambio({{$i}});" >
                                            Editar
                                    </a>
                                        <form action="/categorias/{{$Categorias->id}}/editar">
                                            @method('put')
                                            @csrf
                                                <div id="cajaEditar{{$i}}" style="display: none">
                                                    <label for="Nombre">Nombre nuevo de la categoria:</label>
                                                    <input style="display: inline;" type="text" class="form-control" id="cajaCategorias" name="cajaCategorias" placeholder="Frutas" value=""required>
                                                
                                            
                                                <button class="btn btn-primary" type="Submit">Hecho</button>
                                                </div>
                                        </form>
                                    </td>
                                  <td>
                                    <form action="/categorias/{{$Categorias->id}}/eliminar">
                                        @csrf
                                            <button class="btn btn-danger">
                                            🗑️
                                            </button>
                                        </form>
                                    </td>
                              </tr>
                             @endforeach 
                         </table>
                         <a href="/categorias/create" class="btn btn-outline-success">Crear categoria</a>
                         <a href="/miTienda/{{Auth::user()->id}}/miTienda" class="btn btn-outline-success" disabled>Atras</a>
                     </div>
                </div
</div>
<script src="{{ asset('js/indexCate.js') }}"></script>
@endsection