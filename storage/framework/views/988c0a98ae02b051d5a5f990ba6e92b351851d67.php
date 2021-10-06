

<?php $__env->startSection('content'); ?>
<!-- Botones para subir productos -->
<div class="container">
<form action="/productos/create">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Crear Producto')): ?>
    <button class="btn btn-outline-dark" type="submit">
        Subir productos
    </button>
    <?php endif; ?>
</form> 
<form action="/productos">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Crear Producto')): ?>
    <button class="btn btn-outline-dark" type="submit">
        Productos
    </button> 
    <?php endif; ?>
</form> 
<!-- <form action="/categorias/create">
    <button class="btn btn-outline-dark" type="submit">
        Crear Categorias
    </button>
</form>
<form action="/categorias/{categoriasM->id}/edit">
    <button class="btn btn-outline-dark" type="submit">
        Editar Categorias
    </button>
</form>
<form action="/categorias/{eliminarC->id}/eliminar">
    <button class="btn btn-outline-dark" type="submit">
        Eliminar Categorias
    </button>
</form>  -->
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div> -->

<!--carrusel-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Vusta de los productos mas vendidos -->
    <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">¡Vamos, echa un vistazo!</h2>
                <!-- produto -->
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- producto -->
                
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                    <div class="col mb-5">
                        <div class="card h-100">
                            <a href="/productos/<?php echo e($productos->id); ?>">
                            <img class="card-img-top" src="imagenes/productos/<?php echo e($productos->imagen); ?>" alt="<?php echo e($productos->nombrePro); ?>" title="<?php echo e($productos->nombrePro); ?> de tiendaPepito">
                            </a>
                            <div class="card-body p-4">
                                <div class="text-center" >
                                    <a href="/productos/<?php echo e($productos->id); ?>" style="text-decoration: none; color:black">
                                        <h5 class="fw-bolder"><?php echo e($productos->nombrePro); ?></h5>
                                        $<?php echo e($productos->precioPro); ?> x <?php echo e($productos->unidadPro); ?>

                                    </a> 
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    <!-- div en ofertaaaaa
                        <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                            <img class="card-img-top" src="Imagenes/manzana.jpg" alt="Manzanas" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Manzanas</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </section>
        <!-- segundo carrusel info -->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Imagenes/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Imagenes/banner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Imagenes/banner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
</section>

<!-- Vusta de los productos mas vendidos -->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4"> Productos en Oferta </h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="" alt="" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> Producto </h5>
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Descuento </div>
                            <img class="card-img-top" src="" alt="" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> Producto </h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">$30.00</span>
                                    $15.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Descuento </div>
                            <img class="card-img-top" src="" alt="" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> Producto </h5>
                                    <span class="text-muted text-decoration-line-through">$70.00</span>
                                    $45.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="" alt="" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"> Producto </h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    $60.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Border-radius categorias -->
            <div class="container px-4 px-lg-5 mt-5">
            <h4> Categorias Destacadas </h4>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/verdurasico.ico" alt="Verduras"><br> Verduras </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/Frutasico.ico" alt="Fruras"><br> Frutas </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/carnes.ico" alt="Carnes"><br> Carnes </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="..." alt="..."><br> Cereales </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="..." alt="..."><br> Hortalizas </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="..." alt="..."><br> Granos </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="..." alt="..."><br> Tubérculos </a>
        </div>

        <!-- Border-radius tiendas -->
        <div class="container px-4 px-lg-5 mt-5">
            <h4> Tiendas mas buscadas </h4>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        <a type="Button" class="btn btn-light" href="contactos.html" ><img src="Imagenes/tienda.ico" alt="Tienda"><br> Tienda </a>
        </div>
        </section>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/home.blade.php ENDPATH**/ ?>