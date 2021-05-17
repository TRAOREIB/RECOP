@extends('template')
@section('content')
@section('script')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<!--<script src="{{asset('js/dynamique_ajout.js')}}"></script>-->
<script src="{{asset('js/dtable.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
@endsection
<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform">GESTION DE L'OBJET </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<br>


<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#home" class="nav-link active" data-toggle="tab">LOCALISATION</a>
    </li>
    <li class="nav-item">
        <a href="#profile" class="nav-link" data-toggle="tab">OBJET</a>
    </li>
    <li class="nav-item">
        <a href="#dimensions" class="nav-link" data-toggle="tab">DIMENSIONS</a>
    </li>
    <li class="nav-item">
        <a href="#messages" class="nav-link" data-toggle="tab">DOSSIER DOCUMENTAIRE</a>
    </li>
    <li class="nav-item">
        <a href="#catalogue" class="nav-link" data-toggle="tab">CATALOGUE</a>

    </li>
    <li class="nav-item">
        <a href="#images" class="nav-link" data-toggle="tab">IMAGES</a>
    </li>
    <li class="nav-item">
        <a href="#audiovisuel" class="nav-link" data-toggle="tab">AUDIO VISUEL</a>
    </li>
</ul>
<p></p>

@if(session()->has('success'))
<div class="container col-sm-7">
    <div class="alert alert-danger">
        <b> {{ session()->get('success') }}</b>
    </div>
</div>
@endif

