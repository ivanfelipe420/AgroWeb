@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="" class="btn btn-outline-success" disabled>Mi cuentaa</a><br><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Mi tienda</a>
        </div>
        <div class="col-10">
            <h2>Informacion basica:</h2>
            <h5>{{Auth::user()->name}}</h5>
            <h2>Informacion de contacto</h2>
            <h5>{{Auth::user()->email}}</h5>
            <a href="/cuenta/{{Auth::user()->id}}/edit" class="btn btn-outline-success" disabled>Editar</a>
            <a href="/cuenta/{{Auth::user()->id}}/confirmEli" class="btn btn-outline-success" disabled>Eliminar mi cuenta</a>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
        </div>
    </div>  
</div>
@endsection