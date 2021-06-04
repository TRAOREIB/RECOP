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
<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
=======
>>>>>>> b28a84b056198bab533a84aeee529357565e0226

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $accreditation;
<<<<<<< HEAD
	protected $vue='vueaccreditation';
	protected $vueaccreditation;
	protected $region;
	
    public function __construct(Accreditation $accre) {
       $this->accreditation = new Repository($accre);
	   $this->vueaccreditation= new RepositoryVue();
	  //$this->region = new Repository( );
=======
    protected $region;
    protected $vuerecherche;
    protected $vue="vueaccreditation";


    public function __construct(Accreditation $accre,Region $region) {
       $this->vuerecherche = new RepositoryVue();
       $this->accreditation = new Repository($accre);
       $this->region = new Repository($region);
>>>>>>> b28a84b056198bab533a84aeee529357565e0226
                                                   }

    public function index()
    {
		// $allregion = $this->region->all();
        
        return view('accreditation.ajout_accreditation');
		
		//return view('accreditation.ajout_accreditation',compact('allregion'));
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
	
	public function listeaccreditation()
    {
        //
		//$allaccreditation=$this->accreditation->all();
		$allaccreditation = $this->vueaccreditation->allvue($this->vue);
    return view('accreditation.liste_accreditation',compact('allaccreditation'));
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
        $maxidaccreditation = $this->accreditation->max("idaccreditation");
		Session::put("idaccreditation", $maxidaccreditation);
		return view('accreditation.pj_accreditation');
		 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idaccreditation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idaccreditation)
    {
        //
		$editaccreditation = $this->accreditation->show($idaccreditation);
        return view('accreditation.modif_accreditation', compact('editaccreditation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idaccreditation)
    {
        //
	$this->accreditation->update($request->only($this->accreditation->getModel()->fillable), $idaccreditation);
    
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
