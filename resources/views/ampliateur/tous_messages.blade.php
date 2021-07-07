@extends('tprecop.template')
@section('contenu')
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE {{ Auth::user()->name }}</b></label>
    <hr>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <div class="alert alert-danger col-sm-6 text-center offset-3">
        <b><label>Liste des Messages de l'accreditation N° @foreach($lesmessages as $mes) {{$mes->idaccreditation}} @break; @endforeach</label></b>
    </div>
    @foreach($lesmessages as $mes)
    <form method="POST" action="{{route('detailscoordonateur')}}">
        @csrf
        <div class="card col-sm-10 offset-1">
            <div class="card-header"><b>Message {{$mes->nomapliateur}} - Accreditation N°{{$mes->idaccreditation}}</b> - Titre: {{$mes->titreinfo}}</div>
            <div class="card-body">
                {{$mes->message}}
            </div>
        </div>
        <input type="hidden" value="{{$mes->iduser}}" name="iduser">
        <input type="hidden" value="{{$mes->idaccreditation}}" name="idaccreditation">


        <br>

        @endforeach
        <input type="hidden" value="{{$iddemandeur}}" name="iddemandeur">
        <div class="text-center">
            <input type="submit" class="form-control btn btn-primary col-sm-3" value="Retour sur les details" name="retourdetail">
        </div>
        <br>
    </form>
    <div class="offset-1">{{$lesmessages->render()}}</div>
    <div>


    </div>

    @endsection