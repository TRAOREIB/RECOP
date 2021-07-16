<html>
<head>
	<title>Attestation provisoire</title>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap4.css')); ?>"> 
<meta charset="utf-8">
<script>
   
</script>
</head>
<body>

<div class="text-center"><!--en tete-->
<div> 
	<h3>BURKINA FASO</h3>
	<h3>Unité – Progrès – Justice</h3>	
</div>

<div class="text-center"> <!--image-->
	<img src="<?php echo e(asset('images/armoirie_bf.jpg')); ?>" alt="Armoirie du Burkina Faso">
    
</div>	
<h3>MINISTERE DE LA COMMUNICATION ET DES RELATIONS AVEC LE PARLEMENT</h3>
<h3>***************</h3>
<h3>ACCREDITATION DE PRESSE</h3>
<h2>ATTESTATION PROVISOIRE</h2>
</div>

<?php $i=0; ?>
 <?php $__currentLoopData = $accredit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accreditation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++; ?>
                                                                                   
<div class="text-center">
<p>M/Mme <?php echo e($accreditation->nomdemandeur); ?> <?php echo e($accreditation->prenomdemandeur); ?>,  
votre demande d’accréditation de presse pour couvrir le(s) sujet(s) suivant(s) : </p>
<?php break; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div> 
	<table class="table table-striped">
		<tr>
			<th>SUJET</th>
			<th>DATE DE DEBUT</th>
			<th>DATE DE FIN</th>
			<th>REGION</th>
			<th>LOCALITE</th>
		</tr>
 <?php $__currentLoopData = $accredit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accreditation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($accreditation->titre); ?></td>
			<td><?php echo e($accreditation->datedebut); ?></td>
			<td><?php echo e($accreditation->datefin); ?></td>
			<td><?php echo e($accreditation->nomregion); ?></td>
			<td><?php echo e($accreditation->lieuevenement); ?></td>
		</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<p> A été validée.</p>
</div>
</div>
<div class="text-center">
<p><b>NB : Ce document ne peut servir en aucun cas d’accréditation de presse définitive.
 Il appartient au demandeur de récupérer l’accréditation de presse au 
 service d’information du gouvernement du Burkina Faso 
 au numéro +226 25 33 21 27 / 70 25 30 53</b></p>	
</div>
<div style="text-center">
	<?php echo e($codeqrap); ?>

</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\RECO\resources\views/etats/attestationpaccreditation.blade.php ENDPATH**/ ?>