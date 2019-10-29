<?php $__env->startSection('css'); ?>
    <style>
    
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cabecalho'); ?>
    Adicionar Serie
<?php $__env->stopSection(); ?>



<?php $__env->startSection('conteudo'); ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <form method="post">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control " name="nome" id="nome">
        </div>

    <div class="container">
        <button class="btn btn-primary">Adicionar</button>
        <a href="<?php echo e(route('index')); ?>" class="btn btn-dark ">Voltar</a>
    </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabriel Teixeira\Documents\Aula_Laravel\resources\views/series/create.blade.php ENDPATH**/ ?>