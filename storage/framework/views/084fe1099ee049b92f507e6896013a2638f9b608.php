

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
                <img src="/imagenes/productos/<?php echo e($Productos->imagen); ?>"  alt="<?php echo e($Productos->nombrePro); ?>" class="img-fluid" height="60%" width="60%"> 
        </div>
        <div class="col-6">
            <h1><?php echo e($Productos->nombrePro); ?></h1>
            <h4>$<?php echo e($Productos->precioPro); ?> x <?php echo e($Productos->unidadPro); ?></h4>
            <br>
            <p><?php echo e($Productos->descripcionPro); ?></p>
            <br><br>
            <form action="/productos" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <button class="btn btn-lg btn-primary" type="submit">¡Añadir al carrito!</button>
            </form><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Atras</a>
        </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb Bien\resources\views/productos/show.blade.php ENDPATH**/ ?>