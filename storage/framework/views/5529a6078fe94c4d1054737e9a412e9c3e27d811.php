
<?php $__env->startSection('contenu'); ?>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label>
</div>
<div class="ligne_separe_titre"></div>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('piecesjointes.store')); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('POST')); ?>

    <?php echo e(csrf_field()); ?>	

    <div class="col-sm-12">  <!-- Bloc 2-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="photo" type="file" name="photo" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cv" class="col-sm-3 col-form-label">CV</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="cv" type="file" name="cv" />
                        <label><i>scannage du fichier numerique du CV</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">VISA DU MEDIA</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="visamedia" />
                        <label><i>scannage du fichier numerique du visa</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNIB</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="pjcnib" />
                        <label><i>scannage de la CNIB (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjpasseport" type="file" name="pjpasseport"/>
                        <label><i>scannage de la première page du passeport</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="pjcarteconsulaire" />
                        <label><i>scannage de la carte (Recto et Verso)</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcartepresse" type="file" name="pjcartepresse" />
                        <label><i>scannage de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                <input type="text" value="<?php echo e($maxid); ?>" name="idcorrespondant">
            </div>
        </div>
    </div>

    <p></p>

    <div class="card">
        <div class="card-header"><?php echo e(__("Enregistrement d'utilisateur")); ?></div>

        <div class="card-body">
            <div class="form-group row">
                <label for="identifiant" class="col-md-4 col-form-label text-md-right"><?php echo e(__("Nom d'utilisateur")); ?></label>

                <div class="col-md-6">
                    <input id="identifiant" type="text" class="form-control <?php $__errorArgs = ['identifiant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="identifiant" value="<?php echo e(old('identifiant')); ?>" required autocomplete="identifiant">

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
            <input type="text" value="<?php echo e($request->nom); ?> <?php echo e($request->prenom); ?>" name="name">
            <input type="text" value="<?php echo e($request->mail1); ?>"  name="email">
            <input type="text" value="Correspondant"  name="role">
             
        </div>
    </div>
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/correspondant/ajout_correspondant_suite.blade.php ENDPATH**/ ?>