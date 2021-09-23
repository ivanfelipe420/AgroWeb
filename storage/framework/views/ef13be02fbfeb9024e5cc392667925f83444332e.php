

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="" class="btn btn-outline-success" disabled>Mi cuentaa</a><br><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Mi tienda</a>
        </div>
        <div class="col-10">
            <h2>Informacion basica:</h2>
            <h5><?php echo e(Auth::user()->name); ?></h5>
            <h2>Informacion de contacto</h2>
            <h5><?php echo e(Auth::user()->email); ?></h5>
            <a href="/cuenta/<?php echo e(Auth::user()->id); ?>/edit" class="btn btn-outline-success" disabled>Editar</a>
            <a href="/cuenta/<?php echo e(Auth::user()->id); ?>/confirmEli" class="btn btn-outline-success" disabled>Eliminar mi cuenta</a>
            
            <a class="btn btn-outline-success" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Salir')); ?>

                                    </a>
        </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/cuenta/index.blade.php ENDPATH**/ ?>