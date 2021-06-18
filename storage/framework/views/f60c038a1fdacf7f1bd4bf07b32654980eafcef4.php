
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> DETAILS DU DEMANDEUR</label>
</div>
<hr>
<br>

<!-- IDENTITE DU DEMANDEUR-->

<div class="text-center" style="margin:5;">  <!-- Bloc IDENTITE DU DEMANDEUR-->
    <?php $__currentLoopData = $demandeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card col-sm-8" style="margin:5;"> 
        <div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
        <div class="card-body">
            
            <div class="form-group row">
                <label class=" col-form-label" for="nom">NOM:  <?php echo e($dem->nom); ?></label>
                <label class=" col-form-label offset-1" for="nom">PRENOM:  <?php echo e($dem->prenom); ?></label>         
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION:  <?php echo e($dem->profession); ?></label> 
                <label class="col-form-label offset-1" for="nom">SEXE:  <?php echo e($dem->sexe); ?></label> 
            </div>

            <div class="form-group row">
                <label class="col-form-label" for="nom">DATE DE NAISSANCE:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($dem->datenaissance); ?></label>               
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">LIEU DE NAISSANCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo e($dem->lieunaissance); ?></label>           
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION:  <?php echo e($dem->nationalite); ?></label> 
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE:  <?php echo e($dem->telephone); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">TELEPHONE PAYS DE RESIDENCE:  <?php echo e($dem->telephoneresidence); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">EMAIL:  <?php echo e($dem->mail); ?></label> 
            </div> 

            <div class="form-group row">
                <label class="col-form-label" for="nom">PAYS DE RESIDENCE:  <?php echo e($dem->lieuresidence); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">ADRESSE PAYS DE RESIDENCE:  <?php echo e($dem->adressepaysresidence); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CNI:  <?php echo e($dem->cnib); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE DE DELIVRENCE:  <?php echo e($dem->datedelivcnib); ?></label>     
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE D'EXPIRATION:  <?php echo e($dem->dateexpircnib); ?></label>                  
            </div> 
            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° PASSEPORT:  <?php echo e($dem->passeport); ?></label> 
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° CARTE CONSULAIRE:  <?php echo e($dem->carteconsulaire); ?></label> 
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">FIXEUR:  <?php echo e($dem->personneprevenir); ?></label>                   
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE FIXEUR:  <?php echo e($dem->telephonepersp); ?></label>          
            </div> 
            <div class="form-group row">
                <label class=" col-form-label" for="nom">ADRESSE FIXEUR:  <?php echo e($dem->adressfixeur); ?></label>                                     
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">PROFESSION FIXEUR:  <?php echo e($dem->professionfixeur); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CARTE PROFESSIONEL DU FIXEUR:  <?php echo e($dem->laissepasser); ?></label>  
            </div>  
            <hr>
            <label style="background-color: #16c7ff;">- INFORMATION SUR L'ORGANE DE PRESSE -</label>
            <div class="form-group row">
                <label class="col-form-label" for="institution">NOM ORGANE/INSTITUTION:  <?php echo e($dem->organe); ?></label>  
            </div>                
            <div class="form-group row">
                <label class="col-form-label" for="telorgane">TELEPHONE ORGANE:  <?php echo e($dem->telorgane); ?></label>                     
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="adresseorgane">ADRESSE ORGANE:  <?php echo e($dem->adressestruct); ?></label>      
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="laissezpasser">N° LAISSEZ PASSER:  <?php echo e($dem->laissepasser); ?></label>                     
            </div>
        </div>
    </div>	
       
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- FIN DU Bloc sur les informations personnelles-->
</div>
<br><br>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/demandeur/details_demandeur.blade.php ENDPATH**/ ?>