
<?php $__env->startSection('contenu'); ?>
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE <?php echo e(Auth::user()->name); ?></b></label>
    <hr>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <div class="alert alert-danger col-sm-6 text-center offset-3">
        <b><label>Liste des Messages</label></b>
    </div>
    <?php $__currentLoopData = $listemessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="POST" action="<?php echo e(route('formmodifiermessage')); ?>">
        <?php echo csrf_field(); ?>
        <div class="card col-sm-10 offset-1">
            <div class="card-header"><b>Accreditation N°<?php echo e($mes->idaccreditation); ?></b> - Titre: <?php echo e($mes->titreinfo); ?> <input type="submit" value="Modifier l'Information" class="form-contol offset-2 btn btn-primary"></div>
            <div class="card-body">
                <?php echo e($mes->message); ?>

            </div>
        </div>
        <input type="hidden" value="<?php echo e($mes->iduser); ?>" name="iduser">
        <input type="hidden" value="<?php echo e($mes->idaccreditation); ?>" name="idaccreditation">

        <br>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="offset-1"><?php echo e($listemessages->render()); ?></div>
    <div>


    </div>


    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
        });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/ampliateur/liste_messages.blade.php ENDPATH**/ ?>