

<?php $__env->startSection('content'); ?>

<div>
<p>
    El precio de <b style="color: blue;"><?php echo e($proPromocion->nombrePro); ?></b> era <b style="color: blue;"><?php echo e($proPromocion->precioPro); ?></b>
</p>
<label for="PrecioNuevo">¿Qué precio le quieres poner ahora?</label>
<input type="text" class="form-control" id="cajaPromocion" name="cajaPromocion" placeholder="100" style="width: 60%; margin: 30px;">
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/productos/promocion.blade.php ENDPATH**/ ?>