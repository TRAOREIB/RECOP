@extends('tprecop.template')
@section('contenu')
<script src="{{asset('js/dtable.js')}}"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> ACCREDITATION DE PRESSE</label>
</div>

<hr>
<br>

<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{ route('accreditation.store') }}" enctype="multipart/form-data" >
    {{ method_field('POST')}}
    {{ csrf_field() }}	
    <div class="col-sm-12">  <!-- Debut du Bloc -->
        <div class="card"> 
            <div class=" card text-center card-header">SUJET A COUVRIR</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="titreevenement">TITRE(S):</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="titreevenement" placeholder="Entrer le(s) titre(s) de l'evenement" name="titreevenement">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedebut">DATE DE DEBUT</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="datedebut" placeholder="Entrer " name="datedebut">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">DATE DE FIN</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="datefin" placeholder="Entrer " name="datefin">
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">REGION</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="idregion">
                            @foreach($allregions as $region)
                            <option class="col-sm-7" value="{{$region->idregion}}">{{$region->nomregion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">LIEU EVENEMENT</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datefin" placeholder="Entrer " name="lieuevenement">
                    </div>
                </div>
                <input type="hidden" value="{{$test}}" name="test">
                <input type="text" value="{{$iddemandeur}}" name="iddemandeur">

                <div class="row">
                    <input type="submit" class="btn btn-primary offset-4" name="addregion" value="Valider">
                    <input type="reset" class="btn btn-primary offset-1"  name="addregion" value="Annuler">

                </div>
            </div>
            </form>
            <div class="card-footer">
                <div><label>Liste des Sujets à couvrir par region</label></div>
                <table class="table table-striped">
                    <tr>
                        <th>Region</th>
                        <th>Evenement</th>
                        <th>Lieu</th>
                        <th>Date de Debut</th>
                        <th>Date de Fin</th>
                        <th>Action</th>
                    </tr>
                    @isset($listesujet)
                    @foreach($listesujet as $sujet)
                    <tr>
                        <td>{{$sujet->nomregion}}</td>
                        <td>{{$sujet->titre}}</td>
                        <td>{{$sujet->lieuevenement}}</td>
                        <td>{{$sujet->datedebut}}</td>
                        <td>{{$sujet->datefin}}</td>

                        <td><form method="POST" action="{{ route('retirersujet')}}">
                                {{ csrf_field() }}
                                <a ></a>
                                <button class="btn btn-danger " type="submit"  onclick="return confirm('Confirmer le retrait du sujet ')">Retirer</button>
                                <input type="hidden" value="{{$sujet->idaccrediregion}}" name="idaccrediregion">
                            </form> 
                        </td>
                    </tr>
                    @endforeach
                    @endisset  
                </table>
            </div>
        </div>

        <p></p>
        <form class="form-horizontal"  method="POST" action="{{ route('accreditation.update',[$idaccreditation]) }}" enctype="multipart/form-data" >
            {{ method_field('PUT')}}
            {{ csrf_field() }}	
            <div class="card"> 
                <div class=" card text-center card-header">TRANSPORT</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="moyentransport" class="col-sm-3 col-form-label">MOYEN DE TRANPORT</label>
                        <div class="col-sm-7">
                            <input class="form-control" id="moyentransport" type="text" name="moyentransport"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="immatriculation" class="col-sm-3 col-form-label">IMMATRICULATION</label>
                        <div class="col-sm-7">
                            <input class="form-control" id="immatriculation" type="text" name="immatriculation"/>
                        </div>
                    </div>     

                </div>
            </div>
            <p></p> 
            <div class="card"> 
                <div class=" card text-center card-header">LISTE DU MATERIEL</div>
                <div class="card-body">
                    <div class="col-sm-14">
                        <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3"></textarea>
                    </div>
                </div> 
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">CONTINUER</button>
                <button class="btn btn-primary" type="reset">ANNULER</button>
            </div>
        </form>
    </div>
</div>
<p></p>



<p></p>
@endsection