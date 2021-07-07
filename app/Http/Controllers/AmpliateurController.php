<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use App\Repositories\RepositoryVue;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\PiecesJointes;
use App\Models\Ampliateur;
use App\Models\Region;
use App\Models\AccrediRegion;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AmpliateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $vuecorrespondant = "vuecorrespondant";
    protected $vue = 'vueaccreditation';
    protected $vue2 = 'vueaccrediregion';
    protected $vuemessage = 'vueinfoampliateur';
    protected $correspondantvue;
    protected $accreditation;
    protected $correspondant;
    protected $piecesjointes;
    protected $ampliateur;
    protected $amplivue;

    public function __construct()
    {

        $this->correspondantvue = new RepositoryVue();
        $this->accreditation = new Repository(new Accreditation());
        //    $this->correspondant = new Repository(new Correspondant());
        $this->piecesjointes = new Repository(new PiecesJointes());
        $this->demandeur = new Repository(new Demandeur());
        $this->vueaccreditation = new RepositoryVue();
        $this->vueaccrediregion = new RepositoryVue();
        $this->amplivue = new RepositoryVue();
        $this->ampliateur = new Repository(new Ampliateur());
    }

    public function index()
    {
        $datevalider = date("D, d M Y H:i:s");
        $accreditations = $this->accreditation->showaccreditationcoordonateur();
        return view('ampliateur.liste_demande', compact("accreditations", "datevalider"));
    }

    public function formCommenter(Request $request)
    {
        $iduser = Auth::id();
        $idaccreditation = $request->idaccreditation;
        return view("ampliateur.ajout_information", compact("iduser", "idaccreditation"));
    }

    public function detailsaccreditation(Request $request)
    {

        $idaccreditation = $request->idaccreditation;
        $iduser = $request->iduser;
        $iddemandeur = $request->iddemandeur;
        $idcorrespondant = $request->idcorrespondant;
        $valider = $request->valider;
        // Mettre Toutes les données identifiant dans des variables session
        Session::put("monidaccreditation", $idaccreditation);
        Session::put("moniduser", $iduser);
        Session::put("moniddemandeur", $iddemandeur);
        Session::put("monidcorrespondant", $idcorrespondant);
        //Envoyer test à zero

        $demandeurs = $this->demandeur->showinfodemandeur($iddemandeur);
        $monaccreditation = $this->accreditation->showinfoaccreditation($idaccreditation);
        $accreditations = $this->vueaccrediregion->showvue($this->vue2, $idaccreditation);
        $piecesjointes = $this->piecesjointes->showinfopj($idaccreditation);
        //la date du transfer
        $datevalider = date("D, d M Y H:i:s");

        return view("ampliateur.details_accreditation", compact("demandeurs", "accreditations", "datevalider", "piecesjointes", "monaccreditation", "idaccreditation", "iddemandeur", "iduser", "idcorrespondant", "valider"));
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
    public function store(Request $request)
    {

        //Enregsitrer dans mediacorrespondant pour avoir l'historique de toutes les demandes de correspondances de la personne
        $this->ampliateur->create($request->only($this->ampliateur->getModel()->fillable));
        return $this->index();
    }

    public function listeMessages()
    {
        $iduser = Auth::id();
        $listemessages = $this->amplivue->showMessagesAll($this->vuemessage, $iduser);
        return view("ampliateur.liste_messages", compact("listemessages"));
    }

    public function formModifMessage(Request $request)
    {
        $iduser = Auth::id();
        $idaccreditation = $request->idaccreditation;
        $message = $this->amplivue->showMessagesByAccreditation($this->vuemessage, $iduser, $idaccreditation);
        return view("ampliateur.modif_message", compact("message", "idaccreditation", "iduser"));
    }

    public function allMessages(Request $request)
    {
        $idaccreditation = $request->idaccreditation;
        $listeaccreditation=$this->accreditation->show($idaccreditation);
        $iddemandeur=$listeaccreditation->iddemandeur;
        $lesmessages = $this->amplivue->showAllMessagesByAccreditation($this->vuemessage, $idaccreditation);
        return view("ampliateur.tous_messages", compact("lesmessages","iddemandeur"));
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
    public function edit($id)
    {
        //
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
    }

    public function modifierMessage(Request $request)
    {
        $id = $request->id;
        $iduser = $request->iduser;
        $this->ampliateur->update($request->only($this->ampliateur->getModel()->fillable), $id);
        return $this->listeMessages();
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
    }
}
