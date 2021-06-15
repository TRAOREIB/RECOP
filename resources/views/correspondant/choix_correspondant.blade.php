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
<form class="form-horizontal col-sm-10 offset-1" role="form" method="GET" action="{{ url('correspondant') }}" enctype="multipart/form-data">
    {{ method_field('GET')}}
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 1-->
        <div class="card"> 
            <div class=" card text-center card-header">CHOISIR LE TYPE DE CORRESPONDANT</div>
            <div class="card-body">               
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">TYPE :</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="sexe" name="typecorrespondant">
                            <option value="Correspondant national">Correspondant de la presse nationale</option>
                            <option value="Journaliste independant">Journaliste independant/FreeLance</option>
                                 <option value="Correspondant international">Correspondant de la presse internationale</option>         
                        </select>
                    </div>
                </div>  
            </div>
        </div>				
    </div>
    <p>

    <div class="text-center">
        <button class="btn btn-primary" type="submit">Continuer</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
@endsection
