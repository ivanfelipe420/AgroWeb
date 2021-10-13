@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Eliminar categoria:</h2>
                    <!-- Formulario -->     
                <form action="/categorias" method="post">
                        @csrf
                        @method('delete')
                        <div class="form-group">
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria" value="{{old('cajaCategoria')}}">
                            <option selected>Abrir este menú de selección</option>
                             @foreach($categorias as $categorias)
                                <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
                            @endforeach
                        </select>
                    
                    <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
           <button  type="submit" style="display: block ;background: rgba(241, 35, 35, 0.753);border-radius: 10px;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
           eliminar</button>
                </form>
        </div><br>
        
    </div>
</div>

@endsection