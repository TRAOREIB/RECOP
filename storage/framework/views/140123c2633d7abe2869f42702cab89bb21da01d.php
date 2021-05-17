<?php $__env->startSection('content'); ?>

<div class="card bg-light">
    <h5 class="card-header">Pannel de <?php echo e($muse->nom); ?></h5>
    <div class="card-body">
            <hr>
            <p><u>Details du musée :</u></p>
            <p class="card-text"><u>Responsable : </u><?php echo e($muse->responsable); ?></p>
            <hr>
            <p class="card-text"><u>Adresse email : </u><?php echo e($muse->email); ?></p>
            <hr>
            <p class="card-text"><u>Telephone :</u><?php echo e($muse->tel); ?></p>
            <hr>
            
        </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/musee/show.blade.php ENDPATH**/ ?>