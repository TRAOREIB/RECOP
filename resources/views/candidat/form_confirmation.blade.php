@extends('template.template')
@section('contenu')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="{{asset('js/bootstrap.min.js')}}"></script>



<div class="col-sm-7 offset-3" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Bienvenue au Concours "Prix Galian"<?php echo date("Y"); ?></h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>
<div class="offset-1"><label class="label offset-2"><i><b>CATEGORIE:   {{$oeuvre->macategorie}}</b></i></label></div>
<div class="offset-1"><label class="label offset-2"><i><b>CANDIDAT:  <?php echo session('utilisateur'); ?></b></i></label></div>

<div class=" col-sm-9 offset-2">
    <div class="card">
        <div class="card-header">
            <form method="post" action="{{route('modifcandidat')}}">  
                {{ csrf_field() }}
                <div class=""><b>Informations de Votre Candidature</b> &nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Modifier les informations"></div>
            </form>
        </div>

        <div class="card-body">
            

                <div class="" style="">
                    {{ csrf_field() }}
                    <div class=" row form-group"> 
                        <label for="nom" class="control-label"><b>Nom</b> &nbsp;&nbsp; </label> 
                        <div class=""> 
                            <label for="nom" class="control-label">{{$candidat->nom}}</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                        </div> 
                        <label for="prenom" class="control-label"><b>Prenom(s)</b>&nbsp;&nbsp; </label> 
                        <div class="col-sm-7" style=""> 
                            <label for="prenom" class="control-label">{{$candidat->prenom}}</label> 
                        </div>
                        <input type="hidden" value="nom" name="name">
                        <input type="hidden" value="2020" name="annee">
                    </div>


                    <div class="row form-group">
                        <label for="sexe" class="control-label"><b>Sexe</b> &nbsp;&nbsp;</label> 
                        <div class=""> 
                            <label for="sexe" class="control-label">{{$candidat->sexe}}</label> &nbsp;&nbsp;&nbsp;&nbsp;
                        </div> 
                        <label for="datenais" class="control-label"><b>Date de Naissance</b> &nbsp;&nbsp;</label> 
                        <div class=" "> 
                            <label for="datenaissance" class="control-label  ">{{$candidat->datenaissance}}</label> 
                        </div> 
                    </div>


                    <div class="row form-group">
                        <label for="passeport" class="control-label"><b>Passeport/Cnib/Carte de Presse &nbsp;&nbsp;&nbsp;&nbsp;</b></label> 
                        <div class=""> 
                            <label for="passeport" class="control-label  ">{{$candidat->cnib}}</label> 
                        </div> &nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="telephone" class="control-label  "><b>Telephone</b> &nbsp;&nbsp;</label> 
                        <div class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp; 
                            <label for="telephone" class="control-label  ">{{$candidat->contact}}</label> 
                        </div> 
                    </div>


                    <div class="row form-group">
                        <label for="email" class="control-label  "><b>Email</b> &nbsp;&nbsp;</label> 
                        <div class=""> 
                            <label for="email" class="control-label  ">{{$candidat->email}}</label> 
                        </div>&nbsp;&nbsp;&nbsp;
                        <label for="organe" class="control-label  "><b>Organe de presse</b>  &nbsp;&nbsp;</label> 
                        <div class=""> &nbsp;&nbsp;
                            <label for="organe" class="control-label  ">{{$candidat->organe}}</label> 
                        </div> 
                    </div>

                    <div class="row form-group">
                        <label for="photo" class="control-label  "><b>Photo Identité</b> &nbsp;&nbsp;</label> 
                        <div class="col-sm-6"> 
                            <label for="nom" class="control-label  "><a href='{{asset("storage/docs/$candidat->photo")}}' target="blank">{{$candidat->photo}}</a></label> 
                        </div> 
                    </div>

                    <div class="row form-group">
                        <label for="cv" class="control-label  "><b>CV</b> &nbsp;&nbsp;</label> 
                        <div class="col-sm-6"> 
                            <label for="nom" class="control-label  "><a href='{{asset("storage/docs/$candidat->cv")}}' target="blank">{{$candidat->cv}}</a></label> 
                        </div> 
                    </div>

                    <div class="row form-group">
                        <label for="visa" class="control-label  "><b>visa media</b> &nbsp;&nbsp;</label> 
                        <div class="col-sm-6"> 
                            <label for="nom" class="control-label  "><a href='{{asset("storage/docs/$candidat->visamedia")}}' target="blank">{{$candidat->visamedia}}</a></label> 
                        </div> 
                    </div>

                </div>

        </div> 
    </div>

