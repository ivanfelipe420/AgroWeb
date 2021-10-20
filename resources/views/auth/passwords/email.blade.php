@extends('auth.layouts.nav')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="centrodiv">
    <form action="" method="POST" id="form">
    @csrf
        <div class="form">
        <div class="grupo">
            <h4>Recuperar Contraseña</h4>
            <br>
            <h5>Ingrese su dirección de correo electrónico a continuación</h5> 
            <h5>y le enviaremos un enlace para restablecer su contraseña.</h5>
        </div>
            <hr class="dropdown-divider">
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
            <button type="submit">{{ __('Cambiar Contraseña') }}</button>
            @if (Route::has('password.request'))
                            <a  href="{{ route('login') }}">
                                {{ __('Inicia sesión') }}
                            </a>
                        @endif
                        <br>
                        @if (Route::has('register'))
                            <a  href="{{ route('register') }}">
                                {{ __('Crea una Cuenta') }}
                            </a>
                        @endif
        </div>
        </div>
    </form>
</div>
@endsection
