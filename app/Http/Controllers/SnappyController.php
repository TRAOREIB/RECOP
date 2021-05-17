<?php

namespace App\Http\Controllers;

use Knp\Snappy\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\RepertoireController;

class SnappyController extends Controller {

    //
    
     public function verifsession() {
        $idutilisateur = session("idutilisateur");
        if (!isset($idutilisateur)) {
            return 0; 
        }else{
            return 1;
        }
    }

    public function generer(Request $request) {

        $nomDuFichier = 'Recepisse.pdf';
        $snappy = new Pdf('"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf"');
        header("Content-Type: application/pdf; filename=$nomDuFichier");

        $value = $this->verifsession();
        if ($value == 0) {
            return view("candidat.home");
        }

        $recepisse = DB::table("oeuvre")
                ->where("idcandidat", "=", $request->idcandidat)
                ->where("actif", "=", true)
                ->get();

        $numrecepisse = db::table("recepisse")->select("numero")->where("idcandidat", "=", $request->idcandidat)->first();

        $candidat = DB::table("candidat")
                ->where("id", "=", $request->idcandidat)
                ->where("actif", "=", true)
                ->first();

        if ($recepisse != "[]") {
            $contenuHTML = View("candidat.form_recepisse", compact("recepisse", "candidat", "numrecepisse"))->render();
            echo $snappy->getOutputFromHtml($contenuHTML);
        } else {
            $idcandidat = $request->idcandidat;
            $message = "Vous n'avez pas d'oeuvres enregistrées";
            return view("candidat.form_recap", compact("message", "idcandidat"));
        }
    }
    
    
    public function repertoire(Request $request){
        
        $rep=new RepertoireController();
        $nomDuFichier = 'Repertoire.pdf';
        $snappy = new Pdf('"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf"');
        header("Content-Type: application/pdf; filename=$nomDuFichier");

        $value = $this->verifsession();
        if ($value == 0) {
            return view("candidat.home");
        }

        $listoeuvre = DB::table("vueoeuvres")
                ->where("categorie", "=", $request->categorie)
                ->where("idgenre", "=", $request->idgenre)               
                ->get();

        if ($listoeuvre != "[]") {
            echo "on arrive bien par ici";
            $contenuHTML = View("candidat.form_repertoire", compact("listoeuvre"))->render();
            echo $snappy->getOutputFromHtml($contenuHTML, array('orientation'=>'Landscape'));
        } else {           
            $message = "Vous n'avez pas d'oeuvres enregistrées";
            return $rep->index();
          //  return view("candidat.form_recap", compact("message", "idcandidat"));
        }
        
    }

}
