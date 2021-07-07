
<?php $__env->startSection('contenu'); ?>
<br>
<div class="text-center">
    
    <b><label style="" class="text-primary">NOUVEAU DEMANDEUR</label></b>
</div>

<hr>
<br>

<form class="form-horizontal  col-sm-10 offset-2" role="form" method="POST" action="<?php echo e(route('formdemandeur')); ?>" enctype="multipart/form-data">
   <?php echo csrf_field(); ?>
    <div class="col-sm-9">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">CHOISIR LE TYPE DE DEMANDEUR</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-label offset-1 " for="type">TYPE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="typedemandeur" name="typedemandeur">
                            <?php if($demandeur->typedemandeur=="Ressortissant Espace CEDEAO"): ?>
                            <option value="Ressortissant Espace CEDEAO" selected>Ressortissant Espace CEDEAO</option>
                            <?php else: ?>
                            <option value="Ressortissant Espace CEDEAO">Ressortissant Espace CEDEAO</option>
                            <?php endif; ?>
                            <?php if($demandeur->typedemandeur=="Autre"): ?>
                            <option value="Autre" selected>Autre</option>
                            <?php else: ?>
                            <option value="Autre">Autre</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>
    <input type="hidden" name="iddemandeur" value="<?php echo e($demandeur->iddemandeur); ?>">
  <!--   <input type="hidden" name="typedemandeur" value="<?php echo e($demandeur->typedemandeur); ?>"> -->
    <input type="hidden" name="idcorrespondant" value="<?php echo e($idcorrespondant); ?>">
    <div class="offset-3">
        <button class="btn btn-primary" type="submit">Continuer</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/demandeur/choix_demandeur_modif.blade.php ENDPATH**/ ?>