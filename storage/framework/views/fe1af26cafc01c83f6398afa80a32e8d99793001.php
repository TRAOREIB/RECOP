
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<br>
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> LES DEMANDE D'ACCREDITATION</label>
</div>
<hr>
<br>
<?php if($valider==0): ?>
<div class="alert alert-danger col-sm-6 text-center offset-3">
    <b> <label>La Demande d'accreditation N° <?php echo e($idaccreditation); ?></label></b>
</div>
<?php endif; ?>

<div class="row">
    <div>
        <?php $__currentLoopData = $demandeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="post" action="<?php echo e(route("infoampliateur")); ?>">
            <?php echo csrf_field(); ?>
            &nbsp;&nbsp;&nbsp;
            <input type="submit" value="Commenter la demande" class="btn btn-warning">
            <input type="hidden" value="<?php echo e($idaccreditation); ?>" name="idaccreditation">
            <input type="hidden" value="<?php echo e($iduser); ?>" name="iduser">
            <input type="hidden" value="<?php echo e($datevalider); ?>" name="datevalider">
            <input type="hidden" value="1" name="valider">
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<br>
<div class="col-sm-12 row">
    <!-- Bloc IDENTITE DU DEMANDEUR-->
    <?php $__currentLoopData = $demandeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card col-sm-6">
        <div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
        <div class="card-body">
            <label class="col-sm-12 row" style="background-color: #16c7ff">INFO PERSONNELLES
                <form method="get" action="<?php echo e(route("demandeur.edit",[$iddemandeur])); ?>">
                    <?php echo csrf_field(); ?>
                    <!--<input type="submit" class="btn btn-warning offset-8" value="Modifier les Info">-->
                    <input type="hidden" value="<?php echo e($idaccreditation); ?>" name="idaccreditation">
                    <input type="hidden" value="<?php echo e($iddemandeur); ?>" name="iddemandeur">
                    <input type="hidden" value="<?php echo e($iduser); ?>" name="iduser">
                    <input type="hidden" value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant">
                </form>
            </label>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">NOM: <?php echo e($dem->nom); ?></label>
                <label class=" col-form-label offset-1" for="nom">PRENOM: <?php echo e($dem->prenom); ?></label>
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION: <?php echo e($dem->profession); ?></label>
                <label class="col-form-label offset-1" for="nom">SEXE: <?php echo e($dem->sexe); ?></label>
            </div>

            <div class="form-group row">
                <label class="col-form-label" for="nom">DATE DE NAISSANCE: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($dem->datenaissance); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">LIEU DE NAISSANCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($dem->lieunaissance); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION: <?php echo e($dem->nationalite); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE: <?php echo e($dem->telephone); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">TELEPHONE PAYS DE RESIDENCE: <?php echo e($dem->telephoneresidence); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">EMAIL: <?php echo e($dem->mail); ?></label>
            </div>

            <div class="form-group row">
                <label class="col-form-label" for="nom">PAYS DE RESIDENCE: <?php echo e($dem->lieuresidence); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">ADRESSE PAYS DE RESIDENCE: <?php echo e($dem->adressepaysresidence); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CNI: <?php echo e($dem->cnib); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE DE DELIVRENCE: <?php echo e($dem->datedelivcnib); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE D'EXPIRATION: <?php echo e($dem->dateexpircnib); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° PASSEPORT: <?php echo e($dem->passeport); ?></label>
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° CARTE CONSULAIRE: <?php echo e($dem->carteconsulaire); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">FIXEUR: <?php echo e($dem->personneprevenir); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE FIXEUR: <?php echo e($dem->telephonepersp); ?></label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">ADRESSE FIXEUR: <?php echo e($dem->adressfixeur); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">PROFESSION FIXEUR: <?php echo e($dem->professionfixeur); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CARTE PROFESSIONEL DU FIXEUR: <?php echo e($dem->laissepasser); ?></label>
            </div>
            <hr>
            <label style="background-color: #16c7ff;">- INFORMATION SUR L'ORGANE DE PRESSE -</label>
            <div class="form-group row">
                <label class="col-form-label" for="institution">NOM ORGANE/INSTITUTION: <?php echo e($dem->organe); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="telorgane">TELEPHONE ORGANE: <?php echo e($dem->telorgane); ?></label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="adresseorgane">ADRESSE ORGANE: <?php echo e($dem->adressestruct); ?></label>
            </div>

        </div>
    </div>
    <!-- Bloc IDENTITE DU DEMANDEUR-->

    <div class="card col-sm-6 ">
        <div class=" text-center card-header">MA DEMANDE </div>
        <div class="card-body">
            <fieldset style="border-color: black">
                <label class="col-sm-12 row" style="background-color: #16c7ff">SUJETS ET MATERIELS
                    <form method="get" action="<?php echo e(route('accreditation.edit',[$idaccreditation])); ?>">
                        <?php echo csrf_field(); ?>
                        <!--                        <input type="submit" class="btn btn-warning offset-7" value="Modifier les Sujets">-->
                        <input type="hidden" value="<?php echo e($idaccreditation); ?>" name="idaccreditation">
                        <input type="hidden" value="<?php echo e($iddemandeur); ?>" name="iddemandeur">
                        <input type="hidden" value="<?php echo e($iduser); ?>" name="iduser">
                        <input type="hidden" value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant">
                        <input type="hidden" value="0" name="test">
                    </form>
                </label>
                <?php $__currentLoopData = $accreditations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accredi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group row">
                    <label class=" col-form-label" for="nom">REGION: <?php echo e($accredi->nomregion); ?> </label>
                    <label class=" col-form-label offset-1" for="nom">SUJET: <?php echo e($accredi->titre); ?></label>
                    <label class=" col-form-label" for="nom">DATE DE DEBUT: <?php echo e($accredi->datedebut); ?> </label>
                    <label class=" col-form-label offset-1" for="nom">DATE DE FIN: <?php echo e($accredi->datefin); ?> </label>
                    <label class=" col-form-label" for="nom">LIEU EVENEMENT: <?php echo e($accredi->lieuevenement); ?> </label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </fieldset>
            <label class="col-sm-12 text-center" style="background-color: #16c7ff">LISTE DU MATERIEL</label>
            <?php $__currentLoopData = $monaccreditation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monaccredi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">MOYEN DE TRANSPORT: <?php echo e($monaccredi->moyentransport); ?> </label>
                <label class=" col-form-label offset-1" for="nom">IMMATRICULATION: <?php echo e($monaccredi->immatriculation); ?></label>
                <label class=" col-form-label" for="nom">MATERIEL: <?php echo e($monaccredi->listemateriel); ?> </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <label class="col-sm-12 row " style="background-color: #16c7ff">PIECES JOINTES
                <form method="get" action="<?php echo e(route('piecesjointes.edit',[$idaccreditation])); ?>">
                    <?php echo csrf_field(); ?>
                    <!--<input type="submit" class="btn btn-warning offset-8" value="Modifier les Pièces">-->
                    <input type="hidden" value="<?php echo e($idaccreditation); ?>" name="idaccreditation">
                    <input type="hidden" value="<?php echo e($iddemandeur); ?>" name="iddemandeur">
                    <input type="hidden" value="<?php echo e($iduser); ?>" name="iduser">
                    <input type="hidden" value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant">
                </form>
            </label>
            <?php $__currentLoopData = $piecesjointes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <?php if(empty(!$pj->photo)): ?>
                <label class=" col-form-label" for="nom">PHOTO:voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->photo  ")); ?>"> ici</a></label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->cv)): ?>
                <label class=" col-form-label " for="nom">CV: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->cv  ")); ?>"> ici</a> </label> <br>
                <?php endif; ?>
                <label class=" col-form-label" for="nom">PASSEPORT: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjpasseport  ")); ?>"> ici</a></label><br>
                <?php if(empty(!$pj->pjcnib)): ?>
                <label class=" col-form-label" for="nom">CNI: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcnib")); ?>"> ici</a></label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->pjcartepresse)): ?>
                <label class=" col-form-label" for="nom">CARTE DE PRESSE: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcartepresse ")); ?>"> ici</a></label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->pjpasseportperprev)): ?>
                <label class=" col-form-label" for="nom">PASSEPORT FIXEUR: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjpasseportperprev")); ?>"> ici</a> </label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->pjcarteconsulaire)): ?>
                <label class=" col-form-label" for="nom">CARTE CONSULAIRE: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->pjcarteconsulaire")); ?>"> ici</a> </label><br>
                <?php endif; ?>
                <?php if(empty(!$pj->lettrerecommendation)): ?>
                <label class=" col-form-label" for="nom">LETTRE DE RECOMMANDATION: voir la pièce cliquez<a href="<?php echo e(asset("storage/docs/$pj->lettrerecommendation")); ?>"> ici</a></label>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- FIN DU Bloc sur les informations personnelles-->
<br>
</form>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/ampliateur/details_accreditation.blade.php ENDPATH**/ ?>