<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Correspondant;
use Illuminate\Support\Facades\Session;

class CorrespondantController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $correspondant;

    public function __construct(Correspondant $corresp) {
        $this->correspondant = new Repository($corresp);
    }

    public function index() {
        
        $allcorrespondant = $this->correspondant->all();
        return view('correspondant.ajout_correspondant', compact('allcorrespondant'));

    }

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
        $nom = $request->nom;
        $prenom = $request->prenom;
        $mail1 = $request->mail1;
        Session::put("name", "$nom $prenom");
        Session::put("mail", $mail1);
        Session::put("profil", "Correspondant");
        $this->correspondant->create($request->only($this->correspondant->getModel()->fillable));
        $maxid = $this->correspondant->max("idcorrespondant");
        //mettre l' id du correspondant dans une variable session
        Session::put("idcorrespondant", $maxid);
        // echo $maxid;
        return view('correspondant.ajout_correspondant_suite', compact("maxid","request"));
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
        $editcorrespondant = $this->correspondant->show($id);
        return view('candidat.form_modif_correspondant', compact('editcorrespondant'));
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
        $this->vehicule->update($request->only($this->correspondant->getModel()->fillable), $id);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $this->correspondant->delete($id);
        return $this->index();
    }

}
