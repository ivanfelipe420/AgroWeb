@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>¿Qué categoria quieres editar o eliminar?</h2>
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
                <form action="/categorias" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Formulario -->
                    <div class="form-group">
                    <label for="Nombre">Categoria:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria" value="{{old('cajaCategoria')}}">
                            <option selected>Abrir este menú de selección</option>
                            @foreach($categorias as $categorias)
                                <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
                            @endforeach
                        </select>
                        <br>
                        
                            <a id="btnEditar" type="button" onclick="cambio();" style="background: rgb(115, 188, 200);border-radius: 10px;border: none;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                                Editar
                            </a>
                            <div id="cajaEditar" style="display: none">
                                <label for="editar">Nombre de la categoria:</label>
                                <input type="text" class="form-control" id="cajaCategorias" placeholder="Frutas" value="{{old('cajaCategorias')}}">
                            <br>
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
                        
                        

                        <a href="#" id="btnEliminar" style="display: block ;background: rgba(241, 35, 35, 0.753);border-radius: 10px;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                            Eliminar
                        </a>
                    </div>   
                </form>
                            
            </div>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>



@endsection