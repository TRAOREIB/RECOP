<html>
<head>
	<title>Liste des correspondants</title>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<meta charset="utf-8">
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
</head>
<body>
<br>

<div class="text-center">
    
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS</label></b>
</div>
 
 <hr>
 
<div class="row col-sm-10" style="">
    <div class="" >
        <div class="ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>N°</th>
						<th>NOM</th>
                        <th>PRENOM(S)</th>
						<th>N° CNI</th>
                        <th>TYPE</th>                      
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>ORGANE</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i=0; ?>
                     <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                    
                    <tr>
                        <td><?php echo e($i); ?></td>
						<td><?php echo e($corresp->nomcorrespondant); ?></td>
                        <td><?php echo e($corresp->prenomcorrespondant); ?></td>
						<td><?php echo e($corresp->cnibcorrespondant); ?></td>
                         <td><?php echo e($corresp->typecorrespondant); ?></td>                   
                        <td><?php echo e($corresp->telephonecorrespondant); ?></td>
                        <td><?php echo e($corresp->mailcorrespondant); ?></td>
                        <td><?php echo e($corresp->organe); ?></td>                                           
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/etats/listecorrespondant.blade.php ENDPATH**/ ?>