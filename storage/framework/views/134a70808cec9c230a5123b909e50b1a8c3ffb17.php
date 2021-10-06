<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
  
   
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
    crossorigin="anonymous">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link  href="<?php echo e(asset('css/pushbar.css')); ?>" rel="stylesheet">
    <link  href="<?php echo e(asset('css/botones.css')); ?>" rel="stylesheet">
    <link  href="<?php echo e(asset('app/pushbar.css')); ?>" rel="stylesheet">
    <link  href="<?php echo e(asset('css/estiloRegistrer.css')); ?>" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcun icon" type="imagen/x-icon" href="/Imagenes/logos.ico">

    <title>AgroWeb</title>

    <!-------------------------------------------------------------------  -->
    <link  href="<?php echo e(asset('css/estiloRegistrer.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Encabezado -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
             <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/Imagenes/logos.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    AgroWeb
                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
                    <!-- Lado izquierdo de la barra de navegación -->


                <!-- <ul class="navbar-nav ml-auto">
                  <div> 
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                  &nbsp;&nbsp;&nbsp;
                </ul>   -->   
                
                
            <form class="d-flex" > 
                <button class="btn btn-outline-dark" data-pushbar-target="pushbar-carrito">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/carrito.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </button>
            </form>
            &nbsp;&nbsp;&nbsp;
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
              <?php if(Route::has('login')): ?>
                                
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Ingresar')); ?></a>
                                
              <?php endif; ?>

              <?php if(Route::has('register')): ?>
                                
              <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                                
              <?php endif; ?>
              <?php else: ?>
                <a class="btn btn-outline-dark" href="/cuenta">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/user.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </a>    
                &nbsp;&nbsp;&nbsp;        
                <a class="btn btn-outline-dark" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bi-cart-fill me-1">
                        <img src="/Imagenes/salir.svg" alt="">
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </i>
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
                </form>           
            <?php endif; ?>
            <!-- Salir Authentication Links -->
        </nav>
<!-- Fin del nav Encabezado -->


<!-- carrusel-->

<!--cierre carrusel-->



        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <!-- Carrito de compras -->
    <div  class="pushbar-carrito" data-pushbar-id="pushbar-carrito"  data-pushbar-direction="right">
			<h1>CARRITO DE COMPRAS</h1>
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
      <td>@2  lb</td>
      <td><img src="Imagenes/manzana.jpg" width="50px" height="50px"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
            </table>
            <form action="carrito">
                <button class="btn btn-outline-light" type="submit" >Finalizar compra</button>
            </form>
	</div>
    
       <!--boton depegable -->
       <!--boton flotante derecha -->
       <form class="botonDespe">
       <button id="boton1" type="button" class="btn btn-outline-success" data-pushbar-target="pushbar-carrito">
           <img src="/Imagenes/carrito.svg" alt=""></button>
      </form> 

    
    <script  type="text/javascript" src="<?php echo e(asset('js/pushbar.js')); ?>"></script>
        <script src="Js/pushbar.js"></script>
        <script type="text/javascript">const pushbar = new Pushbar({blur:true,overlay:true,});	</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/layouts/app2.blade.php ENDPATH**/ ?>