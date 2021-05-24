@extends('tprecop.template')
@section('contenu')
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label>
</div>
<div class="ligne_separe_titre"></div>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('piecesjointes.store')}}" enctype="multipart/form-data">
    {{ method_field('POST')}}
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 2-->

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
                    <label for="cv" class="col-sm-3 col-form-label">CV</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="cv" type="file" name="cv" />
                        <label><i>scannage du fichier numerique du CV</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">VISA DU MEDIA</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="visamedia" />
                        <label><i>scannage du fichier numerique du visa</i></label>
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
                        <label><i>scannage de la carte (Recto et Verso)</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcartepresse" type="file" name="pjcartepresse" />
                        <label><i>scannage de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                <input type="text" value="{{$maxid}}" name="idcorrespondant">
            </div>
        </div>
    </div>

    <p></p>

    <div class="card">
        <div class="card-header">{{ __("Enregistrement d'utilisateur") }}</div>

        <div class="card-body">
            <div class="form-group row">
                <label for="identifiant" class="col-md-4 col-form-label text-md-right">{{ __("Nom d'utilisateur") }}</label>

                <div class="col-md-6">
                    <input id="identifiant" type="text" class="form-control @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}" required autocomplete="identifiant">

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
            <input type="text" value="{{$request->nom}} {{$request->prenom}}" name="name">
            <input type="text" value="{{$request->mail1}}"  name="email">
            <input type="text" value="Correspondant"  name="role">
             
        </div>
    </div>
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
</body>
@endsection
