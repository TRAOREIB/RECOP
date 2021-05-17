@extends('template.template')
@section('contenu')

<br><br><br><br><br><br><br>
<div class="col-sm-7 offset-3" style="margin-top: 0px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Changer Mot de Passe </h4></i>
    <div style="background: #285e8e;height:10px"></div>
</div>
<br>
@isset($message)
<div class="alert alert-success col-sm-3 offset-4"><label class="offset-1">{{$message}}</label></div>
@endisset
<form class="form-horizontal col-sm-10" role="form" method="POST" action=" {{url('password')}}" enctype="multipart/form-data" >

    <div class="col-sm-10 offset-2" style="border:1px solid #D1DCF5;">
        {{ csrf_field() }}
        <br>

        <form class="form-horizontal" role="form">


            <div class=" row form-group"> 
                <label for="nom" class="control-label col-sm-3">Nouveau Mot de Passe <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-5"> 
                    <input type="password" class="form-control" name="password" id="motdepasse"  value="" required="">
                    <input type="hidden" value="{{$id}}" name="idcandidat" />
                    <small class="text-danger">{{ $errors->first('nom',':message') }}</small> 
                </div> 
                
            </div>
 
          
    </div>
    <br> 
    <div class="row form-group offset-3">
        <div class="offset-2">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = 'url('password')}}'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;">
        </div>
    </div>

</form>
        
@endsection