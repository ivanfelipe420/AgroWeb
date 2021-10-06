

<?php $__env->startSection('content'); ?>
<div class="container" style="background:white">
    <div class="row">
        <div class="col-5">
                <img src="/imagenes/productos/<?php echo e($Productos->imagen); ?>"  alt="<?php echo e($Productos->nombrePro); ?>" class="img-fluid" height="60%" width="60%"> 
        </div>
        <div class="col-5">
            <h1><?php echo e($Productos->nombrePro); ?></h1>
            <h4>$<?php echo e($Productos->precioPro); ?> x <?php echo e($Productos->unidadPro); ?></h4>
            <br>
            <p><?php echo e($Productos->descripcionPro); ?></p>
            <br><br>

                <a class="btn btn-lg btn-primary" type="submit">¡Añadir al carrito!</a>
            <br><br>
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-success" disabled>Atras</a>
        </div>
        <div class="col-2">
        <a href="/productos/<?php echo e($Productos->id); ?>/edit" style="background: rgb(115, 188, 200);border-radius: 10px;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                Editar
            </a><br><br>
            <a href="/productos/<?php echo e($Productos->id); ?>/promocion" style="background: green;border-radius: 10px;text-align: center;text-decoration: none;display: inline-block;font-size: 20px;color:white;">
                ¡Poner en promoción!
        </a>
            <form action="/productos/<?php echo e($Productos->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="button"  style="background:red;border-radius: 10px;border:none;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">Eliminar</button>
        </form>
        </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/productos/show.blade.php ENDPATH**/ ?>