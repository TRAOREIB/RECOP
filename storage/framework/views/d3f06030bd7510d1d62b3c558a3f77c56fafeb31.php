
<?php $__env->startSection('contenu'); ?>
<br> 
	<div class="text-center">
  		<label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE </label>
 	</div>
<div class="ligne_separe_titre"></div>
<br>	
	
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('demandeur.store')); ?>" enctype="multipart/form-data">
				<?php echo e(method_field('POST')); ?>

				<?php echo e(csrf_field()); ?>	
				
				<!-- IDENTITE DU DEMANDEUR-->
				
			<div class="col-sm-12">  <!-- Bloc IDENTITE DU DEMANDEUR-->
				<div class="card"> 
					<div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="nom">NOM:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nom" placeholder="Entrer le nom" name="nom">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="prenom" placeholder="Entrer le prenom" name="prenom">
							</div>
						</div>
                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                             <div class="col-sm-8">
								<input type="text" class="form-control" id="profession" placeholder="Entrer la profession " name="profession">
                             </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-3" for="sexe">SEXE :</label>
                            <div class="col-sm-8">
									<select class="form-control" id="sexe" name="sexe">
                                        <option value="HOMME">HOMME</option>
                                        <option value="FEMME">FEMME</option>
                                    </select>
                            </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="datenaissance" placeholder="" name="datenaissance">
                                </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieunaissance" placeholder="Entrer le lieu de naissance " name="lieunaissance">
									
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nationalite" placeholder=" " name="nationalite">
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephone" placeholder=" Entrer la nationalit?? " name="telephone">
                                </div>
						</div>
                                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="telephone">EMAIL :</label>
                                        <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email">
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieuresidence" placeholder=" " name="lieuresidence">
									<label><i>La ville, le secteur, le quartier</i></label>
							   </div>
                        </div>
						<div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numcnib">N?? CNIB:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="numcnib" placeholder=" " name="numcnib">
									<label><i>Numero de la Carte Nationale d'Identit?? Burkinab??</i></label>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="datedelivcnib" placeholder=" " name="datedelivcnib">
									<label><i>Date de delivrance de la CNIB</i></label>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="dateexpircnib" placeholder=" " name="dateexpircnib">
									<label><i>Date d'expiration de la CNIB</i></label>
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numPasseport">N?? PASSPORT:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="numPasseport" placeholder=" " name="numPasseport">
									<label><i>Le num??ro du passport</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="carteconsulaire">N?? CARTE CONSULAIRE:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="carteconsulaire">
                                <label><i>Le num??ro de la carte consulaire</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="personneprevenir">FIXEUR:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="personneprevenir" placeholder=" " name="personneprevenir">
									<label><i>Nom et Prenom(s) du fixeur</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE DU FIXEUR:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephonepersp" placeholder=" " name="telephonepersp">
                                </div>
                        </div> 
						<div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="adressfixeur">ADRESSE DU FIXEUR:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="adressfixeur" placeholder=" " name="adressfixeur">
									<label><i>La ville, le secteur, le quartier</i></label>
							   </div>
                        </div>
					</div>
				</div>				
			</div>		
<br>
			<div class="col-sm-12">  <!-- Bloc ORGANE DE PRESSE-->
                <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
                    <div class="card-body">
							<div class="form-group row">
                                <label for="organe" class="col-sm-3 col-form-label">NOM ORGANE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="organe" type="text" name="organe"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="telorgane" type="text" name="telorgane"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="adressestruct" type="text" name="adressestruct" />
                                </div>
                            </div>
                    </div> 
                </div>
			</div>
<br>			
			<div class="col-sm-12">  <!-- Bloc  CREATION DU COMPTE USER-->
	 <div class="card">
        <div class="card-header text-center"><?php echo e(__("ENREGISTREMENT DU COMPTE D'UTILISATEUR")); ?></div>
        <div class="card-body">
            <div class="form-group row">
                <label for="identifiant" class="col-md-4 col-form-label text-md-right"><?php echo e(__("Identifiant")); ?></label>

                <div class="col-md-6">
                    <input  type="text" class="form-control <?php $__errorArgs = ['identifiant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="identifiant" value="<?php echo e(old('identifiant')); ?>" required>

                    <?php $__errorArgs = ['identifiant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mot de passe')); ?></label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirmer le mot de passe')); ?></label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
             
        </div>
    </div>
  <input type="hidden" name="name">
</div>
<br>		
		<div class="text-center">	
            <button class="btn btn-primary" type="submit">CONTINUER</button>
			<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
<br>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/demandeur/ajout_demandeur.blade.php ENDPATH**/ ?>