@extends('layouts.app')

@section('content')
  
<section >

    <div class="row justify-content-end">
    @foreach($Productos as $Productos)
        <div class="col-2">
            <img width="100%" height="100%" src="imagenes/productos/{{$Productos->imagen}}" class="rounded float-end img-thumbnail img-fluid" alt="...">
            <div class="card-body">
                    <h4 class="card-text text-center">{{$Productos->nombrePro}}</h4>
                    <p class="card-text text-center">{{$Productos->precioPro}} x {{$Productos->unidadPro}}</p>
                    <a href="/" class="btn btn-lg btn-primary text-center" disabled>¡Al carrito!</a>
            </div>    
        </div>
        @endforeach 
    </div>
   
</section>


@endsection