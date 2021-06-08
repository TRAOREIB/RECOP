<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Repositories\RepositoryVue;
use App\Models\Accreditation;
use App\Models\Region;
use App\Models\AccrediRegion;
use Illuminate\Support\Facades\Session;

class AccreditationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $accreditation;
    protected $vue = 'vueaccreditation';
    protected $vueaccreditation;
    protected $region;
    protected $vuerecherche;
    protected $accrediregion;

    public function __construct(Accreditation $accre) {
        $reg = new Region();
        $acregion = new AccrediRegion();
        $this->vuerecherche = new RepositoryVue();
        $this->accreditation = new Repository($accre);
        $this->region = new Repository($reg);
        $this->accrediregion = new Repository($acregion);
        $this->vueaccreditation = new RepositoryVue();
    }

    public function index() {
// $allregion = $this->region->all();
        $allregions = $this->region->all();
        return view('accreditation.ajout_accreditation', compact("allregions"));

//return view('accreditation.ajout_accreditation',compact('allregion'));
    }

    public function rechercheaccredi(Request $request) {
        $allregion = $this->region->all();
        $allaccreditation = $this->vuerecherche->rechercheaccredi($this->vue, $request->nomregion);
        $regionchoisi = $request->nomregion;
        return view('recherche.recherchelieuaccreditation', compact('allaccreditation', 'allregion', 'regionchoisi'));
    }

    public function indexpjaccreditation() {
//      
        $allregions = $this->region->all();
        return view('accreditation.ajout_accreditation', compact('allregions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//
    }

    public function listeaccreditation() {
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
    public function store(Request $request) {
//  echo session('pj');     
//

        $this->accreditation->create($request->only($this->accreditation->getModel()->fillable));
        $maxidaccreditation = $this->accreditation->max("idaccreditation");
        Session::put("idaccreditation", $maxidaccreditation);
        $this->saveRegions($request);
        return view('accreditation.pj_accreditation');
    }

    public function saveRegions(Request $request) {

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
    public function show($idaccreditation) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idaccreditation) {
//
         $allregions = $this->region->all();
        $regions = $this->vueaccreditation->showvue($this->vue, $idaccreditation);
        $editaccreditation = $this->accreditation->show($idaccreditation);
        return view('accreditation.modif_accreditation', compact('editaccreditation', 'regions','allregions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idaccreditation) {

        //selection de la vue accreditation pour avoir les regions en fonction de l'accreditation choisie
        $allregions=$this->vueaccreditation->showvue($this->vue, $idaccreditation);
        //supprimer les fichiers
        //On supprime dabord les fichiers
        $i = 0;
        foreach ($allregions as $reg) {
            $i++;
            $region = "regions" . $i;
            if (isset($request->$region)) {
             //  echo "il a coché ---".$request->$region;
              //Suppression des elements cochés
              $this->accrediregion->delete($request->$region); 
            }
        }
        //Raffraichir l'id de l'accreditation
        Session::put("idaccreditation",$idaccreditation);
       //Enregistrer les nouvelles regions
        $this->saveRegions($request);



        //supprimer dans la base la table accrediregion
        //
        //ajouter les nouveaux fichiers

        $this->accreditation->update($request->only($this->accreditation->getModel()->fillable), $idaccreditation);
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
