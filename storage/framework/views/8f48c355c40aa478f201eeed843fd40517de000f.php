<?php $__env->startSection('contenu'); ?>

<br><br><br><br><br><br><br>
<div class="col-sm-7 offset-3" style="margin-top: 0px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Enregistrer votre candidature </h4></i>
    <div style="background: #285e8e;height:10px"></div>
</div>

<form class="form-horizontal col-sm-12 offset-3" role="form" method="POST" action=" <?php echo e(route('candidat.update',[$candidat->id])); ?>" enctype="multipart/form-data" >
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

    <div class="col-sm-7" style="border:1px solid #D1DCF5;margin-left:0px;padding:15px; margin-left:0px">
        <?php echo e(csrf_field()); ?>

        <br>
        <div class=" row form-group"> 
            <label for="nom" class="control-label col-sm-3">Nom <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-7"> 
                <input type="text" class="form-control" name="nom" id="designation"  value="<?php echo e($candidat->nom); ?>">
                <small class="text-danger"><?php echo e($errors->first('nom',':message')); ?></small> 
            </div> 
            <input type="hidden" value="nom" name="name">

        </div>

        <div class=" row form-group">
            <label for="prenom" class="control-label col-sm-3">Prenom(s) <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-7" style=""> 
                <input type="text" class="form-control" name="prenom" id="designation"  value="<?php echo e($candidat->prenom); ?>">
                <small class="text-danger"><?php echo e($errors->first('prenom',':message')); ?></small> 
            </div> 
        </div>

        <div class="row form-group">
            <label for="sexe" class="control-label col-sm-3">Sexe <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-7"> 
                <select class="form-control" name="sexe">
                    <option <?php if($candidat->sexe=="Masculin") echo "selected=selected"; ?>>Masculin</option>
                    <option <?php if($candidat->sexe=="Feminin") echo "selected=selected"; ?>>Feminin</option>
                </select>
            </div> 
        </div>

        <div class=" row form-group">
            <label for="unite" class="control-label col-sm-3">Date de Naissance</label> 
            <div class="col-sm-3"> 
                <input type="date" class="form-control" name="datenaissance" value="<?php echo e($candidat->datenaissance); ?>">
                <small class="text-danger"><?php echo e($errors->first('datenaissance',':message')); ?></small>
            </div> 
        </div>

        <div class="row form-group">
            <label for="cnib" class="control-label col-sm-3">Passeport/Cnib/Carte de Presse <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-6"> 
                <input type="text" class="form-control" name="cnib" value="<?php echo e($candidat->cnib); ?>">
                <small class="text-danger"><?php echo e($errors->first('cnib',':message')); ?></small>
            </div> 
        </div>

        <div class="row form-group">
            <label for="telephone" class="control-label col-sm-3">Telephone<b><i style="color: red">*</i></b></label> 
            <div class="col-sm-4"> 
                <input type="text" class="form-control" name="contact" value="<?php echo e($candidat->contact); ?>">
                <small class="text-danger"><?php echo e($errors->first('telephone',':message')); ?></small>
            </div> 
        </div>

        <div class="row form-group">
            <label for="email" class="control-label col-sm-3">email <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-7"> 
                <input type="text" class="form-control" name="email" value="<?php echo e($candidat->email); ?>">
                <small class="text-danger"><?php echo e($errors->first('mail',':message')); ?></small>
            </div> 
        </div>


        <div class="row form-group">
            <label for="organe" class="control-label col-sm-3">Organe de presse <b><i style="color: red">*</i></b></label> 
            <div class="col-sm-7"> 
                <input type="text" class="form-control" name="organe" value="<?php echo e($candidat->organe); ?>">
                <small class="text-danger"><?php echo e($errors->first('organe',':message')); ?></small>
            </div> 
        </div>

        <div class="row form-group">
            <label for="photo" class="control-label col-sm-3">Joindre Photo Identité</label> 
            <div class="col-sm-6"> 
                <input type="file" class="form-control" name="photo">
                <small class="text-danger"><?php echo e($errors->first('photo',':message')); ?></small>
            </div>
            <div class="col-sm-6 offset-3"><label style="color:blue" for="photo" class="label-info"><a href='<?php echo e(asset("storage/docs/$candidat->photo")); ?>' target="blank"><?php echo e($candidat->photo); ?></a></label></div>
        </div>

        <div class="row form-group">
            <label for="cv" class="control-label col-sm-3">Joindre CV</label> 
            <div class="col-sm-6"> 
                <input type="file" class="form-control" name="cv">
                <small class="text-danger"><?php echo e($errors->first('cv',':message')); ?></small>
            </div> 
            <div class="col-sm-6 offset-3"><label style="color:blue" for="cv" class="label-info"><a href='<?php echo e(asset("storage/docs/$candidat->cv")); ?>' target="blank"><?php echo e($candidat->cv); ?></a></label></div>
        </div>

        <div class="row form-group">
            <label for="visa" class="control-label col-sm-3">Joindre visa media</label> 
            <div class="col-sm-6"> 
                <input type="file" class="form-control" name="visamedia">
                <small class="text-danger"><?php echo e($errors->first('visamedia',':message')); ?></small>
            </div> 
            <div class="col-sm-6 offset-3"><label style="color:blue" for="visa" class="label-info"><a href='<?php echo e(asset("storage/docs/$candidat->visamedia")); ?>' target="blank"><?php echo e($candidat->visamedia); ?></a></label></div>
        </div>

    </div>


    <br>
    <div class="row form-group">
        <div class="offset-2">  
            <input type="submit"  value="Modifier" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '<?php echo e(url('objet')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_modifcandidat.blade.php ENDPATH**/ ?>