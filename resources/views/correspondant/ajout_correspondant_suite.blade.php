@extends('tprecop.template')
@section('contenu')
<br>  
<div class="text-center">
    <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label>
</div> 
<div class="ligne_separe_titre"></div>
<br>



<form method="post" action="{{route('piecesjointes.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 2-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="photo" class="col-sm-3 col-form-label">PHOTO D'IDENTITE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control @error('photo') is-invalid @enderror"  type="file" name="photo" value="{{ old('photo') }}" required>
                    @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
					</div>
                </div>
                <div class="form-group row">
                    <label for="cv" class="col-sm-3 col-form-label">CV <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control @error('cv') is-invalid @enderror" id="cv" type="file" name="cv" value="{{ old('cv') }}" required>
                        @error('cv')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
						<label><i>Scan du fichier numerique du CV</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="visamedia" class="col-sm-3 col-form-label">VISA DU MEDIA <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control @error('visamedia') is-invalid @enderror" id="visamedia" type="file" name="visamedia" value="{{ old('visamedia') }}" required>
                        @error('visamedia')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
						<label><i>Scan du fichier numerique du visa</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNI <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control @error('pjcnib') is-invalid @enderror" id="pjcnib" type="file" name="pjcnib" value="{{ old('pjcnib') }}" required>
                        @error('pjcnib')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
						<label><i>Scan de la CNI (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjpasseport"/>
                        <label><i>Scan de la première page du passeport</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="pjcarteconsulaire" />
                        <label><i>Scan de la carte (Recto et Verso)</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE <span style="color:red">*</span></label>
                    <div class="col-sm-7">
                        <input class="form-control @error('pjcartepresse') is-invalid @enderror" id="pjcartepresse" type="file" name="pjcartepresse" value="{{ old('pjcartepresse') }}" required>
                        @error('pjcartepresse')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
						<label><i>Scan de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                <input type="hidden" value="{{$maxid}}" name="idcorrespondant">
                 <input type="hidden" value="correspondant" name="type">
            </div>
        </div>
    </div>

    <p></p>

    
    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">CONTINUER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
</body>
@endsection
