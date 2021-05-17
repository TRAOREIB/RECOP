<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Support\Facades\DB;
use App\Models\Recepisse;
use Illuminate\Http\Request;

class RecepisseController extends Controller {

    //

    public function verifsession() {
        $idutilisateur = session("idutilisateur");
        if (!isset($idutilisateur)) {
            return 0; 
        }else{
            return 1;
        }
    }
    
    public function recepisse(Request $request) {
    $value= $this->verifsession();
        if($value==0){
           return view("candidat.home"); 
        }
       
        $recepisse = DB::table("oeuvre")
                ->where("idcandidat", "=", $request->idcandidat)
                ->where("actif","=",true)
                ->get();
        
        $numrecepisse=db::table("recepisse")->select("numero")->where("idcandidat","=",$request->idcandidat)->first();
   
        $candidat=DB::table("candidat")
                ->where("id","=",$request->idcandidat)
                ->where("actif","=",true)
                ->first();
        
        if($recepisse!="[]"){
        $pdf = PDF::loadview("candidat.form_recepisse", compact("recepisse","candidat","numrecepisse"));
        return $pdf->stream('Recepisse.pdf');
        }else{
             $idcandidat=$request->idcandidat;
             $message="Vous n'avez pas d'oeuvres enregistrées";
             return view("candidat.form_recap", compact("message","idcandidat"));
        }
    }

}
