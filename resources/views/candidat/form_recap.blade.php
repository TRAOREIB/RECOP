@extends('template.template')
@section('contenu')

<br><br><br><br><br><br><br>
<div class="col-sm-7 offset-3" style="margin-top: 0px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Liste de vos oeuvres soumises </h5></i>
    <div style="background: #285e8e;height:10px"></div>
</div>
<br>
@isset($cateindispo)
<div class="alert alert-danger col-sm-5 offset-3"><label>{{$cateindispo}}</label></div>
@endisset
<div class="container col-sm-8">


    <div>
        <form method="get" action="{{route('recepisse')}}">
            {{ csrf_field() }} 
            <input type="submit" class="btn btn-danger" target='blank' value="Imprimer votre Recepisse" name="recepisse">    
            <input type="hidden" value="{{$idcandidat}}" name="idcandidat">
        </form> 
    </div>
    <br>
    @if($nboeuvre<1)
    <div class="">
        <form method="GET" action="{{url('demandeinscrip')}}">
            {{ method_field('PUT') }}
            <a href="form_connexion.blade.php"></a>
            {{ csrf_field() }} 
            <input type="submit" class="btn btn-success" value="Ajouter une Oeuvre" name="ajoutoeuvre">    
            <input type="hidden" value="{{$idcandidat}}" name="idcandidat">
        </form> 
    </div>
    @endif
    <br>
    <div class="">
        <form method="GET" action="{{route('candidat.edit',[$idcandidat])}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }} 
            <input type="submit" class="btn btn-success" value="Modifier vos Informations Personnelles" name="recepisse">    
            <input type="hidden" value="{{$idcandidat}}" name="idcandidat">
        </form> 
    </div>
    <br>


    <br>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th><h5>Categorie</h5></th>
                <th><h5>Prémière Oeuvre</h5> </th>
                <th><h5>Deuxième Oeuvre</h5></th>
                <th></th>

            </tr>
        </thead>
        <tbody>

            @isset($message)
        <div class="alert alert-danger col-sm-10 offset-1">
            <label> Vous n'avez pas d'oeuvres soumises, cliquer sur <b><a href="{{url('presseecrite')}}">PRESSE ECRITE</a></b> ou <b><a href="{{url('presseligne')}}">PRESSE EN LIGNE</a></b> pour le faire</label>
        </div>
        @else
        @foreach($oeuvres as $oeuvre)
        <form method="GET" action="{{route('oeuvre.edit',[$oeuvre->id])}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            @if($oeuvre->macategorie=="presse ecrite")
            <tr>
                <td><i><label class="label" style="color: black"><h5>{{$oeuvre->macategorie}}</h5></label></i></td>
                <td><label class="label" style="color: black"><h5>{{$oeuvre->titrearticle1}}</h5></label></td>
                <td><label class="label" style="color: black"><h5>{{$oeuvre->titrearticle2}}</h5></label></td>
                <td><input type="submit" value="Modifier les Oeuvres" class="btn btn-primary"></td>
            <input type="hidden" value="presse ecrite" name="categorie">
            </tr>
            @endif
            @if($oeuvre->macategorie=="presse en ligne")
            <tr>
                <td><i><label class="label" style="color: black"><h5>{{$oeuvre->macategorie}}</h5></label></i></td>
                <td><label class="label" style="color: black"><a href="{{$oeuvre->url1}}"><h5>{{$oeuvre->url1}}</h5></a></label></td>
                <td><a href="{{$oeuvre->url2}}"><label class="label" style="color: black"><h5>{{$oeuvre->url2}}</h5></label></a></td>
                <td><input type="submit" value="Modifier les Oeuvres" class="btn btn-primary"></td>
            <input type="hidden" value="presse en ligne" name="categorie">
            </tr>
            @endif   
            <input type="hidden" value="{{$oeuvre->idcandidat}}" name="idcandidat">
        </form>   

        @endforeach
        @endif   
        </tbody>
    </table>

</div>

@endsection