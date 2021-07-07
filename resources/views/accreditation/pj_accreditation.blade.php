@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE </label>
</div>
<hr>
<br>
<form method="POST" class="was-validated" action="{{route('piecesjointes.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="col-sm-12">
        <!-- Bloc 1-->

        <p></p>
        <div class="card">
            <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">LETTRE DE RECOMMANDATION</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('lettrerecommendation') is-invalid @enderror" type="file" name="lettrerecommendation" required />
                        <label><i>joindre le fichier de la lettre de recommendation</i></label>
                        @error('lettrerecommendation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" required />
                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNI</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('pjcnib') is-invalid @enderror" type="file" name="pjcnib" required />
                        <label><i>scan de la Carte National d'Identité (Recto et Verso)</i></label>
                        @error('pjcnib')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('pjpasseport') is-invalid @enderror" type="file" name="pjpasseport" />
                        <label><i>scan de la première page du passeport</i></label>
                        @error('pjpasseport')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('pjcarteconsulaire') is-invalid @enderror" type="file" name="pjcarteconsulaire" />
                        <label><i>scan de la carte consulaire (Recto et Verso)</i></label>
                        @error('pjcarteconsulaire')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="pjcinibperprev" class="col-sm-3 col-form-label">CNI/PASSEPORT DU FIXEUR</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('pjcnibperprev') is-invalid @enderror" type="file" name="pjcnibperprev" required />
                        <label><i>scan de la Carte Nationale d'Identité(Recto et Verso) ou du passeport(première page)</i></label>
                        @error('pjcnibperprev')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE/CARTE PROFESSIONNELLE</label>
                    <div class="col-sm-7">
                        <input class="form-control  @error('pjcartepresse') is-invalid @enderror" type="file" name="pjcartepresse" required />
                        <label><i>scan de la carte de Presse ou professionnelle (Recto et Verso)</i></label>
                        @error('pjcartepresse')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
 
                </div>
                
                <input type="hidden" value="demandeur" name="type">
            </div>
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