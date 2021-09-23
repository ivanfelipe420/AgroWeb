

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="/cuenta" class="btn btn-outline-success" disabled>Mi cuenta</a><br><br>
            <a href="/productos" class="btn btn-outline-success" disabled>Mi tienda</a>
        </div>
        <div class="col-10">
            <h2>Editar perfil:</h2>
                            <form action="/cuenta/<?php echo e(Auth::user()->id); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>   
                            <?php echo method_field('put'); ?>
                                <div class="form-group">
                                    <label for="Nombre">Digite nombre</label>
                                    <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="<?php echo e(Auth::user()->name); ?>">
                                    <br>
                                </div>
                                <button class="btn btn-lg btn-primary" type="submit">Editar</button>
                            </form>
                            <br>
                        </div>
                    </div>
                    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-success" disabled>Atras</a>
        
        </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/cuenta/edit.blade.php ENDPATH**/ ?>