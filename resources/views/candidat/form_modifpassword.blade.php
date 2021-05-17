@extends('template.administrateur')
@section('contenu')


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!--<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>-->
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>

<link type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="{{ asset('css/datatables.min.css')}}">
<!--<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}">-->



<div class="col-sm-5 offset-2" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Liste des Candidats</h4></i>
    <div style="background: #285e8e;margin-top:0px;height:10px"></div>
</div>

<br>
@isset($message)
<div class="alert alert-danger col-sm-4"><label class="">{{$message}}</label></div>
@endisset

<br>


<div class="card col-sm-12 offset-0">

    <div class="row card-header">Les Candidats</div>
    <div class="card-body">
        <div class="row divtabgrand" style="">
            <div class="col-sm-12" >
                <div class="col-sm-12 ligneform " style="background-color: #EEE">
                    <table class="table table-striped table-condensed" id="tableau">
                        <thead>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>CNIB</th>
                                <th>NOM</th>	
                                <th>PRENOM</th>
                                <th>CONTACT</th>
                                <th>MAIL</th>
                                <th>IDENTIFIANT</th>
                                <th>Initialiser Password</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidat as $cand)
                            <tr>
                                <td>{{$cand->cnib}}</td>	
                                <td>{{$cand->nom}}</td>	
                                <td>{{$cand->prenom}}</td>
                                <td>{{$cand->contact}}</td>
                                <td>{{$cand->email}}</td>
                                <td>{{$cand->identifiant}}</td>
                                <td>
                                    <form method="GET" action="{{route('password.show',[$cand->id])}}"> 
                                        {{ csrf_field() }}         
                                        <input type="submit" value="initialiser" class="btn btn-success" name="initialiser">
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function () {
    $("#tableau").DataTable();
    });</script>


@endsection