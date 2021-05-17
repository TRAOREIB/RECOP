@extends('template.template')
@section('contenu')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<script src="{{asset('js/bootstrap.min.js')}}"></script>



<div class="col-sm-7 offset-3" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Connexion</h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>
@isset($message)
<div class="alert alert-danger col-sm-4 offset-5"><label class="offset-2">{{$message}}</label></div>
@endisset

<form class="form-horizontal col-sm-8 offset-4" role="form" method="post" action="{{route('connecte')}}" enctype="multipart/form-data" >
 {{ csrf_field() }}
    <div class="col-sm-8" style="border:1px solid #D1DCF5;margin-left:0px;padding:15px; margin-left:0px">
       
        <br>
        <div class="card">
            <div class="card-header"><b>Informations Générales</b></div>
            <div class="card-body">
                <div class="row form-group">
                    <label for="identifiant" class="control-label col-sm-3">identifiant <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-7"> 
                        <input type="identifiant" class="form-control" name="identifiant" required="required" value="{{old('identifiant')}}">
                        <small class="text-danger">{{ $errors->first('mail',':message') }}</small>
                    </div> 
                </div>   
                <div class="row form-group">
                    <label for="password" class="control-label col-sm-3">Password <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-7"> 
                        <input type="password" class="form-control" name="password" required="required" value="{{old('password')}}">
                        <small class="text-danger">{{ $errors->first('password',':message') }}</small>
                    </div> 
                </div>   
            </div> 

        </div>  


    </div>
    <br>
    <div class="alert alert-primary col-sm-8"><label class="offset-1">En cas d'oubli de Mot de Passe, appellez au 70 00 00 00</label></div>
    <div class="row form-group">
        <div class="offset-2">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '{{url('objet')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>

    </div>

</form>

@endsection