<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Demandeur;
use App\Models\Correspondant;
use App\Models\Region;
use App\Models\Accreditation;
use App\Models\PiecesJointes;
use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\PiecesJointesController;
use Illuminate\Support\Facades\Session;
use App\Repositories\RepositoryVue;
use Illuminate\Support\Facades\Auth;
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
    protected $accredi;
    protected $demande;
    protected $users;
    protected $user;
    protected $demandeur;
    protected $region;
    protected $correspondant;
    protected $vue = 'vueaccrediregion';
    protected $vueaccrediregion;
    protected $accreditation;
    protected $pjcontroller;

    public function __construct(Demandeur $dem) {
        $this->demandeur = new Repository($dem);
        Session::put("pj", "");
        // AJOUT 01/06/2021
        $this->users = new User();
        $this->user = new Repository($this->users);
        $this->enreguser = new RegisterController();
        $reg = new Region();
        $this->region = new Repository($reg);
        //FIN
        //
        $this->accredi = new Accreditation();
        $this->accreditation = new AccreditationController($this->accredi);
        $this->correspondant = new Repository(new Correspondant());
        $this->vueaccrediregion = new RepositoryVue();
        // $this->accreditation=new 
    }

    public function index() {
        //vider les variables sessions de controle d'existence du demandeur et du correspondant bien avant une nouvelle operation
        Session::forget("actficorrespondant");
        Session::forget("actifdemandeur");
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
        $email = $request->mail;
        //Recuperation de toutes les regions
        $allregions = $this->region->all();

        Session::put("name", "$nom $prenom");
        Session::put("email", $email);
        Session::put("profil", "Enregistre");
        Session::put("identifiant", $request->identifiant);
        Session::put("pj", "demandeur");
        $nameconcat = session('name');
        $request->name = $nameconcat;

        //Enregistrement du demandeur
        $this->demandeur->create($request->only($this->demandeur->getModel()->fillable));
        $maxiddemandeur = $this->demandeur->max("iddemandeur");
        Session::put("iddemandeur", $maxiddemandeur);
        //Enregistrement de l'utilisateur
        $this->enreguser->register($request);
        //Recuperer l'id de l'utilisateur pour mettre à jour dans demandeur
        $maxiduser = $this->user->max("id");
        //echo session("id");
        //declaration d'une session pour prendre en compte l'id de l'utilisateur
        Session::put("iduser", $maxiduser);

        $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), $maxiddemandeur);
        Session::put("actifcorrespondant", "true");
        //Enregistrement des informations pour une demande potentielle d'accreditation
        $this->correspondant->create($request->only($this->correspondant->getModel()->fillable));
        $maxidcorrespondant = $this->correspondant->max("idcorrespondant");
        Session::put("idcorrespondant", $maxidcorrespondant);
        //Gestion de l'Enregistrement dans demandeur
        //mise a jour de la table demandeur
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), session("idcorrespondant"));
        //la variable test de controle pour gerer l'ajout des accreditations par region
        $test = $request->test;
        $idaccreditation = '';
      
        Session::put("type", "demandeur");
        return view('accreditation.ajout_accreditation', compact("maxiddemandeur", "request", "allregions", "test", "idaccreditation"));

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

    public function listedemandeur() {
        //
        $alldemandeur = $this->demandeur->all();
        return view('demandeur.liste_demandeur', compact('alldemandeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $iddemandeur) {
        //
        $idcorrespondant = $request->idcorrespondant;
        $editdemandeur = $this->demandeur->show($iddemandeur);
        return view('demandeur.modif_demandeur', compact('editdemandeur', 'idcorrespondant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $iddemandeur) {
        $idutilisateur = Auth::id();
        //Mise à jour des informations dans update
        Session::put("name", $request->nom . " " . $request->prenom);
        //Faire un update dans le demandeur
        $idcorrespondant = $request->idcorrespondant;
        $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), $iddemandeur);
        //Faire un update dans le correspondant
       // echo "le id de correspondant " . $request->idcorrespondant;
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $idcorrespondant);
        //Faire un update dans users aussi pour prendre en compte le nom
        $this->user->update($request->only($this->user->getModel()->fillable), $idutilisateur);
        // return view('demandeur.liste_demandeur');
        //Retourner dans la fonction des details pour les afficher
        $request->idaccreditation = session("monidaccreditation");
        $request->iduser = session("moniduser");
        $request->iddemandeur = session("moniddemandeur");
        $request->idcorrespondant = session("monidcorrespondant");
        return $this->accreditation->detailsaccreditation($request);
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

    
     public function devenirdemandeur() {
        //Renseigner le type de la personne qui enregistre la nouvelle demande d'accreditation
      //  Session::put("type", "demandeur"); 
        return view("correspondant.correspondant_demandeur");
    }
    
    public function storenouvdemandeur(Request $request){
         $id = Auth::id();
         $allregions = $this->region->all();
         $test=0;
         $idaccreditation = '';
        Session::put("iduser", $id);
        //Selectionner le id du correspondant
        $demandeur = $this->demandeur->showdemandeurinactif($id);
        //recuperation de l'id du correspondant
        foreach ($demandeur as $dem) {
            $iddemandeur = $dem->iddemandeur;
        }
        if($demandeur=="[]"){
            $ledemandeur=$this->demandeur->showdemandeur($id);
            foreach($ledemandeur as $dem){
                $iddemandeur=$dem->iddemandeur;
            }
        }
        //Mettre le id demandeur dans une variable session
         Session::put("iddemandeur",$iddemandeur);
        //faire un update dans correspondant
        $this->demandeur->update($request->only($this->correspondant->getModel()->fillable), $iddemandeur);
        return view("demandeur.nouv_accreditation", compact("iddemandeur","allregions","test","idaccreditation"));
    }
    
     public function strorenouvdemandeurpj(Request $request) {
       echo "on arrive bien par la";
        //ajout des pieces jointes
        Session::put("pj", "true");
        Session::put("type", "demandeur");
      //  Session::put("idcorrespondant", $request->idcorrespondant);
        $this->pjcontroller = new PiecesJointesController(new PiecesJointes());
        return $this->pjcontroller->store($request);
    }

   
}
