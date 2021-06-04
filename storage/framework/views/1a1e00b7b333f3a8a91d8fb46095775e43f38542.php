
<?php $__env->startSection('contenu'); ?>
<br> 
	<div class="text-center">
  		<label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE</label>
 	</div>
<div class="ligne_separe_titre"></div>
<br>
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('accreditation.store')); ?>" enctype="multipart/form-data" >
			<?php echo e(method_field('POST')); ?>

			<?php echo e(csrf_field()); ?>	
			<div class="col-sm-12">  <!-- Debut du Bloc -->
				<div class="card"> 
					<div class=" card text-center card-header">SUJET A COUVRIR</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="titreevenement">TITRE(S):</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="titreevenement" placeholder="Entrer le(s) titre(s) de l'evenement" name="titreevenement">
							</div>
						</div>
						<!-- LIEU EVENEMENT ANNULE
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="lieuevenement">LIEU:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="lieuevenement" placeholder="Entrer le lieu" name="lieuevenement">
							</div>
						</div>
						-->
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedebut">DATE DE DEBUT</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datedebut" placeholder="Entrer " name="datedebut">
                                </div>
                         </div>
						 <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datefin">DATE DE FIN</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datefin" placeholder="Entrer " name="datefin">
                                </div>
                         </div>                       
					</div>
				</div>
                <p></p>
                <div class="card"> 
                    <div class=" card text-center card-header">REGION (S)</div>
                        <div class="card-body">
                         
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-3 col-form-label">REGION 1</label>
                                    <div class="col-sm-4  col-md-5"> 
                                        <select class="form-control" name="region1"> 
                                        <option selected>choisir la region</option>
										<option>Boucle du Mouhoun</option>
										<option>Centre</option>
										<option>Centre-Est</option>
										<option>Centre-Nord</option>
										<option>Centre-Ouest</option>
										<option>Centre-Sud</option>
										<option>Est</option>
										<option>Hauts-Bassins</option>
										<option>Nord</option>
										<option>Plateau Central</option>
										<option>Sahel</option>
										<option>Sud-Ouest</option>
										<option>Cascades</option>   
                                        <small class="text-danger"><?php echo e($errors->first('nomregion',':message')); ?></small> 
                                        </select> 
                                    </div>       
                                </div>
                               <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-3 col-form-label">REGION 2</label>
                                      <div class="col-sm-4  col-md-5"> 
                                        <select class="form-control" name="region2"> 
                                        <option selected>choisir la region</option>
                                        <option>Boucle du Mouhoun</option>
										<option>Centre</option>
										<option>Centre-Est</option>
										<option>Centre-Nord</option>
										<option>Centre-Ouest</option>
										<option>Centre-Sud</option>
										<option>Est</option>
										<option>Hauts-Bassins</option>
										<option>Nord</option>
										<option>Plateau Central</option>
										<option>Sahel</option>
										<option>Sud-Ouest</option>
										<option>Cascades</option>  
                                        <small class="text-danger"><?php echo e($errors->first('nomregion',':message')); ?></small> 
                                        </select> 
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-3 col-form-label">REGION 3</label>
                                    <div class="col-sm-4  col-md-5"> 
                                        <select class="form-control" name="region3"> 
                                        <option selected>choisir la region</option>
                                            <option>Boucle du Mouhoun</option>
										<option>Centre</option>
										<option>Centre-Est</option>
										<option>Centre-Nord</option>
										<option>Centre-Ouest</option>
										<option>Centre-Sud</option>
										<option>Est</option>
										<option>Hauts-Bassins</option>
										<option>Nord</option>
										<option>Plateau Central</option>
										<option>Sahel</option>
										<option>Sud-Ouest</option>
										<option>Cascades</option>  
                                        <small class="text-danger"><?php echo e($errors->first('nomregion',':message')); ?></small> 
                                        </select> 
                                    </div> 
                                </div>
                                 <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-3 col-form-label">REGION 4</label>
                                   <div class="col-sm-4  col-md-5"> 
                                        <select class="form-control" name="region4"> 
                                        <option selected>choisir la region</option>
                                            <option>Boucle du Mouhoun</option>
										<option>Centre</option>
										<option>Centre-Est</option>
										<option>Centre-Nord</option>
										<option>Centre-Ouest</option>
										<option>Centre-Sud</option>
										<option>Est</option>
										<option>Hauts-Bassins</option>
										<option>Nord</option>
										<option>Plateau Central</option>
										<option>Sahel</option>
										<option>Sud-Ouest</option>
										<option>Cascades</option> 
                                        <small class="text-danger"><?php echo e($errors->first('nomregion',':message')); ?></small> 
                                        </select> 
                                    </div> 
                                </div>
                                 <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-3 col-form-label">REGION 5</label>
                                  <div class="col-sm-4  col-md-5"> 
                                        <select class="form-control" name="region5"> 
                                        <option selected>choisir la region</option>
                                           <option>Boucle du Mouhoun</option>
										<option>Centre</option>
										<option>Centre-Est</option>
										<option>Centre-Nord</option>
										<option>Centre-Ouest</option>
										<option>Centre-Sud</option>
										<option>Est</option>
										<option>Hauts-Bassins</option>
										<option>Nord</option>
										<option>Plateau Central</option>
										<option>Sahel</option>
										<option>Sud-Ouest</option>
										<option>Cascades</option>  
                                        <small class="text-danger"><?php echo e($errors->first('nomregion',':message')); ?></small> 
                                        </select> 
                                    </div> 
                                </div>
                               
							   <div class="form-group row">
                                    <div class="col-sm-4 text-center">
                                    <input  id="allregion" type="checkbox" name="allregion"/>
                                    <label for="allregion">TOUTES LES REGIONS</label>
                                    </div>
                        </div> 
                        </div>                    
                    </div>
                
                <p></p>
				<div class="card"> 
                    <div class=" card text-center card-header">TRANSPORT</div>
                        <div class="card-body">
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-3 col-form-label">MOYEN DE TRANPORT</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="moyentransport" type="text" name="moyentransport"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="immatriculation" class="col-sm-3 col-form-label">IMMATRICULATION</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="immatriculation" type="text" name="immatriculation"/>
                                </div>
                        </div>                    
                    </div>
                </div>
                <p></p>
                <div class="card"> 
					<div class=" card text-center card-header">MEMBRES DE L'EQUIPE</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" name="membresequipe" rows="8"></textarea>
                     </div>
                            
                    </div> 
                </div>
                <p></p> 
				<div class="card"> 
					<div class=" card text-center card-header">LISTE DU MATERIEL</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3"></textarea>
                                </div>
                    </div> 
                </div>
    				
			</div>
			</div>
			<p></p>
		<div class="text-center">
            <button class="btn btn-primary" type="submit">CONTINUER</button>
	  		<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
	<p></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/accreditation/ajout_accreditation.blade.php ENDPATH**/ ?>