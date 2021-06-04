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
  
  
  
  <div class="border-right-7 tableau rounded ">
  <div class="row entete">
    <div class="col-2">
    <strong> {{$corresp->nomcorrespondant }} </strong>
    </div>
    <div class="col-1">
	<strong>	{{$corresp->prenomcorrespondant }} </strong>
    </div>
    <div class="col-3">
    <strong>  CORRESPONDANT {{$corresp->media }} </strong>
    </div>
	<div class="col-3">
    <strong> {{$corresp->dateinfo }} </strong>
    </div>


    {{-- @foreach($allinformation as $informations)  --}}
             {{-- @if($corresp->idinfo==$informations->idinfo)    --}}
    {{-- <div class="col-1">
        <td title="Modifier">

           <form method="GET" action="{{ route('informations.edit',[$informations->idinfo]) }}">
                {{method_field('EDITER') }}
                {{ csrf_field() }}
                <input type="submit" value="Modifier" style="border: 0px;background-color:#00FF00">
            </form>
        </td>
    </div>
    <div class="col-1">  
       <td title="Supprimer">

           <form method="POST" action="{{ route('informations.destroy',[$informations->idinfo]) }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <a ></a>
                <input type="submit" value="Supprimer" style="border: 0px;background-color:#FF0000">
            </form>                    
        </td>
    </div>  --}}
         {{-- @endif  --}}
   
         {{-- @endforeach --}}
  </div>
  
  <div class="corpsinfo">  <strong style="background-color: #999999" > {{$corresp->titreinfo }} </strong>  <br><br> {{$corresp->contenuinfo }} </div>
  <br>
  
  </div>
  
   <br>
 


   
		

        @endforeach   
        



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
 @endsection 