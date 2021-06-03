@extends('tprecop.template')
@section('contenu')
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue">NOUVEAU DEMANDEUR</label>
</div>
<div class="ligne_separe_titre"></div>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('pjaccreditation')}}" enctype="multipart/form-data">
    {{ method_field('POST')}}
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 1-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="photo" type="file" name="photo" />
                    </div>
                </div>              
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNIB</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="pjcnib" />
                        <label><i>scannage de la CNIB (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjpasseport" type="file" name="pjpasseport"/>
                        <label><i>scannage de la première page du passeport</i></label>
                    </div>
                </div>
				<div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                     <input class="form-control" id="pjcarteconsulaire" type="file" name="pjcarteconsulaire" />
					 <label><i>scannage de la carte consulaire (Recto et Verso)</i></label>
                    </div>
                </div>
				<div class="form-group row">
                    <label for="pjcinibperprev" class="col-sm-3 col-form-label">CNIB PERSONNE A PREVENIR</label>
                    <div class="col-sm-7">
                     <input class="form-control" id="pjcnibperprev" type="file" name="pjcnibperprev"/>
					 <label><i>scannage de la CNIB (Recto et Verso) de la personne à prevenir </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcartepresse" type="file" name="pjcartepresse" />
                        <label><i>scannage de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                <input type="hidden" value="{{$maxid}}" name="iddemandeur">
            </div>
        </div>
    </div>
  
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
@endsection
