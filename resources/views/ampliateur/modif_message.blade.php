@extends('tprecop.template')
@section('contenu')
<script src="{{asset('js/dtable.js')}}"></script>
<br>


<div class="alert alert-danger col-sm-7 offset-3 text-center">
    <b><label>Modifier le Commentaire sur l'Accreditation N° {{$idaccreditation}}</label>

    </b>
</div>

<form class="form-horizontal col-sm-10 offset-1" role="form" method="post" action="{{route('modifiermessage')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
        <div class="card-header">Rediger Votre Commentaire</div>
        @foreach($message as $mes)
        <div class="card-body">
            <div class=" row form-group">
                <label for="titre" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="titremessage" value="{{$mes->titreinfo}}" required="required">
                </div>
            </div>

            <div class=" row form-group">
                <label for="contenu" class="control-label col-sm-3">Contenu <b><i style="color: red">*</i></b></label>

                <div class="col-sm-7" style="">
                    <textarea type="textarea" class="form-control" name="message" required="required">{{$mes->message}}</textarea>
                </div>
            </div>
            <input type="hidden" value="{{$mes->id}}" name="id">
            <input type="hidden" value="{{$idaccreditation}}" name="idaccreditation">
        
            <div class="row form-group">
                <div class="offset-3">
                    <input type="submit" value="Modifier" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px">
                </div>
                <div class="offset-1">
                    <input type="button" value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
                </div>
            </div>
        </div>

        @endforeach

    </div>



    <!--   <input type="hidden" value="0" name="actif"> -->
</form>
<br>


@endsection