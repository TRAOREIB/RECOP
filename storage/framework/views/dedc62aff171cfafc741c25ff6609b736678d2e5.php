<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="text-center">
  		<h2> MODIFIER DEMANDEUR </h2>
 	</div>
	<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="<?php echo e(route('demandeur.update',[$editdemandeur->iddemandeur])); ?>" enctype="multipart/form-data" >
			<?php echo e(method_field('POST')); ?>

			<?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-sm-6">  <!-- Bloc 1-->
				<div class="card"> 
					<div class=" card text-center card-header">IDENTITE</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="nom">NOM:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nom" value="<?php echo e($editdemandeur->nom); ?>" name="nom">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="prenom" value="<?php echo e($editdemandeur->prenom); ?>" name="prenom">
							</div>
						</div>
                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                             <div class="col-sm-8">
								<input type="text" class="form-control" id="profession" value="<?php echo e($editdemandeur->profession); ?>" name="profession">
                             </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-3" for="sexe">SEXE :</label>
                            <div class="col-sm-8">
									<select class="form-control" id="sexe" name="sexe" value="<?php echo e($editdemandeur->sexe); ?>">
                                        <option value="HOMME">HOMME</option>
                                        <option value="FEMME">FEMME</option>
                                    </select>
                            </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="datenaissance" value="<?php echo e($editdemandeur->datenaissance); ?>" name="datenaissance">
                                </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieunaissance" value="<?php echo e($editdemandeur->lieunaissance); ?>" name="lieunaissance">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nationalite" value="<?php echo e($editdemandeur->nationalite); ?>" name="nationalite">
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephone" value="<?php echo e($editdemandeur->telephone); ?>" name="telephone">
                                </div>
						</div> 
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieuresidence" value="<?php echo e($editdemandeur->lieuresidence); ?>" name="lieuresidence">
                               </div>
                        </div>
						<div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numcnib">N?? CNIB:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="numcnib" value="<?php echo e($editdemandeur->numcnib); ?>" name="numcnib">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="datedelivcnib" value="<?php echo e($editdemandeur->datedelivcnib); ?>" name="datedelivcnib">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="dateexpircnib" value="<?php echo e($editdemandeur->dateexpircnib); ?>" name="dateexpircnib">
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numPasseport">N?? PASSPORT:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="numPasseport" value="<?php echo e($editdemandeur->numPasseport); ?>" name="numPasseport">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="carteconsulaire">N?? CARTE CONSULAIRE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="carteconsulaire" value="<?php echo e($editdemandeur->carteconsulaire); ?>" name="carteconsulaire">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="personneprevenir">PERSONNE A PREVENIR:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="personneprevenir" value="<?php echo e($editdemandeur->personneprevenir); ?>" name="personneprevenir">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephonepersp" value="<?php echo e($editdemandeur->telephonepersp); ?>" name="telephonepersp">
                                </div>
                        </div> 
					</div>
				</div>				
			</div>
			<div class="col-sm-6">  <!-- Bloc 2-->
                <div class="card"> <div class=" card text-center card-header">INFOS ORGANE</div>
                    <div class="card-body">
							<div class="form-group row">
                                <label for="organe" class="col-sm-4 col-form-label">NOM ORGANE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="organe" value="<?php echo e($editdemandeur->organe); ?>"type="text" name="organe"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telorgane" class="col-sm-4 col-form-label">TELEPHONE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="telorgane" value="<?php echo e($editdemandeur->telorgane); ?>" type="text" name="telorgane"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adressestruct" class="col-sm-4 col-form-label">ADRESSE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="adressestruct" value="<?php echo e($editdemandeur->adressestruct); ?>" type="text" name="adressestruct" />
                                </div>
                            </div>
                    </div> 
                </div>   
				<div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
					<div class="card-body">
					        <div class="form-group row">
                                <label for="pjcnib" class="col-sm-4 col-form-label">CNIB</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="pjcnib" value="<?php echo e($editdemandeur->pjcnib); ?>" type="file" name="pjcnib" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pjpasseport" class="col-sm-4 col-form-label">PASSPORT</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="pjpasseport" value="<?php echo e($editdemandeur->pjpasseport); ?>" type="file" name="pjpasseport"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pjcarteconsulaire" class="col-sm-4 col-form-label">CARTE CONSULAIRE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="pjcarteconsulaire" value="<?php echo e($editdemandeur->pjcarteconsulaire); ?>" type="file" name="pjcarteconsulaire" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pjcinibperprev" class="col-sm-4 col-form-label">CNIB PERSONNE A PREVENIR</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="pjcinibperprev" value="<?php echo e($editdemandeur->pjcinibperprev); ?>" type="file" name="pjcinibperprev"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pjcartepresse" class="col-sm-4 col-form-label">CARTE PRESSE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="pjcartepresse" value="<?php echo e($editdemandeur->pjcartepresse); ?>" type="file" name="pjcartepresse" />
                                </div>
                            </div>			
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
      		<button class="btn btn-primary" type="reset">ANNULER</button>
            <button class="btn btn-primary" type="submit">ENREGISTRER</button>
      	</div>
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/demandeur/modifier_demandeur.blade.php ENDPATH**/ ?>