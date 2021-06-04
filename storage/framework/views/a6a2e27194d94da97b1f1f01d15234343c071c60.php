
<?php $__env->startSection('contenu'); ?>
<br> 
	<div class="text-center">
  		<label style="font-family: fantasy;color: blue"> MODIFICATION DU DEMANDEUR </label>
 	</div>
<div class="ligne_separe_titre"></div>
<br>	
	
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('demandeur.update',[$editdemandeur->iddemandeur])); ?>" enctype="multipart/form-data">
				<?php echo e(method_field('PUT')); ?>

				<?php echo e(csrf_field()); ?>	
				
				<!-- IDENTITE DU DEMANDEUR-->
				
			<div class="col-sm-12">  <!-- Bloc 1-->
				<div class="card"> 
					<div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="nom">NOM:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nom" name="nom" value="<?php echo e($editdemandeur->nom); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo e($editdemandeur->prenom); ?>">
							</div>
						</div>
                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                             <div class="col-sm-8">
								<input type="text" class="form-control" id="profession" name="profession" value="<?php echo e($editdemandeur->profession); ?>">
                             </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-3" for="sexe">SEXE :</label>
                            <div class="col-sm-8">
									<select class="form-control" id="sexe" name="sexe">
                                        <option value="HOMME" <?php if($editdemandeur->sexe=="HOMME") echo "selected=selected"; ?>>HOMME</option>
                                        <option value="FEMME"<?php if($editdemandeur->sexe=="FEMME") echo "selected=selected"; ?>>FEMME</option>
                                    </select>
                            </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="datenaissance" name="datenaissance" value="<?php echo e($editdemandeur->datenaissance); ?>">
                                </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieunaissance" name="lieunaissance" value="<?php echo e($editdemandeur->lieunaissance); ?>">
									
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nationalite" name="nationalite" value="<?php echo e($editdemandeur->nationalite); ?>">
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo e($editdemandeur->telephone); ?>">
                                </div>
						</div>
                                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="telephone">EMAIL :</label>
                                        <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" value="<?php echo e($editdemandeur->email); ?>">
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieuresidence" name="lieuresidence" value="<?php echo e($editdemandeur->lieuresidence); ?>">
									<label><i>La ville, le secteur, le quartier</i></label>
							   </div>
                        </div>
						<div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numcnib">N° CNIB:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="numcnib" name="numcnib" value="<?php echo e($editdemandeur->numcnib); ?>">
									<label><i>Numero de la Carte Nationale d'Identité Burkinabè</i></label>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="datedelivcnib" name="datedelivcnib" value="<?php echo e($editdemandeur->datedelivcnib); ?>">
									<label><i>Date de delivrance de la CNIB</i></label>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="dateexpircnib" name="dateexpircnib" value="<?php echo e($editdemandeur->dateexpircnib); ?>">
									<label><i>Date d'expiration de la CNIB</i></label>
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="numPasseport" name="numPasseport" value="<?php echo e($editdemandeur->numPasseport); ?>">
									<label><i>Le numéro du passport</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE:</label>
								
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="carteconsulaire" name="carteconsulaire" value="<?php echo e($editdemandeur->carteconsulaire); ?>">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="personneprevenir">FIXEUR:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="personneprevenir" name="personneprevenir" value="<?php echo e($editdemandeur->personneprevenir); ?>">
									<label><i>Nom et Prenom(s) du fixeur</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE FIXEUR:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephonepersp" name="telephonepersp" value="<?php echo e($editdemandeur->telephonepersp); ?>">
                                </div>
                        </div> 
						<div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="adressfixeur">ADRESSE DU FIXEUR:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="adressfixeur" name="adressfixeur" value="<?php echo e($editdemandeur->adressfixeur); ?>">
									<label><i>La ville, le secteur, le quartier</i></label>
							   </div>
                        </div>
					</div>
				</div>				
			</div>		
<br>
			<div class="col-sm-12">  <!-- Bloc 2-->
                <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
                    <div class="card-body">
							<div class="form-group row">
                                <label for="organe" class="col-sm-4 col-form-label">NOM ORGANE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="organe" type="text" name="organe" value="<?php echo e($editdemandeur->organe); ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telorgane" class="col-sm-4 col-form-label">TELEPHONE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="telorgane" type="text" name="telorgane" value="<?php echo e($editdemandeur->telorgane); ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adressestruct" class="col-sm-4 col-form-label">ADRESSE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="adressestruct" type="text" name="adressestruct" value="<?php echo e($editdemandeur->adressestruct); ?>"/>
                                </div>
                            </div>
                    </div> 
                </div>
			</div>
			
 <!--  <input type="hidden" value="soro  paul" name="name"> -->
<br>		
		<div class="text-center">	
            <button class="btn btn-primary" type="submit">ENREGISTRER</button>
			<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
<br>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/demandeur/modif_demandeur.blade.php ENDPATH**/ ?>