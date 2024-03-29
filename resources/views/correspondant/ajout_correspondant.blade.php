@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>
{{-- <div class="ligne_separe_titre"></div> --}}
<hr>
<br>
<form class="form-horizontal was-validated col-sm-10 offset-1" role="form" method="POST" action="{{route('correspondant.store')}}" enctype="multipart/form-data">
    {{ method_field('POST')}}
    {{ csrf_field() }}

    <div class="col-sm-12">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Entrer le nom" name="nom" value="{{ old('nom') }}" required>
                        @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S) <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Entrer le prenom" name="prenom" value="{{ old('prenom') }}" required>
                        @error('prenom')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>




                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('profession') is-invalid @enderror" id="profession" placeholder="Entrer " name="profession" value="{{ old('profession') }}" required>
                        @error('profession')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">SEXE <span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control @error('datenaissance') is-invalid @enderror" id="datenaissance" placeholder="Entrer " name="datenaissance" value="{{ old('datenaissance') }}" required>
                        @error('datenaissance')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('lieunaissance') is-invalid @enderror" id="lieunaissance" placeholder="Entrer " name="lieunaissance" value="{{ old('lieunaissance') }}" required>
                        @error('lieunaissance')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('nationalite') is-invalid @enderror" id="nationalite" placeholder=" " name="nationalite" value="{{ old('nationalite') }}" required>
                        @error('nationalite')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class=" form-group row">
                    <label class="col-sm-3 col-form-label">AUTRE NATIONALITE</label>
                    <div class="col-sm-4">
                        <select id="autrenationalite" class="form-control" onchange="nouvelleLigne()">
                            <option value="Non">Non</option>
                            <option value="Oui">Oui</option>
                        </select>
                    </div>
                </div>
                <div id="othernationalite">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE 1 <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder=" " name="telephone" value="{{ old('telephone') }}" required>
                        @error('telephone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('telephone2') is-invalid @enderror" id="telephone2" placeholder=" " name="telephone2" value="{{ old('telephone2') }}">
                        <label><i>Indiquer votre numero whatsapp</i></label>
                        @error('telephone2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @if($typecorrespondant=="Correspondant international")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">ORIGINE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <select name="origine" class="form-control">
                            <option>Non Burkinabè</option>
                            <option>National</option>
                        </select>
                    </div>
                </div>
                <input type='hidden' value="international" name='typeorgane'>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">EMAIL <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control @error('mail') is-invalid @enderror" name="mail" value="{{ old('mail') }}" required>
                        @error('mail')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @if($typecorrespondant=="Correspondant national")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION <span style="color:red">*</span></label>

                    <div class="col-sm-8">
                        <select class="form-control" name="region">
                            @foreach($allregions as $region)
                            <option class="col-sm-7">{{$region->nomregion}}</option>
                            @endforeach
                        </select>
                        <label><i>Region de residence au Burkina Faso</i></label>
                    </div>

                </div>
                @endif
                @if($typecorrespondant=="Correspondant international")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION DE RESIDENCE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder=" " name="region" value="{{ old('region') }}" required>
                        @error('region')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('lieuresidence') is-invalid @enderror" id="lieuresidence" placeholder=" " name="lieuresidence" value="{{ old('lieuresidence') }}" required>
                        <label><i>La province,La ville, le secteur, le quartier</i></label>
                        @error('lieuresidence')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @if($typecorrespondant=="Correspondant national")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cnib">N° CNI <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('cnib') is-invalid @enderror" id="cnib" placeholder=" " name="cnib" value="{{ old('cnib') }}" required>
                        <label><i>Numero de la Carte Nationale d'Identité </i></label>
                        @error('cnib')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control @error('datedelivcnib') is-invalid @enderror" id="datedelivcnib" placeholder=" " name="datedelivcnib" value="{{ old('datedelivcnib') }}" required>
                        @error('datedelivcnib')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="">
                            <label><i>Date de delivrance de la Carte Nationale d'Identite</i></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control @error('dateexpircnib') is-invalid @enderror" id="dateexpircnib" placeholder=" " name="dateexpircnib" value="{{ old('dateexpircnib') }}" required>
                        @error('dateexpircnib')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label><i>Date d'expiration de la CNIB</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSEPORT </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" placeholder=" " name="passeport">
                    </div>
                </div>
                @endif
                @if($typecorrespondant=="Journaliste independant")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSEPORT </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" placeholder=" " name="passeport" required>
                    </div>
                </div>
                @endif
                @if($typecorrespondant=="Correspondant international")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSEPORT </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" placeholder=" " name="passeport" required>
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="carteconsulaire">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numcartepresse">N° CARTE DE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('numcartepresse') is-invalid @enderror" id="numcartepresse" placeholder=" " name="numcartepresse" value="{{ old('numcartepresse') }}" required>
                        @error('numcartepresse')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <textarea class="form-control @error('refjournal') is-invalid @enderror" name="refjournal" value="{{ old('refjournal') }}" required></textarea>
                        @error('refjournal')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <textarea class="form-control @error('parcourspro') is-invalid @enderror" name="parcourspro" rows="5" value="{{ old('parcourspro') }}" required></textarea>
                        @error('parcourspro')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE DE REFERENCE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('personneprevenir') is-invalid @enderror" id="personneprevenir" placeholder=" " name="personneprevenir" value="{{ old('personneprevenir') }}" required>
                        @error('personneprevenir')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE PERSONNE DE REFERENCE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('telephonepersp') is-invalid @enderror" id="telephonepersp" placeholder=" " name="telephonepersp" value="{{ old('telephonepersp') }}" required>
                        @error('telephonepersp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
            </div>
        </div>
    </div>
    <p>

    <div class="col-sm-12">
        <!-- les informations des organes de presse pour le freelance - independant -->
        @if($typecorrespondant=="Journaliste independant")
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Nom de l'organe de Presse</th>
                        <th>Type de presse</th>
                        <th>Telephone de l'organe</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe1" required>
                                </div>
                            </td>
                            <td>
                                <select class="form-control" required name="typepresse1">
                                    <option>Presse Ecrite</option>
                                    <option>Radio</option>
                                    <option>Tele</option>
                                    <option>Radio/Tele</option>
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    <option>Presse En Ligne</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane1" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe2">
                                </div>
                            </td>
                            <td>
                                <select class="form-control" name="typepresse2">
                                    <option>Presse Ecrite</option>
                                    <option>Radio</option>
                                    <option>Tele</option>
                                    <option>Radio/Tele</option>
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    <option>Presse En Ligne</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe3">
                                </div>
                            </td>
                            <td>
                                <select class="form-control" name="typepresse3">
                                    <option>Presse Ecrite</option>
                                    <option>Radio</option>
                                    <option>Tele</option>
                                    <option>Radio/Tele</option>
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    <option>Presse En Ligne</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane3">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type='hidden' value="{{$typecorrespondant}}" name='typecorrespondant'>
            </div>
        </div>
        @endif
        <!-- Bloc 2-->
        @if($typecorrespondant!="Journaliste independant")
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input class="form-control @error('organe') is-invalid @enderror" id="organe" type="text" name="organe" value="{{ old('organe') }}" required>
                        @error('organe')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">TYPE DE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typepresse">
                            <option>Presse Ecrite</option>
                            <option>Radio</option>
                            <option>Tele</option>
                            <option>Radio/Tele</option>
                            <option>Radio/Tele/Presse Ecrite</option>
                            <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                            <option>Presse en Ligne/Presse Ecrite</option>
                            <option>Presse En Ligne</option>
                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input class="form-control @error('telorgane') is-invalid @enderror" id="telorgane" type="text" name="telorgane" value="{{ old('telorgane') }}" required>
                        @error('telorgane')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control @error('adresseorgane') is-invalid @enderror" id="adressestruct" type="text" name="adresseorgane" value="{{ old('adresseorgane') }}" required>
                        @error('adresseorgane')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                @if($typecorrespondant=="Journaliste independant")
                <div class="form-group row">
                    <label for="typeorgane" class="col-sm-3 col-form-label">TYPE ORGANE DE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typeorgane">
                            <option>National</option>
                            <option>International</option>
                        </select>
                    </div>
                </div>
                @endif

                @if($typecorrespondant=="Correspondant national")
                <input type='hidden' value="national" name='typeorgane'>
                @endif
                <input type='hidden' value="{{$typecorrespondant}}" name='typecorrespondant'>

            </div>
        </div>
        @endif
    </div>
    <br>
    <div class="col-sm-12">
        <!-- CREATION DU COMPTE USER-->
        <div class="card">
            <div class="card-header text-center">{{ __("ENREGISTREMENT DU COMPTE D'UTILISATEUR") }}</div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="identifiant" class="col-md-4 col-form-label text-md-right">{{ __("Nom d'utilisateur") }} <span style="color:red">*</span></label>

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
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }} <span style="color:red">*</span></label>

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
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }} <span style="color:red">*</span></label>

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
    </div>
    <br>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
<br>
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