
<?php $__env->startSection('contenu'); ?>
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE  <?php echo e(Auth::user()->name); ?></b></label>
    <hr>
    <br>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <?php if($idcomptecorrespondant!=null): ?>
    <div class="card col-sm-6 justify-content-center">
        <div class="card-header">Modifier votre compte Correspondant</div>
        <div class="card-body row">
            <form  method="post" action="<?php echo e(route('detailscorrespondant')); ?>">
                <?php echo csrf_field(); ?>
                <input type="submit" class="btn btn-primary" value="Modifier vos informations" name="idcorrespondant"> &nbsp;
                <input type="hidden"  value="<?php echo e($idcomptecorrespondant); ?>" name="idcorrespondant">
                <input type="hidden"  value="<?php echo e($idpiecesjointes); ?>" name="idpj">    
                <input type="submit" class="btn btn-warning" value="voir les details du compte" name="pjcorrespondant">           
            </form>

        </div>
    </div>
    <?php endif; ?>
    <br>

    <div class="card col-sm-12 ">
        <div class="card-header">Liste de vos demandes d'accreditation</div>


        <div class="card-body">
            <div class="col-sm-12 ligneform " style="background-color: #EEE">
                <table class="table table-striped table-condensed" id="table">
                    <thead>
                        <tr style="background-color:#2a6496;color: #FFFFFF;">
                            <th>Numero de la Demande</th>
                            <th>Date de Soumission</th>
                            <th>Sujet(s)</th>  
                            <th>Etat</th> 
                            <th>Modifier</th> 
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $accreditations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mesaccredi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                            <td><?php echo e($mesaccredi->idaccreditation); ?></td>
                            <td><?php echo e($mesaccredi->CREATED_AT); ?></td>
                            <td><?php echo e($mesaccredi->titreevenement); ?>,....</td> 
                            <td>En cours</td> 
                            <td>
                                <div class="row">
                                    <form method="post" action="<?php echo e(route('detailsaccreditation')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" class="btn btn-success" value="voir details">
                                        <input type="hidden" value="<?php echo e($mesaccredi->idaccreditation); ?>" name="idaccreditation">
                                        <input type="hidden" value="<?php echo e($mesaccredi->iduser); ?>" name="iduser">
                                        <input type="hidden" value="<?php echo e($mesaccredi->iddemandeur); ?>" name="iddemandeur">
                                        <input type="hidden" value="<?php echo e($idcomptecorrespondant); ?>" name="idcorrespondant">
                                        &nbsp;
                                        <input type="submit" class="btn btn-warning" value="Modifier la demande">
                                    </form>
                                </div>    
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>

            </div>
        </div>  

    </div>

    <br>
<!--    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>-->
</div>
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/home.blade.php ENDPATH**/ ?>