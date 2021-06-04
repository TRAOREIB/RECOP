<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Demandeur;
use App\Models\Accreditation;
use App\Http\Controllers\AccreditationController;
use Illuminate\Support\Facades\Session;

// AJOUT 01/06
use App\User;
use App\Http\Controllers\Auth\RegisterController;



class DemandeurController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 // DEBUT AJOUT DU 01/06/2021
	//protected $piecesjointes;
    protected $enreguser;
    //protected $accreditation;
    protected $accredi;
    protected $demande;
    protected $users;
    protected $user;
    protected $demandeur;

    public function __construct(Demandeur $dem) {
        $this->demandeur = new Repository($dem);
        Session::put("pj", "");
		// AJOUT 01/06/2021
		$this->users = new User();
        $this->user = new Repository($this->users);
		$this->enreguser = new RegisterController();
		//FIN
		//
		 $this->accredi = new Accreditation();
		 $this->accreditation = new AccreditationController($this->accredi);
		
    }

    public function index() {
        $alldemandeur = $this->demandeur->all();
        return view('demandeur.ajout_demandeur', compact('alldemandeur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
		
		// Session::forget pour forcer l'oublie des sessions
		
				/*Session::forget("name");
				Session::forget("email");
				Session::forget("identifiant");*/
		
		Session::put("name", "$nom $prenom");
        Session::put("email", $email);
        Session::put("profil", "Demandeur"); 
		Session::put("identifiant", $request->identifiant);
		Session::put("pj","demandeur");
		$nameconcat=session('name');
		$request->name=$nameconcat;
		
		//Enregistrement du demandeur
		$this->demandeur->create($request->only($this->demandeur->getModel()->fillable));
		$maxiddemandeur = $this->demandeur->max("iddemandeur");
		Session::put("iddemandeur", $maxiddemandeur);
		
				
		//Enregistrement de l'utilisateur
			$this->enreguser->register($request);  
			
		//Recuperer l'id de l'utilisateur pour mettre à jour dans demandeur
         $maxiduser =$this->user->max("id");
		
		//echo session("id");
		
        //declaration d'une session pour prendre en compte l'id de l'utilisateur
        Session::put("iduser",$maxiduser);
		//echo session("iduser");

        //mise a jour de la colonne actif à true pour le demandeur
         $request->actif = "true";
		
		 //mise a jour de la table demandeur

         $this->demandeur->update($request->only($this->demandeur->getModel()->fillable),$maxiddemandeur);
		 
        /*Retourne le formulaire de demande d'une accréditation*/
		//return $this->accreditation->index($request->iddemandeur);
		return view('accreditation.ajout_accreditation',compact("maxiddemandeur","request"));
   		
         
		
		
		
		
		
		
		
		
		
		
		
		
        
	/*AJOUT 01/06/2021	
		 // Création du compte d'utilisateur
        $this->enreguser->register($request);
        //Recuperer l'id de l'utilisateur pour mettre à jour dans demandeur
        $maxid = $this->user->max("id");
        //declaration d'une session pour prendre en compte l'id de l'utilisateur
        Session::put("iduser", $maxid);
        //   $request->iduser=$maxid;
        $request->actif = "true";
	 FIN	*/
		
		
		//return $this->accreditation->indexpjaccreditation($request->iddemandeur);
		
		//return view('demandeur.ajout_demandeur_suite', compact("maxid", "request"));
		
		//return view('accreditation.ajout_accreditation', compact("maxid", "request"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($iddemandeur) {
        //
    }
	public function listedemandeur()
    {
        //
		$alldemandeur=$this->demandeur->all();
    return view('demandeur.liste_demandeur',compact('alldemandeur'));
	}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($iddemandeur) {
        //
        $editdemandeur = $this->demandeur->show($iddemandeur);
        return view('demandeur.modif_demandeur', compact('editdemandeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $iddemandeur) {
        //
        $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), $iddemandeur);
       // return view('demandeur.liste_demandeur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($iddemandeur) {
        //
        $this->demandeur->delete($iddemandeur);
        return $this->index();
    }

}
