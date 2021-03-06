<?php

namespace App\Http\Controllers;

//use App\Vehicule;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Correspondant;
use App\Models\Informations;
use App\Repositories\RepositoryVue;

//use App\Models\Informations;


class InformationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//protected $vuerecherche;

    /*  protected $informations;
      protected $modelinfor;
      protected $vue="vueinformation";
      protected $vuerecherche ; */



    protected $vuerecherche;
    protected $correspondant;
    protected $modelcorresp;
    protected $vue = "vueinformation";
    protected $informations;

    public function __construct(Informations $info) {
        $this->vuerecherche = new RepositoryVue();
        $this->modelcorresp = new Correspondant();
//$this->correspondant = new CorrespondantController($this->modelcorresp);
        $this->correspondant = new Repository($this->modelcorresp);
        $this->informations = new Repository($info);
    }

    public function index() {


// $allvueinformation = $this->vueinformation->all();
// return view('information.ajout_information');



        $allinformation = $this->informations->all();
        return view('information.ajout_information', compact('allinformation'));
    }

    /* 		public function index()
      {
      //
      // $allcorrespondant = $this->vuerecherche->allvue($this->vue);
      $allinformation = $this->vuerecherche->allvue($this->vue);
      //echo $allcorrespondant;
      return view('information.rechercheinformation',compact('allinformation'));


      $allcorrespondant = $this->vuerecherche->allvue($this->vue);
      //echo $allcorrespondant;
      return view('recherche.recherchenational',compact('allcorrespondant'));

      }

     */

    public function indexvue() {

//$allinformation = $this->informations->all();								
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        return view('information.vueinfo', compact('allcorrespondant'));

//  return view('information.vueinfo',compact('allinformation'));
    }

    public function listeinfoperso() {

//echo "good";
//
// $allvueinformation = $this->vueinformation->all();
// return view('information.ajout_information');

        $allinformation = $this->informations->all();
        return view('information.listeinfoperso', compact('allinformation'));
    }

//    $allcorrespondant = $this->vuerecherche->allvue($this->vue);
//echo $allcorrespondant;
//   return view('information.vueinfo', compact('allcorrespondant'));

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
//
// $this->information->create($request->only($this->information->getModel()->fillable)) ;
// return view('information.ajoute_information') ;

        /*   $this->vueinformation->create($request->only($this->vueinformation->getModel()->fillable)); 
          // return view('candidat.form_ajouter');
          return $this->index(); */




        $this->informations->create($request->only($this->informations->getModel()->fillable));
// return view('candidat.form_ajouter');
        return $this->indexvue();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idinfo) {

        $editinformation = $this->informations->show($idinfo);
        return view('information.modif_info2', compact('editinformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idinfo) {
//	echo $idinfo  ;
        $editinformation = $this->informations->show($idinfo);
        return view('information.modif_info2', compact('editinformation'));
    }

    public function editfv($idinfo) {

//	echo $idinfo  ;
        $editinformation = $this->informations->show($idinfo);
        return view('information.modif_info_from_vue', compact('editinformation'));

        $editinformation = $this->informations->show($idinfo);
        return view('information.modif_info', compact('editinformation'));
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
        $indicateur = $request->control;
        if ($indicateur == 'tous') {
            $this->informations->update($request->only($this->informations->getModel()->fillable), $id);

            return $this->indexvue();
        } else {
            $this->informations->update($request->only($this->informations->getModel()->fillable), $id);
            return $this->listeinfoperso();
        }
    }

    public function updatefv(Request $request, $id) {
//


        $this->informations->update($request->only($this->informations->getModel()->fillable), $id);
// return $this->index();

        return $this->indexvue();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
//
//echo $id;
        $this->informations->delete($id);
//return $this->index();
        return $this->listeinfoperso();
    }

    public function destroyfv($id) {
//
//echo $id;
        $this->informations->delete($id);
//return $this->index();
        return $this->indexvue();
    }

}
