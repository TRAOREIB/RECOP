<html>
<head>
	<title>Liste des correspondants</title>
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
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
 {{-- <div class="ligne_separe_titre"></div> --}}
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
                   @foreach( $allaccreditation as $accredi)
				   <?php $i++; ?>
                    <tr>
                        <td>{{$i}}</td>
						<td>{{$accredi->nomdemandeur}}</td>
                        <td>{{$accredi->prenomdemandeur }}</td>
                        <td>{{$accredi->titre}}</td>                        
                        <td>{{$accredi->datedebut }}</td>
                        <td>{{$accredi->datefin }}</td>                       
                        <td>{{$accredi->lieuevenement }}</td>
						<td>{{$accredi->nomregion }}</td>
                        
                    </tr>
                     @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
</body>
</html>