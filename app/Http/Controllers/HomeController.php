<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CoordonateurController;
use App\Http\Controllers\VerificateurController;
use App\Repositories\RepositoryVue;
use App\Repositories\Repository;
use App\Models\Accreditation;
use App\Models\Correspondant;
use App\Models\PiecesJointes;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $vuecorrespondant = "vuecorrespondant";
    protected $vueaccreditation = "vueaccreditation";
    protected $vueaccrediregion = "vueaccrediregion";
    protected $correspondantvue;
    protected $accreditation;
    protected $correspondant;
    protected $piecesjointes;
    protected $coordonateur;
    protected $verificateur;

    public function __construct()
    {

        $this->middleware('auth');
        $this->correspondantvue = new RepositoryVue();
        $this->accreditation = new Repository(new Accreditation());
        $this->correspondant = new Repository(new Correspondant());
        $this->piecesjointes = new Repository(new PiecesJointes());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $idpiecesjointes = null;
        $idcomptecorrespondant = null;
        //creer une instance pour utiliser la fonction index dans verificateur controller
        $this->verificateur = new VerificateurController();
        $this->coordonateur = new CoordonateurController();
        $correspondantexiste = 0;

        echo Auth::user()->profil;
        if (Auth::user()->profil == "Verificateur") {
            echo "il est la";
            return  $this->verificateur->index();
        }
        if (Auth::user()->profil == "Coordonateur") {
            echo "il est le coordonateur";
            return $this->coordonateur->index();
        }

        $correspondant = $this->correspondantvue->showvue($this->vuecorrespondant, $id);
        //
        $correspondantinactif = $this->correspondant->showcorrespondantinactif($id);
        foreach ($correspondantinactif as $coinactif) {
            $idcomptecorrespondant = $coinactif->idcorrespondant;
        }
        $idcorrespondant = $this->correspondant->showcorrespondant($id);

        echo $idcorrespondant;
        foreach ($idcorrespondant as $corresp) {
            $idcomptecorrespondant = $corresp->idcorrespondant;
            $correspondantexiste = 1; 
        }

        //        echo "hello";
        $accreditations = $this->accreditation->showmyaccreditation($id);
        $pjcorrespondant = $this->piecesjointes->showinfopjcorrespondant($idcomptecorrespondant);
        foreach ($pjcorrespondant as $pj) {
            $idpiecesjointes = $pj->id;
        }

        //   echo $pjcorrespondant;
        return view('home', compact("correspondant", "accreditations", "idcomptecorrespondant", "pjcorrespondant", "idpiecesjointes","correspondantexiste"));
    }
}
