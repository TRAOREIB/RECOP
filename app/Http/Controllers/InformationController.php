<?php

namespace App\Http\Controllers;


//use App\Vehicule;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Correspondant;
use App\Models\Informations;





use App\Repositories\RepositoryVue;

//use App\Models\Informations;


class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	    
	//protected $vuerecherche;
	
			  /*  protected $informations;
				protected $modelinfor;
				protected $vue="vueinformation";
				protected $vuerecherche ;     */

	
	
	protected $vuerecherche;
    protected $correspondant;
    protected $modelcorresp;
    protected $vue="vueinformation";
    // protected $vueinformation 
						/*		 public function __construct() {

								//    $this->informations = new Repository($info) ;
									
									
									
									$this->vueinformation = new RepositoryVue();
								   // $this->modelinfor = new Informations();
									
									 $this->modelcorresp = new Correspondant();
									$this->informations = new InformationController($this->modelcorresp);
								 }
	 
												*/
	 
	 
	 
	  protected $informations ;
	 public function __construct(Informations $info) {
        $this->vuerecherche = new RepositoryVue();
        $this->modelcorresp = new Correspondant();
        //$this->correspondant = new CorrespondantController($this->modelcorresp);
		$this->correspondant = new Repository($this->modelcorresp);
		$this->informations = new Repository($info) ;
		
		
		
    }
	
	
		 public function index()
    {
        
		//echo "good";
		//
       // $allvueinformation = $this->vueinformation->all();
        // return view('information.ajout_information');
		
		$allinformation = $this->informations->all();
        return view('information.ajout_information',compact('allinformation'));

    }
	
    
					/*		public function index()
							{
								//
								// $allcorrespondant = $this->vuerecherche->allvue($this->vue);
								$allinformation = $this->vuerecherche->allvue($this->vue);
								//echo $allcorrespondant;
								return view('information.rechercheinformation',compact('allinformation'));
								
								
								$allcorrespondant = $this->vuerecherche->allvue($this->vue);
								//echo $allcorrespondant;
								return view('recherche.recherchenational',compact('allcorrespondant'));
								
							}
							
											*/
											
											
		public function indexvue()
				{
													
													
					$allcorrespondant = $this->vuerecherche->allvue($this->vue);
					//echo $allcorrespondant;
					return view('information.vueinfo',compact('allcorrespondant'));
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

							   /*   $this->vueinformation->create($request->only($this->vueinformation->getModel()->fillable)); 
								 // return view('candidat.form_ajouter');
									return $this->index();   */
		
		
		
		
		 $this->informations->create($request->only($this->informations->getModel()->fillable)); 
     // return view('candidat.form_ajouter');
        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idinfo)
    {
        //
		$editinformation = $this->informations->show($idinfo);
        return view('information.modif_info',compact('editinformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idinfo)
    {
        //
		//	echo $idinfo ;
			$editinformation = $this->informations->show($idinfo);
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
