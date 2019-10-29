<?php $__env->startSection('css'); ?>
    <style>
        .formulario{
        display:flex;
        justify-content: space-between;
        align-items: center;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cabecalho'); ?>
Series
<?php $__env->stopSection(); ?>



<?php $__env->startSection('conteudo'); ?>
    <?php if(!empty($mensagem)): ?>
    <div class="alert alert-success">
        <?php echo e($mensagem); ?>

    </div>
    <?php endif; ?>

    <a href="<?php echo e(route('createSerie')); ?>" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item formulario">
                <?php echo e($serie->nome); ?>

                <form method="post" action="/series/<?php echo e($serie->id); ?>" onSubmit="return confirm('Tem certeza que quer remover <?php echo e($serie->nome); ?> ? ')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabriel Teixeira\Documents\Aula_Laravel\resources\views/series/index.blade.php ENDPATH**/ ?>