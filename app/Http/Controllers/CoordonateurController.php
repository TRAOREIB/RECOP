<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use App\Repositories\RepositoryVue;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\PiecesJointes;
use App\Models\Region;
use App\Models\AccrediRegion;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CoordonateurController extends Controller
{

    protected $vuecorrespondant = "vuecorrespondant";
    protected $vue = 'vueaccreditation';
    protected $vue2 = 'vueaccrediregion';
    protected $correspondantvue;
    protected $accreditation;
    protected $correspondant;
    protected $piecesjointes;

    public function __construct()
    {

        $this->correspondantvue = new RepositoryVue();
        $this->accreditation = new Repository(new Accreditation());
        //    $this->correspondant = new Repository(new Correspondant());
        $this->piecesjointes = new Repository(new PiecesJointes());
        $this->demandeur = new Repository(new Demandeur());
        $this->vueaccreditation = new RepositoryVue();
        $this->vueaccrediregion = new RepositoryVue();
    }

    public function index()
    {
        $datevalider = date("D, d M Y H:i:s");
        $accreditations = $this->accreditation->showaccreditationcoordonateur();
        return view('coordonateur.liste_demande', compact("accreditations", "datevalider"));
    }

    public function detailsaccreditation(Request $request)
    {

        $idaccreditation = $request->idaccreditation;
        $iduser = $request->iduser;
        $iddemandeur = $request->iddemandeur;
        $idcorrespondant = $request->idcorrespondant;
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

        return view("coordonateur.details_accreditation", compact("demandeurs", "accreditations", "datevalider", "piecesjointes", "monaccreditation", "idaccreditation", "iddemandeur", "iduser", "idcorrespondant"));
    }

    public function validerdemande(Request $request)
    {
        $idaccreditation = $request->idaccreditation;
        $this->accreditation->update($request->only($this->accreditation->getModel()->fillable), $idaccreditation);
        //Retour à la liste avec le message
        $message = "la demande Numero $idaccreditation a ete validé";
        $datevalider = date("D, d M Y H:i:s");
        $accreditations = $this->accreditation->showaccreditationcoordonateur();

        return view('coordonateur.liste_demande', compact("accreditations", "message", "datevalider"));
    }

    public function invaliderdemande(Request $request)
    {
        $idaccreditation = $request->idaccreditation;
        $this->accreditation->update($request->only($this->accreditation->getModel()->fillable), $idaccreditation);
        //Retour à la liste avec le message
        $message = "la demande Numero $idaccreditation a ete invalidé";
        $accreditations = $this->accreditation->showaccreditationcoordonateur();
        $datevalider = date("D, d M Y H:i:s");
        return view('coordonateur.liste_demande', compact("accreditations", "message", "datevalider"));
    }

    public function recherchedemande(Request $request)
    {
        if ($request->etat == 'En cours') {
            $accreditations = $this->accreditation->showaccreditationcoordonateur();
            return view('coordonateur.liste_demande', compact("accreditations"));
        }
        if ($request->etat == 'Validée') {
            $accreditations = $this->accreditation->showaccreditationvalide();
            return view('coordonateur.liste_demande', compact("accreditations"));
        }
        if ($request->etat == 'Invalidée') {
            $accreditations = $this->accreditation->showaccreditationinvalide();
            return view('coordonateur.liste_demande', compact("accreditations"));
        }
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
        //
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
        //
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
