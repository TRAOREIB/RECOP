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
<div class="text-center">
    <b><label style="" class="text-primary">LISTE DES DEMANDEURS</label></b>
</div>
 
 <hr>
 <br><br>
<br>
    <div class="col-sm-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>N°</th>
						<th>NOM</th>
                        <th>PRENOM</th>
                        <th>PROFESSION</th>
						<th>N° CNI</th>
                        <th>NATIONALITE</th>
                        <th>TELEPHONE</th> 
						<th>MAIL</th>
						<th>ORGANE/INSTITUTION</th>
					</tr>
                </thead>
                <tbody>
					<?php $i=0; ?>
                     <?php $__currentLoopData = $alldemandeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 <?php $i++; ?>
                   
					<tr>
						<td><?php echo e($i); ?></td>
                        <td><?php echo e($dem->nom); ?></td>
                        <td><?php echo e($dem->prenom); ?></td>
                        <td><?php echo e($dem->profession); ?></td>
						<td><?php echo e($dem->numcnib); ?></td>
						<td><?php echo e($dem->nationalite); ?></td>
						<td><?php echo e($dem->telephone); ?></td>
						<td><?php echo e($dem->mail); ?></td>
						<td><?php echo e($dem->organe); ?></td>
								
				     </tr>
						
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                </tbody>
            </table>
		
        </div>
    </div>
</body>
</html> 
<?php /**PATH C:\xampp\htdocs\RECOP\resources\views/etats/listedemandeur.blade.php ENDPATH**/ ?>