@extends('tprecop.template')
@section('contenu')
<br>

<div class="container">
    <label class="label label-primary"><b>BIENVENUE  {{ Auth::user()->name }}</b></label>
    <hr>
    <br>
    <div><label class="label label-primary"><b>Votre Tableau de Bord</b></label></div>

    @if($idcomptecorrespondant!=null)
    <div class="card col-sm-6 justify-content-center">
        <div class="card-header">Modifier votre compte Correspondant</div>
        <div class="card-body row">
            <form  method="post" action="{{route('detailscorrespondant')}}">
                @csrf
                <input type="submit" class="btn btn-primary" value="Modifier vos informations" name="idcorrespondant"> &nbsp;
                <input type="hidden"  value="{{$idcomptecorrespondant}}" name="idcorrespondant">
                <input type="hidden"  value="{{$idpiecesjointes}}" name="idpj">    
                <input type="submit" class="btn btn-warning" value="voir les details du compte" name="pjcorrespondant">           
            </form>

        </div>
    </div>
    @endif
    @if($idcomptecorrespondant==null) 
    <form method='POST' action='{{route("devenircorrespondant")}}'>
        @csrf
        <input type="submit" class="btn btn-success" value="S'insvrire comme correspondant de presse" name=""incirecorresp>
    </form>
    @endif
    <br>
    <form method="POST" action="{{route("devenirdemandeur")}}">
        @csrf
        <input type="submit" class="btn btn-warning" value="Ajouter une accreditation de presse" name="ajoutaccredi"> 
    </form>
    <br>


    <div class="card col-sm-12 ">
        <div class="card-header">Liste de vos demandes d'accreditation</div>


        <div class="card-body">
            <div class="col-sm-12 ligneform " style="background-color: #EEE">
                <table class="table table-striped table-condensed" id="table">
                    <thead>
                        <tr style="background-color:#2a6496;color: #FFFFFF;">
                            <th>Numero de la Demande</th>
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
                            <td>En cours</td> 
                            <td>
                                <div class="row">
                                    <form method="post" action="{{route('detailsaccreditation')}}">
                                        @csrf
                                        <input type="submit" class="btn btn-success" value="voir details">
                                        <input type="hidden" value="{{$mesaccredi->idaccreditation}}" name="idaccreditation">
                                        <input type="hidden" value="{{$mesaccredi->iduser}}" name="iduser">
                                        <input type="hidden" value="{{$mesaccredi->iddemandeur}}" name="iddemandeur">
                                        <input type="hidden" value="{{$idcomptecorrespondant}}" name="idcorrespondant">
                                        &nbsp;
                                        <input type="submit" class="btn btn-warning" value="Modifier la demande">
                                    </form>
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
    <!--    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>-->
</div>
<br>
@endsection
