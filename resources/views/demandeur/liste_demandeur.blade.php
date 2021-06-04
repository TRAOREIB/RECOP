@extends('tprecop.template')
@section('contenu')

<br>
 <br>
<div class="text-center">
      <div class="col-sm-12" style="">
	  <label style="font-family: fantasy;color: blue"> LISTE DES DEMANDEURS </label>     
      </div>
</div> 
 <div class="ligne_separe_titre"></div>
    <br><br>
	
	
    <div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Liste des demandeurs</h3>
      </div>
    </div> 
    <div class="col-sm-7" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>N° CNIB</th>
                        <th>MODIFIER</th>
                        <th>SUPPRIMER</th>   
                    </tr>
                </thead>
                <tbody>
					<?php $i = 0 ?>
                     @foreach($alldemandeur as $demandeur)
					 <?php $i++ ?>
                    <tr>
                        <td>{{ $demandeur->nom}}</td>
                        <td>{{ $demandeur->prenom}}</td>
                        <td>{{ $demandeur->numcnib}}</td>

                        <td title="Modifier">
                            <form method="GET" action="{{ route('demandeur.edit',[$demandeur->iddemandeur]) }}">
                                {{method_field('EDITER') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Modifier" style="border: 0px;background-color:">
                            </form>
                        </td>
                       
                       <td title="Supprimer">
                            <form method="POST" action="{{ route('demandeur.destroy',[$demandeur->iddemandeur]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <input type="submit" value="Supprimer" style="border: 0px;background-color:">
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
