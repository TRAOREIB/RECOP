<html>
<head>
	<title>Recipisse correspondant</title>
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
<h3>CORRESPONDANT DE PRESSE</h3>
<h2>RECEPISSE N° 450</h2>
</div>

<?php $i=0; ?>
 <?php $__currentLoopData = $corresp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $correspondant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++; ?>
                                                                                   
<div class="text-center">
<p>M/Mme <?php echo e($correspondant->nom); ?> <?php echo e($correspondant->prenom); ?>, Vous avez soumis votre demande pour être inscrit sur la liste des correspondants de presse au Burkina Faso. Votre demande est en cours d’analyse. Vous recevrez la réponse dans les 24 heures qui suivent votre inscription. </p>
<p>Merci pour votre inscription !!! </p>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="text-center">
	<?php echo e($codeqr); ?>

</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/etats/recipissecorrespondant.blade.php ENDPATH**/ ?>