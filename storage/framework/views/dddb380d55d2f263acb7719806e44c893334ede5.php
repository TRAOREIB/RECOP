
<?php $__env->startSection('contenu'); ?>

<br>

<div class="text-center">
    <b><label style="" class="text-primary">LISTE DES DEMANDEURS </label></b>
</div>
 
 <hr>
 <form class="form-horizontal col-sm-10" role="form" method="POST" action="<?php echo e(route('listedemandeur1')); ?>" enctype="multipart/form-data">
	<?php echo e(method_field('GET')); ?>

	<input type="submit" class="btn btn-warning" value="Exporter en PDF"> 
</form>
<br>
    <div class="col-sm-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>NATIONALITE</th>
                        <th>TELEPHONE</th> 
						<th>MAIL</th>
						<th>ORGANE/INSTITUTION</th>
						<th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
					<?php $i = 0 ?>
                     <?php $__currentLoopData = $alldemandeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demandeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 <?php $i++ ?>
                   
					<tr>
					
                        <td><?php echo e($demandeur->nom); ?></td>
                        <td><?php echo e($demandeur->prenom); ?></td>
                        
						<td><?php echo e($demandeur->nationalite); ?></td>
						<td><?php echo e($demandeur->telephone); ?></td>
						<td><?php echo e($demandeur->mail); ?></td>
						<td><?php echo e($demandeur->organe); ?></td>
						
						<td title="">
							
								 <form  method="post" action="<?php echo e(route('detailsdemandeur')); ?>">
								<?php echo csrf_field(); ?>
								<input type="submit" class="btn btn-warning" value="Details">           
								<input type="hidden"  value="<?php echo e($demandeur->iddemandeur); ?>" name="iddemandeur">
								</form>
                          </td>
				     </tr>
						
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                </tbody>
            </table>
		
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/demandeur/liste_demandeur.blade.php ENDPATH**/ ?>