@extends('tprecop.template')
@section('contenu')

	<!--	<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/datatables.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> 
		-->
		<br><br>
<div class="titrenouvelleinformation"><a href="{{ route('enrinf') }}" class="btn btn-info">Nouvelle Information </a>
 
</div>
<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <div class="card-header">
            
         
             
        </div>
      </div>
</div> <br>

   
       
 
 <br><br>
   

<div class="row listetitreformgrand" style="">
      <div class="col-sm-12  text-center" style="">
        <h2 class=" offset-sm-2"> Liste de mes Publications</h2>
      </div>
</div> <br>

   <div class="row divtabgrand offset-sm-1" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>TITRE</th>
                        <th>CONTENU</th>
                        <th>DATE</th>
						 <th>MODIFIER</th>
                        <th>SUPPRIMER</th>
                        
                    </tr>
                </thead>
                <tbody>

                     @foreach($allinformation as $informations)
                    <tr>
                        <td>{{ $informations->titre }}</td>
                         <td>{{ $informations->contenu }}</td>

                         
						
                         <td>{{ $informations->CREATED_AT }}</td>
                       
					   
					    <td title="Modifier">
                            <form method="GET" action="{{ route('informations.edit',[$informations->idinfo]) }}">
                                {{method_field('EDITER') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Modifier" style="border: 0px;background-color:">
                            </form>
                        </td>
                       
                       <td title="Supprimer">

                            <form method="POST" action="{{ route('informations.destroy',[$informations->idinfo]) }}">
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
</div>
<!--  fin de la liste-->

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
 @endsection 
