
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE</label>
</div>

<hr>
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
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">REGION</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="idregion">
                            <?php $__currentLoopData = $allregions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="col-sm-7" value="<?php echo e($region->idregion); ?>"><?php echo e($region->nomregion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">LIEU EVENEMENT</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datefin" placeholder="Entrer " name="lieuevenement">
                    </div>
                </div>
                <input type="hidden" value="<?php echo e($test); ?>" name="test">
                <input type="hidden" value="<?php echo e($iddemandeur); ?>" name="iddemandeur">
                <input type="hidden" value="0" name="nouveaudemandeur">

                <div class="row">
                    <input type="submit" class="btn btn-primary offset-4" name="addregion" value="Valider">
                    <input type="reset" class="btn btn-primary offset-1"  name="addregion" value="Annuler">

                </div>
            </div>
            </form>
            <div class="card-footer">
                <div><label>Liste des Sujets à couvrir par region</label></div>
                <table class="table table-striped">
                    <tr>
                        <th>Region</th>
                        <th>Evenement</th>
                        <th>Lieu</th>
                        <th>Date de Debut</th>
                        <th>Date de Fin</th>
                        <th>Action</th>
                    </tr>
                    <?php if(isset($listesujet)): ?>
                    <?php $__currentLoopData = $listesujet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($sujet->nomregion); ?></td>
                        <td><?php echo e($sujet->titre); ?></td>
                        <td><?php echo e($sujet->lieuevenement); ?></td>
                        <td><?php echo e($sujet->datedebut); ?></td>
                        <td><?php echo e($sujet->datefin); ?></td>

                        <td><form method="POST" action="<?php echo e(route('retirersujet')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <a ></a>
                                <button class="btn btn-danger " type="submit"  onclick="return confirm('Confirmer le retrait du sujet ')">Retirer</button>
                                <input type="hidden" value="<?php echo e($sujet->idaccrediregion); ?>" name="idaccrediregion">
                                 <input type="hidden" value="0" name="nouveaudemandeur">
                            </form> 
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>  
                </table>
            </div>
        </div>

        <p></p>
        <form class="form-horizontal"  method="POST" action="<?php echo e(route('accreditation.update',[$idaccreditation])); ?>" enctype="multipart/form-data" >
            <?php echo e(method_field('PUT')); ?>

            <?php echo e(csrf_field()); ?>	
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
                <div class=" card text-center card-header">LISTE DU MATERIEL</div>
                <div class="card-body">
                    <div class="col-sm-14">
                        <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3"></textarea>
                    </div>
                    <input type="hidden" value="0" name="nouveaudemandeur">
                </div> 

            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">CONTINUER</button>
                <button class="btn btn-primary" type="reset">ANNULER</button>
            </div>

        </form>
    </div>
</div>
<p></p>



<p></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/demandeur/nouv_accreditation.blade.php ENDPATH**/ ?>