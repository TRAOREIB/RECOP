<?php $__env->startSection('contenu'); ?>

<br><br><br><br><br><br><br>
<div class="col-sm-7 offset-3" style="margin-top: 0px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Enregistrer votre candidature </h4></i>
    <div style="background: #285e8e;height:10px"></div>
</div>
<br>
<?php if(session()->has('message')): ?>
<div class="alert alert-danger col-sm-3 offset-5"><label class="offset-1"><?php echo e(session()->get('message')); ?></label></div>
<?php endif; ?>
<form class="form-horizontal col-sm-12" role="form" method="POST" action=" <?php echo e(url('candidat')); ?>" enctype="multipart/form-data" >

    <div class="col-sm-7 offset-3" style="border:1px solid #D1DCF5;">
        <?php echo e(csrf_field()); ?>

        <br>

        <form class="form-horizontal" role="form">


            <div class=" row form-group"> 
                <label for="nom" class="control-label col-sm-3">Nom <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="nom" id="designation"  value="<?php echo e(old('nom')); ?>" required="required">
                    <small class="text-danger"><?php echo e($errors->first('nom',':message')); ?></small> 
                </div> 
                <input type="hidden" value="nom" name="name">
                <input type="hidden" value= "<?php echo e($annee); ?>" name="annee">
            </div>

            <div class=" row form-group">
                <label for="prenom" class="control-label col-sm-3">Prenom(s) <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7" style=""> 
                    <input type="text" class="form-control" name="prenom" id="designation"  value="<?php echo e(old('prenom')); ?>" required="required">
                    <small class="text-danger"><?php echo e($errors->first('prenom',':message')); ?></small> 
                </div> 
            </div>

            <div class="row form-group">
                <label for="sexe" class="control-label col-sm-3">Sexe <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <select class="form-control" name="sexe">
                        <option>Masculin</option>
                        <option>Feminin</option>
                    </select>
                </div> 
            </div>

            <div class=" row form-group">
                <label for="unite" class="control-label col-sm-3">Date de Naissance</label> 
                <div class="col-sm-3"> 
                    <input type="date" class="form-control" name="datenaissance" required="required" value="<?php echo e(old('datenaissance')); ?>">
                    <small class="text-danger"><?php echo e($errors->first('datenaissance',':message')); ?></small>
                </div> 
            </div>

            <div class="row form-group">
                <label for="cnib" class="control-label col-sm-3">Passeport/Cnib/Carte de Presse <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-6"> 
                    <input type="text" class="form-control" name="cnib" required="required" value="<?php echo e(old('cnib')); ?>">
                    <small class="text-danger"><?php echo e($errors->first('cnib',':message')); ?></small>
                </div> 
            </div>

            <div class="row form-group">
                <label for="telephone" class="control-label col-sm-3">Telephone<b><i style="color: red">*</i></b></label> 
                <div class="col-sm-4"> 
                    <input type="text" class="form-control" name="contact" required="required" value="<?php echo e(old('contact')); ?>">
                    <small class="text-danger"><?php echo e($errors->first('telephone',':message')); ?></small>
                </div> 
            </div>

            <div class="row form-group">
                <label for="email" class="control-label col-sm-3">email <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="email" class="form-control" name="email" required="required" value="<?php echo e(old('email')); ?>">
                    <small class="text-danger"><?php echo e($errors->first('mail',':message')); ?></small>
                </div> 
            </div>


            <div class="row form-group">
                <label for="organe" class="control-label col-sm-3">Organe de presse <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="organe" required="required" value="<?php echo e(old('organe')); ?>">
                    <small class="text-danger"><?php echo e($errors->first('organe',':message')); ?></small>
                </div> 
            </div>

            <div class="row form-group">
                <label for="photo" class="control-label col-sm-3">Joindre Photo Identité<b><i style="color: red">*</i></b></label> 
                <div class="col-sm-6"> 
                    <input type="file" class="form-control" name="photo" required="required">
                    <small class="text-danger"><?php echo e($errors->first('photo',':message')); ?></small>
                </div> 
            </div>

            <div class="row form-group">
                <label for="cv" class="control-label col-sm-3">Joindre CV<b><i style="color: red">*</i></b></label> 
                <div class="col-sm-6"> 
                    <input type="file" class="form-control" name="cv" required="required">
                    <small class="text-danger"><?php echo e($errors->first('cv',':message')); ?></small>
                </div> 
            </div>

            <div class="row form-group">
                <label for="visa" class="control-label col-sm-3">Joindre visa media<b><i style="color: red">*</i></b></label> 
                <div class="col-sm-6"> 
                    <input type="file" class="form-control" name="visamedia" required="required">
                    <small class="text-danger"><?php echo e($errors->first('visamedia',':message')); ?></small>
                </div> 
                <div class="label"><i><a href='<?php echo e(asset("storage/docs/VISA2021.docx")); ?>' target="blank">Telecharger modèle</a></i></div>
            </div>
           

    </div>
    <br>
    <div class="col-sm-7 offset-3" style="margin-top: 0px">
        <i><h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Créer votre Compte </h4></i>
        <div style="background: #285e8e;margin-top:2px;height:10px"></div>
        <br>
    </div>

    <div class="col-sm-7 offset-3" style="border:1px solid #D1DCF5;padding:15px;">
        <div class="row form-group">
            <label for="identifiant" class="col-sm-3 control-label">Créer un Identifiant <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-6"> 
                <input type="text" class="form-control" name="identifiant" required="required" value="<?php echo e(old('identifiant')); ?>">
                <small class="text-danger"><?php echo e($errors->first('identifiant',':message')); ?></small>
            </div> 
        </div>
        <div class="row form-group">
            <label for="password" class="col-sm-3 control-label">Créer Mot de passe <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-6"> 
                <input type="password" class="form-control" name="password" required="required">
                <small class="text-danger"><?php echo e($errors->first('password',':message')); ?></small>
            </div> 
        </div>
        <div class="row form-group ">
            <label for="identifiant" class="col-sm-3 control-label">Confirmer mot de passe <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-6"> 
                <input type="password" class="form-control" name="password" required="required">
                <small class="text-danger"><?php echo e($errors->first('password',':message')); ?></small>
            </div> 
        </div>

    </div>
    <br>
    <div class="row form-group offset-3">
        <div class="offset-2">  
            <input type="submit"  value="Ajouter" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '<?php echo e(url('objet')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;">
        </div>
    </div>

</form>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_ajouter.blade.php ENDPATH**/ ?>