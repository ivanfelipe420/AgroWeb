@extends('layouts.app2')
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

<div>
<p>
    El precio de <b style="color: blue;">{{$proPromocion->nombrePro}}</b> era <b style="color: blue;">{{$proPromocion->precioPro}}</b>
</p>
<label for="PrecioNuevo">¿Qué precio le quieres poner ahora?</label>
<input type="text" class="form-control" id="cajaPromocion" name="cajaPromocion" placeholder="100" style="width: 60%; margin: 30px;">
</div>



@endsection