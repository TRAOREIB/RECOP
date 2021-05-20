<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
//use App\Vehicule;
use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Http\Controllers\Controller;
use App\Repositories\Repository ;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Vehicule;

>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

<<<<<<< HEAD

     protected $vehicule ;
     public function __construct(Vehicule $vehi) {

        $this->vehicule = new Repository($vehi) ;
     }
    public function index()
    {
        //
        return view('candidat.form_ajouter') ;
=======
     protected $vehicule;
     public function __construct(Vehicule $vehi) {
        $this->vehicule = new Repository($vehi);
    }
    

    public function index()
    {
        //
        $allvehicule = $this->vehicule->all();
        return view('candidat.form_ajouter',compact('allvehicule'));
>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
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
<<<<<<< HEAD
        $this->vehicule->create($request->only($this->vehicule->getModel()->fillable)) ;
        return view('candidat.form_ajouter') ;
=======
      $this->vehicule->create($request->only($this->vehicule->getModel()->fillable)); 
     // return view('candidat.form_ajouter');
        return $this->index();
>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
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
<<<<<<< HEAD
=======
        $editvehicule = $this->vehicule->show($id);
        return view('candidat.form_modif_vehicule',compact('editvehicule'));

>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
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
<<<<<<< HEAD
=======
        
        $this->vehicule->update($request->only($this->vehicule->getModel()->fillable),$id);
        return $this->index();
>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
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
<<<<<<< HEAD
=======
        //echo $id;
        $this->vehicule->delete($id);
        return $this->index();
>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
    }
}
