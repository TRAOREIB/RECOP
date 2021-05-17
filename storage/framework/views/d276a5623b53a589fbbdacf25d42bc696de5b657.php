<?php $__env->startSection('content'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Recherche d'objets par critères</h1>
    </div>
    <!-- Content Row --> 
        <!--  Research zone-->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <p>
            <div class="row col-sm-12">
                <div class="card col-sm-4">
                    <div class="card-header">CRITERE DE RECHERCHE</div>
                    <form method="GET" action="<?php echo e(url('getObjetByType')); ?>" enctype="multipart/form-data">
                        <?php echo e(method_field('GET')); ?>

                        <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="row form-group">
                            <label class="label" >TYPE</label>
                            <select id="type" name='type' class="form-control" >
                                <option selected="selected">Choisir le type</option>
                                <<?php $__currentLoopData = $listeType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idtype => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($idtype); ?>"><?php echo e($type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SYGEM\resources\views/search/type.blade.php ENDPATH**/ ?>