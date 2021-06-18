
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> MODIFIER VOTRE COMPTE CORRESPONDANT</label>
</div>
<hr>
<br>

<!-- IDENTITE DU DEMANDEUR-->

<div class="col-sm-12 row">  <!-- Bloc CORRESPONDANT-->

    <div class="card col-sm-6"> 
        <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
        <div class="card-body">
            <label class="col-sm-12 row" style="background-color: #16c7ff">INFO  PERSONNELLES      
                <form method="get" action="<?php echo e(route("correspondant.edit",[$editcorrespondant->idcorrespondant])); ?>">
                    <?php echo csrf_field(); ?>  
                    <input type="submit" class="btn btn-warning offset-5" value="Modifier les Informations">
                    <input type="hidden"  value="<?php echo e($idpiecesjointes); ?>" name="idpj">
                    <input type="hidden"  value="<?php echo e($iduser); ?>" name="iduser">
                    <input type="hidden"  value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant">
                </form>
            </label>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">NOM:  <?php echo e($editcorrespondant->nom); ?></label>
                <label class=" col-form-label offset-1" for="nom">PRENOM:  <?php echo e($editcorrespondant->prenom); ?></label>         
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION:  <?php echo e($editcorrespondant->profession); ?></label> 
                <label class="col-form-label offset-1" for="nom">SEXE:  <?php echo e($editcorrespondant->sexe); ?></label> 
            </div>

            <!--            <div class="form-group row">
                            <label class="col-form-label" for="nom">DATE DE NAISSANCE:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($editcorrespondant->datenaissance); ?></label>               
                        </div>
                        <div class="form-group row">
                            <label class=" col-form-label" for="nom">LIEU DE NAISSANCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo e($editcorrespondant->lieunaissance); ?></label>           
                        </div>-->
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">PROFESSION:  <?php echo e($editcorrespondant->nationalite); ?></label> 
                        </div>-->
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE:  <?php echo e($editcorrespondant->telephone); ?></label>
            </div>
            <!--            <div class="form-group row">
                            <label class="col-form-label" for="nom">TELEPHONE PAYS DE RESIDENCE:  <?php echo e($editcorrespondant->telephoneresidence); ?></label>
                        </div>-->
            <div class="form-group row">
                <label class="col-form-label" for="nom">EMAIL:  <?php echo e($editcorrespondant->mail); ?></label> 
            </div> 

            <div class="form-group row">
                <label class="col-form-label" for="nom">PAYS DE RESIDENCE:  <?php echo e($editcorrespondant->lieuresidence); ?></label>
            </div>
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">ADRESSE PAYS DE RESIDENCE:  <?php echo e($editcorrespondant->adressepaysresidence); ?></label>
                        </div>-->
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CNI:  <?php echo e($editcorrespondant->cnib); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE DE DELIVRENCE:  <?php echo e($editcorrespondant->datedelivcnib); ?></label>     
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE D'EXPIRATION:  <?php echo e($editcorrespondant->dateexpircnib); ?></label>                  
            </div> 
            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° PASSEPORT:  <?php echo e($editcorrespondant->passeport); ?></label> 
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° CARTE DE PRESSE:  <?php echo e($editcorrespondant->numcartepresse); ?></label> 
            </div>
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">N° CARTE CONSULAIRE:  <?php echo e($editcorrespondant->carteconsulaire); ?></label> 
                        </div>-->
            <div class="form-group row">
                <label class="col-form-label" for="nom">PERSONNE A PREVENIR:  <?php echo e($editcorrespondant->personneprevenir); ?></label>                   
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE PERSONNE A PREVENIR:  <?php echo e($editcorrespondant->telephonepersp); ?></label>          
            </div> 
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">ADRESSE FIXEUR:  <?php echo e($editcorrespondant->adressfixeur); ?></label>                                     
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="nom">PROFESSION FIXEUR:  <?php echo e($editcorrespondant->professionfixeur); ?></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="nom">N° CARTE PROFESSIONEL DU FIXEUR:  <?php echo e($editcorrespondant->laissepasser); ?></label>  
                        </div>  -->

            <label style="background-color: #16c7ff;" class="col-sm-12 text-center">- INFORMATION SUR L'ORGANE DE PRESSE -</label>
            <div class="form-group row">
                <label class="col-form-label" for="institution">NOM ORGANE/INSTITUTION:  <?php echo e($editcorrespondant->organe); ?></label>  
            </div>                
            <div class="form-group row">
                <label class="col-form-label" for="telorgane">TELEPHONE ORGANE:  <?php echo e($editcorrespondant->telorgane); ?></label>                     
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="adresseorgane">ADRESSE ORGANE:  <?php echo e($editcorrespondant->adresseorgane); ?></label>      
            </div>
           
        </div>
    </div>	

    <!-- Bloc IDENTITE DU DEMANDEUR-->

    <div class="card col-sm-6 "> 
        <div class=" text-center card-header">MES PIECES JOINTES </div>
        <div class="card-body">


            <label class="col-sm-12 row " style="background-color: #16c7ff">PIECES JOINTES
                <form method="post" action="<?php echo e(route('editpjcorrespondant')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-warning offset-5" value="Modifier les Pieces Jointes">
                    <input type="hidden"  value="<?php echo e($idpiecesjointes); ?>" name="idpj">
                    <input type="hidden"  value="<?php echo e($iduser); ?>" name="iduser">
                    <input type="hidden"  value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant"> 
                </form>
            </label>
            <?php $__currentLoopData = $piecesjointes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <?php if(empty(!$pj->photo)): ?>
                <label class=" col-form-label" for="nom">PHOTO:voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->photo ")); ?>" target="blank"> ici</a></label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->cv)): ?>
                <label class=" col-form-label " for="nom">CV: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->cv")); ?>" target="blank"> ici</a> </label> <br>                 
                <?php endif; ?>
                <?php if(empty(!$pj->pjpasseport)): ?>
                <label class=" col-form-label" for="nom">PASSEPORT:  voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjpasseport")); ?>" target="blank"> ici</a></label><br>  
                <?php endif; ?>
                <?php if(empty(!$pj->pjcnib)): ?>
                <label class=" col-form-label" for="nom">CNI:  voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcnib  ")); ?>" target="blank"> ici</a></label><br> 
                <?php endif; ?>
                <?php if(empty(!$pj->pjcartepresse)): ?>
                <label class=" col-form-label" for="nom">CARTE DE PRESSE:  voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcartepresse")); ?>" target="blank"> ici</a></label><br> 
                <?php endif; ?>
                <?php if(empty(!$pj->pjlaissezpasser)): ?>
                <label class=" col-form-label" for="nom">LAISSEZ PASSER:  voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjlaissezpasser")); ?>" target="blank"> ici</a></label><br> 
                <?php endif; ?>
                <?php if(empty(!$pj->pjcnibperprev)): ?>
                <label class=" col-form-label" for="nom">CNI FIXEUR: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcnibperprev")); ?>" target="blank"> ici</a> </label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->pjpasseportperprev)): ?>
                <label class=" col-form-label" for="nom">PASSEPORT FIXEUR: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjpasseportperprev")); ?>" target="blank"> ici</a> </label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->pjcarteconsulaire)): ?>
                <label class=" col-form-label" for="nom">CARTE CONSULAIRE: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcarteconsulaire")); ?>" target="blank"> ici</a> </label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->lettrerecommendation)): ?>
                <label class=" col-form-label" for="nom">LETTRE DE RECOMMANDATION:  voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->lettrerecommendation")); ?>" target="blank"> ici</a></label>
                <?php endif; ?>
                <?php if(empty(!$pj->visamedia)): ?>
                <label class=" col-form-label" for="nom">VISA DU MEDIA:  voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->visamedia")); ?>" target="blank"> ici</a></label>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>	




</div>

<!-- FIN DU Bloc sur les informations personnelles-->
<br>		
</form>
<br><br>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/correspondant/details_correspondant.blade.php ENDPATH**/ ?>