@extends('tprecop.template')
@section('contenu')
<script src="{{asset('js/dtable.js')}}"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> DETAILS DU DEMANDEUR</label>
</div>
<hr>
<br>

<!-- IDENTITE DU DEMANDEUR-->

<div class="text-center">  <!-- Bloc IDENTITE DU DEMANDEUR-->
    @foreach($demandeurs as $dem)
    <div class="card col-sm-8"> 
        <div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
        <div class="card-body">
            
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
           
        </div>
    </div>	
       
@endforeach
<!-- FIN DU Bloc sur les informations personnelles-->
</div>
<br><br>	
@endsection-