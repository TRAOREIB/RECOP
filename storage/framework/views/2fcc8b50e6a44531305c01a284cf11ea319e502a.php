
<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> 


<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Modifier une information</h3>
      </div>
</div> <br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="<?php echo e(route('informations.update',[$editinformation->id])); ?>" enctype="multipart/form-data" >
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

    <div class="card-body">
    <div class="row listetitreformgrand" style="">
                <label for="type" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="titre"  value="<?php echo e($editinformation->titre); ?>" required="required">
                    <small class="text-danger"><?php echo e($errors->first('type',':message')); ?></small> 
                </div> 
        
            </div>

            <div class=" row form-group">
                <label for="marques" class="control-label col-sm-3">Contenu <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7" style=""> 
                    <textarea type="textarea" maxlength="2000" class="form-control" name="contenu" value="<?php echo e(old('contenu')); ?>" required="required" ><?php echo e($editinformation->contenu); ?></textarea>
                    
                    <small class="text-danger"><?php echo e($errors->first('marques',':message')); ?></small> 
                </div> 
            </div>
         <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Modifier" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div> </div> 
    </div> 
 </form> 

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP25\resources\views/information/modif_info.blade.php ENDPATH**/ ?>