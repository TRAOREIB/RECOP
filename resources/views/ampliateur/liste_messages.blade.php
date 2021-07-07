@extends('tprecop.template')
@section('contenu')
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE {{ Auth::user()->name }}</b></label>
    <hr>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <div class="alert alert-danger col-sm-6 text-center offset-3">
        <b><label>Liste des Messages</label></b>
    </div>
    @foreach($listemessages as $mes)
    <form method="POST" action="{{route('formmodifiermessage')}}">
        @csrf
        <div class="card col-sm-10 offset-1">
            <div class="card-header"><b>Accreditation N°{{$mes->idaccreditation}}</b> - Titre: {{$mes->titreinfo}} <input type="submit" value="Modifier l'Information" class="form-contol offset-2 btn btn-primary"></div>
            <div class="card-body">
                {{$mes->message}}
            </div>
        </div>
        <input type="hidden" value="{{$mes->iduser}}" name="iduser">
        <input type="hidden" value="{{$mes->idaccreditation}}" name="idaccreditation">

        <br>
    </form>
    @endforeach
        <div class="offset-1">{{$listemessages->render()}}</div>
    <div>


    </div>


    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
        });
    </script>
    @endsection