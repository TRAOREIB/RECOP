<html>
<head>
	<title>Liste des Objets</title>
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
    <br><br> 
<div class="row divtabgrand justify-content-center" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
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
						 <th>ACTIF</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
				<?php $i=0; ?>
                <?php $__currentLoopData = $allcorrespondant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corresp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $i++; ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
						<td><?php echo e($corresp->nom); ?></td>
                        <td><?php echo e($corresp->prenom); ?></td>
						<td><?php echo e($corresp->cnib); ?></td> 
						<td><?php echo e($corresp->typecorrespondant); ?></td>                   
                        <td><?php echo e($corresp->telephone); ?></td>
                        <td><?php echo e($corresp->mail); ?></td>
                        <td><?php echo e($corresp->organe); ?></td>
						<td><?php echo e($corresp->actif); ?></td>
                       
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
 <br><br>


</body>
</html><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/etats/listevisiteur.blade.php ENDPATH**/ ?>