@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU DEMANDEUR</label> --}}
    <b><label style="" class="text-primary">NOUVEAU DEMANDEUR</label></b>
</div>
{{-- <div class="ligne_separe_titre"></div> --}}
<hr>
<br>
<form class="form-horizontal  col-sm-10 offset-2" role="form" method="POST" action="{{ route('formdevenirdemandeur') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="col-sm-9">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">CHOISIR LE TYPE DE DEMANDEUR</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-label offset-1 " for="type">TYPE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="typedemandeur" name="typedemandeur">
                            <option value="Ressortissant Espace CEDEAO">Ressortissant Espace CEDEAO</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>

    <div class="offset-3">
        <button class="btn btn-primary" type="submit">Continuer</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
@endsection