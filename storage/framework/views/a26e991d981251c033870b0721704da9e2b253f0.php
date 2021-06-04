
<?php $__env->startSection('contenu'); ?>

<br>

<div class="text-center">
      <div class="col-sm-12" style="">
	  <label style="font-family: fantasy;color: blue"> LISTE DES CORRESPONDANTS </label>     
      </div>
</div> 
 <!--<div class="ligne_separe_titre"></div>-->
 <hr>
    <br>
<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>CNIB</th>
                        <th>PASSPORT</th>
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>MEDIA</th>
                        
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
                        <td><?php echo e($corresp->cnibcorrespondant); ?></td>
                        <td><?php echo e($corresp->passportcorrespondant); ?></td>
                        <td><?php echo e($corresp->telephonecorrespondant); ?></td>
                        <td><?php echo e($corresp->mailcorrespondant); ?></td>
                        <td><?php echo e($corresp->media); ?></td>
                        

                        <td title="">
                        <button data-toggle="modal" data-target='#recherche<?php echo e($i); ?>' value="DETAILS">DETAILS </button>              
                                     
                            <div class="modal fade" id='recherche<?php echo e($i); ?>'>
                                <div class="modal-dialog modal-lg" style="">
                                    <div class="modal-content" style="background-color : whitesmoke">
                                        <div class="row listetitreformgrand" style="">
                                            <div class="col-sm-12" style="">
                                                <h3 class=" offset-sm-3"> DETAILS CORRESPONDANTS </h3>
                                            </div>
                                         </div>
                                        <div class="modal-body">     
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->nomcorrespondant); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">PRENOM(S)</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->prenomcorrespondant); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">CNIB</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->cnibcorrespondant); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">PASSPORT</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->passportcorrespondant); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">TELEPHONE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->telephonecorrespondant); ?></label></div>
                                            </div>
                                            
                                           
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">MAIL</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->mailcorrespondant); ?></label></div>
                                            </div>
                                            
                                            
                                            
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">MEDIA</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->media); ?></label></div>
                                            </div>
                                            

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label-info" style="margin-left:0px">LIEU DE RESIDENCE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->lieuresidence); ?></label></div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">REGION</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->region); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">TYPE PRESSE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><?php echo e($corresp->typepresse); ?></label></div>

                                            </div>
                                        </div>
                                    </div>    
                                </div>
                             </div>
                            
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
<br>

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
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP2\resources\views/liste_correspondant/listeadmin.blade.php ENDPATH**/ ?>