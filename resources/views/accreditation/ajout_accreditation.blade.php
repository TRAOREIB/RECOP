<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="text-center">
  		<h2> NOUVEAU EVENEMENT </h2>
 	</div>
	<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="{{ route('accreditation.store') }}" enctype="multipart/form-data" >
			{{ method_field('POST')}}
			{{ csrf_field() }}	
		<div class="row">
			<div class="col-sm-6">  <!-- Bloc 1-->
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
				<div class="card"> <div class=" card text-center card-header">TRANSPORT</div>
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
			</div>
			<div class="col-sm-6">  <!-- Bloc 2-->
                <div class="card"> 
					<div class=" card text-center card-header">MEMBRES DE L'EQUIPE</div>
                    <div class="card-body">
							
                                <div class="col-sm-14">
                                <textarea class="form-control" id="membresequipe" rows="8"></textarea>
                                </div>
                            
                    </div> 
                </div> 
				<div class="card"> 
					<div class=" card text-center card-header">LISTE DU MATERIEL</div>
                    <div class="card-body">
                                <div class="col-sm-14">
                                <textarea class="form-control" id="listemateriel" name="listemateriel" rows="3"></textarea>
                                </div>
                    </div> 
                </div>				
			</div>
            </div>
		<div class="text-center">
	  		<button class="btn btn-primary" type="submit">AJOUTER</button>
      	</div>
	</form>
</body>
</html>