<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Repository implements RepositoryInterface
{

    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
        Session::put("pj", "");
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all()->where('actif', true);
    }

    // create a new record in the database
    public function create(array $data)
    {

        //le type du fichier à enregistrer dans la table document
        if (!empty(session("type"))) {
            //  echo "on arrive bien dans le id accreditation dans Repository";
            $data['type'] = session("type");
        }

        //Le nom du fichier existe on l'enregistre dans la table document
        if (!empty(session("nomfichier"))) {
            //  echo "on arrive bien dans le id accreditation dans Repository";
            $data['nomdocument'] = session("nomfichier");
        }

        //  echo "le idaccreditation dehors la " . session("idaccreditation");
        if (!empty(session("idaccreditation"))) {
            //  echo "on arrive bien dans le id accreditation dans Repository";
            $data['idaccreditation'] = session("idaccreditation");
        }
        // MAJ OK 28/05/2021
        //    echo $data['photo'];
        if (!empty(session("iduser"))) {
            $data['iduser'] = session('iduser');
        }
        if (!empty(session("idcorrespondant"))) {
            $data['idcorrespondant'] = session('idcorrespondant');
        }

        if (!empty(session("ac"))) {
            $data['idregion'] = session('idregion');
            $data['idaccreditation'] = session('idaccreditation');
        }

        if (!empty(session("accrediregion"))) {
            $data['idregion'] = session('idregion');
            $data['idaccreditation'] = session('idaccreditation');
        }
        if (!empty(session("pj"))) {

            if (!empty(session("idcorrespondant"))) {
                $data['idcorrespondant'] = $data["idcorrespondant"];
            }
            if (!empty($data["pjcnibperprev"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcnibperprev"]->getClientOriginalName();
                $data['pjcnibperprev'] = $nomfichier;
            }
            if (!empty($data["pjpasseportperprev"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjpasseportperprev"]->getClientOriginalName();
                $data['pjpasseportperprev'] = $nomfichier;
            }
            if (!empty($data["pjcarteconsulaire"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcarteconsulaire"]->getClientOriginalName();
                $data['pjcarteconsulaire'] = $nomfichier;
            }

            if (!empty($data["lettrerecommendation"])) {
                //    echo $data["lettrerecommendation"]->getClientOriginalName();
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["lettrerecommendation"]->getClientOriginalName();
                $data['lettrerecommendation'] = $nomfichier;
                //   echo $data['lettrerecommendation'];
            }


            if (isset($data["photo"])) {
                //     echo $data["photo"]->getClientOriginalName();
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["photo"]->getClientOriginalName();
                $data["photo"] = $nomfichier;
            }
            if (isset($data["cv"])) {
                //   echo $data["cv"]->getClientOriginalName();
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["cv"]->getClientOriginalName();
                $data['cv'] = $nomfichier;
            }
            if (isset($data["pjcnib"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcnib"]->getClientOriginalName();
                $data['pjcnib'] = $nomfichier;
            }
            if (isset($data["visamedia"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["visamedia"]->getClientOriginalName();
                $data['visamedia'] = $nomfichier;
            }
            if (isset($data["pjpasseport"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjpasseport"]->getClientOriginalName();
                $data['pjpasseport'] = $nomfichier;
            }
            if (isset($data["pjcartepresse"])) {
                $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcartepresse"]->getClientOriginalName();
                $data['pjcartepresse'] = $nomfichier;
            }

            if (session("pj") == "demandeur") {
                $data["iddemandeur"] = session("iddemandeur");
            }
            if (session("pj") == "correspondant") {
                $data["idcorrespondant"] = session("idcorrespondant");
            }
        }

        return $this->model->create($data);
    }

    // update record in the database
    public function update(array $data, $id)
    {

        if (!empty(session("password"))) {
            $data["password"] = session('password');
        }

        if (!empty($data['actif'])) {
            if (!empty(session("actifcorrespondant"))) {
              
                $data["actif"] = 0;
            }
            if (!empty(session("actifdemandeur"))) {
             
                $data["actif"] = 0;
            }
        }
        if (!empty(session("pj"))) {
            $data["iduser"] = session("iduser");
            $data["iddemandeur"] = session("iddemandeur");
            $data["idaccreditation"] = session("idaccreditation");
        }

        if (!empty($data["iduser"])) {
            $data["iduser"] = session("iduser");
        }
        if (!empty(session("name"))) {
            $data["name"] = session("name");
        }
        if (!empty($data["pjcnibperprev"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcnibperprev"]->getClientOriginalName();
            $data['pjcnibperprev'] = $nomfichier;
        }
        if (!empty($data["pjpasseportperprev"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjpasseportperprev"]->getClientOriginalName();
            $data['pjpasseportperprev'] = $nomfichier;
        }
        if (!empty($data["pjcarteconsulaire"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcarteconsulaire"]->getClientOriginalName();
            $data['pjcarteconsulaire'] = $nomfichier;
        }

        if (!empty($data["lettrerecommendation"])) {
            //    echo $data["lettrerecommendation"]->getClientOriginalName();
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["lettrerecommendation"]->getClientOriginalName();
            $data['lettrerecommendation'] = $nomfichier;
            //   echo $data['lettrerecommendation'];
        }
        if (!empty(session("idaccreditation"))) {
            $data['idaccreditation'] = session("idaccreditation");
        }

        if (isset($data["photo"])) {
            //     echo $data["photo"]->getClientOriginalName();
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["photo"]->getClientOriginalName();
            $data["photo"] = $nomfichier;
        }
        if (isset($data["cv"])) {
            // echo $data["cv"]->getClientOriginalName();
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["cv"]->getClientOriginalName();
            $data['cv'] = $nomfichier;
        }
        if (isset($data["pjcnib"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcnib"]->getClientOriginalName();
            $data['pjcnib'] = $nomfichier;
        }
        if (isset($data["visamedia"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["visamedia"]->getClientOriginalName();
            $data['visamedia'] = $nomfichier;
        }
        if (isset($data["pjpasseport"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjpasseport"]->getClientOriginalName();
            $data['pjpasseport'] = $nomfichier;
        }
        if (isset($data["pjcartepresse"])) {
            $nomfichier = session('iduser') . date('y-m-d') . time() . $data["pjcartepresse"]->getClientOriginalName();
            $data['pjcartepresse'] = $nomfichier;
        }

        $this->model->findOrFail($id)->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        $this->model->find($id)->update(["actif" => false]);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function max($nomcolonne)
    {
        return $this->model::max($nomcolonne);
    }

    public function showinfodemandeur($id)
    {
        return $this->model::where([["iddemandeur", $id], ["actif", true]])->get();
    }

    public function showinfoaccreditation($id)
    {
        return $this->model::where([["idaccreditation", $id], ["actif", true]])->get();
    }

    public function showinfopj($id)
    {
        return $this->model::where([["idaccreditation", $id], ["actif", true]])->get();
    }

    public function showinfopjcorrespondant($id)
    {
        return $this->model::where([["idcorrespondant", $id], ["actif", true]])->get();
    }

    public function showinfopjdemandeur($id)
    {
        return $this->model::where([["iddemandeur", $id], ["actif", true]])->get();
    }

    //Fonction qui retourne le correspondant en fonction de l'id user
    public function showcorrespondant($id)
    {
        return $this->model::where([["iduser", $id], ["actif", true]])->get();
    }

    public function showcorrespondantinactif($id)
    {
        return $this->model::where([["iduser", $id], ["actif", false]])->get();
    }

    public function showdemandeurinactif($id)
    {
        return $this->model::where([["iduser", $id], ["actif", false]])->get();
    }

    public function showdemandeur($id)
    {
        return $this->model::where("iduser", $id)->get();
    }

    public function showaccreditationverificateur()
    {
        return $this->model::where([["transfer", null], ["actif", true]])->orderBy("CREATED_AT", 'desc')->get();
    }

    public function showaccreditationcoordonateur()
    {
        return $this->model::where([["transfer", true], ["actif", true], ["valider", 0]])->orderBy("CREATED_AT", 'desc')->get();
    }

    public function showaccreditationvalide()
    {
        return $this->model::where([["transfer", true], ["actif", true], ["valider", 1]])->orderBy("CREATED_AT", 'desc')->get();
    }

    public function showaccreditationinvalide()
    {
        return $this->model::where([["transfer", true], ["actif", true], ["valider", 2]])->orderBy("CREATED_AT", 'desc')->get();
    }

    public function showmyaccreditation($id)
    {
        return $this->model::where([["iduser", $id], ["actif", true]])->orderBy("CREATED_AT", 'desc')->get();
    }
    public function showiduser($identifiant)
    {
        return $this->model::where("identifiant", $identifiant)->get();
    }

    public function showuser($iduser)
    {
        return $this->model::where("id", $iduser)->get();
    }

    public function showuserinactif($iduser)
    {
        return $this->model::where([["id", $iduser], ["valid", false]])->get();
    }

    public function alluser()
    {
        return $this->model::where("valid", true)->get();
    }

    public function deleteuser($id)
    {
        $this->model->find($id)->update(["valid" => false]);
    }
}
