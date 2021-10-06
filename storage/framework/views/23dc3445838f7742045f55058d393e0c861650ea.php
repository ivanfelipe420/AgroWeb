

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class=row>
        <div class=col>
            <h2>¿Qué categoria quieres editar o eliminar?</h2>
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
                    <label for="Nombre">Categoria:</label>
                        <select class="form-select" aria-label="Default select example" id="cajaCategoria" name="cajaCategoria" value="<?php echo e(old('cajaCategoria')); ?>">
                            <option selected>Abrir este menú de selección</option>
                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categorias->id); ?>"><?php echo e($categorias->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <br>
                        
                            <a id="btnEditar" type="button" onclick="cambio();" style="background: rgb(115, 188, 200);border-radius: 10px;border: none;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                                Editar
                            </a>
                            <div id="cajaEditar" style="display: none">
                                <label for="editar">Nombre de la categoria:</label>
                                <input type="text" class="form-control" id="cajaCategorias" placeholder="Frutas" value="<?php echo e(old('cajaCategorias')); ?>">
                            <br>
                            </div>
                            
                           
                        <script>
                            var num=0;

                            function mostrar(){
                                    document.getElementById('cajaEditar').style.display = 'block';
                                    document.getElementById("btnEditar").innerHTML = "Ocultar";
                                    document.getElementById('btnEliminar').style.display = 'none';
                                    num=1;}
                            function ocultar(){
                                    document.getElementById('cajaEditar').style.display = 'none';
                                    document.getElementById("btnEditar").innerHTML = "Editar";
                                    document.getElementById('btnEliminar').style = 'display: block ;background: rgba(241, 35, 35, 0.753);border-radius: 10px;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;';
                                    num=0;
                            }
                            function cambio(){
                                if(num==0){
                                    mostrar();
                                }else{
                                    ocultar();
                                }
                            }
                        </script>
                        
                        

                        <a href="#" id="btnEliminar" style="display: block ;background: rgba(241, 35, 35, 0.753);border-radius: 10px;padding: 2px 15px;text-align: center;text-decoration: none;display: inline-block;font-size: 25px;color:white;">
                            Eliminar
                        </a>
                    </div>   
                </form>
                            
            </div>
        </div><br>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-success" disabled>Atras</a>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AgroWeb\resources\views/categorias/editar.blade.php ENDPATH**/ ?>