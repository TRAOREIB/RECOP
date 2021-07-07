@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">MODIFIER CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>
{{-- <div class="ligne_separe_titre"></div> --}}
<hr>
<br>

<form class="form-horizontal was-validated col-sm-10 offset-1" role="form" method="POST" action="{{route('correspondant.update',[$correspondant->idcorrespondant])}}" enctype="multipart/form-data">
    {{ method_field('PUT')}}
    {{ csrf_field() }}

    <div class="col-sm-12">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" value="{{$correspondant->nom}}" name="nom" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="prenom" value="{{$correspondant->prenom}}" name="prenom" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="profession" value="{{$correspondant->profession}}" name="profession" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">GENRE :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="Maculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datenaissance" value="{{$correspondant->datenaissance}}" name="datenaissance" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieunaissance" value="{{$correspondant->lieunaissance}}" name="lieunaissance" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nationalite" value="{{$correspondant->nationalite}}" name="nationalite">
                    </div>
                </div>
                @if($typecorrespondant=="Journaliste independant" || $typecorrespondant=="Correspondant international")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">AUTRE NATIONALITE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control @error('autrenationalite') is-invalid @enderror" id="autrenationalite" placeholder=" " name="autrenationalite" value="{{$correspondant->autrenationalite}}" required>
                        @error('autrenationalite')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE 1:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" value="{{$correspondant->telephone}}" name="telephone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" value="{{$correspondant->telephone2}}" name="telephone2" required>
                        <label><i>Indiquer votre numero whatsapp</i></label>
                    </div>
                </div>
                       
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">EMAIL :</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" value="{{$correspondant->mail}}" name="mail" required>
                    </div>
                </div>
                @if($typecorrespondant=="Correspondant national")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION:</label>
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
                        <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" placeholder=" " name="region" value="{{$correspondant->region}}" required>
                        @error('region')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieuresidence" value="{{$correspondant->lieuresidence}}" name="lieuresidence" required>
                        <label><i>La province,La ville, le secteur, le quartier</i></label>
                    </div>
                </div>
                @if($typecorrespondant=="Correspondant national")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numcnib">N° CNI:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="numcnib" value="{{$correspondant->cnib}}" name="cnib" required>
                        <label><i>Numero de la Carte Nationale d'Identité </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datedelivcnib" value="{{$correspondant->datedelivcnib}}" name="datedelivcnib" required>
                        <div class="">
                            <label><i>Date de delivrance de la Carte Nationale d'Identite</i></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="dateexpircnib" value="{{$correspondant->dateexpircnib}}" name="dateexpircnib" required>
                        <label><i>Date d'expiration de la CNIB</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" value="{{$correspondant->passeport}}" name="passeport" required>
                    </div>
                </div>
                @endif
                @if($typecorrespondant=="Journaliste independant" || $typecorrespondant=="Correspondant international")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" value="{{$correspondant->passeport}}" name="passeport" required>
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" value="{{$correspondant->carteconsulaire}}" name="carteconsulaire">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE DE PRESSE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" value="{{$correspondant->numcartepresse}}" name="numcartepresse">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="refjournal" required>{{$correspondant->refjournal}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="parcourspro" rows="5" required>{{$correspondant->parcourspro}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE DE REFERENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="personneprevenir" value="{{$correspondant->personneprevenir}}" name="personneprevenir" required>
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE PERSONNE DE REFERENCE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephonepersp" value="{{$correspondant->telephonepersp}}" name="telephonepersp" required>
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
            </div>
        </div>
    </div>
    <p>

    <div class="col-sm-12">
        <!-- Bloc 2-->

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
                                    <input type="text" class="form-control col-sm-12" value="{{$correspondant->organe1}}" name="organe1" required>
                                </div>
                            </td>
                            <td>
                                <select class="form-control" required name="typepresse1">
                                    @if($correspondant->typepresse1=="Presse Ecrite")
                                    <option selected>Presse Ecrite</option>
                                    @else
                                    <option>Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Radio")
                                    <option selected>Radio</option>
                                    @else
                                    <option>Radio</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Tele")
                                    <option selected>Tele</option>
                                    @else
                                    <option>Tele</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Radio/Tele")
                                    <option selected>Radio/Tele</option>
                                    @else
                                    <option>Radio/Tele</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Radio/Tele/Presse Ecrite")
                                    <option selected>Radio/Tele/Presse Ecrite</option>
                                    @else
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Radio/Tele/Presse Ecrite/Presse en Ligne")
                                    <option selected>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    @else
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Presse en Ligne/Presse Ecrite")
                                    <option selected>Presse en Ligne/Presse Ecrite</option>
                                    @else
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse1=="Presse En Ligne")
                                    <option selected>Presse En Ligne</option>
                                    @else
                                    <option>Presse En Ligne</option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane1" value="{{$correspondant->telorgane1}}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe2" value="{{$correspondant->organe2}}">
                                </div>
                            </td>
                            <td>
                            <select class="form-control" required name="typepresse2"> 
                                    @if($correspondant->typepresse2=="Presse Ecrite")
                                    <option selected value="Presse Ecrite">Presse Ecrite</option>
                                    @else
                                    <option value="Presse Ecrite">Presse Ecrite</option>
                                    @endif 
                                    @if($correspondant->typepresse2=='Radio')
                                    <option selected='selected' value="Radio">Radio</option>
                                    @else
                                    <option value="Radio">Radio</option>
                                    @endif
                                    @if($correspondant->typepresse2=="Tele")
                                    <option selected value="Tele">Tele</option>
                                    @else
                                    <option value="Tele">Tele</option>
                                    @endif
                                    @if($correspondant->typepresse2=="Radio/Tele")
                                    <option selected value="Radio/Tele">Radio/Tele</option>
                                    @else
                                    <option value="Radio/Tele">Radio/Tele</option>
                                    @endif
                                    @if($correspondant->typepresse2=="Radio/Tele/Presse Ecrite")
                                    <option selected value="Radio/Tele/Presse Ecrite">Radio/Tele/Presse Ecrite</option>
                                    @else
                                    <option value="Radio/Tele/Presse Ecrite">Radio/Tele/Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse2=="Radio/Tele/Presse Ecrite/Presse en Ligne")
                                    <option selected value="Radio/Tele/Presse Ecrite/Presse en Ligne">Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    @else
                                    <option value="Radio/Tele/Presse Ecrite/Presse en Ligne">Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    @endif
                                    @if($correspondant->typepresse2=="Presse en Ligne/Presse Ecrite")
                                    <option selected value="Presse en Ligne/Presse Ecrite">Presse en Ligne/Presse Ecrite</option>
                                    @else
                                    <option value="Presse en Ligne/Presse Ecrite">Presse en Ligne/Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse2=="Presse En Ligne")
                                    <option selected value="Presse En Ligne">Presse En Ligne</option>
                                    @else
                                    <option value="Presse En Ligne">Presse En Ligne</option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane2" value="{{$correspondant->telorgane2}}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe3" value="{{$correspondant->organe3}}">
                                </div>
                            </td>
                            <td>
                            <select class="form-control" required name="typepresse3">  
                                    @if($correspondant->typepresse3=="Presse Ecrite")
                                    <option selected>Presse Ecrite</option>
                                    @else
                                    <option>Presse Ecrite</option>
                                    @endif 
                                    @if($correspondant->typepresse3=="Radio")
                                    <option selected>Radio</option>
                                    @else
                                    <option>Radio</option>
                                    @endif
                                    @if($correspondant->typepresse3=="Tele")
                                    <option selected>Tele</option>
                                    @else
                                    <option>Tele</option>
                                    @endif
                                    @if($correspondant->typepresse3=="Radio/Tele")
                                    <option selected>Radio/Tele</option>
                                    @else
                                    <option>Radio/Tele</option>
                                    @endif
                                    @if($correspondant->typepresse3=="Radio/Tele/Presse Ecrite")
                                    <option selected>Radio/Tele/Presse Ecrite</option>
                                    @else
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse3=="Radio/Tele/Presse Ecrite/Presse en Ligne")
                                    <option selected>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    @else
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    @endif
                                    @if($correspondant->typepresse3=="Presse en Ligne/Presse Ecrite")
                                    <option selected>Presse en Ligne/Presse Ecrite</option>
                                    @else
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    @endif
                                    @if($correspondant->typepresse3=="Presse En Ligne")
                                    <option selected>Presse En Ligne</option>
                                    @else
                                    <option>Presse En Ligne</option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane3" value="{{$correspondant->telorgane3}}">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type='hidden' value="{{$typecorrespondant}}" name='typecorrespondant'>
                <input type="hidden" value="{{$idcorrespondant}}" name="idcorrespondant">
            </div>
        </div>
        @endif
        @if($typecorrespondant!="Journaliste independant")
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="telorgane" value="{{$correspondant->organe}}" type="text" name="organe" />
                    </div>

                </div>
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">TYPE DE PRESSE</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typepresse">
                            <option>Presse Ecrite</option>
                            <option>Radio</option>
                            <option>Tele</option>
                            <option>Presse En Ligne</option>
                        </select>
                    </div>

                </div>

                <p></p>

                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="telorgane" value="{{$correspondant->telorgane}}" type="text" name="telorgane" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="adresseorgane" value="{{$correspondant->adresseorgane}}" type="text" name="adresseorgane" />
                    </div>
                </div>
                <input type="hidden" value="{{$idcorrespondant}}" name="idcorrespondant">
                <input type="hidden" value="{{$idpiecesjointes}}" name="idpiecesjointes">
            </div>
        </div>
        @endif
    </div>
    <br>
    <input type="hidden" class="form-control" value="{{$typecorrespondant}}" name="typecorrespondant">
    <div class="text-center">
        <button class="btn btn-primary" type="submit">MODIFIER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
<br>
@endsection