<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Repositories\RepositoryVue;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\PiecesJointes;
use App\Models\Region;
use App\Models\AccrediRegion;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SujetRequest;

class AccreditationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $accreditation;
    protected $vue = 'vueaccreditation';
    protected $vue2 = 'vueaccrediregion';
    protected $vueaccreditation;
    protected $vueaccrediregion;
    protected $region;
    protected $vuerecherche;
    protected $accrediregion;
    protected $demandeur;
    protected $piecesjointes;

    public function __construct(Accreditation $accre)
    {
        $reg = new Region();
        $acregion = new AccrediRegion();
        $this->vuerecherche = new RepositoryVue();
        $this->accreditation = new Repository($accre);
        $this->region = new Repository($reg);
        $this->accrediregion = new Repository($acregion);
        $this->vueaccreditation = new RepositoryVue();
        $this->vueaccrediregion = new RepositoryVue();
        $this->demandeur = new Repository(new Demandeur());
        $this->piecesjointes = new Repository(new PiecesJointes);
    }

    public function index()
    {
        // $allregion = $this->region->all();
        $allregions = $this->region->all();
        return view('accreditation.ajout_accreditation', compact("allregions"));

        //return view('accreditation.ajout_accreditation',compact('allregion'));
    }

    public function rechercheaccredi(Request $request)
    {
        $allregion = $this->region->all();
        $allaccreditation = $this->vuerecherche->rechercheaccredi($this->vue2, $request->nomregion);
        $regionchoisi = $request->nomregion;
        return view('recherche.recherchelieuaccreditation', compact('allaccreditation', 'allregion', 'regionchoisi'));
    }

    public function indexpjaccreditation()
    {
        //      
        $allregions = $this->region->all();
        return view('accreditation.ajout_accreditation', compact('allregions'));
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

    public function listeaccreditation()
    {
        //
        //$allaccreditation=$this->accreditation->all();
        $allaccreditation = $this->vueaccreditation->allvue($this->vue);
        return view('accreditation.liste_accreditation', compact('allaccreditation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SujetRequest $request)
    {
        $allregions = $this->region->all();
        echo $request->test;
        if ($request->test == 0) {
            echo "il le fait dans le store et bien";
            $this->accreditation->create($request->only($this->accreditation->getModel()->fillable));
            $maxidaccreditation = $this->accreditation->max("idaccreditation");
            Session::put("idaccreditation", $maxidaccreditation);
         //   echo "le id accreditation " . session("idaccreditation");
        }
        $test = 1;
       // echo $test;
        $this->accrediregion->create($request->only($this->accrediregion->getModel()->fillable));
        // $this->saveRegions($request);
        // echo session("idaccreditation");
        $idaccreditation = session("idaccreditation");
        $listesujet = $this->vueaccrediregion->showvue($this->vue2, session("idaccreditation"));

       // echo "voila le verificateur recherche " . $request->nouveaudemandeur;
        if (empty($request->nouveaudemandeur)) {
         //   echo "on arrive bien par la c'est un nouveau demandeur ";
            //Renvoyer le id du demandeur;
            $iduser = Auth::id();
            $ledemandeur = $this->demandeur->showdemandeur($iduser);
            foreach ($ledemandeur as $demande) {
                $iddemandeur = $demande->iddemandeur;
            }
           /*  echo $listesujet;
            echo $idaccreditation;
            echo $test; */
            return view('demandeur.nouv_accreditation', compact("test", "allregions", "listesujet", "idaccreditation", "iddemandeur"));
        } else {
            return view('accreditation.ajout_accreditation', compact("test", "allregions", "listesujet", "idaccreditation"));
        }
    }

    public function modifsujets(Request $request)
    {

       // echo "la valeure de test ici ---" . $request->test;
        $allregions = $this->region->all();
        $editaccreditation = $this->accreditation->show($request->idaccreditation);
        if ($request->test == 0) {
            // echo "il entre encore dans le test ---";
            $this->accreditation->create($request->only($this->accreditation->getModel()->fillable));
            $maxidaccreditation = $this->accreditation->max("idaccreditation");
            Session::put("idaccreditation", $maxidaccreditation);
        }
        $test = 1;

        $this->accrediregion->create($request->only($this->accrediregion->getModel()->fillable));
        // $this->saveRegions($request);
        // echo session("idaccreditation");
        $idaccreditation = $request->idaccreditation;
        $listesujet = $this->vueaccrediregion->showvue($this->vue2, $request->idaccreditation);
        return view('accreditation.modif_accreditation', compact("test", "allregions", "listesujet", "idaccreditation", "editaccreditation"));
    }

    public function retirerSujet(Request $request)
    {
        $allregions = $this->region->all();
        $test = 1;
        $this->accrediregion->delete($request->idaccrediregion);
        $listesujet = $this->vueaccrediregion->showvue($this->vue2, session("idaccreditation"));
        //        echo session("idaccreditation");
        //        echo $listesujet;
        $idaccreditation = session("idaccreditation");
        if (empty($request->nouveaudemandeur)) {
            $iddemandeur = session("iddemandeur");
            return view('demandeur.nouv_accreditation', compact("test", "allregions", "listesujet", "idaccreditation", "iddemandeur"));
        } else {
            return view('accreditation.ajout_accreditation', compact("test", "allregions", "listesujet", "idaccreditation"));
        }
    }

    public function retirerSujetModif(Request $request)
    {

        $allregions = $this->region->all();
        $test = 1;
        $idaccreditation = $request->idaccreditation;
        $this->accrediregion->delete($request->idaccrediregion);
        $listesujet = $this->vueaccrediregion->showvue($this->vue2, $idaccreditation);
        $editaccreditation = $this->accreditation->show($request->idaccreditation);
        return view('accreditation.modif_accreditation', compact("test", "allregions", "listesujet", "idaccreditation", "editaccreditation"));
    } 

    public function saveRegions(Request $request)
    {
 
        // echo session('idaccreditation');
        Session::put("accrediregion", "vrai");
        $regions = $request->region;
        $i = 0;
        if ($regions != null) {
            foreach ($regions as $reg) {
                $i++;
                if ($i != 1) {

                    Session::put("idregion", $reg);
                    //   echo session("idaccreditation");
                    $this->accrediregion->create($request->only($this->accrediregion->getModel()->fillable));
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idaccreditation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $idaccreditation)
    {
        $test = $request->test;
        $allregions = $this->region->all();
        $regions = $this->vueaccreditation->showvue($this->vue, $idaccreditation);
        $editaccreditation = $this->accreditation->show($idaccreditation);
        if ($editaccreditation->idaccreditation != null) {
            $test = 1;
        } 
        // echo "voila l'idaccreditation ".$idaccreditation ; 
        //echo "je suis dans le test " . $test;
    
         $listesujet = $this->vueaccrediregion->showvue($this->vue2, $idaccreditation);
         return view('accreditation.modif_accreditation', compact('editaccreditation', 'regions', 'allregions', 'test', 'idaccreditation', 'listesujet'));
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
        //echo $idaccreditation;
        // echo $piecesjointes;

        return view("accreditation.details_accreditation", compact("demandeurs", "accreditations", "piecesjointes", "monaccreditation", "idaccreditation", "iddemandeur", "iduser", "idcorrespondant"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idaccreditation)
    {
        if (isset($request->modifaccreditation)) {
            $this->accreditation->update($request->only($this->accreditation->getModel()->fillable), $idaccreditation);
            $request->idaccreditation = session("monidaccreditation");
            $request->iduser = session("moniduser");
            $request->iddemandeur = session("moniddemandeur");
            $request->idcorrespondant = session("monidcorrespondant");
            return $this->detailsaccreditation($request);

            //    return view('accreditation.modif_accreditation');
        } else {
            $this->accreditation->update($request->only($this->accreditation->getModel()->fillable), $idaccreditation);
           // echo "le demandeur encore " . $request->nouveaudemandeur;
            if (empty($request->nouveaudemandeur)) {
                return view('demandeur.pj_accreditation');
            } else {
                return view('accreditation.pj_accreditation');
            }
        }
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
