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
<div class="content">
                <div class=row>
                     <div class="col">
                         <h2>Categorias</h2>
                         <table class="table table-striped table-hover">
                             <tr> 
                                 <th>Id</th> 
                                 <th>Nombre de la categoria</th>
                                 <th>Opcion 1</th>
                                 <th>Opicon 2</th>
                                 <th>Opicon 3</th>
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
                         <a href="/categorias/create" class="btn btn-success">Crear categoria</a> 
                     </div>
                </div>
    <script>
                            var num=0;

                            function mostrar(){
                                    document.getElementById('cajaEditar').style.display = 'block';
                                    document.getElementById("btnEditar").innerHTML = "Ocultar";
                                    document.getElementById('btnEliminar').style.display = 'none';
                                    num=1;}
                            function ocultar(){
                                    document.getElementById('cajaEditar').style.display = 'none';
                                    document.getElementById("btnEditar").innerHTML = "Editar";
                                    document.getElementById('btnEliminar').style = 'display: block ;background: rgba(241, 35, 35, 0.753);border-radius: 10px;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;';
                                    num=0;
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