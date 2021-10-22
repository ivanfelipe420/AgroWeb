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

@section('content')
<div class="container" style="background:rgb(#4cbd7b); border-radius:5px; padding:50px;">
    <div class="row">
        <div>
            <form action="/productos/{{$proPromocion->id}}/updatePromo" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    El precio de <b style="color: black; font-size: 25px;">{{$proPromocion->nombrePro}}</b> Era <b style="color: green; font-size: 25px;">{{$proPromocion->precioPro}}</b>
                </p>
                <h5 for="PrecioNuevo">¿Qué precio le quieres poner ahora?</h5>
                <span class="input-group-text" style="width: 5%; margin: 5px;">$</span>
                <input type="text" class="form-control" id="cajaPromocion" name="cajaPromocion" 
                placeholder="Ingrese un valor menor al precio" style="width: 60%; margin: 30px;" required>
                <br>
                <button class="btn btn-lg btn-success" type="submit">Hecho</button>

                <div class="Container" style="background:rgb(#38c172); border-radius:100px; padding:100px;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasLabel"> Recomendaciones </h5>
                    </div>
                    <div class="offcanvas-body">
                    Por favor llenar la casilla como se debe o de lo contrario te enviara un error.
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection