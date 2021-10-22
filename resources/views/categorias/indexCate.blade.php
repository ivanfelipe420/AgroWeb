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
                              <tr>
                                  <td>{{$Categorias->id}}</td>
                                  <td>{{$Categorias->nombre}}</td>
                                  <td>
                                    <a id="btnEditar" type="button" class="btn btn-danger" onclick="cambio();" >
                                            Editar
                                    </a>
                                        <form action="/categorias/{{$Categorias->id}}/editar">
                                            @method('put')
                                            @csrf
                                                <div id="cajaEditar" style="display: none">
                                                    <label for="Nombre">Nombre nuevo de la categoria:</label>
                                                    <input type="text" class="form-control" id="cajaCategorias" name="cajaCategorias" placeholder="Frutas" value=""required>
                                                <br>
                                            
                                                <button class="btn btn-danger" type="Submit">Hecho</button>
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
                </div>
    <script>
                            var num=0;

                            function mostrar(){
                                    num=1;
                                    document.getElementById('cajaEditar').style.display = 'block';
                                    document.getElementById("btnEditar").innerHTML = "Ocultar";
                                    }
                            function ocultar(){
                                    num=0;
                                    document.getElementById('cajaEditar').style.display = 'none';
                                    document.getElementById("btnEditar").innerHTML = "Editar";
                            }
                            function cambio(){
                                if(num==0){
                                    mostrar();
                                }else{
                                    ocultar();
                                }
                            }
                        </script>
</div>
@endsection