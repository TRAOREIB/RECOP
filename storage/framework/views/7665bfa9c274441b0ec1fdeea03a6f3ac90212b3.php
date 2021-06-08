
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
                <table class="dTable col-sm-12" id="tab">
                    <thead>
                        <tr>
                            <td>
                                <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbregion'); return false;" value="Ajouter une Region">
                            </td>
                        </tr>
                    <div></div>
                    </thead>

                    <tbody>
                        <tr>    
                            <td> 
                                <select name="region[]" class="form-control">
                                    <?php $__currentLoopData = $allregions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="col-sm-7" value="<?php echo e($region->idregion); ?>"><?php echo e($region->nomregion); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                             
                            <td><input type="button" class="form-control btn-info col-sm-6" value="Supprimer" onclick="delLigne(this, 'nbregion'); return false;"></td>
                        </tr>
                    </tbody>
                    <input type="hidden" value="1" name="nbregion" id="nbregion">
                </table>

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
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/accreditation/ajout_accreditation.blade.php ENDPATH**/ ?>