<?php

namespace App\Http\Controllers;


//use App\Vehicule;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Informations;




class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     protected $vueinformation ;
     public function __construct(vueinformation $info) {

        $this->vueinformation = new Repository($info) ;
     }
    
    
    public function index()
    {
        //
        $allvueinformation = $this->vueinformation->allvue();
        return view('information.ajout_information',compact('allvueinformation'));

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

       // $this->information->create($request->only($this->information->getModel()->fillable)) ;
       // return view('information.ajoute_information') ;

      $this->vueinformation->create($request->only($this->vueinformation->getModel()->fillable)); 
     // return view('candidat.form_ajouter');
        return $this->index();

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
		$editinformation = $this->information->show($id);
        return view('information.modif_info',compact('editinformation'));
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
		//	echo $idinfo ;
			$editinformation = $this->information->show($id);
        return view('information.modif_info',compact('editinformation'));
        


    
	
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

        
        $this->information->update($request->only($this->information->getModel()->fillable),$id);
        return $this->index();

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

        //echo $id;
        $this->information->delete($id);
        return $this->index();

    }
}
