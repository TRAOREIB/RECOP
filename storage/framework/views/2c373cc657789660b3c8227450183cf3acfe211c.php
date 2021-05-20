

<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> 

<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> CORRESPONDANTS MEDIAS NATIONAUX </h3>
      </div>
</div> <br>


<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="<?php echo e(route('region')); ?>" enctype="multipart/form-data" >
    <?php echo e(method_field('GET')); ?>

    <?php echo e(csrf_field()); ?>

<div class="row  offset-sm-2">
   
       <label for="region" class="">REGION </label> 
        <div class="col-sm-2  col-md-2 col-xs-6"> 
            <select class="form-control" name="region" required> 
                <option selected>choisir la region</option>                                    
                <option value="centre">Centre</option> 
                <option value="centre-est">Centre-Est</option> 
                <option value="centre-nord">Centre-Nord</option> 
                <option value="centre-ouest">Centre-Ouest</option>  
                <option value="centre-sud">Centre-Sud</option>
                <option value="nord">Nord</option>                                    
                <option value="sahel">Sahel</option> 
                <option value="est">Est</option>
                <option value="cascades">Cascades</option>
                 <option value="plateau-central">Plateau Central</option> 
                <option value="sud-ouest">Sud-Ouest</option> 
                <option value="hauts-bassins">Hauts-Bassins</option>  
                <option value="boucle-mouhoun">Boucle du Mouhoun</option>                                   
                <small class="text-danger"><?php echo e($errors->first('region',':message')); ?></small> 
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


<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h5 class=" offset-sm-1"> Liste des correspondants de la region: </h5>
      </div>
</div> <br>

<div class="row divtabgrand  offset-sm-1" style="">
    <div class="col-xs-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>MEDIA</th>
                        <th>LIEU DE RESIDENCE</th>
                       
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($corresp->nomcorrespondant); ?></td>
                        <td><?php echo e($corresp->prenomcorrespondant); ?></td>
                        <td><?php echo e($corresp->telephonecorrespondant); ?></td>
                        <td><?php echo e($corresp->mailcorrespondant); ?></td>
                        <td><?php echo e($corresp->media); ?></td>
                        <td><?php echo e($corresp->lieuresidence); ?></td>
              
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
<?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/candidat/recherchenational.blade.php ENDPATH**/ ?>