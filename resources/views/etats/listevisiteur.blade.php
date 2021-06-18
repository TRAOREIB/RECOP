<html>
<head>
	<title>Liste des Objets</title>
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
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS</label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
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
                @foreach($allcorrespondant as $corresp)
					<?php $i++; ?>
                    <tr>
                        <td>{{$i}}</td>
						<td>{{$corresp->nom}}</td>
                        <td>{{$corresp->prenom}}</td>
						<td>{{$corresp->cnib}}</td> 
						<td>{{$corresp->typecorrespondant}}</td>                   
                        <td>{{$corresp->telephone}}</td>
                        <td>{{$corresp->mail}}</td>
                        <td>{{$corresp->organe }}</td>
						<td>{{$corresp->actif }}</td>
                       
                    </tr>
                     @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
 <br><br>


</body>
</html>