@extends('tprecop.template')
@section('contenu')
<br> 
	<div class="text-center">
<<<<<<< HEAD
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">NOUVEAU DEMANDEUR</label></b>
</div>
{{-- <div class="ligne_separe_titre"></div> --}}
<hr>
=======
  		<label style="font-family: fantasy;color: blue"> NOUVELLE ACCREDITATION </label>
 	</div>
<div class="ligne_separe_titre"></div>
>>>>>>> aa7591f8b64676a64976205d462754fb1eb26858
<br>	
	
	<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{ route('demandeur.store') }}" enctype="multipart/form-data">
				{{ method_field('POST')}}
				{{ csrf_field() }}	
			<div class="col-sm-12">  <!-- Bloc 1-->
				<div class="card"> 
					<div class=" card text-center card-header">IDENTITE DU DEMANDEUR</div>
					<div class="card-body">
                        <div class="form-group row">
							<label class="col-sm-3 col-form-label" for="nom">NOM:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nom" placeholder="Entrer le nom" name="nom">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="prenom" placeholder="Entrer le prenom" name="prenom">
							</div>
						</div>
                         <div class="form-group row">
                             <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                             <div class="col-sm-8">
								<input type="text" class="form-control" id="profession" placeholder="Entrer la profession " name="profession">
                             </div>
                         </div>
                         <div class="form-group row">
                            <label class="control-label col-sm-3" for="sexe">SEXE :</label>
                            <div class="col-sm-8">
									<select class="form-control" id="sexe" name="sexe">
                                        <option value="HOMME">HOMME</option>
                                        <option value="FEMME">FEMME</option>
                                    </select>
                            </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="datenaissance" placeholder="Entrer " name="datenaissance">
                                </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieunaissance" placeholder="Entrer " name="lieunaissance">
									
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nationalite" placeholder=" " name="nationalite">
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephone" placeholder=" " name="telephone">
                                </div>
						</div>
                                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="telephone">EMAIL :</label>
                                        <div class="col-sm-7">
                                        <input type="email" class="form-control" name="mail1">
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="lieuresidence" placeholder=" " name="lieuresidence">
									<label><i>La ville, le secteur, le quartier</i></label>
							   </div>
                        </div>
						<div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numcnib">N° CNIB:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="numcnib" placeholder=" " name="numcnib">
									<label><i>Numero de la Carte Nationale d'Identité Burkinabè</i></label>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="datedelivcnib" placeholder=" " name="datedelivcnib">
									<label><i>Date de delivrance de la CNIB</i></label>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="dateexpircnib" placeholder=" " name="dateexpircnib">
									<label><i>Date d'expiration de la CNIB</i></label>
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="numPasseport" placeholder=" " name="numPasseport">
									<label><i>Le numéro du passport</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="carteconsulaire">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE A PREVENIR:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="personneprevenir" placeholder=" " name="personneprevenir">
									<label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
								</div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE PERSONNE A PREVENIR:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telephonepersp" placeholder=" " name="telephonepersp">
                                </div>
                        </div> 
					</div>
				</div>				
			</div>		
<br>
			<div class="col-sm-12">  <!-- Bloc 2-->
                <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
                    <div class="card-body">
							<div class="form-group row">
                                <label for="organe" class="col-sm-4 col-form-label">NOM ORGANE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="organe" type="text" name="organe"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telorgane" class="col-sm-4 col-form-label">TELEPHONE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="telorgane" type="text" name="telorgane"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adressestruct" class="col-sm-4 col-form-label">ADRESSE</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="adressestruct" type="text" name="adressestruct" />
                                </div>
                            </div>
                    </div> 
                </div>
			</div>
<br>		
		<div class="text-center">	
            <button class="btn btn-primary" type="submit">CONTINUER</button>
			<button class="btn btn-primary" type="reset">ANNULER</button>
      	</div>
	</form>
<br><br>	
@endsection