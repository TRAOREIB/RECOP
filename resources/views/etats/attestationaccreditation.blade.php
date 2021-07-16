<html>
<head>
	<title>Attestation Accreditation</title>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}"> 
<meta charset="utf-8">
<script>
   
</script>
</head>
<body class="accredi">
<div class="text-center"><!--en tete-->
	<img src="{{asset('images/entete_accredi.png')}}" alt="Entete">
</div>
<br>
<?php $i=0; ?>
 @foreach($infoaccrediation as $accreditation)
<?php $i++; ?>
<div  class="titreaccredi"><!--titre-->
<h2><b>ACCREDITATION DE PRESSE</b></h2>
<h6><b>N°{{$accreditation->numeroaccreditation}}/PM/SIG du {{$accreditation->datevalidationaccreditation}}</b></h6>
</div>
<br>
<div class="text-center "><!--Presentation-->
<p>Je soussignée Mafarma <b>SANOGO</b>, Coordonnatrice du Service d’information du gouvernement 
(SIG) accorde la présente Accréditation à :</p>
</div>
<div class="text-center"><!--Infos demandeur-->
<div>
<p>NOM :  <b>{{$accreditation->nomdemandeur}}</b> PRENOM (S) : <b>{{$accreditation->prenomdemandeur}}</b> <br>                                        
PROFESSION :<b>{{$accreditation->professiondemandeur}}</b> ORGANE : <b>{{$accreditation->nomorgane}}</b><br>
CNI : <b>{{$accreditation->cnidemandeur}}</b> DU  <b>{{$accreditation->datedelivrecni}}</b>   	VALIDITE : <b>{{$accreditation->dateexpirecni}}</b><br>
PASSEPORT : <b>{{$accreditation->passdemandeur}}</b>    DU    <b>{{$accreditation->datedelivrepass}}</b>   VALIDITE : <b>{{$accreditation->dateexpirepass}}</b> <br> 
NATIONALITE : <b>{{$accreditation->nationalitedemandeur}}</b></p>
</div>
<div><!--fixeur-->
<p><b>Personne (s) à contacter en cas de besoin :  Mr/Mme  {{$accreditation->nomprenomfixeur}}<br>   
{{$accreditation->professionfixeur}} {{$accreditation->organefixeur}} Téléphone : {{$accreditation->telephonefixeur}}</b>
</p>
</div>
</div>
@break
@endforeach

<div><!--Accréditation--> 
	<table class="table table-striped">
		<tr>
			<th>SUJET</th>
			<th>DESTINATION/LOCALITÉ</th>
			<th>PERIODE</th>
		</tr>
 @foreach($infoaccrediation as $accreditation)
		<tr>
			<td>{{$accreditation->titre}}</td>
			<td>{{$accreditation->nomregion}}/{{$accreditation->lieuevenement}}</td>
			<td>{{$accreditation->datedebut}} AU {{$accreditation->datefin}}</td>
		</tr>
 @endforeach

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
	{{ $codeqrattest }}
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
</html>