 
<?php $__env->startSection('contenu'); ?>
  <!-- 

		<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">  
	
   -->
<br><br>
<div class="titrenouvelleinformation"><a href="<?php echo e(route('enrinf')); ?>" class="btn btn-info">Nouvelle Information </a>
 
</div>

<br>
<!--
<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h1 class=" offset-sm-2   text-center" > Liste des informations </h1>
      </div> 
</div> <br>
-->




<br>
<div class="row divtabgrand  offset-sm-1" style="">
    <div class="col-sm-12" >
        <div  style="background-color: #EEE">
            



 <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
  
  
  <div class="container tableau rounded">
  <div class="row entete">
    <div class="col-sm-2">
    <strong> <?php echo e($corresp->nomcorrespondant); ?> </strong>
    </div>
    <div class="col-sm-1">
	<strong>	<?php echo e($corresp->prenomcorrespondant); ?> </strong>
    </div>
    <div class="col-sm-3">
    <strong>  CORRESPONDANT <?php echo e($corresp->media); ?> </strong>
    </div>
	<div class="col-sm-3">
    <strong> <?php echo e($corresp->dateinfo); ?> </strong>
    </div>


   
     <div class="col-sm-1">
        <td title="Modifier">

            
           <form method="GET"  action="<?php echo e(route('editfv',[$corresp->idinfo])); ?>"  >
                <?php echo e(method_field('EDITER')); ?>

                <?php echo e(csrf_field()); ?>

                <input type="submit" value="Modifier" style="border: 0px;background-color:#56739A">
            
                
            </form>
        </td>
    </div>
    <div class="col-sm-1">  
       <td title="Supprimer">
        
           
               
            
             <form method="POST"  action="<?php echo e(route('destroyfv',[$corresp->idinfo])); ?>" > 
                
                <?php echo e(method_field('PUT')); ?>

                <?php echo e(csrf_field()); ?>

                <a ></a>
                <input type="submit" value="Supprimer" style="border: 0px;background-color:#56739A">
                
            </form>                    
        </td>
    </div>  
         
  </div>
  
  <div class="corpsinfo">  <strong style="background-color: #999999" > <?php echo e($corresp->titreinfo); ?> </strong>  <br><br> <?php echo e($corresp->contenuinfo); ?> </div>
  <br>
  
  </div>
  
   <br>
 


   
		

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        



        </div>
    </div>
</div>
<!--  fin de la liste-->

<div class="modal" id="confirmationta">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color : whitesmoke">
            <div class="modal-body">
                <span class="glyphicon glyphicon-exclamation-sign" style="color: #f0ad4e"><label > Supprimer cet &eacutelement ? </label></span>
            </div>
            <div class="modal-footer">
                <a href="#"  class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> OUI</a>
                <a href="#"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> NON</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
 <?php $__env->stopSection(); ?> 
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP25\resources\views/information/vueinfo.blade.php ENDPATH**/ ?>