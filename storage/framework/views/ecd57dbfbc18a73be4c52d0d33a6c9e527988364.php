

<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Crear Producto')): ?>
<div class="container">
    <div class=row>
        <div class=col>
            <h2>Agregar un nuevo producto:</h2>
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
                <form action="/productos" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <!-- Formulario -->
                    <div class="form-group">
                        <label for="Nombre">Nombre del producto:</label>
                        <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Ahuyama" value="<?php echo e(old('cajaNombre')); ?>">
                        <label for="Nombre">Descripción:</label>
                        <input type="text" class="form-control" id="cajaDescripcion" name="cajaDescripcion" placeholder="Ahuyama Zapayo fresca por Libra" value="<?php echo e(old('cajaDescripcion')); ?>">
                        <label for="Nombre">Categoria:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria" value="<?php echo e(old('cajaCategoria')); ?>">
                            <option selected>Abrir este menú de selección</option>
                            <option value="Verduras">Verduras</option>
                            <option value="Frutas">Frutas</option>
                        </select>



                        <label for="Nombre">Unidad:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaUnidad" name="cajaUnidad" value="<?php echo e(old('cajaCategoriaUnidad')); ?>">
                            <option selected>Abrir este menú de selección</option>
                            <option value="Libra">Libra</option>
                            <option value="Kilo">Kilo</option>
                            <option value="Unidad">Unidad</option>
                            <option value="Gramo">Gramo</option>
                            <option value="Manojo">Manojo</option>
                        </select>
                        <label for="Nombre">Precio:</label>
                        <input type="text" class="form-control" id="cajaPrecio" name="cajaPrecio" placeholder="2000" value="<?php echo e(old('cajaPrecio')); ?>">
                        <label for="Nombre">¡Pon imagen!</label>
                        <input type="file" class="form-control" id="cajaImg" name="cajaImg" value="<?php echo e(old('cajaImg')); ?>">
                                            
                        <br>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                </form>
                            
            </div>
        </div><br>
        <a href="/productos" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>
<?php else: ?> 
<h1> No tienes una tienda.¡Create una! </h1>
<a href="../home" class="btn btn-outline-success" disabled>Crear mi Tienda</a>
<a href="/cuenta" class="btn btn-outline-success" disabled>Atras</a>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb Bien\resources\views/productos/crear.blade.php ENDPATH**/ ?>