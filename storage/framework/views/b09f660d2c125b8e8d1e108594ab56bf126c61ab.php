
<?php $__env->startSection('contenu'); ?>

<br>
<div><a href="<?php echo e(route('enrinf')); ?>" class="btn btn-info">Nouvelle Information </a>
 
</div>
<br>
<div class="text-center">
      <div class="col-sm-12" style="">
	  <label style="font-family: fantasy;color: blue"> LISTE DES INFORMATIONS </label>     
      </div>
</div> 
 <div class="ligne_separe_titre"></div>
    <br><br>
<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
						 <th>MEDIA</th>
                        <th>Date</th>
                        <th>Contenu</th>
                       
                        
                       
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($corresp->nomcorrespondant); ?></td>
                        <td><?php echo e($corresp->prenomcorrespondant); ?></td>
						 <td><?php echo e($corresp->media); ?></td>
                        <td><?php echo e($corresp->dateinfo); ?></td>
                        <td><?php echo e($corresp->contenuinfo); ?></td>
                       
                        
              
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
                
            </table>

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
<br><br>
 <?php $__env->stopSection(); ?> 
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\RECOP\resources\views/information/vueinfo.blade.php ENDPATH**/ ?>