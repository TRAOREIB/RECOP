<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Correspondant;
use App\Models\Demandeur;
use App\Models\Region;
use App\Models\PiecesJointes;
use App\Http\Controllers\PiecesJointesController;
use App\Models\MediaCorrespondant;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Requests\CorrespondantRequest;
use App\Http\Controllers\CaptchaController;

class CorrespondantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $correspondant;
    protected $demandeur;
    protected $users;
    protected $user;
    protected $enreguser;
    protected $piecesjointes;
    protected $mediacorrespondant;
    protected $region;
    protected $pjcontroller;
    protected $captcha;

    public function __construct(Correspondant $corresp)
    {
        $this->correspondant = new Repository($corresp);
        $this->demandeur = new Repository(new Demandeur());
        $this->users = new User();
        $this->user = new Repository($this->users);
        $this->enreguser = new RegisterController();
        $this->piecesjointes = new Repository(new PiecesJointes());
        $this->mediacorrespondant = new Repository(new MediaCorrespondant());
        $this->region = new Repository(new Region());
        $this->captcha = new CaptchaController();
    }

    public function index(Request $request)
    {
        //vider les variables sessions de controle d'existence du demandeur et du correspondant bien avant une nouvelle operation
        Session::forget("actifcorrespondant");
        Session::forget("actifdemandeur");

        $allregions = $this->region->all();
        $typecorrespondant = $request->typecorrespondant;
        $allcorrespondant = $this->correspondant->all();
        
        return view('correspondant.ajout_correspondant', compact('allcorrespondant', 'typecorrespondant', 'allregions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CorrespondantRequest  $request)
    {

        $nom = $request->nom;
        $prenom = $request->prenom;
        Session::put("name", "$nom $prenom");
        Session::put("email", $request->mail);
        Session::put("profil", "Enregistre");
        Session::put("pj", "correspondant");
        Session::put('identifiant', $request->identifiant);


        //enregistrement du correspondant
        $this->correspondant->create($request->only($this->correspondant->getModel()->fillable));

        $maxid = $this->correspondant->max("idcorrespondant");
        //mettre l' id du correspondant dans une variable session
        Session::put("idcorrespondant", $maxid);

        //echo $maxid;

        //enregistrer l'utilisateur dans les users
        $this->enreguser->register($request);
        //Recuperation de iduser   
        $maxiduser = $this->user->max("id");

        //declaration d'une session pour prendre en compte l'id de l'utilisateur
        Session::put("iduser", $maxiduser);

        //Enregsitrer dans mediacorrespondant pour avoir l'historique de toutes les demandes de correspondances de la personne
        $this->mediacorrespondant->create($request->only($this->mediacorrespondant->getModel()->fillable));
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), session("idcorrespondant"));
        Session::put("actifdemandeur", "true");
        //Enregistrement des informations pour une demande potentielle d'accreditation
        $this->demandeur->create($request->only($this->demandeur->getModel()->fillable));
        $maxiddemandeur = $this->demandeur->max("iddemandeur");
        Session::put("iddemandeur", $maxiddemandeur);
        Session::put("type", "correspondant");

        $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), session("iddemandeur"));
        return view('correspondant.ajout_correspondant_suite', compact("maxid", "request"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $idcorrespondant = $request->idcorrespondant;
        $idpiecesjointes = $request->idpiecesjointes;
        $correspondant = $this->correspondant->show($idcorrespondant);
        return view("correspondant.choix_correspondant_modif", compact("correspondant", "idcorrespondant", "idpiecesjointes"));
        // return view("correspondant.modif_correspondant", compact("correspondant", "idcorrespondant", "idpiecesjointes"));
    }

    public function formModifCorrespondant(Request $request)
    {

        $idcorrespondant = $request->idcorrespondant;
        $idpiecesjointes = $request->idpiecesjointes;
        $correspondant = $this->correspondant->show($idcorrespondant);
        $typecorrespondant = $request->typecorrespondant;
        $allregions = $this->region->all();
        /*    echo "le correspondant ".$correspondant;
        echo "le id du correspondant ".$idcorrespondant; */
        return view("correspondant.modif_correspondant", compact("correspondant", "idcorrespondant", "idpiecesjointes", "typecorrespondant", "allregions"));
    }

    public function detailsCorrespondant(Request $request)
    {
        $iduser = Auth::id();
        $idpiecesjointes = null;
        $idcorrespondant = $request->idcorrespondant;
     //   echo "le id du correspondant";
        $piecesjointes = $this->piecesjointes->showinfopjcorrespondant($idcorrespondant);
        $editcorrespondant = $this->correspondant->show($idcorrespondant);
        foreach ($piecesjointes as $editpj) {
            $idpiecesjointes = $editpj->id;
        }

     //   echo $piecesjointes;
        return view('correspondant.details_correspondant', compact('editcorrespondant', 'piecesjointes', 'iduser', 'idpiecesjointes', 'idcorrespondant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //vider les champs des sessions actifcorrespondant et actifdemandeur
        Session::forget("actifcorrespondant");
        Session::forget("actifdemandeur");
        //
        $iduser = Auth::id();
        Session::put("name", $request->nom . " " . $request->prenom);
        //selection du demandeur
        $demandeur = $this->demandeur->showdemandeur($iduser);
        foreach ($demandeur as $dem) {
            $iddemandeur = $dem->iddemandeur;
        }
        //recuperation de l'id du demandeur
        $idpiecesjointes = $request->idpj;
        $idcorrespondant = $request->idcorrespondant;
        //Ajouter dans la table media correspondant pour l'historique
        $this->mediacorrespondant->create($request->only($this->mediacorrespondant->getModel()->fillable));
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $id);
        //update le demandeur
        $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), $iddemandeur);
        //faire un update de l'utilisateur
        $this->user->update($request->only($this->user->getModel()->fillable), $iduser);
        return $this->detailsCorrespondant($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->correspondant->delete($id);
        return $this->index();
    }

    public function choixCorrespondantDevenir()
    {
         //vider les variables sessions de controle d'existence du demandeur et du correspondant bien avant une nouvelle operation
       
        return view("demandeur.choix_devenircorrespondant");
    }

    public function devenirCorrespondant(Request $request)
    {
        //vider les variables sessions de controle d'existence du demandeur et du correspondant bien avant une nouvelle operation
        Session::forget("actifcorrespondant");
        Session::forget("actifdemandeur");

        $typecorrespondant = $request->typecorrespondant;
        $this->pjcontroller = new PiecesJointesController(new PiecesJointes());
        $iduser = Auth::id();
        $allregions = $this->region->all();
        return view("demandeur.demandeur_correspondant", compact("iduser", "allregions", "typecorrespondant"));
    }

    public function storenouvCorrespondant(Request $request)
    {

        //vider les variables sessions de controle d'existence du demandeur et du correspondant bien avant une nouvelle operation
        Session::forget("actifcorrespondant");
        Session::forget("actifdemandeur");
        $id = Auth::id();
        Session::put("iduser", $id);
        //Selectionner le id du correspondant
        $correspondant = $this->correspondant->showcorrespondantinactif($id);
        //recuperation de l'id du correspondant
        foreach ($correspondant as $corresp) {
            $idcorrespondant = $corresp->idcorrespondant;
        }
        //faire un update dans correspondant
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $idcorrespondant);
        return view("demandeur.pj_nouveaucorrespondant", compact("idcorrespondant"));
    }

    public function strorenouvcorrespondantpj(Request $request)
    {
      
        //  echo $request->idcorrespondant;
        //ajout des pieces jointes
        Session::put("pj", "true");
        Session::put("type", "correspondant");
        Session::put("idcorrespondant", $request->idcorrespondant);
        $this->pjcontroller = new PiecesJointesController(new PiecesJointes());
        return $this->pjcontroller->store($request);
    }
}
