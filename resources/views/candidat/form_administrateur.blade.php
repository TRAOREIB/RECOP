@extends('template.administrateur')
@section('contenu')


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!--<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>-->
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>

<link type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="{{ asset('css/datatables.min.css')}}">
<!--<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}">-->



<div class="col-sm-5 offset-2" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Repertoire des oeuvres</h4></i>
    <div style="background: #285e8e;margin-top:0px;height:10px"></div>
</div>

<br>
@isset($message)
<div class="alert alert-danger col-sm-4"><label class="">{{$message}}</label></div>
@endisset

<div class="card  col-sm-7 offset-1">
    <div class="card-header">Choix de la categorie</div>
    <form class="form-horizontal" role="form" method="post" action="{{route('choixrepertoire')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}      
        <br>
        <div class=" col-sm-12">
            <div class="row col-sm-9">
                <label class="offset-0">Choisir Categorie &nbsp;</label>  
                &nbsp;
                <select class="form-control col-sm-7 offset-1" name="categorie" id="categorie">
                    <option>Choisir</option>
                    @foreach($categories as $key => $cat)
                    <option value="{{$key}}">{{$cat}}</option>
                    @endforeach             
                </select>
            </div>
            <br>
            <div class="row col-sm-9">
                <label class="offset-0">Choisir Genre &nbsp;</label>  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;              
                <select id="genre" name='genre' class="form-control col-sm-7 offset-1">
                </select>
            </div>           
        </div> 
        <br>  
        <div class="card-footer"> <div class="col-sm-1 offset-5"><input type="submit" class="btn btn-info" value="Rechercher"></div></div>
    </form>
</div>    
<br>

<br>
@isset($listoeuvre)
@empty($listoeuvre)
@foreach($listoeuvre as $cat)
<div class="offset-4 alert alert-primary col-sm-5"><b><label>Repertoire des Oeuvres de la Categorie {{$cat->categorie}}</label></b></div>
@break
@endforeach
@endempty
@endisset

