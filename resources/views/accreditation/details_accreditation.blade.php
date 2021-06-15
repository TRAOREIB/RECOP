@extends('tprecop.template')
@section('contenu')
<script src="{{asset('js/dtable.js')}}"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> MODIFIER VOTRE DEMANDE D'ACCREDITATION</label>
</div>
<hr>
<br>

<!-- IDENTITE DU DEMANDEUR-->

<div class="col-sm-12 row">  <!-- Bloc IDENTITE DU DEMANDEUR-->
    @foreach($demandeurs as $dem)
    <div class="card col-sm-6"> 
        <div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
        <div class="card-body">
            <label class="col-sm-12 row" style="background-color: #16c7ff">INFO  PERSONNELLES      
                <form method="get" action="{{route("demandeur.edit",[$iddemandeur])}}">
                    @csrf
                    <input type="submit" class="btn btn-warning offset-8" value="Modifier les Info">
                    <input type="hidden"  value="{{$idaccreditation}}" name="idaccreditation">
                    <input type="hidden"  value="{{$iddemandeur}}" name="iddemandeur">
                    <input type="hidden"  value="{{$iduser}}" name="iduser">
                    <input type="hidden"  value="{{$idcorrespondant}}" name="idcorrespondant">
                </form>
            </label>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">NOM:  {{$dem->nom}}</label>
                <label class=" col-form-label offset-1" for="nom">PRENOM:  {{$dem->prenom}}</label>         
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION:  {{$dem->profession}}</label> 
                <label class="col-form-label offset-1" for="nom">SEXE:  {{$dem->sexe}}</label> 
            </div>

            <div class="form-group row">
                <label class="col-form-label" for="nom">DATE DE NAISSANCE:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$dem->datenaissance}}</label>               
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">LIEU DE NAISSANCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$dem->lieunaissance}}</label>           
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION:  {{$dem->nationalite}}</label> 
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE:  {{$dem->telephone}}</label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">TELEPHONE PAYS DE RESIDENCE:  {{$dem->telephoneresidence}}</label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">EMAIL:  {{$dem->mail}}</label> 
            </div> 

            <div class="form-group row">
                <label class="col-form-label" for="nom">PAYS DE RESIDENCE:  {{$dem->lieuresidence}}</label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">ADRESSE PAYS DE RESIDENCE:  {{$dem->adressepaysresidence}}</label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CNI:  {{$dem->cnib}}</label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE DE DELIVRENCE:  {{$dem->datedelivcnib}}</label>     
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE D'EXPIRATION:  {{$dem->dateexpircnib}}</label>                  
            </div> 
            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° PASSEPORT:  {{$dem->passeport}}</label> 
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° CARTE CONSULAIRE:  {{$dem->carteconsulaire}}</label> 
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">FIXEUR:  {{$dem->personneprevenir}}</label>                   
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE FIXEUR:  {{$dem->telephonepersp}}</label>          
            </div> 
            <div class="form-group row">
                <label class=" col-form-label" for="nom">ADRESSE FIXEUR:  {{$dem->adressfixeur}}</label>                                     
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">PROFESSION FIXEUR:  {{$dem->professionfixeur}}</label>
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CARTE PROFESSIONEL DU FIXEUR:  {{$dem->laissepasser}}</label>  
            </div>  
            <hr>
            <label style="background-color: #16c7ff;">- INFORMATION SUR L'ORGANE DE PRESSE -</label>
            <div class="form-group row">
                <label class="col-form-label" for="institution">NOM ORGANE/INSTITUTION:  {{$dem->organe}}</label>  
            </div>                
            <div class="form-group row">
                <label class="col-form-label" for="telorgane">TELEPHONE ORGANE:  {{$dem->telorgane}}</label>                     
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="adresseorgane">ADRESSE ORGANE:  {{$dem->adressestruct}}</label>      
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="laissezpasser">N° LAISSEZ PASSER:  {{$dem->laissepasser}}</label>                     
            </div>
        </div>
    </div>	

    <!-- Bloc IDENTITE DU DEMANDEUR-->

    <div class="card col-sm-6 "> 
        <div class=" text-center card-header">MA DEMANDE </div>
        <div class="card-body">
            <fieldset style="border-color: black">
                <label class="col-sm-12 row" style="background-color: #16c7ff">SUJETS ET MATERIELS 
                    <form method="get" action="{{route('accreditation.edit',[$idaccreditation])}}">
                        @csrf
                        <input type="submit" class="btn btn-warning offset-7" value="Modifier les Sujets">
                        <input type="hidden"  value="{{$idaccreditation}}" name="idaccreditation">
                        <input type="hidden"  value="{{$iddemandeur}}" name="iddemandeur">
                        <input type="hidden"  value="{{$iduser}}" name="iduser">
                        <input type="hidden"  value="{{$idcorrespondant}}" name="idcorrespondant">
                        <input type="hidden"  value="0" name="test">
                    </form> 
                </label>     
                @foreach($accreditations as $accredi)
                <div class="form-group row">
                    <label class=" col-form-label" for="nom">REGION: {{$accredi->nomregion}} </label>
                    <label class=" col-form-label offset-1" for="nom">SUJET:  {{$accredi->titre}}</label>                  
                    <label class=" col-form-label" for="nom">DATE DE DEBUT: {{$accredi->datedebut}} </label> 
                    <label class=" col-form-label offset-1" for="nom">DATE DE FIN: {{$accredi->datefin}} </label>
                    <label class=" col-form-label" for="nom">LIEU EVENEMENT: {{$accredi->lieuevenement}} </label>
                </div>
                @endforeach
            </fieldset>
            <label class="col-sm-12 text-center" style="background-color: #16c7ff">LISTE DU MATERIEL</label>
            @foreach($monaccreditation as $monaccredi)
            <div class="form-group row">
                <label class=" col-form-label" for="nom">MOYEN DE TRANSPORT: {{$monaccredi->moyentransport}} </label>
                <label class=" col-form-label offset-1" for="nom">IMMATRICULATION:  {{$monaccredi->immatriculation}}</label>                  
                <label class=" col-form-label" for="nom">MATERIEL: {{$monaccredi->listemateriel}} </label>                       
            </div>
            @endforeach
            <label class="col-sm-12 row " style="background-color: #16c7ff">PIECES JOINTES
                <form method="get" action="{{route('piecesjointes.edit',[$idaccreditation])}}">
                    @csrf
                    <input type="submit" class="btn btn-warning offset-8" value="Modifier les Pièces">
                    <input type="hidden"  value="{{$idaccreditation}}" name="idaccreditation">
                    <input type="hidden"  value="{{$iddemandeur}}" name="iddemandeur">
                    <input type="hidden"  value="{{$iduser}}" name="iduser">
                    <input type="hidden"  value="{{$idcorrespondant}}" name="idcorrespondant">
                </form>
            </label>
            @foreach($piecesjointes as $pj)
            <div class="form-group">
                @empty(!$pj->photo)
                <label class=" col-form-label" for="nom">PHOTO:voir la pièce cliquez<a href="{{asset("storage/docs/$pj->photo  ")}}"> ici</a></label><br>
                @endempty
                @empty(!$pj->cv)
                <label class=" col-form-label " for="nom">CV: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->cv  ")}}"> ici</a> </label> <br>                 
                @endempty
                <label class=" col-form-label" for="nom">PASSEPORT:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjpasseport  ")}}"> ici</a></label><br>  
                @empty(!$pj->pjcnib)
                <label class=" col-form-label" for="nom">CNI:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcnib")}}"> ici</a></label><br> 
                @endempty
                @empty(!$pj->pjcartepresse)
                <label class=" col-form-label" for="nom">CARTE DE PRESSE:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcartepresse ")}}"> ici</a></label><br> 
                @endempty
                @empty(!$pj->pjlaissezpasser)
                <label class=" col-form-label" for="nom">LAISSEZ PASSER:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjlaissezpasser")}}"> ici</a></label><br> 
                @endempty
                @empty(!$pj->pjlaissezpasser)
                <label class=" col-form-label" for="nom">CNI FIXEUR: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcnibperprev")}}"> ici</a> </label><br>
                @endempty
                @empty(!$pj->pjpasseportperprev)
                <label class=" col-form-label" for="nom">PASSEPORT FIXEUR: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjpasseportperprev")}}"> ici</a> </label><br>
                @endempty
                @empty(!$pj->pjcarteconsulaire)
                <label class=" col-form-label" for="nom">CARTE CONSULAIRE: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcarteconsulaire")}}"> ici</a> </label><br>
                @endempty
                @empty(!$pj->lettrerecommendation) 
                <label class=" col-form-label" for="nom">LETTRE DE RECOMMANDATION:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->lettrerecommendation")}}"> ici</a></label>
                @endempty
            </div>
            @endforeach
        </div>
    </div>	




</div>
@endforeach
<!-- FIN DU Bloc sur les informations personnelles-->
<br>		
</form>
<br><br>	
@endsection