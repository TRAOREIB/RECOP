
<?php $__env->startSection('contenu'); ?>
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE  <?php echo e(Auth::user()->name); ?></b></label>
    <hr>
    <br>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <div class="card col-sm-12 ">
        <div class="card-header">Liste des demandes d'accreditation</div>


        <div class="card-body">
            <div class="col-sm-12 ligneform " style="background-color: #EEE">
                <table class="table table-striped table-condensed" id="table">
                    <thead>
                        <tr style="background-color:#2a6496;color: #FFFFFF;">
                            <th>N°Demande</th>
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
                            <td><?php if($mesaccredi->valider==0): ?>
                                En cours 
                              <?php endif; ?> 
                              <?php if($mesaccredi->valider==1): ?> 
                                  Validé 
                              <?php endif; ?>
                              
                            </td> 
                            <td>
                                <div class="row ">
                                    <div>
                                    <form method="post" action="<?php echo e(route('detailscoordonateur')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" class="btn btn-warning" value="voir details pour valider">
                                        <input type="hidden" value="<?php echo e($mesaccredi->idaccreditation); ?>" name="idaccreditation">
                                        <input type="hidden" value="<?php echo e($mesaccredi->iduser); ?>" name="iduser">
                                        <input type="hidden" value="<?php echo e($mesaccredi->iddemandeur); ?>" name="iddemandeur">                     
                                        &nbsp;
                                    </form>
                                    </div> 
                                    <div>
<!--                                    <form method="post" action="<?php echo e(route("transfererdemande")); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" value="Valider la Demande" class="btn btn-warning">
                                        <input type="hidden"  value="<?php echo e($mesaccredi->idaccreditation); ?>" name="idaccreditation">
                                        <input type="hidden"  value="1" name="transfer">
                                       
                                    </form>  -->
                                    </div>     
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

</div>

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/coordonateur/liste_demande.blade.php ENDPATH**/ ?>