
<?php $__env->startSection('contenu'); ?>

<br>
 <br>
<div class="text-center">
    
    <b><label style="" class="text-primary">RECHERCHE LIEU ACCREDITATION</label></b>
</div>
 
 <hr>
    <br><br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="<?php echo e(route('lieuaccredi')); ?>" enctype="multipart/form-data" >
    <?php echo e(method_field('GET')); ?>

    <?php echo e(csrf_field()); ?>


<div class="row  offset-sm-2">
   
        <label for="region" class="">REGION </label> 
        <div class="col-sm-3  col-md-3"> 
            <select class="form-control" name="nomregion" required> 
                <option selected>choisir la region</option>
                 <?php $__currentLoopData = $allregion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                    
                    <option value="<?php echo e($reg->nomregion); ?>"><?php echo e($reg->nomregion); ?></option> 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <small class="text-danger"><?php echo e($errors->first('nomregion',':message')); ?></small> 
            </select> 
        </div>

    <div class="ln_solid "></div>
       <div class="item form-group">
           <div style="margin: auto">  
              <input type="submit"  value="VALIDER" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
           </div>
    </div>
</div>
</form>
<br>

<div class="text-center">
    <b><label style="" class="text-primary">LISTE DES ACCREDITATIONS DE LA REGION: <?php echo e($regionchoisi); ?> </label></b>
</div>


<form class="form-horizontal col-sm-10" role="form" method="POST" action="<?php echo e(route('listeaccreditation1')); ?>" enctype="multipart/form-data">
	<?php echo e(method_field('GET')); ?>

	<input type="submit" class="btn btn-warning" value="Exporter en PDF"> 
	<input type="hidden" value="<?php echo e($regionchoisi); ?>" name="nomregion"> 
</form>
<br><br>

<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(s)</th>
						<th>SUJET A COUVRIR</th> 
                        <th>DATE DEBUT</th>
                        <th>DATE FIN</th>
                        <th>LIEU EVENEMENT</th>
                       
                    </tr>
                </thead>
                <tbody>
                   <?php $__currentLoopData = $allaccreditation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accredi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($accredi->nomdemandeur); ?></td>
                        <td><?php echo e($accredi->prenomdemandeur); ?></td>
                        <td><?php echo e($accredi->titre); ?></td>                        
                        <td><?php echo e($accredi->datedebut); ?></td>
                        <td><?php echo e($accredi->datefin); ?></td>                       
                        <td><?php echo e($accredi->lieuevenement); ?></td>
                        
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
<br><br>
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
        $('#table').DataTable({
            "order": [[ 3, "desc" ]]
        });
    });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/recherche/recherchelieuaccreditation.blade.php ENDPATH**/ ?>