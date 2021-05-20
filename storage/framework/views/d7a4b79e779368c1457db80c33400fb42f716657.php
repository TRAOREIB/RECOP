<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> 


<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Modifier un Vehicule</h3>
      </div>
</div> <br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="<?php echo e(route('vehicule.update',[$editvehicule->id])); ?>" enctype="multipart/form-data" >
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

<div class=" row form-group"> 
                <label for="type" class="control-label col-sm-3">Type <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="type"  value="<?php echo e($editvehicule->type); ?>" required="required">
                    <small class="text-danger"><?php echo e($errors->first('type',':message')); ?></small> 
                </div> 
        
            </div>

            <div class=" row form-group">
                <label for="marques" class="control-label col-sm-3">Marques <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7" style=""> 
                    <input type="text" class="form-control" name="marques"  value="<?php echo e($editvehicule->marques); ?>" required="required">
                    <small class="text-danger"><?php echo e($errors->first('marques',':message')); ?></small> 
                </div> 
            </div>
         <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Modifier" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
    </div> 
 </form> 

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script><?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/candidat/form_modif_vehicule.blade.php ENDPATH**/ ?>