

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


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner" style="width: 90%;margin:0 auto">
          <div class="carousel-item active">
            <img src="Imagenes/banner1.png" class="d-block w-100" alt="Imagenes de naranjas">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/banner2.png" class="d-block w-100" alt="Imagens de berengenas">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/banner3.png" class="d-block w-100" alt="Campo cultivo">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/banner4.png" class="d-block w-100" alt="Imagenes de naranjas">
          </div>
          <div class="carousel-item">
            <img src="Imagenes/banner4.png" class="d-block w-100" alt="Imagenes de naranjas">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Vusta de los productos mas vendidos -->
    <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Productos mas vendidos</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="Imagenes/naranjas.jpg" alt="Naranjas" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Naranjas</h5>
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
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                            <img class="card-img-top" src="Imagenes/pera.jpg" alt="Peras" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Peras</h5>
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="Imagenes/papaya.jpg" alt="Papayas" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Papaya</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    $40.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb Bien\resources\views//home.blade.php ENDPATH**/ ?>