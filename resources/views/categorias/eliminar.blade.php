@extends('layouts.app2')
  
@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Eliminar categoria:</h2>
                    <!-- Formulario -->
                    <form action="/categorias" method="POST">
                        @csrf
                        @method('delete')
                    <button class="btn btn-lg btn-primary" type="submit">eliminar</button>
                </form>
        </div><br>
        <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>

@endsection