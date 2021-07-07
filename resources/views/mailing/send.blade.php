@extends('tprecop.template')
@section('contenu')
<br> 
<div class="text-center">
    <label style="font-family: fantasy;color: blue">NOUVEAU DEMANDEUR</label>
</div>
<div class="ligne_separe_titre"></div>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('send')}}" enctype="multipart/form-data">
     {{ method_field('GET')}}
    {{ csrf_field() }}	

  
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">SEND</button>
        <p></p>    
    </div>
</form>
@endsection
