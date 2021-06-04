@extends('tprecop.template')
@section('contenu')
<br> 
	<div class="text-center">
  		<h2> MODIFICATION DES PIECES JOINTES </h2>
 	</div>
     <div class="ligne_separe_titre"></div>
    <br>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('piecesjointes.update',[$editpjaccreditation->id]) }}" enctype="multipart/form-data")}}">
    {{ method_field('PUT')}}
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 1-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">LETTRE DE RECOMMENDATION</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="lettrerecommendation" value="{{$editpjaccreditation->lettrerecommendation}}"/>
                        {{$editpjaccreditation->lettrerecommendation}}
						<label><i>joindre le fichier de la lettre de recommendation</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="photo" type="file" name="photo" value="{{$editpjaccreditation->photo}}"/>
                    {{$editpjaccreditation->photo}}
					</div>
                </div>              
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNIB</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="pjcnib" value="{{$editpjaccreditation->pjcnib}}"/>
                        {{$editpjaccreditation->pjcnib}}
						<label><i>scannage de la CNIB (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjpasseport" type="file" name="pjpasseport" value="{{$editpjaccreditation->pjpasseport}}"/>
                        {{$editpjaccreditation->pjpasseport}}
						<label><i>scannage de la première page du passeport</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="pjcarteconsulaire" value="{{$editpjaccreditation->pjcarteconsulaire}}"/>
                        {{$editpjaccreditation->pjcarteconsulaire}}
						<label><i>scannage de la carte consulaire (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcinibperprev" class="col-sm-3 col-form-label">CNIB PERSONNE A PREVENIR</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnibperprev" type="file" name="pjcnibperprev" value="{{$editpjaccreditation->pjcnibperprev}}"/>
                        {{$editpjaccreditation->pjcnibperprev}}
						<label><i>scannage de la CNIB (Recto et Verso) de la personne à prevenir </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcartepresse" type="file" name="pjcartepresse" value="{{$editpjaccreditation->pjcartepresse}}"/>
                        {{$editpjaccreditation->pjcartepresse}}
						<label><i>scannage de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                
            </div>
        </div>

    </div>	
	<!-- BOUTONS DE VALIDATION-->
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">ENREGISTRER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
@endsection