@extends('tprecop.template')
@section('contenu')

<br>

<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS </label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
 <hr>
 <input type="submit" class="btn btn-warning" value="Exporter en PDF">
    <br><br>
<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>TYPE</th>                      
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>ORGANE</th>
                        {{-- <th>LIEU DE RESIDENCE</th> --}}
                        <th>ACTION</th>
                       
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i = 0 ?>
                     @foreach($allcorrespondant as $corresp)
                    <?php $i++ ?>
                    
                    <tr>
                        <td>{{$corresp->nomcorrespondant }}</td>
                        <td>{{$corresp->prenomcorrespondant }}</td>
                         <td>{{$corresp->typecorrespondant }}</td>                   
                        <td>{{$corresp->telephonecorrespondant }}</td>
                        <td>{{$corresp->mailcorrespondant }}</td>
                        <td>{{$corresp->organe }}</td>
                        {{-- <td>{{$corresp->lieuresidence }}</td> --}}

                        <td title="">
                        
						<form  method="post" action="{{route('detailscorrespondant')}}">
							<input type="submit" class="btn btn-warning" value="voir les details du compte">           
						</form>		
                                                      
                            <!-- Retirer un correspondant-->
							<form method="GET" action="{{ route('retirer',[$corresp->idcorrespondant]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                
                               <button type="submit" onclick="return confirm('Vraiment Retirer?')">RETIRER</button>
                            </form>
                        
                        </td>
                    </tr>
                     @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
<br><br>

<div class="modal" id="confirmationta">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color : whitesmoke">
            <div class="modal-body">
                <span class="glyphicon glyphicon-exclamation-sign" style="color: #f0ad4e"><label > Supprimer cet &eacutelement ? </label></span>
            </div>
            <div class="modal-footer">
                <a href="#"  class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> OUI</a>
                <a href="#"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> NON</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });

   
    $('#appui').click(function () {
    $({{$i}}).modal();
    });
</script>
@endsection