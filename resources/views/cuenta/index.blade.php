@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container" style="background:rgb(240, 240, 193); border-radius:5px; padding:10px;">
    <div class="row">
        <div class="col-2">
            <a href="" class="btn btn-outline-success" disabled>Mi cuenta</a><br><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Mi tienda</a>
        </div>
        <div class="col-10">
            <h2>Informacion basica:</h2>
            <h5>{{Auth::user()->name}}</h5>
            <h2>Informacion de contacto</h2>
            <h5>Correo: {{Auth::user()->email}}</h5>
            
            <h5 id="telefono">
            <?php
                $telefono=Auth::user()->telefono;
                if ($telefono==NULL) {
                    echo "No tienes un telefono agregado";
                }else{
                    echo "Telefono: " ,$telefono;
                }
            ?>
            </h5>
            <a href="/cuenta/{{Auth::user()->id}}/edit" class="btn btn-outline-success" disabled>Editar</a>
            <a href="/cuenta/{{Auth::user()->id}}/confirmEli" class="btn btn-outline-success" disabled>Eliminar mi cuenta</a>
        </div>
    </div>  
</div>
@endsection 