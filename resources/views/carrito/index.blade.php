@extends('layouts.app')
<?php
  $i=0;
    $var="";
    if(Auth::check()){ //preguntar si esta logueado. Si si esta logueado lo mando a home
        $var="/home";
    }else{ //sino esta logueado siguene en el index
        $var="/";
    }
?>
@section('url', __($var))

@section('content')
<?php
if (count($productos) <= 0) {
?>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita alguna tienda para agregar productos a tu carrito
                </h2>
                <a href="/productos">Ver tienda</a>
            </div>
        </div>
    </section>
<?php } else { ?>
<div class="container">
<table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">productos</th>
      <th scope="col">Precio</th>
      <th scoxpe="col">img</th>
      <th scoxpe="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $total = 0;
    foreach($productos as $productos){
      $i=$i+1;
    $total += $productos->precioPro;
  ?>
    <tr>
      <th scope="row">{{$productos->id}}</th>
      <td>{{$productos -> nombrePro}}</td>
      <td>${{$productos -> precioPro}}x {{$productos->unidadPro}}</td>
      <td><img src="/imagenes/productos/{{$productos->imagen}}" width="80px" height="80px"></td>
      <td><form action="/eliminarCarrito" method="POST" enctype="multipart/form-data">
                          @csrf   
                          <input type="hidden" name="id_producto" value="{{$productos->id}}">
               
                            <button class="btn btn-danger">
                              🗑️
                            </button>
                    
                      
                          </form></td>
                    <td>       
                        <button type="button" class="btn btn-light" onclick="sumar({{$i}});">
                            <img src="/imagenes/sumar.ico" width="30px" height="30px"></button>
                          <input type="text" name="numerito{{$i}}" id="numerito{{$i}}" value="1">
                            <button type="button" class="btn btn-black" onclick="restar({{$i}});">
                            <img src="/imagenes/restar.ico" width="30px" height="30px"></button>
                    </td>
    </tr>
    <?php } ?>
        </tbody>
      <tfoot>
        <tr>
          <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
          <td colspan="2" class="is-size-4">
            $<?php echo number_format($total, 2) ?>
          </td>
        </tr>
      </tfoot>
     </table>
  
  <a href="/" class="btn btn-success">Terminar compra</a>

  </div>
</div>
<?php } ?>
<script  type="text/javascript" src="{{ asset('js/boton.js') }}"></script>
        
</script>

@endsection