@isset($message)
<div class="alert-success col-sm-4 offset-4"><label class="label-info" style="margin-left:70px"><b>&nbsp;&nbsp;&nbsp;&nbsp;{{$message}}</b></label></div>
@endisset
<p></p>
<form class="col-sm-12" method="post" action="{{url('objet',['id' => $listobjet->idobjet])}}" enctype="multipart/form-data">
    {{ method_field('PUT')}}
    {{ csrf_field() }}
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">

            @if($village!=null)
            @foreach($village as $monvillage)
            <label class="label-info"><b>LOCALISATION ACTUELLE</b></label>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: chartreuse"><b>Ville</b></div>
                <div class="col-sm-4" style="background-color: chartreuse"></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #218BC3"><b>Village</b></div>
                <div class="col-sm-4" style="background-color: #218BC3">{{$monvillage->village}}</div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: threedshadow"><b>Commune</b></div>
                <div class="col-sm-4" style="background-color: threedshadow">{{$monvillage->commune}}</div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: tan"><b>Province</b></div>
                <div class="col-sm-4" style="background-color: tan">{{$monvillage->province}}</div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #f0ad4e"><b>Region</b></div>
                <div class="col-sm-4" style="background-color: #f0ad4e">{{$monvillage->region}}</div>
            </div>

            @endforeach
            @endif

            @if($ville!=null)
            @foreach($ville as $maville)
            <label class="label-info"><b>LOCALISATION ACTUELLE</b></label>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: chartreuse"><b>Ville</b></div>
                <div class="col-sm-4" style="background-color: chartreuse">{{$maville->ville}}</div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #218BC3"><b>Village</b></div>
                <div class="col-sm-4" style="background-color: #218BC3"></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: threedshadow"><b>Commune</b></div>
                <div class="col-sm-4" style="background-color: threedshadow">{{$maville->commune}}</div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: tan"><b>Province</b></div>
                <div class="col-sm-4" style="background-color: tan">{{$maville->province}}</div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #f0ad4e"><b>Region</b></div>
                <div class="col-sm-4" style="background-color: #f0ad4e">{{$maville->region}}</div>
            </div>
        </div>
        @endforeach
        @endif
        <p>
        <div class="row col-sm-12">

            <div class="">
                <div id="accordion" class="col-sm-12">
                    <div class="card ">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">MODIFIER LA LOCALISATION</a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row form-group">
                                    <label class="label" >Region</label>
                                    <select id="region" name='region' class="form-control" >
                                        <option selected="selected">Choisir la region</option>
                                        <@foreach($listregions as $key => $reg)
                                        <option value="{{$key}}">{{$reg}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <label class="label">Province</label>
                                    <select id="province" name='province' class="form-control">
                                    </select>
                                </div>
                                <div class="row form-group col-sm-6">
                                    <label class="label">Type Commune</label>
                                    <select id="type" name='type' class="form-control">
                                        <option selected="selected">Selectionner</option>
                                        <option>RURALE</option>
                                        <option>URBAINE</option>
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <label class="label">Commune</label>
                                    <select id="commune" name='commune' class="form-control">
                                    </select>
                                </div>

                                <div class="row form-group">
                                    <label class="label">Ville</label>
                                    <select id="ville" name='ville' class="form-control">
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <label class="label">Village</label>
                                    <select id="village" name='village' class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="">
                    <div id="accordionInter" class="col-sm-12">
                        <div class="card ">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">MODIFIER LA LOCALISATION INETRNATIONALE</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionInter">
                                <div class="card-body">
                                    <div class="row form-group">
                                        <label class="label" >Pays</label>
                                        <select id="region" name='region' class="form-control" >
                                            @foreach($listePays as $pays)
                                            @if($listobjet->pays==$pays->name)
                                            <option value="{{$pays->name}}" selectd='selected'>{{$pays->name}}</option>
                                            @else
                                            <option value="{{$pays->name}}">{{$pays->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>      

            <div id="image_carte" class="col-sm-6 offset-1">
                <img src="{{asset('images/carte.png')}}" style="width: 600px">
            </div>
        </div>




    </div>


</p>

<div class="tab-pane fade" id="profile">
    <p>

    <div class="row col-sm-12"> 
        <div id="panneau1" class="col-sm-6">  
            <div class="card">

                <div class="card-header">RENSEIGNER LES INFORMATIONS</div>
                <p></p>

                <div class="row form-group">
                    <label class="label" style="margin-left: 40px">Numero Inventaire</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="form-control col-sm-6" type='text' value="{{$listobjet->numero}}" name="numinv" style="margin-left: 10px" >
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 130px">Photo</label>
                    <input class="form-control col-sm-6" type='file' value="{{$listobjet->photo}}" name="photo" style="margin-left: 10px" >
                    <input type="hidden" value="{{$listobjet->photo}}" name="photoanc">
                </div>
                <label class="label-info text-info offset-4">{{$listobjet->photo}}</label>

                <div class="row form-group">
                    <label class="label" style="margin-left: 140px">Nom</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="form-control col-sm-6" type='text' value="{{$listobjet->nom}}" name="nom" style="margin-left: 10px" >
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 40px">Nom Vernanculaire</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="col-sm-6 form-control" type='text' value="{{$listobjet->nomvernanc}}" name="nonvern" style="margin-left: 10px">
                </div>


                <div class="row form-group">
                    <label class="label" style="margin-left: 80px">Classification</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <select name="classification" class="form-control col-sm-7" style="margin-left: 10px">

                        @foreach($listeclassif as $classif)
                        @if($classif->idclassification == $idclassif)  
                        <option value="{{$classif->idclassification}}" selected=selected"> {{$classif->libelle}} </option>
                        @else
                        <option value="{{$classif->idclassification}}"> {{$classif->libelle}} </option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 110px">Datation</label>
                    <input class="col-sm-6 form-control" type='text' value='{{$listobjet->datation}}' name="datation" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 70px">Nom Collecteur</label>
                    <input class="col-sm-6 form-control" type='text' value="{{$listobjet->collecteur}}" name="collecteur" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 70px">Nom Detenteur</label>
                    <input class="col-sm-6 form-control" type='text' value="{{$listobjet->detenteur}}" name="detenteur" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 30px">Provenance Inconnue</label>
                    <select id="typematiere" name='provenance' class="form-control col-sm-6" style="margin-left: 10px" >

                        @if($listobjet->provenance =='oui') 
                        <option value="oui" selected="selected">Oui</option>
                        @else
                        <option value="oui">Oui</option>
                        @endif   

                        @if($listobjet->provenance =='non') 
                        <option value="non" selected="selected">Non</option>
                        @else
                        <option value="non">Non</option>
                        @endif   
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 95px">Description</label>
                    <input class="col-sm-6 form-control" type='text' value="{{$listobjet->description}}" name="description" style="margin-left: 10px">
                </div>



                <div class="row form-group">
                    <label class="label" style="margin-left:56px">Groupe Ethnique</label>
                    <select id="grpethnique" name='grpethnique' class="form-control col-sm-5" style="margin-left: 10px" >
                        @foreach($listeGrp as $grp)
                        @if($listobjet->grpethnique==$grp->libelle)
                        <option value="{{$grp->libelle}}" selectd='selected'>{{$grp->libelle}}</option>
                        @else
                        <option value="{{$grp->libelle}}">{{$grp->libelle}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>



                <div class="row form-group">
                    <label class="label" style="margin-left:130px">Usage</label>
                    <input class="col-sm-6 form-control" type='text' value="{{$listobjet->usage}}" name="usage" style="margin-left: 10px">
                </div>



                <div class="row form-group">
                    <label class="label" style="margin-left:150px">Etat</label> &nbsp;&nbsp;
                    <select class="form-control col-sm-6" name="etat">
                        <option <?php
                        if ($listobjet->etat == "Bon") {
                            echo "selected=selected";
                        }
                        ?> >Bon</option>
                        <option <?php
                        if ($listobjet->etat == "Mauvais") {
                            echo "selected=selected";
                        }
                        ?> >Mauvais</option>
                        <option <?php
                        if ($listobjet->etat == "Declassé") {
                            echo "selected=selected";
                        }
                        ?> >Declassé</option>
                        <option>Restaurer</option>
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left:95px">Localisation</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="col-sm-6 form-control" type='text' value="{{$listobjet->localisation}}" name="localisation" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left:53px">Position de l'Objet</label>&nbsp;&nbsp;
                    <select class="form-control col-sm-6" name="position">
                        <option>Réserve</option>
                        <option>Exposition</option>
                        <option>Pret</option>
                        <option>Volé</option>
                        <option>Traitement</option>
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left:87px">Observations</label>
                    <input class="col-sm-7 form-control" type='textarea' value="{{$listobjet->observation}}" name="observation" style="margin-left: 10px">
                </div>




                <div class="card-footer"></div>
            </div>  
        </div>

        <div id="panneau2" class="row col-sm-6">

            <div class="card col-sm-12" style="height: 200px">
                <div class="card-header">IMAGE</div>
                <div class="card-body">
                    <img id="" width="50%" height="50%" src="{{asset('/storage/uploads/'.$listobjet->photo) }}" />
                </div>

            </div>


            <div class="card col-sm-12" style="">
                <div class="card-header">ACQUISITION</div>
                <div class="card-body">
                    <div class="row form-group">
                        <label class="label" style="margin-left: 35px">Mode Acquisition</label>&nbsp;&nbsp;
                        <select name="modeacquis" class="form-control col-sm-7">

                            @foreach($listemode as $lmode)
                            <option value="{{$lmode->idmodeacquis}}">{{$lmode->libelle}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="row form-group">
                        <label class="label" style="margin-left:45px">Musee de Depot</label>&nbsp;&nbsp;
                        <select name="museedepot" class="form-control col-sm-7">
                            @foreach($listmusee as $musee)
                            @if($musee->nom == $museedepot)  
                            <option value="{{$musee->idmusee}}" selected="selected"> {{$musee->nom}} </option>
                            @else
                            <option value="{{$musee->idmusee}}"> {{$musee->nom}} </option>
                            @endif
                            @endforeach
                        </select>
                    </div>



                    <div class="row form-group">
                        <label class="label" style="margin-left:30px">Musee Proprietaire</label>&nbsp;&nbsp;
                        <select name="museeprop" class="form-control col-sm-7">
                            @foreach($listmusee as $musee)
                            @if($musee->nom == $museeproprietaire)  
                            <option value="{{$musee->idmusee}}" selected=selected"> {{$musee->nom}} </option>
                            @else
                            <option value="{{$musee->idmusee}}"> {{$musee->nom}} </option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                </div>

            </div>

            <div class="card col-sm-12" style="">
                <div class="card-header">CARACTERISTIQUES</div>
                <div class="card-body">

                    <div class="row" style="margin-left: 65px">
                        <label class="label">Poids</label>
                        <div class="row">
                            <input type="number" step="0.01" name="poids" value="{{$listobjet->poids}}" class="form-control offset-2 col-sm-5">
                            <label class="label" style="margin-left: 10px">kg</label>
                        </div>                      

                    </div>
                    <p>

                    <div class="row form-group">
                        <label class="label" style="margin-left: 28px">Type de Matière &nbsp;</label>
                        <select id="typematiere" name='typematiere' class="form-control col-sm-6" >
                            <option selected="selected">Choisir</option>
                            @foreach($listetype as $key => $reg)
                            @if($key == $typeobjet) 
                            <option value="{{$key}}" selected="selected">{{$reg}}</option>
                            @else
                            <option value="{{$key}}">{{$reg}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row form-group">
                        <label class="label" style="margin-left: 87px">Matière</label>
                        <select id="matiere" name="matiere" class="form-control col-sm-6" style="margin-left: 10px">
                            @foreach($matiereobj as $matobjet)
                            <option value="{{$matobjet->idmatiere}}" selected="selected">{{$matobjet->libelle}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="row form-group">
                        <label class="label" style="margin-left: 60px">Techniques</label>
                        <input class="col-sm-7 form-control" type='text' value="{{$listobjet->technique}}" name="technique" style="margin-left: 10px">
                    </div>

                </div>

            </div>

        </div>
    </div>

    </p>
</div>

<div class="tab-pane fade" id="messages">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">DOSSIERS</div>

        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                @foreach($documentation as $doc)
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label">{{$doc->libelle}}</label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="{{$doc->iddocumentation}}" name="documentation{{$i}}">
                    </div>
                    <input type="hidden" value="{{$doc->libelle}}" name="docval{{$i}}">
                </div>
                @endforeach
            </div>
            <p>
            <div class="form-control-file">
                <table class="dTable col-sm-12" id="tab">
                    <thead>
                        <tr>
                            <td>
                                <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbdocument'); return false;" value="Ajouter dossier">
                            </td>
                        </tr>
                    <div></div>
                    </thead>

                    <tbody>
                        <tr>    
                            <td> <input type="file" class="form-control" name="document[]"></td>
                            <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbdocument'); return false;"></td>
                        </tr>
                    </tbody>
                    <input type="hidden" value="1" name="nbdocument" id="nbdocument">
                </table>
            </div>
        </div>

    </div>

    </p>
</div>

<div class="tab-pane fade" id="catalogue">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">CATALOGUES</div>
        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                @foreach($catalogue as $cat)
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label">{{$cat->libelle}}</label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="{{$cat->idcatalogue}}" name="catalogue{{$i}}">
                    </div>
                    <input type="hidden" value="{{$cat->libelle}}" name="catalogueval{{$i}}">
                </div>
                @endforeach
            </div>
            <p>
            <p>

            <table class="dTable col-sm-12" id="tab">
                <thead>
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbcatalogue'); return false;" value="Ajouter catalogue">
                        </td>
                    </tr>
                <div></div>
                </thead>

                <tbody>
                    <tr>    
                        <td> <input type="file" class="form-control" name="catalogue[]"></td>
                        <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbcatalogue'); return false;"></td>
                    </tr>
                </tbody>
                <input type="hidden" value="1" name="nbcatalogue" id="nbcatalogue">
            </table>
        </div>

    </div>
</div>

<div class="tab-pane fade" id="images">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">IMAGES</div>
        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                @foreach($images as $img)
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label">{{$img->libelle}}</label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="{{$img->idimage}}" name="image{{$i}}">
                    </div>
                    <input type="hidden" value="{{$img->libelle}}" name="imageval{{$i}}">
                </div>
                @endforeach
            </div>
            <p>
            <p>    

            <table class="dTable col-sm-12" id="tab">
                <thead>
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbimage'); return false;" value="Ajouter Images">
                        </td>
                    </tr>
                <div></div>
                </thead>

                <tbody>
                    <tr>    
                        <td> <input type="file" class="form-control" name="image[]"></td>
                        <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbimage'); return false;"></td>
                    </tr>
                </tbody>
                <input type="hidden" value="1" name="nbimage" id="nbimage">
            </table>
        </div>

    </div>
</div>

<div class="tab-pane fade" id="audiovisuel">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">AUDIO VISUEL</div>
        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                @foreach($audiovisuel as $audiovi)
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label">{{$audiovi->libelle}}</label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="{{$audiovi->idaudiovisuel}}" name="audiovisuel{{$i}}">
                    </div>
                    <input type="hidden" value="{{$audiovi->libelle}}" name="audiovisuelval{{$i}}">
                </div>
                @endforeach
            </div>
            <p>
            <p>    

            <table class="dTable col-sm-12" id="tab">
                <thead>
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbaudiovisuel'); return false;" value="Ajouter Audio/Video">
                        </td>
                    </tr>
                <div></div>
                </thead>

                <tbody>
                    <tr>    
                        <td> <input type="file" class="form-control" name="audiovisuel[]"></td>
                        <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbaudiovisuel'); return false;"></td>
                    </tr>
                </tbody>
                <input type="hidden" value="1" name="nbaudiovisuel" id="nbaudiovisuel">
            </table>
        </div>

    </div>
</div>

<div class="tab-pane fade" id="dimensions">
    <p>
    <div class="card col-sm-10" style="">
        <div class="card-header">DIMENSIONS</div>
        <div class="card-body">
            @foreach($dimensions as $dim)
            <?php
            $taille = $dim->taille;
            $longueur = $dim->longueur;
            $largeur = $dim->largeur;
            $hauteur = $dim->hauteur;
            $profondeur = $dim->profondeur;
            $diametre = $dim->diametre;
            $epaisseur = $dim->epaisseur;
       
            ?>  
            @endforeach 
            <p>
                @isset($taille)     
            <div class="">
                <div class="row" style="margin-left: 35px">  
                    <label class="label">Taille</label>
                    <div>
                        <input type="number" step="0.01" name="taille" value="{{$taille}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div>   
                <p>
                @else
                <p></p>
                <div class="row" style="margin-left: 35px">
                    <label class="label">Taille</label>
                    <div>
                        <input type="number" step="0.01" name="taille" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>

                </div>
                <p>
                    @endisset

                    @isset($longueur)    
                <div class="row" style="margin-left: 3px">
                    <label class="label">Longueur</label>
                    <div>
                        <input type="number" step="0.01" name="longueur" value="{{$longueur}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 

                @else
                <p>
                <div class="row" style="margin-left: 3px">
                    <label class="label">Longueur</label>
                    <div>
                        <input type="number" step="0.01" name="longueur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @endisset
                <p>
                    @isset($largeur)    
                <div class="row" style="margin-left: 3px">
                    <label class="label" style="margin-left: 12px">Largeur</label>
                    <div>
                        <input type="number" step="0.01" name="largeur" value="{{$largeur}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @else
                <p>
                <div class="row" style="margin-left: 3px">
                    <label class="label" style="margin-left: 12px">Largeur</label>
                    <div>
                        <input type="number" step="0.01" name="largeur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @endisset

                <p>
                    @isset($hauteur)     
                <div class="row" style="margin-left: 12px">
                    <label class="label">Hauteur</label>
                    <div>
                        <input type="number" step="0.01" name="hauteur" value="{{$hauteur}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @else
                <p>
                <div class="row" style="margin-left: 12px">
                    <label class="label">Hauteur</label>
                    <div>
                        <input type="number" step="0.01" name="hauteur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @endisset
                <p>
                    @isset($profondeur)    
                <div class="row">
                    <label class="label">Profondeur</label>
                    <div>
                        <input type="number" step="0.01" name="profondeur" value="{{$profondeur}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @else
                <p></p>
                <div class="row">
                    <label class="label">Profondeur</label>
                    <div>
                        <input type="number" step="0.01" name="profondeur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                @endisset   
                <p>
                    @isset($diametre)    
                <div class="row" style="margin-left: 2px">
                    <label class="label">Diamètre</label>
                    <div>
                        <input type="number" step="0.01" name="diametre" value="{{$diametre}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>                    
                </div> 
                @else
                <p></p>
                <div class="row" style="margin-left: 2px">
                    <label class="label">Diamètre</label>
                    <div>
                        <input type="number" step="0.01" name="diametre" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>                    
                </div> 
                @endisset
                <p>
                    @isset($epaisseur)
                <div class="row" style="margin-left: 3px">
                    <label class="label">Epaisseur</label>
                    <div>
                        <input type="number" step="0.01" name="epaisseur" value="{{$epaisseur}}" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>
                </div> 
                @else
                <div class="row" style="margin-left: 3px">
                    <label class="label">Epaisseur</label>
                    <div>
                        <input type="number" step="0.01" name="epaisseur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>
                </div> 
                @endisset

            </div>

        </div>
    </div>



</div>
<div class="row form-group">
    <div class="offset-5">  
        <input type="submit"  value="Modifier" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
    </div>
    <div class="offset-1">  
        <input type="button"  value="Annuler" onclick="location.href = '{{url('objet')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
    </div>
</div>
</form>

<p></p>
<!--  fin de la liste-->

<div class="modal" id="confirmationta">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color : whitesmoke">
            <div class="modal-body">
                <span class="glyphicon glyphicon-exclamation-sign" style="color: #f0ad4e"><label > Supprimer cet &eacutelement ? </label></span>
            </div>
            <div class="modal-footer">
                <a href="#"  class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> OUI</a>
                <a href="#"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> NON</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
    $('#table').DataTable();
    });</script>

<script type="text/javascript">
    $('#type').change(function () {
    var typeID = $(this).val();
    if (typeID) {
    $.ajax({
    type: "GET",
            url: "{{url('getMatiere')}}?idtype=" + typeID,
            success: function (res) {
            if (res) {
            $("#matiere").empty();
            $("#matiere").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#matiere").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#matiere").empty();
            }
            }
    });
    } else {
    $("#matiere").empty();
    }
    });
    $('#commune').on('change', function () {
    var communeid = $(this).val();
    var type = $('#type').val();
    if (commune) {
    if (type == 'URBAINE')
    {
    $.ajax({
    type: "GET",
            url: "{{url('getVille')}}?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#ville").empty();
            $("#ville").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#ville").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#ville").empty();
            }
            }
    });
    }

    if (type == 'RURALE')
    {
    $.ajax({
    type: "GET",
            url: "{{url('getVillage')}}?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#village").empty();
            $("#village").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#village").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#village").empty();
            }
            }
    });
    }

    }

    });</script>

