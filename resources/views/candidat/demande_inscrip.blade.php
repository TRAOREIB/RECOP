@extends('template.template')
@section('contenu')



<div class="col-sm-7 offset-3" style="margin-top: 140px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Bienvenue au Concours "Prix Galian"<?php echo date("Y"); ?></h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>
<div class="offset-4"><label><i><b><?php echo session('utilisateur'); ?></b></i></label></div>
@isset($message)
<div class="alert alert-danger col-sm-5 offset-4"><label>{{$message}}</label></div>
@endisset
<div class="card col-sm-6 offset-3">
    <div class="card-body">
        <label><b>Cliquer sur votre catégorie de compétition pour soumettre vos oeuvres </b> </label>
        <br>
        <div><div class="col-sm-10 row">
                <div class="offset-1">
                    <input type="button"  value="PRESSE ECRITE" onclick="location.href = '{{url('presseecrite')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="offset-2"><input type="button"  value="PRESSE EN LIGNE" onclick="location.href = '{{url('presseligne')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>
<!--                     &nbsp;&nbsp;&nbsp;
                        <div><input type="button"  value="TELEVISION" onclick="location.href = '{{url('mediatele')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>
                  &nbsp;&nbsp;&nbsp;
                        <div><input type="button"  value="RADIODIFFUSION" onclick="location.href = '{{url('mediaradio')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px"></div>-->
            </div>
        </div>
    </div> 
</div>

@endsection
