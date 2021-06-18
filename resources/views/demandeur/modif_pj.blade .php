@extends('tprecop.template')
@section('contenu')

<br>  
<div class="text-center">
    <label style="font-family: fantasy;color: blue">MODIFIER VOS PIECES JOINTES</label>
</div> 
<div class="ligne_separe_titre"></div>
<br>

<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('updatedemandeur')}}" enctype="multipart/form-data">
    {{ method_field('POST')}}
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 1-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">LETTRE DE RECOMMENDATION</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="lettrerecommendation" />
                        <label><i>joindre le fichier de la lettre de recommendation</i></label>
                    </div>
                </div>
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
	
	<!-- CREATION DU COMPTE USER-->
	 <div class="card">
        <div class="card-header">{{ __("Enregistrement d'utilisateur") }}</div>

        <div class="card-body">
            <div class="form-group row">
                <label for="identifiant" class="col-md-4 col-form-label text-md-right">{{ __("Identifiant") }}</label>

                <div class="col-md-6">
                    <input  type="text" class="form-control @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}" required>

                    @error('identifiant')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <input type="hidden" value="{{$request->nom}} {{$request->prenom}}" name="name">
            <input type="hidden" value="{{$request->mail1}}"  name="email">
			<input type="hidden" value="Demandeur"  name="profil"> 
             
        </div>
    </div>
	
	<!-- BOUTONS DE VALIDATION-->
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
@endsection
  