@extends('auth.layouts.nav')

@section('content')

<div class="container">
    <div class="centrodiv">
        <form action="{{ route('login') }}" method="POST" id="form" >
        @csrf
            <div class="form">
                <h1>Ingresar</h1>
                    
                <div class="grupo">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <span class="barra"></span>
                    <label for="email">{{ __('Correo') }}</label>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="grupo">
                    <input id="pasword" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> <span class="barra"></span>
                    <label for="password">{{ __('Contraseña') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="grupo">           
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexCheckDefault" id="remember">
                            {{ __('Recuerdame') }}
                        </label>
                    </div>         
                </div>


                <div class="grupo">  
                    <button type="submit">{{ __('Iniciar sesión') }}</button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                </div>
        </form>
    </div>
</div>

@endsection
