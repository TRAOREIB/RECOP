@extends('tprecop.template')
@section('contenu')
<br> 
	<div class="text-center">
  		<h2> SUJET A COUVRIR </h2>
 	</div>
     <div class="ligne_separe_titre"></div>
    <br>
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{ route('accreditation.store') }}" enctype="multipart/form-data" >
			{{ method_field('POST')}}
			{{ csrf_field() }}	
			<div class="col-sm-12">  <!-- Debut du Bloc -->
				<div class="card"> 
					<div class=" card text-center card-header">SUJET</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="titreevenement">TITRES:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="titreevenement" placeholder="Entrer le titre de l'evenement" name="titreevenement">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="lieuevenement">LIEU:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="lieuevenement" placeholder="Entrer le lieu" name="lieuevenement">
							</div>
						</div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedebut">DATE DE DEBUT</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datedebut" placeholder="Entrer " name="datedebut">
                                </div>
                         </div>
						 <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datefin">DATE DE FIN</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="datefin" placeholder="Entrer " name="datefin">
                                </div>
                         </div>                       
					</div>
				</div>
                <p></p>
                <div class="card"> 
                    <div class=" card text-center card-header">REGION (S)</div>
                        <div class="card-body">
                         
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">REGION 1</label>
                                    <div class="col-sm-4  col-md-4"> 
                                        <select class="form-control" name="region1"> 
                                        <option selected>choisir la region</option>
                                            @foreach($allregion as $reg)                                    
                                        <option value="{{$reg->nomregion }}">{{$reg->nomregion }}</option> 
                                             @endforeach 
                                        <small class="text-danger">{{ $errors->first('nomregion',':message') }}</small> 
                                        </select> 
                                    </div>       
                                </div>
                               <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">REGION 2</label>
                                      <div class="col-sm-4  col-md-4"> 
                                        <select class="form-control" name="region2"> 
                                        <option selected>choisir la region</option>
                                            @foreach($allregion as $reg)                                    
                                        <option value="{{$reg->nomregion }}">{{$reg->nomregion }}</option> 
                                             @endforeach 
                                        <small class="text-danger">{{ $errors->first('nomregion',':message') }}</small> 
                                        </select> 
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">REGION 3</label>
                                    <div class="col-sm-4  col-md-4"> 
                                        <select class="form-control" name="region3"> 
                                        <option selected>choisir la region</option>
                                            @foreach($allregion as $reg)                                    
                                        <option value="{{$reg->nomregion }}">{{$reg->nomregion }}</option> 
                                             @endforeach 
                                        <small class="text-danger">{{ $errors->first('nomregion',':message') }}</small> 
                                        </select> 
                                    </div> 
                                </div>
                                 <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">REGION 4</label>
                                   <div class="col-sm-4  col-md-4"> 
                                        <select class="form-control" name="region4"> 
                                        <option selected>choisir la region</option>
                                            @foreach($allregion as $reg)                                    
                                        <option value="{{$reg->nomregion }}">{{$reg->nomregion }}</option> 
                                             @endforeach 
                                        <small class="text-danger">{{ $errors->first('nomregion',':message') }}</small> 
                                        </select> 
                                    </div> 
                                </div>
                                 <div class="form-group row">
                                    <label for="moyentransport" class="col-sm-4 col-form-label">REGION 5</label>
                                  <div class="col-sm-4  col-md-4"> 
                                        <select class="form-control" name="region5"> 
                                        <option selected>choisir la region</option>
                                            @foreach($allregion as $reg)                                    
                                        <option value="{{$reg->nomregion }}">{{$reg->nomregion }}</option> 
                                             @endforeach 
                                        <small class="text-danger">{{ $errors->first('nomregion',':message') }}</small> 
                                        </select> 
                                    </div> 
                                </div>
                               
							   <div class="form-group row">
                                    <div class="col-sm-4 text-center">
                                    <input  id="allregion" type="checkbox" name="allregion"/>
                                    <label for="allregion">TOUTES LES REGIONS</label>
                                    </div>
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
                                        <input class="form-control" id="moyentransport" type="text" name="moyentransport"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="immatriculation" class="col-sm-4 col-form-label">IMMATRICULATION</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="immatriculation" type="text" name="immatriculation"/>
                                </div>
                        </div>                    
                    </div>
                </div>
                <p></p>
                <div class="card"> 
					<div class=" card text-center card-header">MEMBRES DE L'EQUIPE</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" name="membresequipe" rows="8"></textarea>
                     </div>
                            
                    </div> 
                </div>
                <p></p> 
				<div class="card"> 
					<div class=" card text-center card-header">LISTE DU MATERIEL</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3"></textarea>
                                </div>
                    </div> 
                </div>
    				
			</div>
		<div class="text-center">
            <button class="btn btn-primary" type="submit">CONTINUER</button>
	  		<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
@endsection