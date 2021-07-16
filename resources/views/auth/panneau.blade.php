@extends('tprecop.template')
@section('contenu')

<br>

<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">GESTION DES UTILISATEURS </label></b>
</div>
<div class="text-right">
<form method="post" action="{{route('adduser')}}">
 @csrf
<button type="submit" class="btn btn-info">Ajouter un utilisateur</button>
</form>
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
                        
						<th>NOM & PRENOM </th>
						<th>IDENTIFIANT</th>
                        <th>PROFIL</th>
                        <th>ACTION</th>
                       
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i = 0 ?>
                     @foreach($alluser as $user)
                    <?php $i++ ?>
                    
                    <tr>
                        <td>{{$user->name }}</td>
						<td>{{$user->identifiant }}</td>
                        <td>{{$user->profil }}</td>
                        <td title="">
							<div class="row ">                                
									<button data-toggle="modal" data-target='#recherche{{$i}}' class="btn btn-success mr-2" value="Details">Détails</button>                   
									<div class="modal fade" id='recherche{{$i}}'>
                                <div class="modal-dialog modal-lg" style="">
                                    <div class="modal-content" style="background-color : whitesmoke">
                                        <div class="row listetitreformgrand" style="">
                                            <div class="col-sm-12" style="">
                                                <h3 class=" offset-sm-3"> DETAILS DE L'UTILISATEUR </h3>
                                            </div>
                                        </div>
                                        <div class="modal-body">     
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM & PRENOM (S)</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->name}}</label></div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM D'UTILISATEUR</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->identifiant}}</label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">EMAIL</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->email}}</label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">TELEPHONE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->telephone}}</label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">TELEPHONE (WHATSAPP)</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->telephone1}}</label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">NOM DU SERVICE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->service}}</label></div>
                                            </div>
											<div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">PROFIL</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$user->profil}}</label></div>
                                            </div>                                          
                                        </div>
                                    </div>    
                                </div>
                             </div>
                             
                            <div class="btn-group mr-2">
                                    <form method="post" action="{{route('edituser',[$user->id])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Modifier Infos</button>
                                        
                                    </form>  
                            </div> 
							<div class="btn-group mr-2">
                                    <form method="post" action="{{route('resetpass',[$user->id])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Modifier Mot de Passe</button>
                                        
                                    </form>  
                            </div>
							<div class="btn-group mr-2"> 	<!-- Retirer un user-->
							   <form method="post" action="{{route('supprimer',[$user->id])}}">
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Vraiment Retirer?')">Supprimer</button>
								</form>
							</div> 
                        </div>    
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