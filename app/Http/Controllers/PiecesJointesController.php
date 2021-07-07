<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\PiecesJointes;
use App\Models\Accreditation;
use App\Models\Demandeur;
use App\Models\Correspondant;
use App\Http\Controllers\TestMailController;
use App\User;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CorrespondantController;
use App\Http\Controllers\AccreditationController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Exception;


class PiecesJointesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $piecesjointes;
    protected $pjaccreditation;
    protected $enreguser;
    protected $accreditation;
    protected $accredi;
    protected $demandeur;
    protected $demande;
    protected $correspond;
    protected $correspondant;
    protected $users;
    protected $user;
    protected $corresp;
    protected $accreditationtest;
    protected $etat;
    protected $mail;

    public function __construct(PiecesJointes $pj)
    {
        $this->demande = new Demandeur();
        $this->demandeur = new Repository($this->demande);
        $this->correspond = new Correspondant();
        $this->correspondant = new Repository($this->correspond);
        $this->users = new User();
        $this->user = new Repository($this->users);
        $this->accredi = new Accreditation();
        $this->enreguser = new RegisterController();
        $this->piecesjointes = new Repository($pj);
        $this->accreditation = new AccreditationController($this->accredi);
        $this->pjaccreditation = new Repository(new PiecesJointes);
        $this->corresp = new CorrespondantController(new Correspondant());
        $this->accreditationtest = new Repository(new Accreditation());
        $this->etat = new EtatController();
        $this->mail = new TestMailController();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $iduser = Auth::id();
        Session::put("iduser", $iduser);

        $validator = Validator::make($request->all(), [
            'lettrerecommendation' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
            'photo' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
            'pjcnib' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
            'pjcartepresse' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
            'pjcnibperprev' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
        ]);

        if ($validator->fails()) {
            return view('accreditation.pj_accreditation')
                ->withErrors($validator);
        }

        if (session('type') == 'correspondant') {

            $validator = Validator::make($request->all(), [
                'photo'  => 'required|mimes:jpg,png,gif|max:50000000000',
                'cv'  => 'required|mimes:jpg,png,pdf,gif|max:5000000000',
                'visamedia'  => 'required|mimes:jpg,png,gif|max:5000000000',
                'pjcnib'  => 'required|mimes:jpg,png,gif|max:50000000000',
                'pjpasseport'  => 'required|mimes:jpg,png,gif|max:5000000000',
                'pjcarteconsulaire'  => 'required|mimes:jpg,png,gif|max:5000000000',
                'pjcartepresse'  => 'required|mimes:jpg,png,gif|max:5000000000'
            ]);

            if ($validator->fails()) {

                return view('correspondant.ajout_correspondant_suite')
                    ->withErrors($validator);
            }


            echo $request->idcorrespondant;
            Session::put("idaccreditation", null);
            Session::put("iddemandeur", null);
            Session::put("idcorrespondant", $request->idcorrespondant);
            Session::put("pj", "correspondant");
            $request->actif = "true";
            $this->savepiecesjointes($request);
            $this->correspondant->update($request->only($this->correspondant->getModel()->fillable), $request->idcorrespondant);
            $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
            // GENERATION DU RECIPISSE
            $this->etat->recipissecorrespondant();
            //ENVOI MAIL
            $this->mail->SendMail();
            return view("correspondant.message_correspondant");
        }
        if (session('type') == 'demandeur') {
            //  echo "j'arrive dans demandeur walayi";

            $validator = Validator::make($request->all(), [
                'lettrerecommendation' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
                'photo' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
                'pjcnib' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
                'pjcartepresse' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
                'pjcnibperprev' => 'required|mimes:png,jpg,jpeg,pdf|max:1024',
            ]);

            if ($validator->fails()) {
                return view('accreditation.pj_accreditation')
                    ->withErrors($validator);
            }


            Session::put("idcorrespondant", null);
            Session::put("pj", "demandeur");
            $request->actif = "true";
            $this->savepiecesjointes($request);
            $this->demandeur->update($request->only($this->demandeur->getModel()->fillable), session('iddemandeur'));
            $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
            // GENERATION DU RECIPISSE
            $iddemandeur = session("iddemandeur");
            $this->etat->recipisseaccreditation($iddemandeur);
            //ENVOI MAIL
            $this->mail->SendMail();
            return view('accreditation.message_accreditation');
        }

        // Creation des pieces jointes

        $this->piecesjointes->create($request->only($this->piecesjointes->getModel()->fillable));
    }

    public function savepiecesjointes(Request $request)
    {
        $iduser = Auth::id();
        if (!empty($request->file('lettrerecommendation'))) {
            echo "dans lettre de recommendation";
            $nom = $request->lettrerecommendation->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('lettrerecommendation')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('photo'))) {
            $nom = $request->photo->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('photo')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('cv'))) {
            $nom = $request->cv->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('cv')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('visamedia'))) {
            $nom = $request->visamedia->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('visamedia')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcnib'))) {
            $nom = $request->pjcnib->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('pjcnib')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjpasseport'))) {
            $nom = $request->pjpasseport->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('pjpasseport')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcarteconsulaire'))) {
            $nom = $request->pjcarteconsulaire->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('pjcarteconsulaire')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjpasseport'))) {
            $nom = $request->pjpasseport->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('pjpasseport')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcartepresse'))) {
            $nom = $request->pjcartepresse->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('pjcartepresse')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('pjcnibperprev'))) {
            $nom = $request->pjcnibperprev->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('pjcnibperprev')->storeAs(config('documents.path'), $nom, "public");
        }
        if (!empty($request->file('lettrerecommendation'))) {
            $nom = $request->lettrerecommendation->getClientOriginalName();
            $nom = $iduser . date('y-m-d') . time() . $nom;
            $request->file('lettrerecommendation')->storeAs(config('documents.path'), $nom, "public");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "le id accreditation " . $id;
        $editpjaccreditation = $this->piecesjointes->showinfopj($id);
        echo $editpjaccreditation;
        if ($editpjaccreditation == "[]") {
            //selection de l'id du demandeur
            $accreditation = $this->accreditationtest->show($id);
            $iddemandeur = $accreditation->iddemandeur;
            echo $iddemandeur;
            echo "on est la " . $accreditation;
            Session::put("iddemandeur", $iddemandeur);
            return view("accreditation.pj_accreditation");
        }
        return view("accreditation.modifpj_accreditation", compact("editpjaccreditation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Pieces Jointes Accreditation (pjaccreditation)


    public function showpjaccreditation($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpjaccreditation($id, Request $request)
    {
        //
        $editpjaccreditation = $this->piecesjointes->show($id);
        //echo $editpjaccreditation;
        //echo $id;
        return view('accreditation.modifpj_accreditation', compact('editpjaccreditation'));
        //echo $request->pjcnib;
        //echo $request->photo;
    }

    public function editpjcorrespondant(Request $request)
    {
        echo "on y arrive ";
        $maxid = Auth::id();
        Session::put("type", "correspondant");
        $idpiecesjointes = $request->idpj;
        $idcorrespondant = $request->idcorrespondant;
        //  echo $idpiecesjointes;
        try {
            $editpjcorrespondant = $this->piecesjointes->show($idpiecesjointes);
        } catch (Exception $e) {
            //   return $e->getMessage();
            $correspondant = $this->correspondant->showcorrespondant($maxid);
            foreach ($correspondant as $corresp) {
                $maxid = $corresp->idcorrespondant;
            }

            return view('correspondant.ajout_correspondant_suite', compact("maxid", "request"));
        }
        //   echo $editpjcorrespondant;
        return view("correspondant.modif_pj", compact("editpjcorrespondant", "idcorrespondant"));
    }

    public function editpjdemandeur(Request $request)
    {
        //  echo "on y arrive ";
        $idpiecesjointes = $request->idpj;
        $iddemandeur = $request->iddemandeur;
        //  echo $idpiecesjointes;
        $editpjdemandeur = $this->piecesjointes->show($idpiecesjointes);
        return view("demandeur.modif_pj", compact("editpjdemandeur", "iddemandeur"));
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
        //  echo "on est dans la pièce jointe";
        $idpj = $request->idpj;
        //  echo $idpj;
        Session::put("iduser", session("moniduser"));
        $this->savepiecesjointes($request);
        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $idpj);
        $request->idaccreditation = session("monidaccreditation");
        $request->iduser = session("moniduser");
        $request->iddemandeur = session("moniddemandeur");
        $request->idcorrespondant = session("monidcorrespondant");
        Session::put("iduser", session("moniduser"));
        return $this->accreditation->detailsaccreditation($request);
    }

    public function updatecorrespondant(Request $request)
    {
        $idpj = $request->idpj;
        $this->savepiecesjointes($request);
        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $idpj);
        $request->idcorrespondant = $request->idcorresp;
        $request->idpiecesjointes = $idpj;
        return $this->corresp->detailsCorrespondant($request);
    }

    public function updatedemandeur(Request $request)
    {
        $idpj = $request->idpj;
        $this->savepiecesjointes($request);
        $this->piecesjointes->update($request->only($this->piecesjointes->getModel()->fillable), $idpj);
        $request->iddemandeur = $request->iddemand;
        $request->idpiecesjointes = $idpj;
        return $this->accredi->detailsCorrespondant($request);
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
