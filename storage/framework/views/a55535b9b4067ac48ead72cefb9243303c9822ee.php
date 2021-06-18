
<?php $__env->startSection('contenu'); ?>
<br> 
	<div class="text-center">
  		<h2> SUJET A COUVRIR </h2>
 	</div>
     <div class="ligne_separe_titre"></div>
<br>
<form   method="POST" action="<?php echo e(route('nouvdemandeurpj')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>	

    <div class="col-sm-12">  <!-- Bloc 1-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">LETTRE DE RECOMMANDATION</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="lettrerecommendation" />
                        <label><i>joindre le fichier de la lettre de recommendation</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="photo" />
                    </div>
                </div>              
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNI</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjcnib" />
                        <label><i>scan de la Carte National d'Identité (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjpasseport"/>
                        <label><i>scan de la première page du passeport</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjcarteconsulaire" />
                        <label><i>scan de la carte consulaire (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcinibperprev" class="col-sm-3 col-form-label">CNI/PASSEPORT DU FIXEUR</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="file" name="pjcnibperprev"/>
                        <label><i>scan de la Carte Nationale d'Identité(Recto et Verso) ou du passeport(première page)</i></label>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE/CARTE PROFESSIONNELLE</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjcartepresse" />
                        <label><i>scan de la carte de Presse ou professionnelle (Recto et Verso)</i></label>
                    </div>
                </div>	
                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">LAISSEZ PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjlaissezpasser" />
                        <label><i>scan du laissez passser </i></label>
                    </div>
                </div>
                <input type="hidden" value="demandeur" name="type">
            </div>
        </div>
    </div>	
	<!-- BOUTONS DE VALIDATION-->
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/demandeur/pj_accreditation.blade.php ENDPATH**/ ?>