</div>    
<br>
<div class="card col-sm-9 offset-2">
    <div class="card-header">
        <form method="get" action="{{route('oeuvre.edit',[$oeuvre->id])}}" >
             {{ csrf_field() }}
             <div class=""><b>Informations de Vos Oeuvres</b>     
              <input type="submit" class="btn btn-primary" value="Modifier les informations">
             </div>
        <input type="hidden" value="{{$oeuvre->macategorie}}" name="categorie">
        </form>
        </div>
    <div class="card-body col-sm-12">
        <div class="col-sm-12" style="">
            {{ csrf_field() }}

            <div class="card col-sm-12">
                <u> <b>Informations Générales</b></u>
                <div class="card-body">
                    <div class=" row form-group"> 
                        <label for="langue" class="control-label  "><b>Langue</b>  &nbsp;&nbsp;</label> 
                        <div class="">
                            <label for="nom" class="control-label  ">{{$oeuvre->langue}}</label> 
                        </div>
                    </div>

                    <div class=" row form-group"> 
                        <label for="genre" class="control-label  "><b>Genre Journalistique</b>  &nbsp;&nbsp;</label> 
                        <div class="">
                            <label for="nom" class="control-label  ">{{$genre->libelle}}</label> 
                        </div>
                    </div>
                </div> 
            </div>

            <div class="row">
                <div class="card col-sm-6">
                    <u><b>Première Oeuvre</b></u>
                    <div class="card-body">
                        <div class=" row form-group"> 
                            <label for="titre" class="control-label  "><b>Titre</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="titre1" class="control-label  ">{{$oeuvre->titrearticle1}}</label> 
                            </div>
                        </div>

                        <div class=" row form-group"> 
                            <label for="theme" class="control-label  "><b>Thème</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="theme" class="control-label  ">{{$oeuvre->themearticle1}}</label> 
                            </div> 
                        </div>


                        @if($oeuvre->macategorie=="presse en ligne") 
                        <div class=" row form-group"> 
                            <label for="url1" class="control-label  "><b>lien de l'oeuvre</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="url1" class="control-label  ">{{$oeuvre->url1}}</label> 
                            </div> 
                        </div>
                        @endif


                        @if($oeuvre->macategorie=="presse ecrite")
                        <div class=" row form-group"> 
                            <label for="nbpage1" class="control-label  "><b>Nombre de Pages</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="nbpage" class="control-label  ">{{$oeuvre->nbpagearticle1}}</label> 
                            </div>  
                        </div>

                        <div class="row form-group">
                            <label for="fichierjournal1" class="control-label  "><b>Journal (pdf)</b> &nbsp;&nbsp;</label> 
                            <div class="col-sm-6"> 
                                <label for="nom" class="control-label  "><a href='{{asset("storage/docs/$oeuvre->fichieroeuvre1")}}' target="blank">{{$oeuvre->fichieroeuvre1}}</a></label> 
                            </div> 
                        </div>

                        <div class="row form-group">
                            <label for="fichieroeuvre1" class="control-label  "><b>article(pdf)</b> &nbsp;&nbsp;</label> 
                            <div class="col-sm-6"> 
                                <label for="nom" class="control-label  "><a href='{{asset("storage/docs/$oeuvre->fichierarticle1")}}' target="blank">{{$oeuvre->fichierarticle1}}</a></label> 
                            </div> 
                        </div>

                        <div class="row form-group">
                            <label for="synopsis1" class="control-label  "><b>Synopsis</b> &nbsp;&nbsp;</label> 
                            <div class="col-sm-6"> 
                                <label for="synopsis1" class="control-label  "><a href='{{asset("storage/docs/$oeuvre->synopsis1")}}' target="blank">{{$oeuvre->synopsis1}}</a>  </label> 
                            </div> 
                        </div>

                        @endif
                        <div class=" row form-group"> 
                            <label for="datepub1" class="control-label  "><b>Date de publication</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="datepub1" class="control-label  ">{{$oeuvre->datepubarticle1}}</label> 
                            </div> 
                        </div>

                    </div> 

                </div>    

                <div class="card col-sm-6">
                    <u><b>Deuxième Oeuvre</b></u>
                    <div class="card-body">
                        <div class=" row form-group"> 
                            <label for="titre" class="control-label  "><b>Titre</b>  &nbsp;&nbsp;</label> 
                            <div class="col-sm-8"> 
                                <label for="titre" class="control-label  ">{{$oeuvre->titrearticle2}}</label> 
                            </div>
                        </div>

                        <div class=" row form-group"> 
                            <label for="theme" class="control-label  "><b>Thème</b>  &nbsp;&nbsp;</label> 
                            <div class="col-sm-8"> 
                                <label for="theme" class="control-label  ">{{$oeuvre->themearticle2}}  </label>
                            </div> 
                        </div>


                        @if($oeuvre->macategorie=="presse en ligne") 
                        <div class=" row form-group"> 
                            <label for="url2" class="control-label  "><b>lien de l'oeuvre</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="url2" class="control-label  ">{{$oeuvre->url2}}</label> 
                            </div> 
                        </div>
                        @endif

                        @if($oeuvre->macategorie=="presse ecrite")    
                        <div class=" row form-group"> 
                            <label for="nbpage2" class="control-label  "><b>Nombre de Pages</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="theme" class="control-label  ">{{$oeuvre->nbpagearticle2}} </label>
                            </div> 
                        </div>

                        <div class="row form-group">
                            <label for="fichierjournal2" class="control-label  "><b>Journal (pdf)</b> &nbsp;&nbsp;</label> 
                            <div class="col-sm-6"> 
                                <label for="datepub2" class="control-label  "><a href='{{asset("storage/docs/$oeuvre->fichieroeuvre2")}}' target="blank">{{$oeuvre->fichieroeuvre2}}</a>  </label> 
                            </div> 
                        </div>

                        <div class="row form-group">
                            <label for="fichieroeuvre2" class="control-label  "><b>article(pdf)</b> &nbsp;&nbsp;</label> 
                            <div class="col-sm-6"> 
                                <label for="datepub2" class="control-label  "><a href='{{asset("storage/docs/$oeuvre->fichierarticle2")}}' target="blank">{{$oeuvre->fichierarticle2}}</a>  </label> 
                            </div> 
                        </div>  

                        <div class="row form-group">
                            <label for="synopsis2" class="control-label  "><b>Synopsis</b> &nbsp;&nbsp;</label> 
                            <div class="col-sm-6"> 
                                <label for="synopsis2" class="control-label  "><a href='{{asset("storage/docs/$oeuvre->synopsis2")}}' target="blank">{{$oeuvre->synopsis2}}</a>  </label> 
                            </div> 
                        </div>  
                        @endif 

                        <div class=" row form-group"> 
                            <label for="datepub2" class="control-label  "><b>Date de publication</b>  &nbsp;&nbsp;</label> 
                            <div class=""> 
                                <label for="datepub2" class="control-label  ">{{$oeuvre->datepubarticle2}}  </label> 
                            </div> 
                        </div>

                    </div> 

                </div>   
            </div> 


        </div>

    </div>
</div>
<br>


<div>
    
    <br>    
    <div class="row form-group col-sm-9 offset-5">
        <form class="form-horizontal" role="form" method="POST" action=" {{url('recap')}} " >
        {{ csrf_field() }}
            <div class="offset-3">  
            <input type="submit"  value="Confirmer" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <input type="hidden" value="{{$oeuvre->idcandidat}}" name="idcandidat">
        </form>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '{{url('')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
    </div>
</div>
@endsection

