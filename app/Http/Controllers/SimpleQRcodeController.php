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

//La facade QrCode
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
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
    protected $vuedemandeur;

    // L'action "generate" de la route "simple-qrcode" (GET)
    public function generate ($correspondant) {
        foreach ($correspondant as $corresp) {
            $nom=$corresp->nom;
            $prenom=$corresp->prenom;
            $cnib=$corresp->cnib;
            $passeport=$corresp->passeport;

        }      
$qrcode = QrCode::size(200)->generate( "$nom $prenom CNI: $cnib PASSEPORT: $passeport");
   return $qrcode;
    }
    public function generatea ($demandeur) {
        
    ///  echo $demandeur;
        
        foreach ($demandeur as $demand) {
            $nom=$demand->nomdemandeur;
            $prenom=$demand->prenomdemandeur;
            $region=$demand->nomregion;
        }
		      
$qrcodea = QrCode::size(200)->generate( "$nom $prenom REGION: $region");
    
   return $qrcodea;
    
    }

    public function generateap ($accredit) {
        foreach ($accredit as $accreditation){

                $nom=$accreditation->nomdemandeur;
                $prenom=$accreditation->prenomdemandeur;
                $region=$accreditation->nomregion;
            
        }
          
                  
    $qrcodeap = QrCode::size(200)->generate( "$nom $prenom REGION: $region");
        
       return $qrcodeap;
        
        }

        public function generateattest ($accredit) {
            foreach ($accredit as $accreditation){
    
                    $nom=$accreditation->nomdemandeur;
                    $prenom=$accreditation->prenomdemandeur;
                    $region=$accreditation->nomregion;
                    $datevalid=$accreditation->datevalidationaccreditation;

                
            }
              
                      
        $qrcodeattest = QrCode::size(100)->generate( "$nom $prenom REGION: $region $datevalid");
            
           return $qrcodeattest;
            
            }    
}
