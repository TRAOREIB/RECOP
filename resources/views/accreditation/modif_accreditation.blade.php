@extends('tprecop.template')
@section('contenu')
<br> 
	<div class="text-center">
  		<h2> MODIFICATION DE L'ACCREDITATION</h2>
 	</div>
     <div class="ligne_separe_titre"></div>
    <br>
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{ route('accreditation.update',[$editaccreditation->idaccreditation]) }}" enctype="multipart/form-data" >
			{{ method_field('PUT')}}
			{{ csrf_field() }}	
			<div class="col-sm-12">  <!-- Debut du Bloc -->
				<div class="card"> 
					<div class=" card text-center card-header">SUJET</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="titreevenement">TITRE:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="titreevenement" name="titreevenement" value="{{$editaccreditation->titreevenement}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="lieuevenement">LIEU:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="lieuevenement" name="lieuevenement" value="{{$editaccreditation->lieuevenement}}">
							</div>
						</div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedebut">DATE DE DEBUT</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datedebut" name="datedebut" value="{{$editaccreditation->datedebut}}">
                                </div>
                         </div>
						 <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datefin">DATE DE FIN</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datefin" name="datefin" value="{{$editaccreditation->datefin}}">
                                </div>
                         </div>                       
					</div>
				</div>
                <p></p>
				<div class="card"> 
                    <div class=" card text-center card-header">TRANSPORT</div>
                        <div class="card-body">
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">MOYEN DE TRANPORT</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="moyentransport" type="text" name="moyentransport" value="{{$editaccreditation->moyentransport}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="immatriculation" class="col-sm-4 col-form-label">IMMATRICULATION</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="immatriculation" type="text" name="immatriculation" value="{{$editaccreditation->immatriculation}}"/>
                                </div>
                        </div>                    
                    </div>
                </div>
                <p></p>
                <div class="card"> 
					<div class=" card text-center card-header">MEMBRES DE L'EQUIPE</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" name="membresequipe" rows="8"> {{$editaccreditation->membresequipe}} </textarea>
                     </div>
                            
                    </div> 
                </div>
                <p></p> 
				<div class="card"> 
					<div class=" card text-center card-header">LISTE DU MATERIEL</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3">{{$editaccreditation->listemateriel}}</textarea>
                                </div>
                    </div> 
                </div>
    				
			</div>
		<div class="text-center">
            <button class="btn btn-primary" type="submit">ENREGISTRER</button>
	  		<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
@endsection