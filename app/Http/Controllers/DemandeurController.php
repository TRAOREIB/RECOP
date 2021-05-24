<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Demandeur;

class DemandeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 protected $demandeur;
     public function __construct(Demandeur $dem) {
        $this->demandeur = new Repository($dem);
													}
    public function index()
    {
		// $allvehicule = $this->vehicule->all();
		$alldemandeur= $this->demandeur->all();
        return view('demandeur.ajout_demandeur',compact('alldemandeur'));
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
		$this->demandeur->create($request->only($this->demandeur->getModel()->fillable)); 
     // return view('candidat.form_ajouter');
        return $this->index();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($iddemandeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($iddemandeur)
    {
        //
		$editdemandeur= $this->demandeur->show($iddemandeur);
        return view('demandeur.modifier_demandeur',compact('editdemandeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $iddemandeur)
    {
        //
		   $this->demandeur->update($request->only($this->demandeur->getModel()->fillable),$iddemandeur);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($iddemandeur)
    {
        //
		$this->demandeur->delete($iddemandeur);
        return $this->index();
    }
}
