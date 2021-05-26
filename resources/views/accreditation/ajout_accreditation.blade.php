@extends('tprecop.template')
@section('contenu')
<br> 
	<div class="text-center">
  		<h2> NOUVEL EVENEMENT </h2>
 	</div>
     <div class="ligne_separe_titre"></div>
    <br>
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{ route('accreditation.store') }}" enctype="multipart/form-data" >
			{{ method_field('POST')}}
			{{ csrf_field() }}	
			<div class="col-sm-12">  <!-- Debut du Bloc -->
				<div class="card"> 
					<div class=" card text-center card-header">EVENEMENT</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="titreevenement">TITRE:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="titreevenement" placeholder="Entrer le nom de l'evenement" name="titreevenement">
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
            <input type="hidden" value="{{$maxid}}" name="iddemandeur">    				
			</div>
		<div class="text-center">
	  		<button class="btn btn-primary" type="submit">AJOUTER</button>
      	</div>
	</form>
@endsection