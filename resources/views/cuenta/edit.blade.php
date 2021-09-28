@extends('layouts.app2')

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="/cuenta" class="btn btn-outline-success" disabled>Mi cuenta</a><br><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Mi tienda</a>
        </div>
        <div class="col-10">
            <h2>Editar perfil:</h2>
                            <form action="/cuenta/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                            @csrf   
                            @method('put')
                                <div class="form-group">
                                    <label for="Nombre">Digite nombre</label>
                                    <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="{{Auth::user()->name}}">
                                    <br>
                                </div>
                                <button class="btn btn-lg btn-primary" type="submit">Editar</button>
                            </form>
                            <br>
                        </div>
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
        
        </div>
    </div>  
</div>
@endsection