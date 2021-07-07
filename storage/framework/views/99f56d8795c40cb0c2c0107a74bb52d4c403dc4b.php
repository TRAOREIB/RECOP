
<?php $__env->startSection('contenu'); ?>
<br>
<div class="text-center">
    
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>

<hr>
<br>
<form class="form-horizontal  col-sm-10 offset-2" role="form" method="GET" action="<?php echo e(url('correspondant')); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('GET')); ?>

    <?php echo e(csrf_field()); ?>


    <div class="col-sm-9">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">CHOISIR LE TYPE DE CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-label offset-1 " for="type">TYPE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="typecorrespondant" name="typecorrespondant">
                            <option value="Correspondant national">Correspondant de la presse nationale</option>
                            <option value="Correspondant international">Correspondant de la presse internationale</option>
                            <option value="Journaliste independant">Journaliste independant/FreeLance</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>

    <div class="offset-3">
        <button class="btn btn-primary" type="submit">Continuer</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/demandeur/choix_devenirdemandeur.blade.php ENDPATH**/ ?>