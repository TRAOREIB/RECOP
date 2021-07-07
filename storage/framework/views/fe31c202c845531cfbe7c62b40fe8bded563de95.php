
<?php $__env->startSection('contenu'); ?>
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE <?php echo e(Auth::user()->name); ?></b></label>
    <hr>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <div class="alert alert-danger col-sm-6 text-center offset-3">
        <b><label>Liste des Messages de l'accreditation N° <?php $__currentLoopData = $lesmessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($mes->idaccreditation); ?> <?php break; ?>; <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></label></b>
    </div>
    <?php $__currentLoopData = $lesmessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="POST" action="<?php echo e(route('detailscoordonateur')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card col-sm-10 offset-1">
            <div class="card-header"><b>Message <?php echo e($mes->nomapliateur); ?> - Accreditation N°<?php echo e($mes->idaccreditation); ?></b> - Titre: <?php echo e($mes->titreinfo); ?></div>
            <div class="card-body">
                <?php echo e($mes->message); ?>

            </div>
        </div>
        <input type="hidden" value="<?php echo e($mes->iduser); ?>" name="iduser">
        <input type="hidden" value="<?php echo e($mes->idaccreditation); ?>" name="idaccreditation">


        <br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <input type="hidden" value="<?php echo e($iddemandeur); ?>" name="iddemandeur">
        <div class="text-center">
            <input type="submit" class="form-control btn btn-primary col-sm-3" value="Retour sur les details" name="retourdetail">
        </div>
        <br>
    </form>
    <div class="offset-1"><?php echo e($lesmessages->render()); ?></div>
    <div>


    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/ampliateur/tous_messages.blade.php ENDPATH**/ ?>