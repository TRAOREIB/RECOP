<?php $__env->startSection('content'); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.alerts', ['title' => "Modification de musée"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Row -->
<div class="row divtabgrand" style="">
    <div class="col-xs-5" >
    <form class="col-sm-12" method="post" action="<?php echo e(url('musee',['id' => $muse->idmusee])); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

                <p>
                <label for="nom">Dénomination</label>
                <input id="nom" type="text" class="form-control"
                       name="nom" value="<?php echo e($muse->nom); ?>" required>
                </p>
                <p>
                <label for="responsable">Responsable</label>
                <input id="responsable" type="text" class="form-control"
                       name="responsable" value="<?php echo e($muse->responsable); ?>" required>
                </p>
                
                <p>
                <label for="telephone">Telephone</label>
                <input id="telephone" type="tel" class="form-control"
                       name="telephone" value="<?php echo e($muse->tel); ?>" required>
                </p>
                
                <p>
                <label for="email">E-mail</label>
                <input id="email" type="email" class="form-control"
                       name="email" value="<?php echo e($muse->email); ?>" required>
                </p>
                

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
    </div>
    <div class="col-xs-5" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="museetable">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>Dénomination</th>
                        
                        <th>Responsable</th>
                        
                        <th>Téléphone</th>
                        
        
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $upliste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($musee->nom); ?></td>
                        
                        <td><?php echo e($musee->responsable); ?></td>
                        
                        <td><?php echo e($musee->tel); ?></td>
                        
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


<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/musee/edit.blade.php ENDPATH**/ ?>