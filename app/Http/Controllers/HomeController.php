<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Repositories\RepositoryVue;
use App\Repositories\Repository;
use App\Models\Accreditation;
use App\Models\Correspondant;
use App\Models\PiecesJointes;
use Illuminate\Http\Request;

class HomeController extends Controller {

    protected $vuecorrespondant = "vuecorrespondant";
    protected $vueaccreditation = "vueaccreditation";
    protected $vueaccrediregion="vueaccrediregion";
    protected $correspondantvue;
    protected $accreditation;
    protected $correspondant;
    protected $piecesjointes;

    public function __construct() {
        
        $this->middleware('auth');
        $this->correspondantvue=new RepositoryVue();
        $this->accreditation=new Repository(new Accreditation());
        $this->correspondant=new Repository(new Correspondant());
        $this->piecesjointes=new Repository(new PiecesJointes());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
         $id = Auth::id();
         $idpiecesjointes=null;
         $idcomptecorrespondant=null;
        $correspondant=$this->correspondantvue->showvue($this->vuecorrespondant, $id);
        $idcorrespondant=$this->correspondant->showcorrespondant($id);
        foreach($idcorrespondant as $corresp){
            $idcomptecorrespondant=$corresp->idcorrespondant;
        }
     
//        echo "hello";
        $accreditations=$this->accreditation->showmyaccreditation($id); 
        $pjcorrespondant= $this->piecesjointes->showinfopjcorrespondant($idcomptecorrespondant);
        foreach($pjcorrespondant as $pj){
             $idpiecesjointes=$pj->id;
        }

     //   echo $pjcorrespondant;
        return view('home',compact("correspondant","accreditations","idcomptecorrespondant","pjcorrespondant","idpiecesjointes"));
    }

}
