<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\PiecesJointes;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AccreditationController; 

class PiecesJointesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $piecesjointes;
    protected $enreguser;
	protected $accreditation;
	protected $accredi;
	protected $demandeur;
	protected $demande;

    public function __construct(PiecesJointes $pj) {
		$this->demande = new Demandeur();
		$this->demandeur= new Repository ($this->demande);
		$this->accredi = new Accreditation();
        $this->enreguser = new RegisterController();
        $this->piecesjointes = new Repository($pj);
		$this->accreditation = new AccreditationController($this->accredi);
    }

    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
        $this->enreguser->register($request);
        //mise a jour de la colonne actif à true pour le correspondant
        $request->actif="true";
        $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $request->idcorrespondant);
        echo $request->name;
        echo $request->email;
        echo $request->password;
        echo $request->identifiant;
		  
    }
	
	 public function storepjaccreditation(Request $request) {
		$this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
        return $this->accreditation->indexpjaccreditation($request->iddemandeur);
		// Création du compte d'utilisateur
         //$this->enreguser->register($request);
         //$request->actif="true";
        // $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), $request->iddemandeur);
        // echo $request->name;
        // echo $request->email;
       //  echo $request->password;
       //  echo $request->identifiant;
		
	 }	

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
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
