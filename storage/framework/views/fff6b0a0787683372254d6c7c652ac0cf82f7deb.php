<?php $__env->startSection('contenu'); ?>


<script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
<!--<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>-->
<script type="text/javascript" src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>

<link type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<!--<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">-->



<div class="col-sm-5 offset-2" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Liste des Candidats</h4></i>
    <div style="background: #285e8e;margin-top:0px;height:10px"></div>
</div>

<br>
<?php if(isset($message)): ?>
<div class="alert alert-danger col-sm-4"><label class=""><?php echo e($message); ?></label></div>
<?php endif; ?>

<br>


<div class="card col-sm-12 offset-0">

    <div class="row card-header">Les Candidats</div>
    <div class="card-body">
        <div class="row divtabgrand" style="">
            <div class="col-sm-12" >
                <div class="col-sm-12 ligneform " style="background-color: #EEE">
                    <table class="table table-striped table-condensed" id="tableau">
                        <thead>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>CNIB</th>
                                <th>NOM</th>	
                                <th>PRENOM</th>
                                <th>CONTACT</th>
                                <th>MAIL</th>
                                <th>IDENTIFIANT</th>
                                <th>Initialiser Password</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $candidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($cand->cnib); ?></td>	
                                <td><?php echo e($cand->nom); ?></td>	
                                <td><?php echo e($cand->prenom); ?></td>
                                <td><?php echo e($cand->contact); ?></td>
                                <td><?php echo e($cand->email); ?></td>
                                <td><?php echo e($cand->identifiant); ?></td>
                                <td>
                                    <form method="GET" action="<?php echo e(route('password.show',[$cand->id])); ?>"> 
                                        <?php echo e(csrf_field()); ?>         
                                        <input type="submit" value="initialiser" class="btn btn-success" name="initialiser">
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function () {
    $("#tableau").DataTable();
    });</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.administrateur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_modifpassword.blade.php ENDPATH**/ ?>