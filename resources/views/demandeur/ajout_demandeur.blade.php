@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE </label>
</div>
<div class="ligne_separe_titre"></div>
<br>

<form class="form-horizontal was-validated col-sm-10 offset-1" role="form" method="POST" action="{{ route('demandeur.store') }}" enctype="multipart/form-data">
    {{ method_field('POST')}}
    {{ csrf_field() }}

    <!-- IDENTITE DU DEMANDEUR-->

    <div class="col-sm-12">
        <!-- Bloc IDENTITE DU DEMANDEUR-->
        <div class="card">
            <div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Entrer le nom" name="nom" value="{{ old('nom') }}" required>
                        @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Entrer le prenom" name="prenom" value="{{ old('prenom') }}" required>
                        @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('profession') is-invalid @enderror" id="profession" placeholder="Entrer la profession " name="profession" value="{{ old('profession') }}" required>
                        @error('profession')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">SEXE :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="sexe" name="sexe" required>
                            <option value="Masculin">MASCULIN</option>
                            <option value="Feminin">FEMININ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control @error('datenaissance') is-invalid @enderror" id="datenaissance" placeholder="" name="datenaissance" value="{{ old('datenaissance') }}" required>
                        @error('datenaissance')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('lieunaissance') is-invalid @enderror" id="lieunaissance" placeholder="Entrer le lieu de naissance " name="lieunaissance" value="{{ old('lieunaissance') }}" required>
                        @error('lieunaissance')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('nationalite') is-invalid @enderror" id="nationalite" placeholder=" " name="nationalite" value="{{ old('nationalite') }}" required>
                        @error('nationalite')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder=" Entrer le numero de telephone au Burkina Faso " name="telephone" value="{{ old('telephone') }}" required>
                        @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE PAYS DE RESIDENCE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('telephoneresidence') is-invalid @enderror" id="telephone" placeholder=" Entrer le numero de telephone de votre pays de residence " name="telephoneresidence" value="{{ old('telephoneresidence') }}" required>
                        @error('telephoneresidence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="mail">EMAIL :</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="mail" value="{{ old('mail') }}" required>
                        @error('mail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">PAYS DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('lieuresidence') is-invalid @enderror" id="lieuresidence" placeholder=" " name="lieuresidence" value="{{ old('lieuresidence') }}" required>
                        @error('lieuresidence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="adressepaysresidence">ADRESSE PAYS DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('adressepaysresidence') is-invalid @enderror" name="adressepaysresidence" value="{{ old('adressepaysresidence') }}" required>
                        @error('adressepaysresidence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>La province, la ville, rue, secteur </i></label>

                    </div>
                </div>
                @if($typedemandeur=="Ressortissant Espace CEDEAO")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">N° CNI:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('cnib') is-invalid @enderror" id="cnib" placeholder="saisir votre numero de carte nationale d'identité " name="cnib" value="{{ old('cnib') }}" required>
                        @error('cnib')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Numero de la Carte Nationale d'Identité (CNI) </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control @error('datedelivcnib') is-invalid @enderror" id="datedelivcnib" placeholder=" " name="datedelivcnib" value="{{ old('datedelivcnib') }}" required>
                        @error('datedelivcnib')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Date de delivrance de la CNI</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control @error('dateexpircnib') is-invalid @enderror" id="dateexpircnib" placeholder=" " name="dateexpircnib" value="{{ old('dateexpircnib') }}" required>
                        @error('dateexpircnib')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Date d'expiration de la CNI</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('passeport') is-invalid @enderror" placeholder=" " name="passeport" value="{{ old('passeport') }}">
                        @error('passeport')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Le numéro du passport</i></label>
                    </div>
                </div>
                @endif
                @if($typedemandeur=="Autre")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('passeport') is-invalid @enderror" placeholder=" " name="passeport" value="{{ old('passeport') }}" required>
                        @error('passeport')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Le numéro du passport</i></label>
                    </div>
                </div>
                @endif

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('carteconsulaire') is-invalid @enderror" id="carteconsulaire" placeholder=" " name="carteconsulaire" value="{{ old('carteconsulaire') }}">
                        @error('carteconsulaire')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Le numéro de la carte consulaire</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('personneprevenir') is-invalid @enderror" id="personneprevenir" placeholder=" " name="personneprevenir" value="{{ old('personneprevenir') }}" required>
                        @error('personneprevenir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>Nom et Prenom(s) du fixeur</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE DU FIXEUR:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('telephonepersp') is-invalid @enderror" id="telephonepersp" placeholder=" " name="telephonepersp" value="{{ old('telephonepersp') }}" required>
                        @error('telephonepersp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="adressfixeur">ADRESSE DU FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('adressfixeur') is-invalid @enderror" id="adressfixeur" placeholder=" " name="adressfixeur" value="{{ old('adressfixeur') }}" required>
                        @error('adressfixeur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label><i>La province, La ville, le secteur, le quartier</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="professionfixeur">PROFESSION DU FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('professionfixeur') is-invalid @enderror" id="professionfixeur" placeholder=" " name="professionfixeur" value="{{ old('professionfixeur') }}" required>
                        @error('professionfixeur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteprofessionnel">N° CARTE PROFESSIONEL DU FIXEUR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('carteprofessionnel') is-invalid @enderror" id="carteprofessionnel" placeholder=" " name="carteprofessionnelfixeur" value="{{ old('carteprofessionnelfixeur') }}" required>
                        @error('carteprofessionnelfixeur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
                <input type="hidden" value="0" name="actifcorrespondant">
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm-12">
        <!-- Bloc ORGANE DE PRESSE-->
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM ORGANE/INSTITUTION</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('organe') is-invalid @enderror" id="organe" type="text" name="organe" value="{{ old('organe') }}" required />
                        @error('organe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE ORGANE</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('telorgane') is-invalid @enderror" id="telorgane" type="text" name="telorgane" value="{{ old('telorgane') }}" required />
                        @error('telorgane')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE ORGANE</label>
                    <div class="col-sm-7">
                        <input class="form-control @error('adressestruct') is-invalid @enderror" id="adressestruct" type="text" name="adressestruct" value="{{ old('adressestruct') }}" required />
                        @error('adressestruct')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
               <input type=hidden value="{{$typedemandeur}}" name="typedemandeur">
                <input type="hidden" value="0" name="test">
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm-12">
        <!-- CREATION DU COMPTE USER-->
        <div class="card">
            <div class="card-header text-center">{{ __("ENREGISTREMENT DU COMPTE D'UTILISATEUR") }}</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="identifiant" class="col-md-4 col-form-label text-md-right">{{ __("Nom d'utilisateur") }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}" required>

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

                <div class="form-group row">
                            <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                            <div class="col-md-6">
                                <span class="captcha-image">{!! Captcha::img() !!}</span> &nbsp;&nbsp;
                                <button type="button" class="btn btn-success refresh-button">Actualiser</button>
                                <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required>
                                @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div>


            </div>
        </div>
         <input type="hidden" name="name">
    </div>
    <br>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
    </div>
</form>
<br><br>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.refresh-button').click(function() {
            $.ajax({
                type: 'get',
                url: '{{ route('refreshCaptcha') }}',
                success:function(data) {
                    $('.captcha-image').html(data.captcha);
                }
            });
        });
    });
</script>
@endsection