<script type="text/javascript">
    $('#region').change(function () {
    var regionID = $(this).val();
    if (regionID) {
    $.ajax({
    type: "GET",
            url: "{{url('getProvince')}}?idregion=" + regionID,
            success: function (res) {
            if (res) {
            $("#province").empty();
            $("#province").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#province").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#province").empty();
            }
            }
    });
    } else {
    $("#province").empty();
    }
    });
    $('#type').on('change', function () {
    var idprovince = $('#province').val();
    var letype = $('#type').val();
    if (type) {
    $.ajax({
    type: "GET",
            url: "{{url('getCommune')}}?idprovince=" + idprovince + "&type=" + letype,
            success: function (res) {
            $("#ville").empty();
            $("#village").empty();
            if (res) {
            $("#commune").empty();
            $("#commune").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#commune").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#commune").empty();
            }
            }
    });
    } else {
    $("#commune").empty();
    }

    });
    $('#commune').on('change', function () {
    var communeid = $(this).val();
    var type = $('#type').val();
    if (commune) {
    if (type == 'URBAINE')
    {
    $.ajax({
    type: "GET",
            url: "{{url('getVille')}}?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#ville").empty();
            $("#ville").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#ville").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#ville").empty();
            }
            }
    });
    }

    if (type == 'RURALE')
    {
    $.ajax({
    type: "GET",
            url: "{{url('getVillage')}}?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#village").empty();
            $("#village").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#village").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#village").empty();
            }
            }
    });
    }

    }

    });</script>

<script type="text/javascript">

    $('#typematiere').change(function () {
    var typeID = $(this).val();
    if (typeID) {
    $.ajax({
    type: "GET",
            url: "{{url('getMatiere')}}?idtype=" + typeID,
            success: function (res) {
            if (res) {
            $("#matiere").empty();
            $("#matiere").append('<option value="">Selectionner</option>');
            $.each(res, function (key, value) {
            $("#matiere").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#matiere").empty();
            }
            }
    });
    } else {
    $("#matiere").empty();
    }
    });</script>

<script>
    $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
    })
</script>
@endsection 