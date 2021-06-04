
<?php $__env->startSection('contenu'); ?>
<br> 
	<div class="text-center">
  		<h2> MODIFICATION DE L'ACCREDITATION</h2>
 	</div>
     <div class="ligne_separe_titre"></div>
    <br>
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('accreditation.update',[$editaccreditation->idaccreditation])); ?>" enctype="multipart/form-data" >
			<?php echo e(method_field('PUT')); ?>

			<?php echo e(csrf_field()); ?>	
			<div class="col-sm-12">  <!-- Debut du Bloc -->
				<div class="card"> 
					<div class=" card text-center card-header">SUJET</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="titreevenement">TITRE:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="titreevenement" name="titreevenement" value="<?php echo e($editaccreditation->titreevenement); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="lieuevenement">LIEU:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="lieuevenement" name="lieuevenement" value="<?php echo e($editaccreditation->lieuevenement); ?>">
							</div>
						</div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedebut">DATE DE DEBUT</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datedebut" name="datedebut" value="<?php echo e($editaccreditation->datedebut); ?>">
                                </div>
                         </div>
						 <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datefin">DATE DE FIN</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datefin" name="datefin" value="<?php echo e($editaccreditation->datefin); ?>">
                                </div>
                         </div>                       
					</div>
				</div>
                <p></p>
				<div class="card"> 
                    <div class=" card text-center card-header">TRANSPORT</div>
                        <div class="card-body">
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">MOYEN DE TRANPORT</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="moyentransport" type="text" name="moyentransport" value="<?php echo e($editaccreditation->moyentransport); ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="immatriculation" class="col-sm-4 col-form-label">IMMATRICULATION</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="immatriculation" type="text" name="immatriculation" value="<?php echo e($editaccreditation->immatriculation); ?>"/>
                                </div>
                        </div>                    
                    </div>
                </div>
                <p></p>
                <div class="card"> 
					<div class=" card text-center card-header">MEMBRES DE L'EQUIPE</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" name="membresequipe" rows="8"> <?php echo e($editaccreditation->membresequipe); ?> </textarea>
                     </div>
                            
                    </div> 
                </div>
                <p></p> 
				<div class="card"> 
					<div class=" card text-center card-header">LISTE DU MATERIEL</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3"><?php echo e($editaccreditation->listemateriel); ?></textarea>
                                </div>
                    </div> 
                </div>
    				
			</div>
		<div class="text-center">
            <button class="btn btn-primary" type="submit">ENREGISTRER</button>
	  		<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/accreditation/modif_accreditation.blade.php ENDPATH**/ ?>