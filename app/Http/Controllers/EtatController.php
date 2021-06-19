<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Repositories\RepositoryVue;
use App\Models\Correspondant;
use App\Models\Accreditation;
use App\Models\Demandeur;

class EtatController extends Controller {
	

    //
	
	  protected $allcorrespondant;
	  protected $allaccreditation;
	  protected $alldemandeur;
	  protected $correspondant;
	  protected $accreditation;
	  protected $demandeur;
	  protected $vue='vuecorrespondant';
	  protected $vuecorrespondant;
	  protected $vue1='vueaccrediregion';
	  protected $vueaccrediregion;
	  protected $vue2='vuedemandeur';
	  protected $vuedemandeur;
	  
	  
	 
	 // public function __construct (demandeur $dem) (Correspondant $corresp)
	 
	 public function __construct(accreditation $accredi) {
      
		 // Correspondant
		$corresp=new Correspondant();
		$this->correspondant = new Repository($corresp);
		$this->vuecorrespondant = new RepositoryVue();
	 
		//Accreditation
		$this->accreditation = new Repository($accredi);
		$this->vueaccrediregion = new RepositoryVue();
	
		//Demandeur
		$dem=new Demandeur();
		$this->demandeur = new Repository($dem);
		$this->vuedemandeur = new RepositoryVue();
	
     }   
    
	
	// Debut test
	
		public function listevisiteur(Request $request)
    {
		
		$allcorrespondant = $this->correspondant->all();
       // pass view file
		
		//echo ($allcorrespondant);
           $pdf = PDF::loadview("etats.listevisiteur", compact("allcorrespondant"));
            // download pdf
			
		
           return $pdf->download('userlist.pdf');
        
        
    }
	
	/* public function listecorrespondant(Request $request)
    {
		
		$allcorrespondant = $this->vuecorrespondant->allvue($this->vue);
		$pdf = PDF::loadview("etats.listecorrespondant", compact("allcorrespondant"));
        return $pdf->download('listecorrespondant.pdf');
    } */
	
	 public function listecorrespondant(Request $request)
    {
		$typecorrespondant=$request->typecorrespondant;
		$originecorrespondant=$request->originecorrespondant;
		$allcorrespondant = $this->vuecorrespondant->recherchetype($this->vue,$typecorrespondant,$originecorrespondant);
		$pdf = PDF::loadview("etats.listecorrespondant", compact("allcorrespondant"));
        return $pdf->download('listecorrespondant.pdf');
	   //echo $typecorrespondant;
	   //echo $originecorrespondant;
	   
    }
	
	   public function listeaccreditation(Request $request) {
       // $allregion = $this->region->all();
        $regionchoisi = $request->nomregion;
		//echo $request->nomregion;
		$allaccreditation = $this->vueaccrediregion->rechercheaccredi($this->vue1, $request->nomregion);
  		$pdf = PDF::loadview("etats.listeaccreditation", compact("allaccreditation"));
        return $pdf->download('listeaccreditation.pdf');
		
		
        
    }
	/*
	public function listeaccreditation(Request $request)
    {
		$allaccreditation=$this->vueaccrediregion->allvue($this->vue1);
		$pdf = PDF::loadview("etats.listeaccreditation", compact("allaccreditation"));
        return $pdf->download('listeaccreditation.pdf');
    } */
	
	public function listedemandeur(Request $request)
    {
		$alldemandeur=$this->vuedemandeur->allvue($this->vue2);
		$pdf = PDF::loadview("etats.listedemandeur", compact("alldemandeur"));
        return $pdf->download('listedemandeur.pdf');
    }
	
	
	// fin
	
    public function bonObjet($etat) {

        if ($etat != "Tous") {
            $liste = DB::table("objet")
                    ->join("modeacquis", "modeacquis.idmodeacquis", "=", "objet.idmodeacquis")
                    ->join("matiere", "matiere.idmatiere", "=", "objet.idmatiere")
                    ->join("classification", "classification.idclassification", "=", "objet.idclassification")
                    ->select("objet.*", "classification.libelle as classification", "matiere.libelle as matiere", "modeacquis.libelle as mode")
                    ->where("objet.etat", "=", "$etat")
                    ->get();
        } else {
            $liste = DB::table("objet")
                    ->join("modeacquis", "modeacquis.idmodeacquis", "=", "objet.idmodeacquis")
                    ->join("matiere", "matiere.idmatiere", "=", "objet.idmatiere")
                    ->join("classification", "classification.idclassification", "=", "objet.idclassification")
                    ->select("objet.*", "classification.libelle as classification", "matiere.libelle as matiere", "modeacquis.libelle as mode")
                    ->get();
        }
       // $liste=htmlentities($liste);

        if($liste!="[]"){
        $pdf = PDF::loadview("etats.etat", compact("liste","etat"));
        return $pdf->stream('Etat.pdf');
        }else{
            return view("etats.reponse",compact("etat"));
        }
    }

    public function mauvaisObjet() {
        
    }

    public function tousObjet() {
        
    }

}