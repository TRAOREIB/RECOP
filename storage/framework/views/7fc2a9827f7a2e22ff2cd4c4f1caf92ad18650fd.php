
<?php $__env->startSection('contenu'); ?>

<br>
 <br>
<div class="text-center">
      <div class="col-sm-12" style="">
	  <label style="font-family: fantasy;color: blue"> LISTE DES DEMANDEURS </label>     
      </div>
</div> 
 <div class="ligne_separe_titre"></div>
    <br><br>
	
	
    <div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Liste des demandeurs</h3>
      </div>
    </div> 
    <div class="col-sm-7" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>N° CNIB</th>
                        <th>MODIFIER</th>
                        <th>SUPPRIMER</th>   
                    </tr>
                </thead>
                <tbody>
					<?php $i = 0 ?>
                     <?php $__currentLoopData = $alldemandeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demandeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 <?php $i++ ?>
                    <tr>
                        <td><?php echo e($demandeur->nom); ?></td>
                        <td><?php echo e($demandeur->prenom); ?></td>
                        <td><?php echo e($demandeur->numcnib); ?></td>

                        <td title="Modifier">
                            <form method="GET" action="<?php echo e(route('demandeur.edit',[$demandeur->iddemandeur])); ?>">
                                <?php echo e(method_field('EDITER')); ?>

                                <?php echo e(csrf_field()); ?>

                                <input type="submit" value="Modifier" style="border: 0px;background-color:">
                            </form>
                        </td>
                       
                       <td title="Supprimer">
                            <form method="POST" action="<?php echo e(route('demandeur.destroy',[$demandeur->iddemandeur])); ?>">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <a ></a>
                                <input type="submit" value="Supprimer" style="border: 0px;background-color:">
                            </form>                    
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                </tbody>
            </table>
       
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/demandeur/liste_demandeur.blade.php ENDPATH**/ ?>