<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Correspondant;
use Illuminate\Http\Request;
use App\Repositories\RepositoryVue;
use App\Repositories\Repository;







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
<<<<<<< HEAD
=======
		
		
		
<<<<<<< HEAD
=======
>>>>>>> 98b431bba3b14852135f490be92b68f1b43fa5ea
        $this->correspondant = new Repository($this->modelcorresp);
>>>>>>> f2d1561d2cad1225ce9e631c8dfd52516f7c0cbb
    }

    public function index()
    {
		
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('recherche.recherchetypecorrespondant',compact('allcorrespondant'));
    }

    public function recherchetype(Request $request)
    {
        //
<<<<<<< HEAD
        $allcorrespondant = $this->vuerecherche->recherchetype($this->vue,$request->typecorrespondant);
        //echo $request->typecorrespondant;
        return view('recherche.recherchetypecorrespondant',compact('allcorrespondant'));
=======
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

>>>>>>> f2d1561d2cad1225ce9e631c8dfd52516f7c0cbb
    }

 
/* public function rechercheregioninter(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->rechercheregion($this->vue,$request->region);
        //echo $allcorrespondant;
        return view('recherche.rechercheinternational',compact('allcorrespondant'));
<<<<<<< HEAD
    }    */
=======
>>>>>>> 98b431bba3b14852135f490be92b68f1b43fa5ea

    }
>>>>>>> f2d1561d2cad1225ce9e631c8dfd52516f7c0cbb


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
        $this->correspondant->delete($id);
        //return $this->index();
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('liste_correspondant.listeadmin',compact('allcorrespondant'));
        //echo $id;
    }
}
