<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Correspondant;
use Illuminate\Http\Request;
use App\Repositories\RepositoryVue;

class RechercheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $vuerecherche;
    protected $correspondant;
    protected $modelcorresp;
    protected $vue="vuecorrespondant";

    public function __construct() {
        $this->vuerecherche = new RepositoryVue();
        $this->modelcorresp = new Correspondant();
        $this->correspondant = new CorrespondantController($this->modelcorresp);
    }

    public function indexnational()
    {
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('recherche.recherchenational',compact('allcorrespondant'));
    }

    public function indexinternational()
    {
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('recherche.rechercheinternational',compact('allcorrespondant'));
    }


    public function rechercheregion(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->rechercheregion($this->vue,$request->region);
        //echo $allcorrespondant;
        return view('recherche.recherchenational',compact('allcorrespondant'));
<<<<<<< HEAD
    }

    public function rechercheregioninter(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->rechercheregion($this->vue,$request->region);
        //echo $allcorrespondant;
        return view('recherche.recherchenational',compact('allcorrespondant'));
=======
>>>>>>> master
    }

    public function rechercheregioninter(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->rechercheregioninter($this->vue,$request->region);
        //echo $allcorrespondant;
        return view('recherche.rechercheinternational',compact('allcorrespondant'));
    }

    public function listeadmin(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('liste_correspondant.listeadmin',compact('allcorrespondant'));
    }

    public function listevisiteur(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('liste_correspondant.listevisiteur',compact('allcorrespondant'));
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
        $this->correspondant->destroy($id);
        return $this->index();
        //echo $id;
    }
}
