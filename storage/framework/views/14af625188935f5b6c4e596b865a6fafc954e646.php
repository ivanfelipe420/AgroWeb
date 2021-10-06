

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Agregar una nueva categoria:</h2>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form action="/categorias" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> 
                    <!-- Formulario -->
                    <div class="form-group">
                        <label for="nombre">Nombre de la categoria:</label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Frutas" value="<?php echo e(old('cajaNombre')); ?>">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Descripcion frutas" value="<?php echo e(old('cajaDescripcion')); ?>">
                                                                    
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                </form>
                            
            </div>
        </div><br>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/categorias/crear.blade.php ENDPATH**/ ?>