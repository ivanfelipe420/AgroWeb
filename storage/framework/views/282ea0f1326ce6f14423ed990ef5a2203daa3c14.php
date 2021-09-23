

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class=row>
        <div class=col>
            <h2><?php echo e(Auth::user()->name); ?>, se eliminará tu cuenta permanentemente. ¿Estas segu@?</h2>
            <form action="/cuenta/<?php echo e(Auth::user()->id); ?>" method="POST">
                <?php echo csrf_field(); ?>   
                <?php echo method_field('delete'); ?>
                <button href="/home" class="btn btn-outline-danger">Borrar</button><br><br>
            </form>

            <a href="/cuenta" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/cuenta/confirmEli.blade.php ENDPATH**/ ?>