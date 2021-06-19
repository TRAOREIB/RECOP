<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\PiecesJointes;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\Correspondant;
use App\User;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CorrespondantController;
use App\Http\Controllers\AccreditationController;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PiecesJointesRequest;

class PiecesJointesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $piecesjointes;
    protected $pjaccreditation;
    protected $enreguser;
    protected $accreditation;
    protected $accredi;
    protected $demandeur;
    protected $demande;
    protected $correspond;
    protected $correspondant;
    protected $users;
    protected $user;
    protected $corresp;

    public function __construct(PiecesJointes $pj) {
        $this->demande = new Demandeur();
        $this->demandeur = new Repository($this->demande);
        $this->correspond = new Correspondant();
        $this->correspondant = new Repository($this->correspond);
        $this->users = new User();
        $this->user = new Repository($this->users);
        $this->accredi = new Accreditation();
        $this->enreguser = new RegisterController();
        $this->piecesjointes = new Repository($pj);
        $this->accreditation = new AccreditationController($this->accredi);
        $this->pjaccreditation = new Repository(new PiecesJointes);
        $this->corresp=new CorrespondantController(new Correspondant());
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

        if (session('type') == 'correspondant') {
            echo $request->idcorrespondant;
            Session::put("idaccreditation", null);
            Session::put("iddemandeur", null);
            Session::put("pj", "correspondant");
            $request->actif = "true";
            $this->savepiecesjointes($request);
            $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $request->idcorrespondant);
            $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
            return view("correspondant.message_correspondant");
        }
        if (session('type') == 'demandeur') {
            echo "j'arrive dans demandeur walayi";
            Session::put("idcorrespondant", null);
            Session::put("pj", "demandeur");
            $request->actif = "true";
            $this->savepiecesjointes($request);
            $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), session('iddemandeur'));
            $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
            return view('accreditation.message_accreditation');
        }

// Creation des pieces jointes

        $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
    }

    public function savepiecesjointes(Request $request) {
     
        if (!empty($request->file('lettrerecommendation'))) {
            $nom = $request->lettrerecommendation->getClientOriginalName();
            $request->file('lettrerecommendation')->storeAs(config('documents.path'), $nom, "public");
      
        }
        if (!empty($request->file('photo'))) {
            $nom = $request->photo->getClientOriginalName();
            $request->file('photo')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('cv'))) {
            $nom = $request->cv->getClientOriginalName();
            $request->file('cv')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('visamedia'))) {
            $nom = $request->visamedia->getClientOriginalName();
            $request->file('visamedia')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcnib'))) {
            $nom = $request->pjcnib->getClientOriginalName();
            $request->file('pjcnib')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjpasseport'))) {
            $nom = $request->pjpasseport->getClientOriginalName();
            $request->file('pjpasseport')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcarteconsulaire'))) {
            $nom = $request->pjcarteconsulaire->getClientOriginalName();
            $request->file('pjcarteconsulaire')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjpasseport'))) {
            $nom = $request->pjpasseport->getClientOriginalName();
            $request->file('pjpasseport')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcartepresse'))) {
            $nom = $request->pjcartepresse->getClientOriginalName();
            $request->file('pjcartepresse')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcnibperprev'))) {
            $nom = $request->pjcnibperprev->getClientOriginalName();
            $request->file('pjcnibperprev')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('lettrerecommendation'))) {
            $nom = $request->lettrerecommendation->getClientOriginalName();
            $request->file('lettrerecommendation')->storeAs(config('documents.path'), $nom, "public");
        }
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

        $editpjaccreditation = $this->piecesjointes->showinfopj($id);
        return view("accreditation.modifpj_accreditation", compact("editpjaccreditation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// Pieces Jointes Accreditation (pjaccreditation)


    public function showpjaccreditation($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpjaccreditation($id, Request $request) {
        //
        $editpjaccreditation = $this->piecesjointes->show($id);
        //echo $editpjaccreditation;
        //echo $id;
        return view('accreditation.modifpj_accreditation', compact('editpjaccreditation'));
        //echo $request->pjcnib;
        //echo $request->photo;
    }
    
    public function editpjcorrespondant(Request $request){
        echo "on y arrive ";
        $idpiecesjointes=$request->idpj;
        $idcorrespondant=$request->idcorrespondant;
        echo $idpiecesjointes;
        $editpjcorrespondant = $this->piecesjointes->show($idpiecesjointes);
        return view("correspondant.modif_pj", compact("editpjcorrespondant","idcorrespondant"));
    }
	
	public function editpjdemandeur(Request $request){
        echo "on y arrive ";
        $idpiecesjointes=$request->idpj;
        $iddemandeur=$request->iddemandeur;
        echo $idpiecesjointes;
        $editpjdemandeur=$this->piecesjointes->show($idpiecesjointes);
        return view("demandeur.modif_pj", compact("editpjdemandeur","iddemandeur"));
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
        echo "on est dans la pièce jointe";
        $idpj = $request->idpj;
        echo $idpj;
        $this->savepiecesjointes($request);
        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $idpj);
        $request->idaccreditation = session("monidaccreditation");
        $request->iduser = session("moniduser");
        $request->iddemandeur = session("moniddemandeur");
        $request->idcorrespondant = session("monidcorrespondant");
        return $this->accreditation->detailsaccreditation($request);
    }
    
    public function updatecorrespondant(Request $request){
         $idpj = $request->idpj;
        $this->savepiecesjointes($request);
        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $idpj);
        $request->idcorrespondant = $request->idcorresp;
        $request->idpiecesjointes=$idpj;
        return $this->corresp->detailsCorrespondant($request);
    }
	
	public function updatedemandeur(Request $request){
         $idpj = $request->idpj;
        $this->savepiecesjointes($request);
        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $idpj);
        $request->iddemandeur = $request->iddemand;
        $request->idpiecesjointes=$idpj;
        return $this->accredi->detailsCorrespondant($request);
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
