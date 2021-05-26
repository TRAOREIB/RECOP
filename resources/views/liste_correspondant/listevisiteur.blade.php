@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
      <div class="col-sm-12" style="">
	  <label style="font-family: fantasy;color: blue"> LISTE DES CORRESPONDANTS </label>     
      </div>
</div> 
 <div class="ligne_separe_titre"></div>
    <br><br> 
<br>


<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>MEDIA</th>
                        <th>TYPE PRESSE</th>
                        
                    </tr>
                </thead>
                <tbody>

                @foreach($allcorrespondant as $corresp) 
                    <tr>
                        <td>{{$corresp->nomcorrespondant }}</td>
                        <td>{{$corresp->prenomcorrespondant }}</td>
                        <td>{{$corresp->media }}</td>
                        <td>{{$corresp->typepresse }}</td>
                       
                    </tr>
                     @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
 <br>

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
 @endsection