<div class="card col-sm-12 offset-0">
    @isset($listoeuvre)
    @empty($listoeuvre)
    @foreach($listoeuvre as $cat)
    <div class="row card-header">Repertoire des Oeuvres de la Categorie &nbsp; <b> {{$cat->categorie}}</b> &nbsp; - &nbsp;<b>Genre: {{$cat->genre}}</b>
        @break;
        @endforeach

        <form method="get" action="{{route('repertoireliste')}}">
            {{ csrf_field() }}   
            <div class="offset-1"><input type="submit" class="btn btn-warning" value="Telecharger Repertoire">
                <input type="hidden" value="{{$cat->categorie}}" name="categorie">
                <input type="hidden" value="{{$cat->idgenre}}" name="idgenre">
            </div>
        </form>
    </div>
    @endempty
    @endisset
    <div class="card-body">
        <div class="row divtabgrand" style="">
            <div class="col-sm-12" >
                <div class="col-sm-12 ligneform " style="background-color: #EEE">
                    <table class="table table-striped table-condensed" id="tableau">
                        <thead>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>GENRE</th>
                                <th>NOM</th>	
                                <th>PRENOM</th>
                                <th>CONTACT</th>
                                <th>ORGANE</th>
                                @isset($listoeuvre)

                                @foreach($listoeuvre as $list)

                                @if($list->categorie=='presse ecrite')
                                <th>TITRE (1)</th>
                                <th>THEME (1)</th>                           
                                <th>TITRE (2)</th>
                                <th>THEME (2)</th>  
                                <th>Details</th>
                                @break
                                @endif
                                @endforeach
                                @endisset

                                <?php $i = 0 ?>
                                @isset($listoeuvre)
                                @foreach($listoeuvre as $list)
                                <?php $i++; ?>
                                @if($list->categorie=='presse en ligne')
                                <th>TITRE(1)</th>
                                <th>url(1)</th>                           
                                <th>TITRE(2)</th>
                                <th>url(2)</th>
                                <th>Details</th>
                                @break
                                @endif
                                @endforeach
                                @endisset 

                            </tr>
                        </thead>
                        <tbody>
                            @isset($listoeuvre)
                            <?php $i = 0 ?>
                            @foreach($listoeuvre as $list)
                            <?php $i++; ?>
                            <tr>
                                <td>{{$list->genre}}</td>	
                                <td>{{$list->nomcandidat}}</td>	
                                <td>{{$list->prenomcandidat}}</td>
                                <td>{{$list->contact}}</td>
                                <td>{{$list->organe}}</td> 
                                @if($list->categorie=='presse ecrite')
                                <td>{{$list->titrearticle1}}</td>	
                                <td>{{$list->themearticle1}}</td>
                                <td>{{$list->titrearticle2}}</td>
                                <td>{{$list->themearticle2}}</td> 
                                <td title="details">
                                    {{ csrf_field() }}
                                    <a ></a>
                                    <button class="btn btn-primary" id="btn" type="button"  data-toggle="modal" data-target='#essai{{$i}}' ><i class="fa fa-edit"></i></button>
                                    <input type="hidden" value="{{$i}}" name="{{$i}}{{$i}}">
                                </td>  
                        <div class="modal" id='essai{{$i}}'>
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color : whitesmoke">

                                    <div class="modal-body">
                                        <div class="row col-sm-11" style="margin-left:20px">
                                            <div class="card col-sm-12" style="margin-left:0px;">

                                                <div class="card-header">Les documents du Candidat {{$list->nomcandidat}} {{$list->prenomcandidat}}</div>

                                                <div class="card-body col-sm-12">
                                                    <p>
                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Photo d'Identité</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->photo")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">CV</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->cv")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Visa Media</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->visamedia")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Prémière oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->fichieroeuvre1")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">deuxième oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->fichieroeuvre2")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                </div>                                
                                            </div>                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif
                        @if($list->categorie=='presse en ligne')
                        <td>{{$list->titrearticle1}}</td>	
                        <td>{{$list->url1}}</td>
                        <td>{{$list->titrearticle2}}</td>
                        <td>{{$list->url2}}</td> 
                        <td title="details">
                            {{ csrf_field() }}
                            <a ></a>
                            <button class="btn btn-primary" id="btn" type="button"  data-toggle="modal" data-target='#essai{{$i}}' ><i class="fa fa-edit"></i></button>
                            <input type="hidden" value="{{$i}}" name="{{$i}}{{$i}}">
                        </td>  
                        <div class="modal" id='essai{{$i}}'>
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color : whitesmoke">

                                    <div class="modal-body">
                                        <div class="row col-sm-11" style="margin-left:20px">
                                            <div class="card col-sm-12" style="margin-left:0px;">

                                                <div class="card-header">Les documents du Candidat {{$list->nomcandidat}} {{$list->prenomcandidat}}</div>

                                                <div class="card-body col-sm-12">
                                                    <p>
                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Photo d'Identité</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->photo")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">CV</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->cv")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Visa Media</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='{{asset("storage/docs/$list->visamedia")}}' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Prémière oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href="{{$list->url1}}" target="blank">{{$list->url1}}</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">deuxième oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href="{{$list->url2}}" target="blank">{{$list->url2}}</a></label></div>
                                                    </div>

                                                </div>                                
                                            </div>                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif

                        </tr>
                        @endforeach
                        @endisset
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>




<script>
    $(document).ready(function () {
    $("#tableau").DataTable();
    });</script>

<script type="text/javascript">
    $('#categorie').change(function () {
    var categorieID = $(this).val();
    if (categorieID) {
    $.ajax({
    type: "GET",
            url: "{{url('getgenre')}}?idcategorie=" + categorieID,
            success: function (res) {
            if (res) {
            $("#genre").empty();
            $("#genre").append('<option>Tous</option>');
            $.each(res, function (key, value) {
            $("#genre").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#genre").empty();
            }
            }
    });
    } else {
    $("#genre").empty();
    }
    });
</script>

@endsection