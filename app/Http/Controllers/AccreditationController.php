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

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $accreditation;
    protected $region;
    protected $vuerecherche;
    protected $vue="vueaccreditation";


    public function __construct(Accreditation $accre,Region $region) {
       $this->vuerecherche = new RepositoryVue();
       $this->accreditation = new Repository($accre);
       $this->region = new Repository($region);
                                                   }

    public function index()
    {
        //
        return view('accreditation.ajout_accreditation');
    }

    public function rechercheaccredi(Request $request)
    {
       $allregion = $this->region->all();
       $allaccreditation = $this->vuerecherche->rechercheaccredi($this->vue,$request->nomregion);
       $regionchoisi=$request->nomregion;
       return view('recherche.recherchelieuaccreditation',compact('allaccreditation','allregion','regionchoisi'));

    }



  public function indexpjaccreditation()
    {
        //
        return view('accreditation.ajout_accreditation');
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
		//  echo session('pj');     
	   //
			$this->accreditation->create($request->only($this->accreditation->getModel()->fillable)); 
        //return $this->indexpjaccreditation($request->iddemandeur);
		return view('accreditation.message_accreditation');
		 

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
