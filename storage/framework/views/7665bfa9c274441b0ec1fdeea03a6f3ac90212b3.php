
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<br>
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE</label>
</div>

<hr>
<br>
<?php if(isset($message)): ?>
<div class="alert-success col-sm-7 text-center offset-sm-2"> 
    <b><i><label class="label-info"><?php echo e($message); ?></label></i></b>
</div>
<?php endif; ?>
<br>

<form class="form-horizontal was-validated col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('accreditation.store')); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('POST')); ?>

    <?php echo e(csrf_field()); ?>

    <div class="col-sm-12">
        <!-- Debut du Bloc -->
        <div class="card">
            <div class=" card text-center card-header">SUJET A COUVRIR</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="titreevenement">TITRE:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?php $__errorArgs = ['titreevenement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="titreevenement" placeholder="Entrer le titre de l'evenement" name="titreevenement" value="<?php echo e(old('titreevenement')); ?>" required>
                        <?php $__errorArgs = ['titreevenement'];
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
                    <label class="col-sm-3 col-form-label" for="datedebut">DATE DE DEBUT</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="datedebut" placeholder="Entrer " name="datedebut" value="<?php echo e(old('datedebut')); ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">DATE DE FIN</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="datefin" placeholder="Entrer " name="datefin" value="<?php echo e(old('datefin')); ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">REGION</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="idregion" required>
                            <?php $__currentLoopData = $allregions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="col-sm-7" value="<?php echo e($region->idregion); ?>"><?php echo e($region->nomregion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">LOCALITÉ PRECISE</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?php $__errorArgs = ['lieuevenement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="lieuevenement" placeholder="Entrer " name="lieuevenement" value="<?php echo e(old('lieuevenement')); ?>" required>
                        <?php $__errorArgs = ['lieuevenement'];
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
                        <label><i>Nom du village, La province, La commune</i></label>
                    </div>
                </div>
                <input type="hidden" value="<?php echo e($test); ?>" name="test">
                <div class="row">
                    <input type="submit" class="btn btn-primary offset-4" name="addregion" value="Ajouter">
                    <input type="reset" class="btn btn-primary offset-1" name="addregion" value="Annuler">

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

            <td>
                <form method="POST" action="<?php echo e(route('retirersujet')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <a></a>
                    <button class="btn btn-danger " type="submit" onclick="return confirm('Confirmer le retrait du sujet ')">Retirer</button>
                    <input type="hidden" value="<?php echo e($sujet->idaccrediregion); ?>" name="idaccrediregion">
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </table>
</div>
</div>

<p></p>
<form class="form-horizontal" method="POST" action="<?php echo e(route('accreditation.update',[$idaccreditation])); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

    <div class="card">
        <div class=" card text-center card-header">TRANSPORT UTILIÉ AU BURKINA FASO</div>
        <div class="card-body">
            <div class="form-group row">
                <label for="moyentransport" class="col-sm-3 col-form-label">MOYEN DE TRANPORT</label>
                <div class="col-sm-7">
                    <select class="form-control" name="moyentransport">
                        <option>aerien</option>
                        <option>automobile</option>
                        <option>motocyclette</option>
                        <option>autre</option>
                    </select>
                    <!--  <input class="form-control" id="moyentransport" type="text" name="moyentransport" required /> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="immatriculation" class="col-sm-3 col-form-label">IMMATRICULATION</label>
                <div class="col-sm-7">
                    <input class="form-control" id="immatriculation" type="text" name="immatriculation" />
                </div>
            </div>

        </div>
    </div>
    <p></p>
    <div class="card">
        <div class=" card text-center card-header">LISTE DU MATERIEL</div>
        <div class="card-body">
            <div class="col-sm-14">
                <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3" required></textarea>
            </div>
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
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/accreditation/ajout_accreditation.blade.php ENDPATH**/ ?>