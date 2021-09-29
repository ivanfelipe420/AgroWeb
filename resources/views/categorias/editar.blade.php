@extends('layouts.app2')

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Editar una categoria:</h2>
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
                            @foreach($categoriasM as $categoriasM)
                                <option value="{{$categoriasM->id}}">{{$categoriasM->nombre}}</option>
                            @endforeach
                        </select>
                    </div>   
                </form>
                            
            </div>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>



@endsection