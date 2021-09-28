@extends('layouts.app')
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
                                  <td><a class="btn btn-outline-danger" href="/categorias/{$categoriasM->id}/edit">Editar</a></td>
                                  <td><a class="btn btn-outline-info" href="/categorias/{$eliminarC->id}/eliminar">Eliminar</a></td>
                              </tr>
                             @endforeach 
                         </table>
                         <a href="/categorias/create" class="btn btn-success">Crear categoria</a> 
                     </div>
                </div>
            </div>
@endsection