
<?php $__env->startSection('contenu'); ?>
<br> 
	<div class="text-center">
  		<h2> MODIFICATION DES PIECES JOINTES </h2>
 	</div>
     <div class="ligne_separe_titre"></div>
    <br>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('piecesjointes.update',[$editpjaccreditation->id])); ?>" enctype="multipart/form-data")}}">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>	

    <div class="col-sm-12">  <!-- Bloc 1-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">LETTRE DE RECOMMENDATION</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="lettrerecommendation" value="<?php echo e($editpjaccreditation->lettrerecommendation); ?>"/>
                        <?php echo e($editpjaccreditation->lettrerecommendation); ?>

						<label><i>joindre le fichier de la lettre de recommendation</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="photo" type="file" name="photo" value="<?php echo e($editpjaccreditation->photo); ?>"/>
                    <?php echo e($editpjaccreditation->photo); ?>

					</div>
                </div>              
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNIB</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="pjcnib" value="<?php echo e($editpjaccreditation->pjcnib); ?>"/>
                        <?php echo e($editpjaccreditation->pjcnib); ?>

						<label><i>scannage de la CNIB (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjpasseport" type="file" name="pjpasseport" value="<?php echo e($editpjaccreditation->pjpasseport); ?>"/>
                        <?php echo e($editpjaccreditation->pjpasseport); ?>

						<label><i>scannage de la première page du passeport</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="pjcarteconsulaire" value="<?php echo e($editpjaccreditation->pjcarteconsulaire); ?>"/>
                        <?php echo e($editpjaccreditation->pjcarteconsulaire); ?>

						<label><i>scannage de la carte consulaire (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcinibperprev" class="col-sm-3 col-form-label">CNIB PERSONNE A PREVENIR</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnibperprev" type="file" name="pjcnibperprev" value="<?php echo e($editpjaccreditation->pjcnibperprev); ?>"/>
                        <?php echo e($editpjaccreditation->pjcnibperprev); ?>

						<label><i>scannage de la CNIB (Recto et Verso) de la personne à prevenir </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcartepresse" type="file" name="pjcartepresse" value="<?php echo e($editpjaccreditation->pjcartepresse); ?>"/>
                        <?php echo e($editpjaccreditation->pjcartepresse); ?>

						<label><i>scannage de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                
            </div>
        </div>

    </div>	
	<!-- BOUTONS DE VALIDATION-->
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">ENREGISTRER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/accreditation/modifpj_accreditation.blade.php ENDPATH**/ ?>