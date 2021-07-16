
<?php $__env->startSection('contenu'); ?>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> DEMANDER UNE ACCREDITATION DE PRESSE </label>
</div>
<div class="ligne_separe_titre"></div>
<br>	

<form class="form-horizontal col-sm-10 offset-1 was-validated" role="form" method="POST" action="<?php echo e(route('storenouvdemandeur')); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('POST')); ?>

    <?php echo e(csrf_field()); ?>	

    <!-- IDENTITE DU DEMANDEUR-->

    <div class="col-sm-12">  <!-- Bloc IDENTITE DU DEMANDEUR-->
        <div class="card"> 
            <div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
            <div class="card-body"> 
               <!--  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE PAYS DE RESIDENCE:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="telephone" placeholder=" telephone de votre pays de residence " name="telephoneresidence">
                    </div>
                </div>
                 -->
                
               <!--  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">PAYS DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieuresidence" placeholder=" " name="lieuresidence">
                    </div>
                </div> -->
                <!-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="adressepaysresidence">ADRESSE PAYS DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control"   name="adressepaysresidence">
                        <label><i>La province, la ville, rue, secteur </i></label>
                    </div>
                </div>
           -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="personneprevenir" placeholder=" " name="personneprevenir" required>
                        <label><i>Nom et Prenom(s) du fixeur</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE DU FIXEUR:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="telephonepersp" placeholder=" " name="telephonepersp" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="adressfixeur">ADRESSE DU FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="adressfixeur" placeholder=" " name="adressfixeur" required>
                        <label><i>La province, La ville, le secteur, le quartier</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="professionfixeur">PROFESSION DU FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="professionfixeur" placeholder=" " name="professionfixeur" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteprofessionnel">N° CARTE PROFESSIONEL DU FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="carteprofessionnel" placeholder=" " name="carteprofessionnelfixeur" required>
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
                <input type="hidden" value="0" name="actifcorrespondant">
                
            </div>
        </div>				
    </div>		
    <br>
    <div class="col-sm-12">  <!-- Bloc ORGANE DE PRESSE-->
        <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM ORGANE/INSTITUTION</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="organe" type="text" name="organe" required >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE ORGANE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="telorgane" type="text" name="telorgane" required >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE ORGANE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="adressestruct" type="text" name="adressestruct" required >
                    </div>
                </div>
               
                <input type="hidden" value="0" name="test">
            </div> 
        </div>
    </div>

    <br>		
    <div class="text-center">	
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
    </div>
</form>
<br><br>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECO\resources\views/correspondant/correspondant_demandeur.blade.php ENDPATH**/ ?>