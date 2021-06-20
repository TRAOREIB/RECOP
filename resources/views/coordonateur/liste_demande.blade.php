@extends('tprecop.template')
@section('contenu')
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE {{ Auth::user()->name }}</b></label>
    <hr>

    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <form method="post" action="{{route('recherchedemande')}}">
        @csrf
        <div class="row offset-2"><label>Choisir l'Etat de la Demande</label> &nbsp;&nbsp;&nbsp;
            <select class="form-control col-sm-2" name="etat">
                <option value="En cours">En cours</option>
                <option value="Validée">Validée</option>
                <option c=value="Invalidée">Invalidée</option>
            </select>&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Rechercher" name='recherchedemande' class="btn btn-primary">
        </div>
    </form>
    <br>
    <div>
        <div class="card col-sm-12 ">
            <div class="card-header">Liste des demandes d'accreditation</div>
            <div class="card-body">
                <div class="col-sm-12 ligneform " style="background-color: #EEE">
                    <table class="table table-striped table-condensed" id="table">
                        <thead>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>N°Demande</th>
                                <th>Date de Soumission</th>
                                <th>Sujet(s)</th>
                                <th>Etat</th>
                                <th>Modifier</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($accreditations as $mesaccredi)
                            <tr>
                                <td>{{$mesaccredi->idaccreditation}}</td>
                                <td>{{$mesaccredi->CREATED_AT}}</td>
                                <td>{{$mesaccredi->titreevenement}},....</td>
                                <td>@if($mesaccredi->valider==2)
                                    Invalidé
                                    @endif
                                    @if($mesaccredi->valider==0)
                                    En cours
                                    @endif
                                    @if($mesaccredi->valider==1)
                                    Validé
                                    @endif

                                </td>
                                <td>
                                    <div class="row ">
                                        <div>
                                            <form method="post" action="{{route('detailscoordonateur')}}">
                                                @csrf
                                                <input type="submit" class="btn btn-warning" value="voir details pour valider">
                                                <input type="hidden" value="{{$mesaccredi->idaccreditation}}" name="idaccreditation">
                                                <input type="hidden" value="{{$mesaccredi->iduser}}" name="iduser">
                                                <input type="hidden" value="{{$mesaccredi->iddemandeur}}" name="iddemandeur">
                                                &nbsp;
                                            </form>
                                        </div>
                                        <div>
                                            @if($mesaccredi->valider==1)
                                            <form method="post" action="{{route('generateattestation')}}">
                                                @csrf
                                                <input type="submit" class="btn btn-success" value="Export PDF">
                                                <input type="hidden" value="{{$mesaccredi->idaccreditation}}" name="idaccreditation">
                                                <input type="hidden" value="{{$mesaccredi->iduser}}" name="iduser">
                                                <input type="hidden" value="{{$mesaccredi->iddemandeur}}" name="iddemandeur">
                                                &nbsp;
                                            </form>
                                            @endif
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <br>

    </div>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    @endsection