<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\PiecesJointes;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\Correspondant;
use App\User;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AccreditationController;
use Illuminate\Support\Facades\Session;

class PiecesJointesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $piecesjointes;
    protected $enreguser;
    protected $accreditation;
    protected $accredi;
    protected $demandeur;
    protected $demande;
    protected $correspond;
    protected $correspondant;
    protected $users;
    protected $user;

    public function __construct(PiecesJointes $pj) {
        $this->demande = new Demandeur();
        $this->demandeur = new Repository($this->demande);
        $this->correspond = new Correspondant();
        $this->correspondant = new Repository($this->correspond);
        $this->users = new User();
        $this->user = new Repository($this->users);
        $this->accredi = new Accreditation();
        $this->enreguser = new RegisterController();
        $this->piecesjointes = new Repository($pj);
        $this->accreditation = new AccreditationController($this->accredi);
    }

    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        Session::put("identifiant", $request->identifiant);
        Session::put("pj", "correspondant");
        //Recuperer l'id de du correspondant pour enregistrer dans piecesjointes
        $maxidcorrespondant = $this->correspondant->max("idcorrespondant");
        Session::put("idcorrespondant", $maxidcorrespondant);
        // recuperation du nom reel des fichiers dans les colonnes de la table pieces jointes

        $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
        //enregistrer l'utilisateur dans les users
        $this->enreguser->register($request);
<<<<<<< HEAD
         //Recuperer l'id de l'utilisateur pour mettre à jour dans correspondant
=======
        //Recuperer l'id de l'utilisateur pour mettre à jour dans demandeur
>>>>>>> b28a84b056198bab533a84aeee529357565e0226
        $maxiduser = $this->user->max("id");
        //declaration d'une session pour prendre en compte l'id de l'utilisateur
        Session::put("iduser", $maxiduser);
        //mise a jour de la colonne actif à true pour le correspondant
        $request->actif = "true";
        $this->savepiecesjointes($request);
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $request->idcorrespondant);
        return view("correspondant.message_correspondant");
//Sauvegarder les fichiers dans le serveur
        //Faire retourner le message de confirmation de l'enregistrement du correspondant
    }

    public function uploadDocs($monfile, $name) {
        $monfile->storeAs(config('documents.path'), $name, "public");
    }

    public function storepjaccreditation(Request $request) {
        $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
		
		$maxidpj = $this->piecesjointes->max("id");
		Session::put("idpiecesjointes", $maxidpj);
		
        // création variables sessions 28/05/2021

      //  Session::put("identifiant", $request->identifiant);

        Session::put("pj", "demandeur");
	
 
        //Recuperer l'id du demandeur pour mettre à jour dans piecesjointes
        $iddemandeur=session("iddemandeur");
		
		//Recuperer l'id de l'accreditation pour mettre à jour dans piecesjointes
        $idaccreditation=session("idaccreditation");
		
		//echo session("idaccreditation");
		
        
        //   $request->iduser=$maxid;
        $request->actif = "true";

        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $maxidpj);
      
     return view('accreditation.message_accreditation');
    }

    public function savepiecesjointes(Request $request) {


        if (!empty($request->file('photo'))) {
            $nom = $request->photo->getClientOriginalName();
            $request->file('photo')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('cv'))) {
            $nom = $request->cv->getClientOriginalName();
            $request->file('cv')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('visamedia'))) {
            $nom = $request->visamedia->getClientOriginalName();
            $request->file('visamedia')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcnib'))) {
            $nom = $request->pjcnib->getClientOriginalName();
            $request->file('pjcnib')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjpasseport'))) {
            $nom = $request->pjpasseport->getClientOriginalName();
            $request->file('pjpasseport')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcarteconsulaire'))) {
            $nom = $request->pjcarteconsulaire->getClientOriginalName();
            $request->file('pjcarteconsulaire')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjpasseport'))) {
            $nom = $request->pjpasseport->getClientOriginalName();
            $request->file('pjpasseport')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcartepresse'))) {
            $nom = $request->pjcartepresse->getClientOriginalName();
            $request->file('pjcartepresse')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcnibperprev'))) {
            $nom = $request->pjcartepresse->getClientOriginalName();
            $request->file('pjcnibperprev')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('lettrerecommendation'))) {
            $nom = $request->lettrerecommendation->getClientOriginalName();
            $request->file('lettrerecommendation')->storeAs(config('documents.path'), $nom, "public");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
// Pieces Jointes Accreditation (pjaccreditation)


 public function showpjaccreditation($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpjaccreditation($id, Request $request)
    {
        //
		$editpjaccreditation = $this->piecesjointes->show($id);
			//echo $editpjaccreditation;
			//echo $id;
       return view('accreditation.modifpj_accreditation', compact('editpjaccreditation'));
			//echo $request->pjcnib;
			//echo $request->photo;
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


   public function update(Request $request, $id) {
        //
    $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $id);
   
	
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}