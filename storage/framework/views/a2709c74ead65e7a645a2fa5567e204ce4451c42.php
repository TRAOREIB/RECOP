
<?php $__env->startSection('contenu'); ?>

<br>

<div class="text-center">
    
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS </label></b>
</div>
 
 <hr>
 <input type="submit" class="btn btn-warning" value="Exporter en PDF">
    <br><br>
<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>TYPE</th>                      
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>ORGANE</th>
                        
                        <th>ACTION</th>
                       
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i = 0 ?>
                     <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++ ?>
                    
                    <tr>
                        <td><?php echo e($corresp->nomcorrespondant); ?></td>
                        <td><?php echo e($corresp->prenomcorrespondant); ?></td>
                         <td><?php echo e($corresp->typecorrespondant); ?></td>                   
                        <td><?php echo e($corresp->telephonecorrespondant); ?></td>
                        <td><?php echo e($corresp->mailcorrespondant); ?></td>
                        <td><?php echo e($corresp->organe); ?></td>
                        

                        <td title="">
                        
						<form  method="post" action="<?php echo e(route('detailscorrespondant')); ?>">
							<input type="submit" class="btn btn-warning" value="voir les details du compte">           
						</form>		
                                                      
                            <!-- Retirer un correspondant-->
							<form method="GET" action="<?php echo e(route('retirer',[$corresp->idcorrespondant])); ?>">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                
                               <button type="submit" onclick="return confirm('Vraiment Retirer?')">RETIRER</button>
                            </form>
                        
                        </td>
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
        $('#table').DataTable();
    });

   
    $('#appui').click(function () {
    $(<?php echo e($i); ?>).modal();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/liste_correspondant/listeadmin.blade.php ENDPATH**/ ?>