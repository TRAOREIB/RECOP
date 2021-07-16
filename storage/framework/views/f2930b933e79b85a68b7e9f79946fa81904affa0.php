
<?php $__env->startSection('contenu'); ?>

<br>

<div class="text-center">
    
    <b><label style="" class="text-primary">GESTION DES UTILISATEURS </label></b>
</div>
<div class="text-right">
<form method="post" action="<?php echo e(route('adduser')); ?>">
 <?php echo csrf_field(); ?>
<button type="submit" class="btn btn-info">Ajouter un utilisateur</button>
</form>
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
                        
						<th>NOM & PRENOM </th>
						<th>IDENTIFIANT</th>
                        <th>PROFIL</th>
                        <th>ACTION</th>
                       
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i = 0 ?>
                     <?php $__currentLoopData = $alluser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++ ?>
                    
                    <tr>
                        <td><?php echo e($user->name); ?></td>
						<td><?php echo e($user->identifiant); ?></td>
                        <td><?php echo e($user->profil); ?></td>
                        <td title="">
							<div class="row ">                                
									<button data-toggle="modal" data-target='#recherche<?php echo e($i); ?>' class="btn btn-success mr-2" value="Details">Détails</button>                   
									<div class="modal fade" id='recherche<?php echo e($i); ?>'>
                                <div class="modal-dialog modal-lg" style="">
                                    <div class="modal-content" style="background-color : whitesmoke">
                                        <div class="row listetitreformgrand" style="">
                                            <div class="col-sm-12" style="">
                                                <h3 class=" offset-sm-3"> DETAILS DE L'UTILISATEUR </h3>
                                            </div>
                                        </div>
                                        <div class="modal-body">     
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM & PRENOM (S)</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->name); ?></label></div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM D'UTILISATEUR</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->identifiant); ?></label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">EMAIL</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->email); ?></label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">TELEPHONE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->telephone); ?></label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">TELEPHONE (WHATSAPP)</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->telephone1); ?></label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM DU SERVICE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->service); ?></label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">PROFIL</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($user->profil); ?></label></div>
                                            </div>                                          
                                        </div>
                                    </div>    
                                </div>
                             </div>
                             
                            <div class="btn-group mr-2">
                                    <form method="post" action="<?php echo e(route('edituser',[$user->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-warning">Modifier Infos</button>
                                        
                                    </form>  
                            </div> 
							<div class="btn-group mr-2">
                                    <form method="post" action="<?php echo e(route('resetpass',[$user->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-warning">Modifier Mot de Passe</button>
                                        
                                    </form>  
                            </div>
							<div class="btn-group mr-2"> 	<!-- Retirer un user-->
							   <form method="post" action="<?php echo e(route('supprimer',[$user->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Vraiment Retirer?')">Supprimer</button>
								</form>
							</div> 
                        </div>    
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
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/auth/panneau.blade.php ENDPATH**/ ?>