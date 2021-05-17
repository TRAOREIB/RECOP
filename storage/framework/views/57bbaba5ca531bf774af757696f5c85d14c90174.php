<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Recherche d'objets Par Caractéristiques</h1>
    </div>
    <!-- Content Row --> 
        <!--  Research zone-->
        <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <p>
            <div class="row col-sm-12">
                <div class="card col-sm-4">
                    <div class="card-header">Par Dimensions</div>
                    <form method="GET" action="<?php echo e(url('getObjetByDimensions')); ?>" enctype="multipart/form-data">
                        <?php echo e(method_field('GET')); ?>

                        <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="row form-group">
                            <label class="label" >Longueur</label>
                            <input id='largeur' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="largeur" style="margin-left: 10px">
                        </div>
                        <div class="row form-group">
                            <label class="label">Largeur</label> &nbsp;&nbsp;
                            <input id='largeur' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="largeur" style="margin-left: 10px">
                        </div>
                        
                        <div class="row form-group">
                            <label class="label" >Hauteur</label>&nbsp;&nbsp;
                            <input id='hauteur' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="hauteur" style="margin-left: 10px">
                        </div>
                        <div class="row form-group">
                            <label class="label" >Profondeur</label>&nbsp;&nbsp;
                            <input id='profondeur' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="profondeur" style="margin-left: 10px">
                        </div>
                        <div class="row form-group">
                                <label class="label" >Diamètre</label>
                                <input id='diametre' class="col-sm-7 form-control" type='number' step="0.01" min="0" value="<?php echo e(old('diametre')); ?>" name="diametre" style="margin-left: 10px">
                        </div>

                        <div class="row form-group">
                            <label class="label" >Taille</label>
                            <input id='taille' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="taille" style="margin-left: 10px">
                        </div>

                        <div class="row form-group">
                            <label class="label" >Epaisseur</label>
                            <input id='epaisseur' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="epaisseur" style="margin-left: 10px">
                        </div>
                        <input type="submit"  value="Rechercher" class="btn btn-primary"> 
                    </div>
                    </form>
                    <div class="card-header">Par Poids</div>
                    <form method="GET" action="<?php echo e(url('getObjetByPoids')); ?>" enctype="multipart/form-data">
                        <?php echo e(method_field('GET')); ?>

                        <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="row form-group">
                            <label class="label" >Poids</label>
                            <input id='poids' class="col-sm-6 form-control" type='number' step="0.01" min="0" value="" name="poids" style="margin-left: 10px">
                        </div>
                        <input type="submit"  value="Rechercher" class="btn btn-primary"> 
                    </div>
                    </form>
                </div>
                <div id="resultat" class="col-sm-8">
                    <!-- Display research results zone -->
                        <div class="row divtabgrand" style="">
                        <div class="col-xs-9 offset-1">
                            <div class="ligneform " style="background-color: #EEE">
                                <table class="table table-striped table-condensed" id="objettable">
                                    <thead>
                                        <tr style="background-color:#2a6496;color: #FFFFFF;">
                                            <th>N. Inventaire</th>
                                            
                                            <th>Nom</th>
                                            <th>Vernanculaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listobj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr >
                                            <th><?php echo e($listobj->numero); ?></th>	
                                            
                                            <th><?php echo e($listobj->nom); ?></th>
                                            <th><?php echo e($listobj->nomvernanc); ?></th>
                                            
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!--  fin de la liste-->
                </div>
            </div>
            </p>
        </div>

    </div>

<script>
    
    $(document).ready(function () {
        $('#objettable').DataTable();
    });
</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SYGEM\resources\views/search/caracteristique.blade.php ENDPATH**/ ?>