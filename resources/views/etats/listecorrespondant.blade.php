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
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS</label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
 <hr>
 
<div class="row col-sm-10" style="">
    <div class="" >
        <div class="ligneform " style="background-color: #EEE">
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
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i=0; ?>
                     @foreach($allcorrespondant as $corresp)
                    <?php $i++; ?>
                    
                    <tr>
                        <td>{{$i}}</td>
						<td>{{$corresp->nomcorrespondant}}</td>
                        <td>{{$corresp->prenomcorrespondant}}</td>
						<td>{{$corresp->cnibcorrespondant}}</td>
                         <td>{{$corresp->typecorrespondant }}</td>                   
                        <td>{{$corresp->telephonecorrespondant}}</td>
                        <td>{{$corresp->mailcorrespondant}}</td>
                        <td>{{$corresp->organe }}</td>                                           
                    </tr>
                     @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>