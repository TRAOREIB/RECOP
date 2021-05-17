<?php $__env->startSection('contenu'); ?>
<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>



<div class="col-sm-7 offset-3" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Connexion</h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>
<?php if(isset($message)): ?>
<div class="alert alert-danger col-sm-4 offset-5"><label class="offset-2"><?php echo e($message); ?></label></div>
<?php endif; ?>

<form class="form-horizontal col-sm-8 offset-4" role="form" method="post" action="<?php echo e(route('connecte')); ?>" enctype="multipart/form-data" >
 <?php echo e(csrf_field()); ?>

    <div class="col-sm-8" style="border:1px solid #D1DCF5;margin-left:0px;padding:15px; margin-left:0px">
       
        <br>
        <div class="card">
            <div class="card-header"><b>Informations Générales</b></div>
            <div class="card-body">
                <div class="row form-group">
                    <label for="identifiant" class="control-label col-sm-3">identifiant <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-7"> 
                        <input type="identifiant" class="form-control" name="identifiant" required="required" value="<?php echo e(old('identifiant')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('mail',':message')); ?></small>
                    </div> 
                </div>   
                <div class="row form-group">
                    <label for="password" class="control-label col-sm-3">Password <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-7"> 
                        <input type="password" class="form-control" name="password" required="required" value="<?php echo e(old('password')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('password',':message')); ?></small>
                    </div> 
                </div>   
            </div> 

        </div>  


    </div>
    <br>
    <div class="alert alert-primary col-sm-8"><label class="offset-1">En cas d'oubli de Mot de Passe, appellez au 70 00 00 00</label></div>
    <div class="row form-group">
        <div class="offset-2">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '<?php echo e(url('objet')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>

    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_connexion.blade.php ENDPATH**/ ?>