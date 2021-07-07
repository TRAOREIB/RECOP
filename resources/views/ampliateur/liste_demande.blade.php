@extends('tprecop.template')
@section('contenu')
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE {{ Auth::user()->name }}</b></label>
    <hr>

    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>
    <br>
    <div class="alert alert-danger col-sm-6 text-center offset-3">
        <b><label>Liste des Accreditations de Presse en Cours</label></b>
    </div>
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
                                            <form method="post" action="{{route('detailsampliateur')}}">
                                                @csrf
                                                <input type="submit" class="btn btn-warning" value="voir les details">
                                                <input type="hidden" value="{{$mesaccredi->idaccreditation}}" name="idaccreditation">
                                                <input type="hidden" value="{{$mesaccredi->iduser}}" name="iduser">
                                                <input type="hidden" value="{{$mesaccredi->iddemandeur}}" name="iddemandeur">
                                                <input type="hidden" value="{{$mesaccredi->valider}}" name="valider">
                                                &nbsp;
                                            </form>
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
            $('#table').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
        });
    </script>
    @endsection