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
<div class="text-center">
    <b><label style="" class="text-primary">LISTE DES DEMANDEURS</label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
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
                     @foreach($alldemandeur as $dem)
					 <?php $i++; ?>
                   
					<tr>
						<td>{{$i}}</td>
                        <td>{{$dem->nom}}</td>
                        <td>{{$dem->prenom}}</td>
                        <td>{{$dem->profession}}</td>
						<td>{{$dem->numcnib}}</td>
						<td>{{$dem->nationalite}}</td>
						<td>{{$dem->telephone}}</td>
						<td>{{$dem->mail}}</td>
						<td>{{$dem->organe}}</td>
								
				     </tr>
						
                    @endforeach      
                </tbody>
            </table>
		
        </div>
    </div>
</body>
</html> 
