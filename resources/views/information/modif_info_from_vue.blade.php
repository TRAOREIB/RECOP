@extends('tprecop.template')
@section('contenu')

	<!--	<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/datatables.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> 
		-->
		<br><br>
<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <div class="card-header">
             <h3 class=" offset-sm-2"> Modifier une Information </h3>
         
             
        </div>
      </div>
</div> <br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="{{ route('updatefv',[$editinformation->idinfo]) }}"  enctype="multipart/form-data" >

    {{ method_field('PUT')}}
    {{ csrf_field() }}

    <div class="card text-center">
      
        <div class="card-body">
<div class=" row form-group "> 
    
                <label for="titre" class="control-label col-sm-3">Titre  <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="titre"  value="{{$editinformation->titre}}" required="required">
                    <small class="text-danger">{{ $errors->first('titre',':message') }}</small> 
                </div> 
   <!--             <input type="hidden" value="type" name="type">  -->
            </div>

           

            <div class=" row form-group">
                <label for="contenu" class="control-label col-sm-3">Contenu <b><i style="color: red">*</i></b></label> 

                <div class="col-sm-7" style=""> 
                    <textarea type="textarea" maxlength="2000" class="form-control" name="contenu"  required="required" >{{$editinformation->contenu}}</textarea>
                   
                    <small class="text-danger">{{ $errors->first('contenu',':message') }}</small> 
                </div> 
            </div>
			
			
			
			
			<div class=" row form-group"> 
                <label for="titre" class="control-label col-sm-3">  <b><i style="color: red"></i></b></label> 
                <div class="col-sm-7"> 
                    <input type="hidden" class="form-control" name="idcorrespondant"   value="2" required="required">
                    <small class="text-danger">{{ $errors->first('idcorrespondant',':message') }}</small> 
                </div> 
   <!--             <input type="hidden" value="type" name="type">  -->
            </div>
         <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
    </div> 
    </div>
</div>
 </form>   
       
 
 <br><br>
   



   
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
