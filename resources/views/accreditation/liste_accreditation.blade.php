@extends('tprecop.template')
@section('contenu')

<br>
<br>
<div class="text-center">
    <div class="col-sm-12" style="">
        <label style="font-family: fantasy;color: blue"> LISTE DE VOS ACCREDITATIONS </label>     
    </div>
</div> 
<div class="ligne_separe_titre"></div>
<br><br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="{{ route('listeaccreditation') }}" enctype="multipart/form-data" >
    {{ method_field('GET')}}
    {{ csrf_field() }}

    <div class="row  offset-sm-2">

        <label for="region" class="">REGION </label> 
        <div class="col-sm-3  col-md-3"> 
            <select class="form-control" name="region" required> 
                <option selected>choisir la region</option>                                    
                <option value="centre">Centre</option> 
                <option value="centre-est">Centre-Est</option> 
                <option value="centre-nord">Centre-Nord</option> 
                <option value="centre-ouest">Centre-Ouest</option>  
                <option value="centre-sud">Centre-Sud</option>
                <option value="nord">Nord</option>                                    
                <option value="sahel">Sahel</option> 
                <option value="est">Est</option>
                <option value="cascades">Cascades</option>
                <option value="plateau-central">Plateau Central</option> 
                <option value="sud-ouest">Sud-Ouest</option> 
                <option value="hauts-bassins">Hauts-Bassins</option>  
                <option value="boucle-mouhoun">Boucle du Mouhoun</option>                                   
                <small class="text-danger">{{ $errors->first('region',':message') }}</small> 
            </select> 
        </div>

        <div class="ln_solid "></div>
        <div class="item form-group">
            <div style="margin: auto">  
                <input type="submit"  value="VALIDER" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
            </div>
        </div>
    </div>
</form>

<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>ID ACCREDITATION</th>
                      
                        <th>ACTIONS</th>
                        <th>ETAT</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach( $allaccreditation as $accreditation)
                    <?php $i++ ?>


                    <tr> 
                        <td>{{$accreditation->idaccreditation}}</td>
                       
                        <td title="Action">

                            <!-- Détails de l'accreditation -->

                            <button data-toggle="modal" data-target='#recherche{{$i}}' value="DETAILS">DETAILS </button>              

                            <div class="modal fade" id='recherche{{$i}}'>
                                <div class="modal-dialog modal-lg" style="">
                                    <div class="modal-content" style="background-color : whitesmoke">
                                        <div class="row listetitreformgrand" style="">
                                            <div class="col-sm-12" style="">
                                                <h3 class=" offset-sm-3"> DETAILS ACCREDITATION </h3>
                                            </div>
                                        </div>
                                        <div class="modal-body">     
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">SUJET A COUVRIR</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">LIEU</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">DATE DE DEBUT</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">DATE DE FIN</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">MOYEN DE TRANPORT</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$accreditation->moyentransport  }}</label></div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">IMMATRICULATION</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$accreditation->immatriculation }}</label></div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">LISTE DU MATERIEL</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info">{{$accreditation->listemateriel }}</label></div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label-info" style="margin-left:0px">MEMBRE (S) DE L'EQUIPE</label></div>
                                                <div class="col-sm-7" style="background-color: #EEEEEE"><label class="label-info"></label></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>    
                            </div>

                            <div><!-- Modification de l'accreditation -->

                                <form method="GET" action="{{route('accreditation.edit',[$accreditation->idaccreditation])}}">
                                    {{method_field('EDITER') }}
                                    {{ csrf_field() }}
                                    <input type="submit" value="Modifier A" style="border: 0px;background-color:">
                                </form> 
                            </div>	

                            <div><!-- Modification des PJ-->
                                <form method="POST" action="{{route('modifpjaccreditation',[$accreditation->idpiecesjointes]) }}">
                                    {{ csrf_field() }}
                                    <input type="submit" value="Modifier PJ" style="border: 0px;background-color:">
                                </form>
                            </div>	

                        <td title="ETAT"> 
                            <?php if ($accreditation->valider == "0") echo "EN COURS"; ?>
                            <?php if ($accreditation->valider == "1") echo "ACCORDER"; ?>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
<br>
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
</script>
@endsection 