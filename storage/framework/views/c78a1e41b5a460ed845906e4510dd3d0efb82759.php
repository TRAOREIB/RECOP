
<?php $__env->startSection('contenu'); ?>
<br>
<div class="text-center">
    
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>

<hr>
<br>
<form class="form-horizontal was-validated col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('correspondant.store')); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('POST')); ?>

    <?php echo e(csrf_field()); ?>


    <div class="col-sm-12">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nom" placeholder="Entrer le nom" name="nom" value="<?php echo e(old('nom')); ?>" required>
                        <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S) <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="prenom" placeholder="Entrer le prenom" name="prenom" value="<?php echo e(old('prenom')); ?>" required>
                        <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?php $__errorArgs = ['profession'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="profession" placeholder="Entrer " name="profession" value="<?php echo e(old('profession')); ?>" required>
                        <?php $__errorArgs = ['profession'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">SEXE <span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control <?php $__errorArgs = ['datenaissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="datenaissance" placeholder="Entrer " name="datenaissance" value="<?php echo e(old('datenaissance')); ?>" required>
                        <?php $__errorArgs = ['datenaissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control <?php $__errorArgs = ['lieunaissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="lieunaissance" placeholder="Entrer " name="lieunaissance" value="<?php echo e(old('lieunaissance')); ?>" required>
                        <?php $__errorArgs = ['lieunaissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?php $__errorArgs = ['nationalite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nationalite" placeholder=" " name="nationalite" value="<?php echo e(old('nationalite')); ?>" required>
                        <?php $__errorArgs = ['nationalite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE 1 <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="telephone" placeholder=" " name="telephone" value="<?php echo e(old('telephone')); ?>" required>
                        <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?php $__errorArgs = ['telephone2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="telephone2" placeholder=" " name="telephone2" value="<?php echo e(old('telephone2')); ?>">
                        <label><i>Indiquer votre numero whatsapp</i></label>
                        <?php $__errorArgs = ['telephone2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <?php if($typecorrespondant=="Correspondant international"): ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">ORIGINE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <select name="origine" class="form-control">
                            <option>Etranger</option>
                            <option>National</option>
                        </select>
                    </div>
                </div>
                <input type='hidden' value="international" name='typeorgane'>
                <?php endif; ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">EMAIL <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control <?php $__errorArgs = ['mail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mail" value="<?php echo e(old('mail')); ?>" required>
                        <?php $__errorArgs = ['mail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION <span style="color:red">*</span></label>

                    <div class="col-sm-8">
                        <select class="form-control" name="region">
                            <?php $__currentLoopData = $allregions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="col-sm-7"><?php echo e($region->nomregion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label><i>Region de residence au Burkina Faso</i></label>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control <?php $__errorArgs = ['lieuresidence'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="lieuresidence" placeholder=" " name="lieuresidence" value="<?php echo e(old('lieuresidence')); ?>" required>
                        <label><i>La province,La ville, le secteur, le quartier</i></label>
                        <?php $__errorArgs = ['lieuresidence'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cnib">N° CNI <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control <?php $__errorArgs = ['cnib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="cnib" placeholder=" " name="cnib" value="<?php echo e(old('cnib')); ?>" required>
                        <label><i>Numero de la Carte Nationale d'Identité </i></label>
                        <?php $__errorArgs = ['cnib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control <?php $__errorArgs = ['datedelivcnib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="datedelivcnib" placeholder=" " name="datedelivcnib" value="<?php echo e(old('datedelivcnib')); ?>" required>
                        <?php $__errorArgs = ['datedelivcnib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="">
                            <label><i>Date de delivrance de la Carte Nationale d'Identite</i></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control <?php $__errorArgs = ['dateexpircnib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dateexpircnib" placeholder=" " name="dateexpircnib" value="<?php echo e(old('dateexpircnib')); ?>" required>
                        <?php $__errorArgs = ['dateexpircnib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label><i>Date d'expiration de la CNIB</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSEPORT </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" placeholder=" " name="passeport">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="carteconsulaire">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numcartepresse">N° CARTE DE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?php $__errorArgs = ['numcartepresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="numcartepresse" placeholder=" " name="numcartepresse" value="<?php echo e(old('numcartepresse')); ?>" required>
                        <?php $__errorArgs = ['numcartepresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE A PREVENIR <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control <?php $__errorArgs = ['personneprevenir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="personneprevenir" placeholder=" " name="personneprevenir" value="<?php echo e(old('personneprevenir')); ?>" required>
                        <?php $__errorArgs = ['personneprevenir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?php $__errorArgs = ['telephonepersp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="telephonepersp" placeholder=" " name="telephonepersp" value="<?php echo e(old('telephonepersp')); ?>" required>
                        <?php $__errorArgs = ['telephonepersp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <textarea class="form-control <?php $__errorArgs = ['refjournal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="refjournal" value="<?php echo e(old('refjournal')); ?>" required></textarea>
                        <?php $__errorArgs = ['refjournal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <textarea class="form-control <?php $__errorArgs = ['parcourspro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="parcourspro" rows="5" value="<?php echo e(old('parcourspro')); ?>" required></textarea>
                        <?php $__errorArgs = ['parcourspro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
                <input type="hidden" value="1" name="actif">
            </div>
        </div>
    </div>
    <p>

    <div class="col-sm-12">
        <!-- Bloc 2-->
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input class="form-control <?php $__errorArgs = ['organe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="organe" type="text" name="organe" value="<?php echo e(old('organe')); ?>" required>
                        <?php $__errorArgs = ['organe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">TYPE DE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typepresse">
                            <option>Presse Ecrite</option>
                            <option>Radio</option>
                            <option>Tele</option>
                            <option>Presse En Ligne</option>
                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input class="form-control <?php $__errorArgs = ['telorgane'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="telorgane" type="text" name="telorgane" value="<?php echo e(old('telorgane')); ?>" required>
                        <?php $__errorArgs = ['telorgane'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control <?php $__errorArgs = ['adresseorgane'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="adressestruct" type="text" name="adresseorgane" value="<?php echo e(old('adresseorgane')); ?>" required>
                        <?php $__errorArgs = ['adresseorgane'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <?php if($typecorrespondant=="Journaliste independant"): ?>
                <div class="form-group row">
                    <label for="typeorgane" class="col-sm-3 col-form-label">TYPE ORGANE DE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typeorgane">
                            <option>National</option>
                            <option>International</option>
                        </select>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($typecorrespondant=="Correspondant national"): ?>
                <input type='hidden' value="national" name='typeorgane'>
                <?php endif; ?>
                <input type='hidden' value="<?php echo e($typecorrespondant); ?>" name='typecorrespondant'>

            </div>
        </div>
    </div>
    <br>
    <div class="col-sm-12">
        <!-- CREATION DU COMPTE USER-->
        <div class="card">
            <div class="card-header text-center"><?php echo e(__("ENREGISTREMENT DU COMPTE D'UTILISATEUR")); ?></div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="identifiant" class="col-md-4 col-form-label text-md-right"><?php echo e(__("Nom d'utilisateur")); ?> <span style="color:red">*</span></label>

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
                    <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mot de passe')); ?> <span style="color:red">*</span></label>

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
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirmer le mot de passe')); ?> <span style="color:red">*</span></label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/correspondant/ajout_correspondant.blade.php ENDPATH**/ ?>