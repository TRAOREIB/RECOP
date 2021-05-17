@extends('template')
@section('content')
@section('script')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
@endsection
<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform">GESTION DE L'OBJET </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<div class="divbutajoutgrand" style="margin-left: 120px">
    <a   href="{{route('objet.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau </a>
</div>

@isset($message)
<div class="alert-success col-sm-4 offset-4"><label class="label-info" style="margin-left:70px"><b>&nbsp;&nbsp;&nbsp;&nbsp;{{$message}}</b></label></div>
@endisset
<p></p>
<div class="row divtabgrand" style="">
    <div class="col-xs-9 offset-1" >
        <div class="ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>Numero Inventaire</th>
                        <th>Categorie</th>
                        <th>Nom</th>
                        <th>Nom Vernanculaire</th>
                        <th>Details</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($liste as $listobj)
                    <?php $i++ ?>
                    <tr >
                        <th>{{$listobj->numero}}</th>	
                        <th>{{$listobj->classification}}</th>
                        <th>{{$listobj->nom}}</th>
                        <th>{{$listobj->nomvernanc}}</th>
                        <td title="Details">
                            <button class="btn btn-info btn-sm" type="button"  data-toggle="modal" data-target='#objet{{$i}}'> <i class="fas fa-list"></i> </button>                 

                            <div class="modal fade" id='objet{{$i}}'>
                                <div class="modal-dialog modal-lg" style="">
                                    <div class="modal-content" style="background-color : whitesmoke">
                                        <div class="modal-header col-sm-12">
                                            <h4 class="modal-title"><label for="produit" class="col-sm-12 control-label">INFORMATIONS DE L'OBJET</label></h4> 
                                            <div><img id="" width="50%" height="50%" src="{{asset('storage/uploads/'.$listobj->photo) }}" /></div>
                                        </div>
                                        <div class="modal-body">     
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Numero Inventaire</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->numero}}</label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Nom</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->nom}}</label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Nom Vernanculaire</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->nomvernanc}}</label></div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Categorie</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"> {{$listobj->classification}}</label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Description</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->description}}</label></div>
                                            </div>
                                            
                                            @isset($listobj->pays)
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Pays</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->pays}}</label></div>
                                            </div>
                                            @endisset
                                            
                                            @isset($listobj->ville)
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Provenance</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->ville}}</label></div>
                                            </div>
                                            @endisset
                                            
                                            @isset($listobj->village)
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Village de Provenance</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->village}}</label></div>
                                            </div>
                                            @endisset

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label-info" style="margin-left:0px">Groupe Ethnique</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->grpethnique}}</label></div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Usage</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->usage}}</label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Etat</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->etat}}</label></div>

                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Mode acquisition</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->mode}}</label></div>

                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Localisation</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->localisation}}</label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Position de l'Objet</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->position}}</label></div>
                                            </div>

                                            

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Observations</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->observation}}</label></div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Matière</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->matiere}}</label></div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Technique</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->technique}}</label></div>
                                            </div>
                                            
                                            <div id="acquisition">
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Mode acquisition</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$listobj->mode}}</label></div>
                                                </div>
                                                
                                                <?php $j=0; ?>
                                                @foreach($listemusee as $musee)
                                                <?php $j++;?>
                                                @if($listobj->idobjet==$musee->idobjet)
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">@if($i==1)Musée Proprietaire @else Musée de Depot @endif</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$musee->musee}}</label></div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <?php $j=0; ?>
                                               
                                            </div>
                                            
                                             <div id="dimensions">
                                                @foreach($listedimension as $dimension)
                                                @if($listobj->idobjet==$dimension->idobjet)
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Longeur</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->longueur}}</label></div><br>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Largeur</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->largeur}}</label></div><br>
                                                </div>
                                                
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Hauteur</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->hauteur}}</label></div><br>
                                                </div>
                                                
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Profondeur</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->profondeur}}</label></div><br>
                                                </div>
                                                
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Diamètre</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->diametre}}</label></div><br>
                                                </div>
                                                
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Taille</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->taille}}</label></div><br>
                                                </div>
                                                
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Epaisseur</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$dimension->epaisseur}}</label></div><br>
                                                </div>
                                                 
                                                @endif
                                                
                                                @endforeach
                                            </div>
                                            
                                            
                                            <div id="audiovisuel">
                                                @foreach($listeaudiovisuel as $audiovisuel)
                                                @if($listobj->idobjet==$audiovisuel->idobjet)
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">AudioVisuel</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><a href="storage/audiovisuel/{{$audiovisuel->libelle}}" target="blank">{{$audiovisuel->libelle}}</a></label></div>
                                                </div>
                                                @endif                                               
                                                @endforeach
                                            </div>
                                            
                                            <div id="images">
                                                @foreach($listeimages as $image)
                                                @if($listobj->idobjet==$image->idobjet)
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Images</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><a href="storage/images/{{$image->libelle}}" target="blank">{{$image->libelle}}</a></label></div>
                                                </div>
                                                @endif                                               
                                                @endforeach
                                            </div>
                                            
                                            <div id="documents">
                                                @foreach($listedocuments as $docs)
                                                @if($listobj->idobjet==$docs->idobjet)
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Documents</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><a href="sstorage/docs/{{$docs->libelle}}" target="blank">{{$docs->libelle}}</a></label></div>
                                                </div>
                                                @endif
                                                
                                                @endforeach
                                            </div>
                                            
                                            <div id="catalogues">
                                                @foreach($listecatalogue as $catalogue)
                                                @if($listobj->idobjet==$catalogue->idobjet)
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Catalogue</label></div>
                                                    <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"><a href="storage/catalogue/{{$catalogue->libelle}}" target="blank">{{$docs->libelle}}</a></label></div>
                                                </div>
                                                @endif
                                                
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>


                        <td title="MODIFIER">
                            <form method="GET" action="{{ route('objet.show', $listobj->idobjet) }}">
                                {{ method_field('EDIT') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <button class="btn btn-warning btn-sm" type="submit" ><i class="fas fa-edit"></i></button>
                            </form>                    
                        </td>

                        <td title="SUPPRIMER">
                            <form method="POST" action="{{ route('objet.destroy', $listobj->idobjet) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Vraiment terirer un objet ?')"><i class="fas fa-trash"></i></button>
                            </form>                    
                        </td>
                    </tr>



                    @endforeach      

                </tbody>
            </table>

        </div>
    </div>
</div>
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
    });

    $('#appui').click(function () {
    $({{$i}}).modal();
    });

</script>
@endsection