<<<<<<< HEAD
 @extends('tprecop.template')
@section('contenu')
  <!-- {{--@section('script') --}}

		<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">  
	
{{-- @endsection --}}   -->
<br><br>
<div class="titrenouvelleinformation"><a href="{{ route('enrinf') }}" class="btn btn-info">Nouvelle Information </a>
 
</div>

<br>
<!--
<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h1 class=" offset-sm-2   text-center" > Liste des informations </h1>
      </div> 
</div> <br>
-->




<br>
<div class="row divtabgrand  offset-sm-1" style="">
    <div class="col-sm-12" >
        <div  style="background-color: #EEE">
            



 @foreach( $allcorrespondant as $corresp)
  
  
  
  <div class="container tableau rounded">
  <div class="row entete">
    <div class="col-sm-2">
    <strong> {{$corresp->nomcorrespondant }} </strong>
    </div>
    <div class="col-sm-1">
	<strong>	{{$corresp->prenomcorrespondant }} </strong>
    </div>
    <div class="col-sm-3">
    <strong>  CORRESPONDANT {{$corresp->media }} </strong>
    </div>
	<div class="col-sm-3">
    <strong> {{$corresp->dateinfo }} </strong>
    </div>


   
     <div class="col-sm-1">
        <td title="Modifier">

            
           <form method="GET"  action="{{ route('editfv',[$corresp->idinfo]) }}"  >
                {{method_field('EDITER') }}
                {{ csrf_field() }}
                <input type="submit" value="Modifier" style="border: 0px;background-color:#56739A">
            
                {{-- <input type="hidden" value="tous" name="control"> --}}
            </form>
        </td>
    </div>
    <div class="col-sm-1">  
       <td title="Supprimer">
        
           {{-- <form method="POST"  action="{{ route('destroyfv',[$corresp->idinfo]) }}" > --}}
               
            
             <form method="POST"  action="{{ route('destroyfv',[$corresp->idinfo]) }}" > 
                {{-- <form method="POST"  action="{{ route('informations.destroy',[$corresp->idinfo]) }}" > --}}
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <a ></a>
                <input type="submit" value="Supprimer" style="border: 0px;background-color:#56739A">
                {{-- <input type="hidden" value="tous" name="control"> --}}
            </form>                    
        </td>
    </div>  
         
  </div>
  
  <div class="corpsinfo">  <strong style="background-color: #999999" > {{$corresp->titreinfo }} </strong>  <br><br> {{$corresp->contenuinfo }} </div>
  <br>
  
  </div>
  
   <br>
 


   
		

        @endforeach   
        


=======
@extends('tprecop.template')
@section('contenu')

<br>
<div><a href="{{ route('enrinf') }}" class="btn btn-info">Nouvelle Information </a>
 
</div>
<br>
 <div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">LISTE DES INFORMATIONS</label></b>
</div>
 
 {{-- <div class="ligne_separe_titre"></div> --}}
 <hr>
    <br><br>
<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
						 <th>MEDIA</th>
                        <th>Date</th>
                        <th>Contenu</th>
                       
                        
                       
                    </tr>
                </thead>
                <tbody>

                    @foreach( $allcorrespondant as $corresp)
                    <tr>
                        <td>{{$corresp->nomcorrespondant }}</td>
                        <td>{{$corresp->prenomcorrespondant }}</td>
						 <td>{{$corresp->media }}</td>
                        <td>{{$corresp->dateinfo }}</td>
                        <td>{{$corresp->contenuinfo }}</td>
                       
                        
              
                    </tr>
                     @endforeach

                </tbody>
                
            </table>
>>>>>>> f2d1561d2cad1225ce9e631c8dfd52516f7c0cbb

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
</script>
<<<<<<< HEAD
=======
<br><br>
>>>>>>> f2d1561d2cad1225ce9e631c8dfd52516f7c0cbb
 @endsection 