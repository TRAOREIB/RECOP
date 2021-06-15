@extends('tprecop.template')
@section('contenu')
<script src="{{asset('js/dtable.js')}}"></script>
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue"> MODIFIER VOTRE COMPTE CORRESPONDANT</label>
</div>
<hr>
<br>

<!-- IDENTITE DU DEMANDEUR-->

<div class="col-sm-12 row">  <!-- Bloc CORRESPONDANT-->

    <div class="card col-sm-6"> 
        <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
        <div class="card-body">
            <label class="col-sm-12 row" style="background-color: #16c7ff">INFO  PERSONNELLES      
                <form method="get" action="{{route("correspondant.edit",[$editcorrespondant->idcorrespondant])}}">
                    @csrf  
                    <input type="submit" class="btn btn-warning offset-5" value="Modifier les Informations">
                    <input type="hidden"  value="{{$idpiecesjointes}}" name="idpj">
                    <input type="hidden"  value="{{$iduser}}" name="iduser">
                    <input type="hidden"  value="{{$idcorrespondant}}" name="idcorrespondant">
                </form>
            </label>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">NOM:  {{$editcorrespondant->nom}}</label>
                <label class=" col-form-label offset-1" for="nom">PRENOM:  {{$editcorrespondant->prenom}}</label>         
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">PROFESSION:  {{$editcorrespondant->profession}}</label> 
                <label class="col-form-label offset-1" for="nom">SEXE:  {{$editcorrespondant->sexe}}</label> 
            </div>

            <!--            <div class="form-group row">
                            <label class="col-form-label" for="nom">DATE DE NAISSANCE:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$editcorrespondant->datenaissance}}</label>               
                        </div>
                        <div class="form-group row">
                            <label class=" col-form-label" for="nom">LIEU DE NAISSANCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$editcorrespondant->lieunaissance}}</label>           
                        </div>-->
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">PROFESSION:  {{$editcorrespondant->nationalite}}</label> 
                        </div>-->
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE:  {{$editcorrespondant->telephone}}</label>
            </div>
            <!--            <div class="form-group row">
                            <label class="col-form-label" for="nom">TELEPHONE PAYS DE RESIDENCE:  {{$editcorrespondant->telephoneresidence}}</label>
                        </div>-->
            <div class="form-group row">
                <label class="col-form-label" for="nom">EMAIL:  {{$editcorrespondant->mail}}</label> 
            </div> 

            <div class="form-group row">
                <label class="col-form-label" for="nom">PAYS DE RESIDENCE:  {{$editcorrespondant->lieuresidence}}</label>
            </div>
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">ADRESSE PAYS DE RESIDENCE:  {{$editcorrespondant->adressepaysresidence}}</label>
                        </div>-->
            <div class="form-group row">
                <label class="col-form-label" for="nom">N° CNI:  {{$editcorrespondant->cnib}}</label>
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE DE DELIVRENCE:  {{$editcorrespondant->datedelivcnib}}</label>     
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">DATE D'EXPIRATION:  {{$editcorrespondant->dateexpircnib}}</label>                  
            </div> 
            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° PASSEPORT:  {{$editcorrespondant->passeport}}</label> 
            </div>

            <div class="form-group row">
                <label class=" col-form-label" for="nom">N° CARTE DE PRESSE:  {{$editcorrespondant->numcartepresse}}</label> 
            </div>
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">N° CARTE CONSULAIRE:  {{$editcorrespondant->carteconsulaire}}</label> 
                        </div>-->
            <div class="form-group row">
                <label class="col-form-label" for="nom">PERSONNE A PREVENIR:  {{$editcorrespondant->personneprevenir}}</label>                   
            </div>
            <div class="form-group row">
                <label class=" col-form-label" for="nom">TELEPHONE PERSONNE A PREVENIR:  {{$editcorrespondant->telephonepersp}}</label>          
            </div> 
            <!--            <div class="form-group row">
                            <label class=" col-form-label" for="nom">ADRESSE FIXEUR:  {{$editcorrespondant->adressfixeur}}</label>                                     
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="nom">PROFESSION FIXEUR:  {{$editcorrespondant->professionfixeur}}</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="nom">N° CARTE PROFESSIONEL DU FIXEUR:  {{$editcorrespondant->laissepasser}}</label>  
                        </div>  -->

            <label style="background-color: #16c7ff;" class="col-sm-12 text-center">- INFORMATION SUR L'ORGANE DE PRESSE -</label>
            <div class="form-group row">
                <label class="col-form-label" for="institution">NOM ORGANE/INSTITUTION:  {{$editcorrespondant->organe}}</label>  
            </div>                
            <div class="form-group row">
                <label class="col-form-label" for="telorgane">TELEPHONE ORGANE:  {{$editcorrespondant->telorgane}}</label>                     
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="adresseorgane">ADRESSE ORGANE:  {{$editcorrespondant->adressestruct}}</label>      
            </div>
            <div class="form-group row">
                <label class="col-form-label" for="laissezpasser">N° LAISSEZ PASSER:  {{$editcorrespondant->laissepasser}}</label>                     
            </div>
        </div>
    </div>	

    <!-- Bloc IDENTITE DU DEMANDEUR-->

    <div class="card col-sm-6 "> 
        <div class=" text-center card-header">MES PIECES JOINTES </div>
        <div class="card-body">


            <label class="col-sm-12 row " style="background-color: #16c7ff">PIECES JOINTES
                <form method="post" action="{{route('editpjcorrespondant')}}">
                    @csrf
                    <input type="submit" class="btn btn-warning offset-5" value="Modifier les Pieces Jointes">
                    <input type="hidden"  value="{{$idpiecesjointes}}" name="idpj">
                    <input type="hidden"  value="{{$iduser}}" name="iduser">
                    <input type="hidden"  value="{{$idcorrespondant}}" name="idcorrespondant"> 
                </form>
            </label>
            @foreach($piecesjointes as $pj)
            <div class="form-group">
                @empty(!$pj->photo)
                <label class=" col-form-label" for="nom">PHOTO:voir la pièce cliquez<a href="{{asset("storage/docs/$pj->photo ")}}" target="blank"> ici</a></label><br>
                @endempty
                @empty(!$pj->cv)
                <label class=" col-form-label " for="nom">CV: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->cv")}}" target="blank"> ici</a> </label> <br>                 
                @endempty
                @empty(!$pj->pjpasseport)
                <label class=" col-form-label" for="nom">PASSEPORT:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjpasseport")}}" target="blank"> ici</a></label><br>  
                @endempty
                @empty(!$pj->pjcnib)
                <label class=" col-form-label" for="nom">CNI:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcnib  ")}}" target="blank"> ici</a></label><br> 
                @endempty
                @empty(!$pj->pjcartepresse)
                <label class=" col-form-label" for="nom">CARTE DE PRESSE:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcartepresse")}}" target="blank"> ici</a></label><br> 
                @endempty
                @empty(!$pj->pjlaissezpasser)
                <label class=" col-form-label" for="nom">LAISSEZ PASSER:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjlaissezpasser")}}" target="blank"> ici</a></label><br> 
                @endempty
                @empty(!$pj->pjcnibperprev)
                <label class=" col-form-label" for="nom">CNI FIXEUR: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcnibperprev")}}" target="blank"> ici</a> </label><br>
                @endempty
                @empty(!$pj->pjpasseportperprev)
                <label class=" col-form-label" for="nom">PASSEPORT FIXEUR: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjpasseportperprev")}}" target="blank"> ici</a> </label><br>
                @endempty
                @empty(!$pj->pjcarteconsulaire)
                <label class=" col-form-label" for="nom">CARTE CONSULAIRE: voir la pièce cliquez<a href="{{asset("storage/docs/$pj->pjcarteconsulaire")}}" target="blank"> ici</a> </label><br>
                @endempty
                @empty(!$pj->lettrerecommendation)
                <label class=" col-form-label" for="nom">LETTRE DE RECOMMANDATION:  voir la pièce cliquez<a href="{{asset("storage/docs/$pj->lettrerecommendation")}}" target="blank"> ici</a></label>
                @endempty
            </div>
            @endforeach
        </div>
    </div>	




</div>

<!-- FIN DU Bloc sur les informations personnelles-->
<br>		
</form>
<br><br>	
@endsection