<?php $__env->startSection('content'); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.alerts', ['title' => "Enregistrement de musée"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Row -->
<div class="row divtabgrand" style="">
    <div class="col-xs-5" style="margin-right: 150px">
        <form method="POST" action="<?php echo e(url('musee')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('partials.form-group', [
                    'title' => 'Denomination',
                    'type' => 'text',
                    'name' => 'nom',
                    'required' => true,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('partials.form-group', [
                    'title' => 'Responsable',
                    'type' => 'text',
                    'name' => 'responsable',
                    'required' => true,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <?php echo $__env->make('partials.form-group', [
                    'title' => 'Téléphone',
                    'type' => 'tel',
                    'name' => 'tel',
                    'required' => true,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('partials.form-group', [
                    'title' => 'E-mail',
                    'type' => 'email',
                    'name' => 'email',
                    'required' => true,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
    </div>
    <div class="col-xs-5" >
        <div class="col-xs-12 ligneform " >
            <table class="table table-striped table-condensed" id="museetable">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>Dénomination</th>
                        
                        <th>Responsable</th>
                        
                        <th>Téléphone</th>
                        
        
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $adliste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/musee/create.blade.php ENDPATH**/ ?>