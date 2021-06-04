
<?php $__env->startSection('contenu'); ?>

<br>
 <br>
	<div class="text-center">
  		<h2> BIENVENUE M. ....</h2>
 	</div>
 <div style="margin-left:20px;">
      <div>
        <a href="<?php echo e(url('modifdem')); ?>" class="btn btn-primary">MODIFIER</a> 
        <label class="card-title"> Vos informations d'identification</label> 
      </div>
 <br>      
      <div>
        <a href="#" class="btn btn-primary">MODIFIER</a> <label class="card-title">Vos pièces jointes</label> 
      </div> 
  <br>

      <div>
         <a href="#" class="btn btn-primary">MODIFIER</a> <label class="card-title">Votre demande d'accréditation</label> 
      </div>
 </div>     
<br>
 <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/accreditation/formsmodif_accreditation.blade.php ENDPATH**/ ?>