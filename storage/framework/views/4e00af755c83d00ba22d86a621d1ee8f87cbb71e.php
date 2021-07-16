<html>
<head>
	<title>Attestation Accreditation</title>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap4.css')); ?>"> 
<meta charset="utf-8">
<script>
   
</script>
</head>
<body class="accredi">
<div class="text-center"><!--en tete-->
	<img src="<?php echo e(asset('images/entete_accredi.png')); ?>" alt="Entete">
</div>
<br>
<?php $i=0; ?>
 <?php $__currentLoopData = $infoaccrediation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accreditation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $i++; ?>
<div  class="titreaccredi"><!--titre-->
<h2><b>ACCREDITATION DE PRESSE</b></h2>
<h6><b>N°<?php echo e($accreditation->numeroaccreditation); ?>/PM/SIG du <?php echo e($accreditation->datevalidationaccreditation); ?></b></h6>
</div>
<br>
<div class="text-center "><!--Presentation-->
<p>Je soussignée Mafarma <b>SANOGO</b>, Coordonnatrice du Service d’information du gouvernement 
(SIG) accorde la présente Accréditation à :</p>
</div>
<div class="text-center"><!--Infos demandeur-->
<div>
<p>NOM :  <b><?php echo e($accreditation->nomdemandeur); ?></b> PRENOM (S) : <b><?php echo e($accreditation->prenomdemandeur); ?></b> <br>                                        
PROFESSION :<b><?php echo e($accreditation->professiondemandeur); ?></b> ORGANE : <b><?php echo e($accreditation->nomorgane); ?></b><br>
CNI : <b><?php echo e($accreditation->cnidemandeur); ?></b> DU  <b><?php echo e($accreditation->datedelivrecni); ?></b>   	VALIDITE : <b><?php echo e($accreditation->dateexpirecni); ?></b><br>
PASSEPORT : <b><?php echo e($accreditation->passdemandeur); ?></b>    DU    <b><?php echo e($accreditation->datedelivrepass); ?></b>   VALIDITE : <b><?php echo e($accreditation->dateexpirepass); ?></b> <br> 
NATIONALITE : <b><?php echo e($accreditation->nationalitedemandeur); ?></b></p>
</div>
<div><!--fixeur-->
<p><b>Personne (s) à contacter en cas de besoin :  Mr/Mme  <?php echo e($accreditation->nomprenomfixeur); ?><br>   
<?php echo e($accreditation->professionfixeur); ?> <?php echo e($accreditation->organefixeur); ?> Téléphone : <?php echo e($accreditation->telephonefixeur); ?></b>
</p>
</div>
</div>
<?php break; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div><!--Accréditation--> 
	<table class="table table-striped">
		<tr>
			<th>SUJET</th>
			<th>DESTINATION/LOCALITÉ</th>
			<th>PERIODE</th>
		</tr>
 <?php $__currentLoopData = $infoaccrediation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accreditation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($accreditation->titre); ?></td>
			<td><?php echo e($accreditation->nomregion); ?>/<?php echo e($accreditation->lieuevenement); ?></td>
			<td><?php echo e($accreditation->datedebut); ?> AU <?php echo e($accreditation->datefin); ?></td>
		</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
</div>

<div><!--Consignes-->
<p class="text-justify"> Toute autorité compétente sollicitée est invitée à lui accorder l’assistance nécessaire, 
dans le strict respect des lois et règlements en vigueur au Burkina Faso.<br>
En foi de quoi, la présente accréditation, qui couvre également les prises de vues dans <b>
<u>le cadre journalistique</u></b>, lui est délivrée pour servir et valoir ce que de droit.<br>
Cette accréditation ne donne pas droit à la protection sécuritaire. Par conséquent, 
tout détenteur de la présente accréditation doit obligatoirement se présenter auprès 
des autorités administratives et sécuritaires compétentes dans les différentes zones 
pour les consignes de sécurité.<br>
Tous accés aux zones sous état d’urgence et sites de déplacés internes ou externes sont soumis 
à une demande préalable et accord des services de sécurité.</p>
</div>
<br>
<div><!--Signature-->
<div class="droite">
	<p><b>La Coordonnatrice</b></p><br><br><br>	
	<p><b><u>Mafarma SANOGO</u></b><br>Officier de l’Ordre de l’Etalon</p>	
</div class="gauche">
<div> <!--Code qr-->
	<?php echo e($codeqrattest); ?>

</div>
</div>
<br><br>
<div class="text-left">
<p> <b><u>Ampliations</u></b>: SG Primature, Sécu, MAEC, MATDS, MCRP, CONAREF.</p>
</div>
<div class="pied"><!--Pied de page-->
	<p class="text-center">03 BP 7045 OUAGADOUGOU 03 – <b>TEL.</b> (226) 25 33 21 27  <b>Email</b> : infosig.bf@gmail.com</p>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/etats/attestationaccreditation.blade.php ENDPATH**/ ?>