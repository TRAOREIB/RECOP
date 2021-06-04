
<?php $__env->startSection('contenu'); ?>

<br>
<div class="text-center">
    
    <b><label style="" class="text-primary">RECHERCHE PAR TYPE DE CORRESPONDANT</label></b>
</div>
 
 <hr>
    <br><br>

<form class="form-horizontal col-sm-10" role="form" method="POST" action="<?php echo e(route('type')); ?>" enctype="multipart/form-data" >
    <?php echo e(method_field('GET')); ?>

    <?php echo e(csrf_field()); ?>

<div class="row  offset-sm-2">
   
       <label for="typecorrespondant" class="">TYPE </label> 
        <div class="col-sm-6  col-md-6"> 
            <select class="form-control" name="typecorrespondant" required> 
                <option selected="selected">Choisir le type</option>                                    
                <option value="Correspondant de la Presse Nationale">Correspondant de la Presse Nationale</option> 
                <option value="Journaliste Independant/Freelance">Journaliste Independant/Freelance</option> 
                <option value="Correspondant de la Presse Internationale">Correspondant de la Presse Internationale</option> 
                                                 
                <small class="text-danger"><?php echo e($errors->first('typecorrespondant',':message')); ?></small> 
            </select> 
        </div>

        <label for="originecorrespondant" class="">ORIGINE </label> 
        <div class="col-sm-3  col-md-3"> 
            <select class="form-control" name="originecorrespondant">                                     
                <option selected="selected"> </option> 
                <option value="nationale">Nationale</option> 
                <option value="non nationale">Non Nationale</option> 
                                                 
                <small class="text-danger"><?php echo e($errors->first('originecorrespondant',':message')); ?></small> 
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
<br><br>
<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>TYPE</th>
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>ORGANE</th>
                        <th>LIEU DE RESIDENCE</th>
                       
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($corresp->typecorrespondant); ?></td>
                        <td><?php echo e($corresp->nomcorrespondant); ?></td>
                        <td><?php echo e($corresp->prenomcorrespondant); ?></td>
                        <td><?php echo e($corresp->telephonecorrespondant); ?></td>
                        <td><?php echo e($corresp->mailcorrespondant); ?></td>
                        <td><?php echo e($corresp->organe); ?></td>
                        <td><?php echo e($corresp->lieuresidence); ?></td>
              
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\RECOP\resources\views/recherche/recherchetypecorrespondant.blade.php ENDPATH**/ ?>