@extends('layouts.app2')
@section('url', __('/home'))

@section('content')
<div class="container">
    <div class=row>
        <div class=col>
            <h2>{{Auth::user()->name}}, se eliminará tu cuenta permanentemente. ¿Estas segu@?</h2>
            <form action="/cuenta/{{Auth::user()->id}}" method="POST">
                @csrf   
                @method('delete')
                <button href="/home" class="btn btn-outline-danger">Borrar</button><br><br>
            </form>

            <a href="{{ url()->previous() }}" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>
@endsection 