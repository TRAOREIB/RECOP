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

    public function recipissecorrespondant()
    {
        $iduser = Auth::id();
        //$iduser= $request->idcorrespondant;

        //Information du correspondant
        $corresp = $this->correspondant->showcorrespondant($iduser);

        // echo $corresp; 

        $codeqr = $this->qrcode->generate($corresp);
        $pdf = PDF::loadview("etats.recipissecorrespondant", compact("corresp", "codeqr"));
        $pdf->save(storage_path("app/public/recipisse/recipissecorrespondant.pdf"));
        return $pdf->download('recipissecorrespondant.pdf');
    }

    public function recipisseaccreditation($iddemandeur)
    {
        $iduser = Auth::id();

        //Recuperation infos de l'Accreditation

        $accredit = $this->vueaccrediregion->showmyaccrediregion($this->vue1, $iddemandeur);

        $codeqra = $this->qrcode->generatea($accredit);
        $pdf = PDF::loadview("etats.recipisseaccreditation", compact("accredit", "codeqra"));
        $pdf->save(storage_path("app/public/recipisse/recipisseaccreditation.pdf"));
        return $pdf->download('recipisseaccreditation.pdf');
    }

    public function attestationpaccreditation($accredit)
    {
        $codeqrap = $this->qrcode->generateap($accredit);
        $pdf = PDF::loadview("etats.attestationpaccreditation", compact("accredit", "codeqrap"));
        $pdf->save(storage_path("app/public/recipisse/attestationpaccreditation.pdf"));
        return $pdf->download('attestationpaccreditation.pdf');
    }

    public function attestationaccreditation(Request $request)
    {
        $idaccreditation = $request->idaccreditation;
        echo $idaccreditation;
        $infoaccrediation = $this->vueattest->showattestationaccredi($this->vueattestation, $idaccreditation);
        //echo $infoaccrediation;
        $codeqrattest = $this->qrcode->generateattest($infoaccrediation);
        return view("etats.attestationaccreditation", compact("infoaccrediation", "codeqrattest"));

        // $pdf = PDF::loadview("etats.attestationaccreditation", compact("infoaccrediation","codeqrattest"));
        //$pdf->save(storage_path("app/public/recipisse/attestationaccreditation.pdf")); 
        // return $pdf->download('attestationaccreditation.pdf');

    }
}
