
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<br>


<div class="alert alert-danger col-sm-7 offset-3 text-center">
<b><label>Message d'Invalidation de l'Accreditation N° <?php echo e($idaccreditation); ?> de M/Mme</label>
<?php $__currentLoopData = $accrediregion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accredi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($accredi->nomdemandeur); ?> <?php echo e($accredi->prenomdemandeur); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</b>
</div>

<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('envoieinfo')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?> 
    <div class="card">
        <div class="card-header">Rediger le Message d'Invalidation</div>
        <div class="card-body">
            <div class=" row form-group">
                <label for="titre" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="titreinvalidation" value="" required="required">
                </div>
            </div>
 
            <div class=" row form-group">
                <label for="contenu" class="control-label col-sm-3">Contenu <b><i style="color: red">*</i></b></label>

                <div class="col-sm-7" style="">
                    <textarea type="textarea" class="form-control" name="messageinvalidation"  required="required"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="offset-3">
                    <input type="submit" value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px">
                </div>
                <div class="offset-1">
                    <input type="button" value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
                </div>
            </div>
        </div>

    </div>
  <input type="hidden" value="<?php echo e($idaccreditation); ?>" name="idaccreditation">
  <input type="hidden" value="2" name="valider">
<!--   <input type="hidden" value="0" name="actif"> -->
</form>
<br>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/coordonateur/ajout_information.blade.php ENDPATH**/ ?>