<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Liste des musées</h1>
    </div>
    <!-- Content Row --> 
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>
<!-- Content Row -->
<div class="row">
    <a   href="<?php echo e(route('musee.create')); ?>" class="btn btn-primary"><span class="fas fa-plus"> Nouveau </a>
</div>
<div class="row divtabgrand" style="">
    <div class="col-xs-12" >
    <div class="col-xs-12 ligneform " style="background-color: #EEE">
        <table class="table table-striped" id="museetable">
            <thead>
                <tr style="background-color:#2a6496;color: #FFFFFF;">
                    <th>Denomination</th>
                    <th>Responsable</th>
                    <th>email</th>
                    <th>Telephone</th>
                    <th></th>
                    <th></th>
                    <th></th>
    
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($musee->nom); ?></td>
                    <td><?php echo e($musee->responsable); ?></td>
                    <td><?php echo e($musee->email); ?></td>
                    <td><?php echo e($musee->tel); ?></td>
                    
                    <td>  
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('musee.show', $musee->idmusee)); ?>" role="button" data-toggle="tooltip" title="Details"><i class="fas fa-eye"></i></a>
                    </td>
                    <td>
                    <a class="btn btn-warning btn-sm" href="<?php echo e(route('musee.edit', $musee->idmusee)); ?>" role="button" data-toggle="tooltip" title="Modifier"><i class="fas fa-edit"></i></a>
                    </td>
                    <td><form method="POST" action="<?php echo e(route('musee.destroy', $musee->idmusee)); ?>">
                        <?php echo e(method_field('DELETE')); ?>

                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Supprimer"><i class="fas fa-trash"></i></button>
                    </form>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      

            </tbody>
        </table>
        </div>
    </div>
</div>
 <script>
    $(document).ready(function () {
        $('#museetable').DataTable();
    });
</script>   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <?php echo $__env->make('partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/musee/index.blade.php ENDPATH**/ ?>