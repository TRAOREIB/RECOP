
<?php $__env->startSection('contenu'); ?>
<br>
<div class="text-center">
    
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS</label></b>
</div>
 
 <hr>
    <!-- <br><br> 
	<a href="<?php echo e(route('generatepdf')); ?>">Download PDF</a><br>
	<a href="<?php echo e(route('listecorrespondant')); ?>">LISTE CORRESPONDANT PDF</a><br>
	<a href="<?php echo e(route('listeaccreditation1')); ?>">LISTE ACCREDITATION PDF</a><br>
	<a href="<?php echo e(route('listedemandeur1')); ?>">LISTE DEMANDEUR PDF</a><br> -->

<div class="row divtabgrand justify-content-center" style="">
    <div class="col-sm-7" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>ORGANE</th>
                        <th>TYPE PRESSE</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                        <td><?php echo e($corresp->nomcorrespondant); ?></td>
                        <td><?php echo e($corresp->prenomcorrespondant); ?></td>
                        <td><?php echo e($corresp->organe); ?></td>
                        <td><?php echo e($corresp->typepresse); ?></td>
                       
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
 <br><br>

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/liste_correspondant/listevisiteur.blade.php ENDPATH**/ ?>