@extends('tprecop.template')
@section('contenu')

<br>

<div class="text-center">
    <b><label style="" class="text-primary">LISTE DES DEMANDEURS </label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
 <hr>
 <form class="form-horizontal col-sm-10" role="form" method="POST" action="{{ route('listedemandeur1') }}" enctype="multipart/form-data">
	{{ method_field('GET')}}
	<input type="submit" class="btn btn-warning" value="Exporter en PDF"> 
</form>
<br>
    <div class="col-sm-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>NATIONALITE</th>
                        <th>TELEPHONE</th> 
						<th>MAIL</th>
						<th>ORGANE/INSTITUTION</th>
						<th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
					<?php $i = 0 ?>
                     @foreach($alldemandeur as $demandeur)
					 <?php $i++ ?>
                   
					<tr>
					
                        <td>{{ $demandeur->nom}}</td>
                        <td>{{ $demandeur->prenom}}</td>
                        
						<td>{{ $demandeur->nationalite}}</td>
						<td>{{ $demandeur->telephone}}</td>
						<td>{{ $demandeur->mail}}</td>
						<td>{{ $demandeur->organe}}</td>
						
						<td title="">
							
								 <form  method="post" action="{{route('detailsdemandeur')}}">
								@csrf
								<input type="submit" class="btn btn-warning" value="Details">           
								<input type="hidden"  value="{{$demandeur->iddemandeur}}" name="iddemandeur">
								</form>
                          </td>
				     </tr>
						
                    @endforeach      
                </tbody>
            </table>
		
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@endsection 
