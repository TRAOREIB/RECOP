@extends('template.template')
@section('contenu')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="{{asset('js/bootstrap.min.js')}}"></script>



<div class="col-sm-7 offset-3" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Categorie Presse en Ligne </h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action=" {{url('oeuvre')}} " enctype="multipart/form-data" >

    <div class="col-sm-10" style="border:1px solid #D1DCF5;margin-left:0px;padding:15px; margin-left:0px">
        {{ csrf_field() }}
        <br>
        <div class="card">
            <div class="card-header"><b>Informations Generales</b></div>
            <div class="card-body">
                <div class=" row form-group"> 
                    <label for="urlsite" class="control-label col-sm-3">Url du site web <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="url" id="urlsite"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('url',':message') }}</small> 
                    </div>
                </div>

                <div class=" row form-group"> 
                    <label for="genre" class="control-label col-sm-3">Genre Journalistique <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8">
                        <select class="form-control col-sm-5" name="idgenre">
                            @foreach($genre as $ge)
                            <option value="{{$ge->idgenre}}">{{$ge->genre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div> 

        </div>  

        <div class="card">
            <div class="card-header"><b>Prémière Oeuvre</b></div>
            <div class="card-body">
                <div class=" row form-group"> 
                    <label for="titre" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="titrearticle1" id="designation"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('titrearticle1',':message') }}</small> 
                    </div>
                </div>

                <div class=" row form-group"> 
                    <label for="theme" class="control-label col-sm-3">Thème <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="themearticle1" id="theme1"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('themearticle1',':message') }}</small> 
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="url1" class="control-label col-sm-3">Url(lien d'accès à l'article) <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="url1" id="url1"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('url1',':message') }}</small> 
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="datepub1" class="control-label col-sm-3">Date de publication <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-4"> 
                        <input type="date" class="form-control" name="datepubarticle1" id="datepubarticle1"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('datepubarticle1',':message') }}</small> 
                    </div> 
                </div>

            </div> 

        </div>    

        <div class="card">
            <div class="card-header"><b>Deuxième Oeuvre</b></div>
            <div class="card-body">
                <div class=" row form-group"> 
                    <label for="titre" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="titrearticle2" id="titre2"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('titrearticle2',':message') }}</small> 
                    </div>
                </div>

                <div class=" row form-group"> 
                    <label for="theme" class="control-label col-sm-3">Thème <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="themearticle2" id="theme"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('themearticle2',':message') }}</small> 
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="url2" class="control-label col-sm-3">Url(lien d'accès à l'article) <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="url2" id="url1"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('url2',':message') }}</small> 
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="datepub2" class="control-label col-sm-3">Date de publication <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-4"> 
                        <input type="date" class="form-control" name="datepubarticle2" id="datepubarticle2"  value="" required="required">
                        <small class="text-danger">{{ $errors->first('datepubarticle2',':message') }}</small> 
                    </div> 
                </div>

            </div> 
            <div class="card-footer"></div>
            <input type="hidden" value="{{$idcategorie}}" name="idcategorie">
            <?php
            $idcandidat=session('idutilisateur');
            $annee=date("Y");
            echo "<input type='hidden' value='$idcandidat' name='idcandidat'>";
            echo "<input type='hidden' value='$annee' name='annee'>";
            echo "<input type='hidden' value='Français' name='langue'>";
            echo "<input type='hidden' value='presse en ligne' name='macategorie'>";
            ?>
        </div>   


    </div>

    <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '{{url('objet')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
    </div>

</form>

@endsection