<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Repositories\RepositoryVue;
use App\Models\Correspondant;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\Document;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\SimpleQRcodeController;

class EtatController extends Controller
{


    //

    protected $allcorrespondant;
    protected $allaccreditation;
    protected $alldemandeur;
    protected $correspondant;
    protected $accreditation;
    protected $demandeur;
    protected $vue = 'vuecorrespondant';
    protected $vuecorrespondant;
    protected $vue1 = 'vueaccrediregion';
    protected $vueaccrediregion;
    protected $vue2 = 'vuedemandeur';
    protected $vueattestation = 'vueattestation';
    protected $vuedemandeur;
    protected $vueattest;
    protected $document;
    protected $qrcode;




    // public function __construct (demandeur $dem) (Correspondant $corresp)

    public function __construct()
    {

        // Correspondant
        $corresp = new Correspondant();
        $this->correspondant = new Repository($corresp);
        $this->vuecorrespondant = new RepositoryVue();

        //Accreditation
        $this->accreditation = new Repository(new Accreditation());
        $this->vueaccrediregion = new RepositoryVue();

        //Demandeur
        $dem = new Demandeur();
        $this->demandeur = new Repository($dem);
        $this->vuedemandeur = new RepositoryVue();

        //attestation
        $this->vueattest = new RepositoryVue();

        //Document
        $doc = new Document();
        $this->document = new Repository($doc);

        //qrcode
        $this->qrcode = new SimpleQRcodeController();
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
        $typecorrespondant = $request->typecorrespondant;
        $originecorrespondant = $request->originecorrespondant;
        $allcorrespondant = $this->vuecorrespondant->recherchetype($this->vue, $typecorrespondant, $originecorrespondant);
        $pdf = PDF::loadview("etats.listecorrespondant", compact("allcorrespondant"));
        return $pdf->download('listecorrespondant.pdf');
        //echo $typecorrespondant;
        //echo $originecorrespondant;

    }

    public function listeaccreditation(Request $request)
    {
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
        $alldemandeur = $this->vuedemandeur->allvue($this->vue2);
        $pdf = PDF::loadview("etats.listedemandeur", compact("alldemandeur"));
        return $pdf->download('listedemandeur.pdf');
    }

    public function recipissecorrespondant(Request $request)
    {
        $iduser = Auth::id();
        //$iduser= $request->idcorrespondant;

        //Information du correspondant
        $corresp = $this->correspondant->showcorrespondant($iduser);

        // echo $corresp; 

        $codeqr = $this->qrcode->generate($corresp);
        $pdf = PDF::loadview("etats.recipissecorrespondant", compact("corresp", "codeqr"));
        $nom =  $iduser . date('y-m-d') . time();
      
        $nomfichier=$nom."recipisse_correspondant.pdf";
        $type="recipissecorrespondant";
        //Enregistrer les informations du document
        $this->ajoutDocument($request,$nomfichier,$type) ;
        $pdf->save(storage_path("app/public/recipisse_correspondant/$nomfichier"));
        //Enregistrer le recipisse dans la table document
      //  return $pdf->download('recipisse_correspondant.pdf');
    }

    public function recipisseaccreditation($iddemandeur,Request $request)
    {
        $iduser = Auth::id();

        //Recuperation infos de l'Accreditation

        $accredit = $this->vueaccrediregion->showmyaccrediregion($this->vue1, $iddemandeur);

        $codeqra = $this->qrcode->generatea($accredit);
        $pdf = PDF::loadview("etats.recipisseaccreditation", compact("accredit", "codeqra"));
        $nom =  $iduser . date('y-m-d') . time();
        
		// ADD
		
		$nomfichier=$nom."recipisse_accreditation.pdf";
        $type="recipisseaccreditation";
        //Enregistrer les informations du document
        $this->ajoutDocument($request,$nomfichier,$type) ;
        $pdf->save(storage_path("app/public/recipisse_accreditation/$nomfichier"));
		
		//$nomfichier=$nom."recipisse_accreditation.pdf";
       // $type="recipissecorrespondant";
        //Enregistrer les informations du document
        //$this->ajoutDocument($request,$nomfichier,$type) ;
        //$pdf->save(storage_path("app/public/recipisse_accreditation/$nom. recipisse_accreditation.pdf"));
        //return $pdf->download('recipisse_accreditation.pdf');
    }

    public function attestationpaccreditation($accredit, Request $request)
    {
		
        $codeqrap = $this->qrcode->generateap($accredit);
        $pdf = PDF::loadview("etats.attestationpaccreditation", compact("accredit", "codeqrap"));
        
		if (!empty(session("validerdemande"))){
			foreach ($accredit as $idaccredi){
				$idap=$idaccredi->id;
			}
			$nom =  $idap . date('y-m-d') . time();
		}
		
		else {
		$nom =  $accredit . date('y-m-d') . time();
		}
		
		
		// ADD
		$nomfichier=$nom."attestation_provisoire.pdf";
        $type="attestationprovisoire";
        //Enregistrer les informations du document
        $this->ajoutDocument($request,$nomfichier,$type) ;
        $pdf->save(storage_path("app/public/attestation_provisoire/$nomfichier"));
		
		
		
        //$pdf->save(storage_path("app/public/attestation_provisoire/$nom. attestation_provisoire.pdf"));
       // return $pdf->download('attestation_provisoire.pdf');
    }

    public function attestationaccreditation(Request $request)
    {
        // $iduser = Auth::id();
        $idaccreditation = $request->idaccreditation;
       
        $infoaccrediation = $this->vueattest->showattestationaccredi($this->vueattestation, $idaccreditation);
     
         $codeqrattest = $this->qrcode->generateattest($infoaccrediation);
        //return view("etats.attestationaccreditation", compact("infoaccrediation", "codeqrattest"));

         $pdf = PDF::loadview("etats.attestationaccreditation", compact("infoaccrediation", "codeqrattest"));
         $nom =  $idaccreditation . date('y-m-d') . time();
         $pdf->save(storage_path("app/public/attestation_accreditation/$nom. attestation_accreditation.pdf"));
         return $pdf->download('attestation_accreditation.pdf');
    }

    //Fonction pour ajouter les documents recipisse et attestations d'accreditation
    public function ajoutDocument(Request $request, $nomfichier, $type)
    {
        $iduser = Auth::id();
        Session::put("iduser", $iduser);
        Session::put("nomfichier", $nomfichier);
        Session::put("type", $type);
        $this->document->create($request->only($this->document->getModel()->fillable));
    }
}
