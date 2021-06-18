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
    <b><label style="" class="text-primary">LISTE DES ACCREDITATIONS</label></b>
</div>
 
 <hr>
 <br><br>

<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>N°</th>
						<th>NOM</th>
                        <th>PRENOM(s)</th>
						<th>SUJET A COUVRIR</th> 
                        <th>DATE DEBUT</th>
                        <th>DATE FIN</th>
                        <th>LIEU EVENEMENT</th>
						<th>REGION</th>
                       
                    </tr>
                </thead>
                <tbody>
					<?php $i=0; ?>
                   <?php $__currentLoopData = $allaccreditation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accredi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				   <?php $i++; ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
						<td><?php echo e($accredi->nomdemandeur); ?></td>
                        <td><?php echo e($accredi->prenomdemandeur); ?></td>
                        <td><?php echo e($accredi->titre); ?></td>                        
                        <td><?php echo e($accredi->datedebut); ?></td>
                        <td><?php echo e($accredi->datefin); ?></td>                       
                        <td><?php echo e($accredi->lieuevenement); ?></td>
						<td><?php echo e($accredi->nomregion); ?></td>
                        
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
</body>
</html><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/etats/listeaccreditation.blade.php ENDPATH**/ ?>