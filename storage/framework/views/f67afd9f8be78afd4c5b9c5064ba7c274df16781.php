<?php $__env->startSection('contenu'); ?>



<div class="col-sm-7 offset-3" style="margin-top: 140px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Bienvenue au Concours "Prix Galian"<?php echo date("Y"); ?></h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>
<div class="offset-4"><label><i><b><?php echo session('utilisateur'); ?></b></i></label></div>
<?php if(isset($message)): ?>
<div class="alert alert-danger col-sm-5 offset-4"><label><?php echo e($message); ?></label></div>
<?php endif; ?>
<div class="card col-sm-6 offset-3">
    <div class="card-body">
        <label><b>Cliquer sur votre catégorie de compétition pour soumettre vos oeuvres </b> </label>
        <br>
        <div><div class="col-sm-10 row">
                <div class="offset-1">
                    <input type="button"  value="PRESSE ECRITE" onclick="location.href = '<?php echo e(url('presseecrite')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="offset-2"><input type="button"  value="PRESSE EN LIGNE" onclick="location.href = '<?php echo e(url('presseligne')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>
<!--                     &nbsp;&nbsp;&nbsp;
                        <div><input type="button"  value="TELEVISION" onclick="location.href = '<?php echo e(url('mediatele')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>
                  &nbsp;&nbsp;&nbsp;
                        <div><input type="button"  value="RADIODIFFUSION" onclick="location.href = '<?php echo e(url('mediaradio')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>-->
            </div>
        </div>
    </div> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/demande_inscrip.blade.php ENDPATH**/ ?>