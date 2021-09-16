@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">productos</th>
      <th scope="col">Precio</th>
      <th scope="col">cantidad</th>
      <th scoxpe="col">img</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>manzanas</td>
      <td>5.200</td>
      <td>2 lb</td>
      <td><img src="Imagenes/manzana.jpg" width="50px" height="50px"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>papaya</td>
      <td>3.700</td>
      <td>1 und</td>
      <td><img src="Imagenes/papaya.jpg" width="50px" height="50px"></td>
    </tr>
     </table>
    
</div>
<form>
<div><button class="btn btn-outline-light" type="submit" >Finalizar compra</button>
</form> 
</div>

@endsection