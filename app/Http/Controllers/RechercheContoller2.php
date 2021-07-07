<?php

namespace App\Http\Controllers;
use App\Models\Correspondant;
use Illuminate\Http\Request;
use App\Repositories\RepositoryVue;
use App\Repositories\Repository;


class RechercheContoller extends Controller
{
    protected $vuerecherche;
    protected $correspondant;
    protected $modelcorresp;
    protected $vue="vuecorrespondant";
	
    public function __construct() {
        $this->vuerecherche = new RepositoryVue();
        $this->modelcorresp = new Correspondant();
        $this->correspondant = new CorrespondantController($this->modelcorresp);		
		
    }


    public function index()
    {
        //
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

    public function recherchetype(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->recherchetype($this->vue,$request->typecorrespondant,$request->originecorrespondant);
        $typecorrespondant=$request->typecorrespondant;
		$originecorrespondant=$request->originecorrespondant;
		//echo $allcorrespondant;
        return view('recherche.recherchetypecorrespondant',compact('allcorrespondant','typecorrespondant','originecorrespondant'));
    }

    public function essai(){
        echo "on est dans essai";
    }

    public function listeadmin(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
		
        //echo $allcorrespondant;
        return view('liste_correspondant.listeadmin',compact('allcorrespondant'));
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
