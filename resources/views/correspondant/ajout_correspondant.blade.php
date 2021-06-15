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
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('correspondant.store')}}" enctype="multipart/form-data">
    {{ method_field('POST')}}
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 1-->
        <div class="card"> 
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" placeholder="Entrer le nom" name="nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="prenom" placeholder="Entrer le prenom" name="prenom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="profession" placeholder="Entrer " name="profession">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">GENRE :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="HOMME">HOMME</option>
                            <option value="FEMME">FEMME</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datenaissance" placeholder="Entrer " name="datenaissance">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieunaissance" placeholder="Entrer " name="lieunaissance">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nationalite" placeholder=" " name="nationalite">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE 1:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" placeholder=" " name="telephone">
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" placeholder=" " name="telephone2">
                        <label><i>Indiquer votre numero whatsapp</i></label>
                    </div>
                </div>
                @if($typecorrespondant=="Correspondant international")
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">ORIGINE</label>
                    <div class="col-sm-5">
                        <select name="origine" class="form-control">
                            <option>Etranger</option>
                            <option>National</option>
                        </select>
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >EMAIL :</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control"   name="mail">
                    </div>
                </div>
            
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION:</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="region">
                            <option>Centre</option>
                            <option>Nord</option>
                        </select>
                        <label><i>Region de residence au Burkina Faso</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieuresidence" placeholder=" " name="lieuresidence">
                        <label><i>La province,La ville, le secteur, le quartier</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numcnib">N° CNI:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="numcnib" placeholder=" " name="cnib">
                        <label><i>Numero de la Carte Nationale d'Identité </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datedelivcnib" placeholder=" " name="datedelivcnib">
                        <div class="">
                            <label><i>Date de delivrance de la Carte Nationale d'Identite</i></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="dateexpircnib" placeholder=" " name="dateexpircnib">
                        <label><i>Date d'expiration de la CNIB</i></label>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" placeholder=" " name="passeport">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="carteconsulaire">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE DE PRESSE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="numcartepresse">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE A PREVENIR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="personneprevenir" placeholder=" " name="personneprevenir">
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephonepersp" placeholder=" " name="telephonepersp">
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="refjournal"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="parcourspro" rows="5"></textarea>
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
            </div>
        </div>				
    </div>
    <p>

    <div class="col-sm-12">  <!-- Bloc 2-->
        <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="telorgane" type="text" name="organe"/>          
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
                        <input class="form-control" id="telorgane" type="text" name="telorgane"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="adressestruct" type="text" name="adresseorgane" />
                    </div>
                </div>
                <input type='hidden' value="{{$typecorrespondant}}" name='typecorrespondant'>
               
            </div> 
        </div>   
    </div>
    <br>
    <div class="col-sm-12"> <!-- CREATION DU COMPTE USER-->
    <div class="card"> 
        <div class="card-header text-center">{{ __("ENREGISTREMENT DU COMPTE D'UTILISATEUR") }}</div>

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
@endsection
