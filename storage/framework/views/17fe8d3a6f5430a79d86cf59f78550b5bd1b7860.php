

<?php $__env->startSection('content'); ?>
<form action="/productos/create">

    <button class="btn btn-outline-dark" type="submit">
        Subir productos
    </button>

</form>
<a href="/categorias/create" class="btn btn-outline-dark" type="submit">
    crear categorias
    </a>
<div style="padding: 30px;">

    <div class="row justify-content-end">
    <?php $__currentLoopData = $Productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-2">
            <a href="/productos/<?php echo e($Productos->id); ?>" >
                <img width="100%" height="100%" src="imagenes/productos/<?php echo e($Productos->imagen); ?>" class="rounded float-end img-thumbnail img-fluid" alt="<?php echo e($Productos->nombrePro); ?>">
            </a>
            <div class="card-body">
                <a href="/productos/<?php echo e($Productos->id); ?>" style="text-decoration: none; color:black"><h4 class="card-text text-center"><?php echo e($Productos->nombrePro); ?></h4></a>
                    
                    <p class="card-text text-center">$<?php echo e($Productos->precioPro); ?> x <?php echo e($Productos->unidadPro); ?></p>
                    <a href="/" class="btn btn-lg btn-primary text-center" disabled>¡Al carrito!</a>
            </div>    
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </div>
   
</div>

<a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-success" disabled>Atras</a>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/productos/index.blade.php ENDPATH**/ ?>