
<?php $__env->startSection('contenu'); ?>

<br><br>

<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST"  enctype="multipart/form-data" >
    <?php echo e(method_field('POST')); ?>

    <?php echo e(csrf_field()); ?>

<div class="col-sm-12">  <!-- Bloc 1-->
    <div class="card"> 
            <div class=" card text-center card-header">ENREGISTRER UNE INFORMATION</div>
        <div class="card-body">
            <div class="form-group row">
                <label for="titre" class="control-label col-sm-3">Titre  <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="titre"   value="<?php echo e(old('titre')); ?>" required="required">
                    <small class="text-danger"><?php echo e($errors->first('titre',':message')); ?></small> 
                </div> 
   <!--             <input type="hidden" value="type" name="type">  -->
            </div>

            <div class=" row form-group">
                <label for="contenu" class="control-label col-sm-3">Contenu <b><i style="color: red">*</i></b></label> 

                <div class="col-sm-7" style=""> 
				   <textarea type="textarea" class="form-control" name="contenu" value="<?php echo e(old('contenu')); ?>" required="required" ></textarea>
                   
                    <small class="text-danger"><?php echo e($errors->first('contenu',':message')); ?></small> 
                </div> 
            </div>

			
			<div class=" row form-group"> 
                <label for="titre" class="control-label col-sm-3">  <b><i style="color: red"></i></b></label> 
                <div class="col-sm-7"> 
                    <input type="hidden" class="form-control" name="idcorrespondant"   value="1" required="required">
                    <small class="text-danger"><?php echo e($errors->first('idcorrespondant',':message')); ?></small> 
                </div> 
   <!--             <input type="hidden" value="type" name="type">  -->
            </div>
    <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
     </div> 
   </div>
   </div>
</div>
 </form>   
    
<br>
 <?php $__env->stopSection(); ?> 

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\RECOP\resources\views/information/ajout_information.blade.php ENDPATH**/ ?>