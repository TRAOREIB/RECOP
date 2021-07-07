@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>
{{-- <div class="ligne_separe_titre"></div> --}}
<hr>
<br>
<form class="form-horizontal  col-sm-10 offset-2" role="form" method="POST" action="{{ route('modifcorrespondant') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="col-sm-9">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">CHOISIR LE TYPE DE CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-label offset-1 " for="type">TYPE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="typecorrespondant" name="typecorrespondant">
                            @if($correspondant->typecorrespondant=="Correspondant national")
                            <option value="Correspondant national" selected>Correspondant de la presse nationale</option>
                            @else
                            <option value="Correspondant national">Correspondant de la presse nationale</option>
                            @endif
                            @if($correspondant->typecorrespondant=="Correspondant international")
                            <option value="Correspondant international" selected>Correspondant de la presse internationale</option>
                            @else
                            <option value="Correspondant international">Correspondant de la presse internationale</option>
                            @endif
                            @if($correspondant->typecorrespondant=="Journaliste independant")
                            <option value="Journaliste independant" selected>Journaliste independant/FreeLance</option>
                            @else
                            <option value="Journaliste independant">Journaliste independant/FreeLance</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>
        <input type="hidden" value="{{$idcorrespondant}}" name="idcorrespondant">
        <input type="hidden" value="{{$correspondant}}" name="correspondant">
        <input type="hidden" value="{{$idpiecesjointes}}" name="idpiecesjointes">

    <div class="offset-3">
        <button class="btn btn-primary" type="submit">Continuer</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
@endsection