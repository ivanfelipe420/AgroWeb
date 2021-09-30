@extends('errors.nav')
@section('title', __('Page Not Found | AgroWeb'))

@section('content')
<div>
    <!-- Div izquierdo -->
        <div style="margin: 20px;width: 60%;float: left;">
            <div style="color: grey; font-family: 'Nunito' ;font-size:50px; padding: 0px 20px;">
                <b style="color: #5086c1">¡Ups!</b> página <b style="color: #5086c1">NO</b> encontrada
            </div>
            
            <div class="text-5xl md:text-15xl" style="color: #5086c1; padding: 0px 20px;">
                <img src="/Imagenes/404AgroWeb.png" alt="error404" title="404">       
            </div>
        </div>
        <!-- cierre Div izquierdo -->
        <!-- Div derecho -->
        <div style="width: 30%;float: left;margin: 100px 0;">
            <p style="color: grey; font-family: 'Nunito' ;font-size:20px;">La página que estabas buscando no existe. Tal vez llegaste a esta página porque:</p>
            <div style="color:rgb(73, 73, 73);font-family: 'Nunito'; font-size: 20px;">
            <br>
                <ul>
                    <li>Hemos movido la página</li>
                    <li>La página fue eliminada</li>
                    <li>Ingresaste una URL incorrecta</li>
                    <li>Te gustan las páginas 404</li>
                </ul>
            </div>
            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                <button class=" text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg" style="background: rgb(115, 188, 200)">
                    Inicio
                </button>
            </a>
        </div>
        
        <!-- cierre Div derecho -->

</div>


@endsection

