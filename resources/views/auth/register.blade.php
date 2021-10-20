@extends('auth.layouts.nav')

@section('content')
<div class="centrodiv">
    <form action="{{ route('register') }}" method="POST" id="form" >
    @csrf
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input type="text" name="name"  value="{{ old('name') }}" id="name" class="@error('name') is-invalid @enderror" required autocomplete="name" autofocus> <span class="barra"></span>
                <label for="name">{{ __('Nombre') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="grupo">
                <input type="email" name="email" id="name" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"> <span class="barra"></span>
                <label for="">{{ __('Correo electrónico') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="grupo">
                <input type="password" name="password" id="name" class="@error('password') is-invalid @enderror" required autocomplete="new-password"> <span class="barra"></span>
                <label for="password">{{ __('Contraseña') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="grupo">
                <input type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password"> <span class="barra"></span>
                <label for="password-confirm">Confirmar Contraseña</label>
                
            </div>
            
            <button type="submit" >
                {{ __('Registrarse') }}
            </button>
            <br>
                        @if (Route::has('register'))
                            <a  href="{{ route('login') }}">
                                {{ __('Inicia sesión') }}
                            </a>
                        @endif 
                        <br>
        </div>    
    </form> 
</div>


@endsection
