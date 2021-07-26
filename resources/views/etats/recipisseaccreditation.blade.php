<html>
<head>
	<title>Recipisse accreditation</title>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}"> 
<meta charset="utf-8">
<script>
   
</script>
</head>
<body>

<div class="text-center"><!--en tete-->
<div > 
	<h3>BURKINA FASO</h3>
	<h3>Unité – Progrès – Justice</h3>	
</div>

<div> <!--image-->
	<img src="{{asset('images/armoirie_bf.jpg')}}" alt="Armoirie du Burkina Faso">
    
</div>	
<h3>MINISTERE DE LA COMMUNICATION ET DES RELATIONS AVEC LE PARLEMENT</h3>
<h3>***************</h3>
<h3>ACCREDITATION DE PRESSE</h3>
<h2>RECIPISSE N° 320</h2>
</div>

<?php $i=0; ?>
 @foreach($accredit as $accreditation)
<?php $i++; ?>
                                                                                   
<div class="text-center">
<p>M/Mme {{$accreditation->nomdemandeur}} {{$accreditation->prenomdemandeur}},  
Vous avez soumis votre demande d’accréditation de presse pour couvrir le(s) sujet(s) suivant(s) : </p>
@break;
@endforeach

<div> 
	<table class="table table-striped">
		<tr>
			<th>SUJET</th>
			<th>DATE DE DEBUT</th>
			<th>DATE DE FIN</th>
			<th>REGION</th>
			<th>LOCALITE</th>
		</tr>
 @foreach($accredit as $accreditation)
		<tr>
			<td>{{$accreditation->titre}}</td>
			<td>{{$accreditation->datedebut}}</td>
			<td>{{$accreditation->datefin}}</td>
			<td>{{$accreditation->nomregion}}</td>
			<td>{{$accreditation->lieuevenement}}</td>
		</tr>
 @endforeach
	</table>
</div>
<p>Votre demande est en cours d’analyse. Vous recevrez la réponse dans les 24 heures
 qui suivent votre sollicitation. </p>
</div>
<div class="text-center">
<p><b>NB : Ce document ne peut servir en aucun cas d’accréditation de presse définitive.
 Il appartient au demandeur de récupérer l’accréditation de presse au 
 service d’information du gouvernement du Burkina Faso 
 au numéro +226 25 33 21 27 / 70 25 30 53</b></p>	
</div>
<div class="text-center">
	{{ $codeqra }}
</div>
</body>
</html>