<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Repository implements RepositoryInterface {

    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model) {
        $this->model = $model;
        Session::put("pj", "");
    }

    // Get all instances of model
    public function all() {
        return $this->model->all()->where('actif', true);
    }

    // create a new record in the database
    public function create(array $data) {

        echo "le idaccreditation dehors la " . session("idaccreditation");
        if (!empty(session("idaccreditation"))) {
            echo "on arrive bien dans le id accreditation dans Repository";
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
                $data['pjcnibperprev'] = $data["pjcnibperprev"]->getClientOriginalName();
            }
            if (!empty($data["pjpasseportperprev"])) {
                $data['pjpasseportperprev'] = $data["pjpasseportperprev"]->getClientOriginalName();
            }
            if (!empty($data["pjcarteconsulaire"])) {
                $data['pjcarteconsulaire'] = $data["pjcarteconsulaire"]->getClientOriginalName();
            }

            if (!empty($data["lettrerecommendation"])) {
                //    echo $data["lettrerecommendation"]->getClientOriginalName();
                $data['lettrerecommendation'] = $data["lettrerecommendation"]->getClientOriginalName();
                //   echo $data['lettrerecommendation'];
            }


            if (isset($data["photo"])) {
                //     echo $data["photo"]->getClientOriginalName();
                $data["photo"] = $data["photo"]->getClientOriginalName();
            }
            if (isset($data["cv"])) {
                //   echo $data["cv"]->getClientOriginalName();
                $data['cv'] = $data["cv"]->getClientOriginalName();
            }
            if (isset($data["pjcnib"])) {
                $data['pjcnib'] = $data["pjcnib"]->getClientOriginalName();
            }
            if (isset($data["visamedia"])) {
                $data['visamedia'] = $data["visamedia"]->getClientOriginalName();
            }
            if (isset($data["pjpasseport"])) {
                $data['pjpasseport'] = $data["pjpasseport"]->getClientOriginalName();
            }
            if (isset($data["pjcartepresse"])) {
                $data['pjcartepresse'] = $data["pjcartepresse"]->getClientOriginalName();
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
    public function update(array $data, $id) {


        if (!empty($data['actif'])) {
            if (!empty(session("actifcorrespondant"))) {
                //    echo "//// il arrive dans correspondant dans update ////";
                $data["actif"] = 0;
            }
            if (!empty(session("actifdemandeur"))) {
                //    echo "//// il arrive dans demandeur dans update ////";
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
            $data['pjcnibperprev'] = $data["pjcnibperprev"]->getClientOriginalName();
        }
        if (!empty($data["pjpasseportperprev"])) {
            $data['pjpasseportperprev'] = $data["pjpasseportperprev"]->getClientOriginalName();
        }
        if (!empty($data["pjcarteconsulaire"])) {
            $data['pjcarteconsulaire'] = $data["pjcarteconsulaire"]->getClientOriginalName();
        }

        if (!empty($data["lettrerecommendation"])) {
            //    echo $data["lettrerecommendation"]->getClientOriginalName();
            $data['lettrerecommendation'] = $data["lettrerecommendation"]->getClientOriginalName();
            //   echo $data['lettrerecommendation'];
        }
        if (!empty(session("idaccreditation"))) {
            $data['idaccreditation'] = session("idaccreditation");
        }

        if (isset($data["photo"])) {
            //     echo $data["photo"]->getClientOriginalName();
            $data["photo"] = $data["photo"]->getClientOriginalName();
        }
        if (isset($data["cv"])) {
            // echo $data["cv"]->getClientOriginalName();
            $data['cv'] = $data["cv"]->getClientOriginalName();
        }
        if (isset($data["pjcnib"])) {
            $data['pjcnib'] = $data["pjcnib"]->getClientOriginalName();
        }
        if (isset($data["visamedia"])) {
            $data['visamedia'] = $data["visamedia"]->getClientOriginalName();
        }
        if (isset($data["pjpasseport"])) {
            $data['pjpasseport'] = $data["pjpasseport"]->getClientOriginalName();
        }
        if (isset($data["pjcartepresse"])) {
            $data['pjcartepresse'] = $data["pjcartepresse"]->getClientOriginalName();
        }

        $this->model->findOrFail($id)->update($data);
    }

    // remove record from the database
    public function delete($id) {
        $this->model->find($id)->update(["actif" => false]);
    }

    // show the record with the given id
    public function show($id) {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    public function getModel() {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations) {
        return $this->model->with($relations);
    }

    public function max($nomcolonne) {
        return $this->model::max($nomcolonne);
    }

    public function showinfodemandeur($id) {
        return $this->model::where([["iddemandeur", $id], ["actif", true]])->get();
    }

    public function showinfoaccreditation($id) {
        return $this->model::where([["idaccreditation", $id], ["actif", true]])->get();
    }

    public function showinfopj($id) {
        return $this->model::where([["idaccreditation", $id], ["actif", true]])->get();
    }

    public function showinfopjcorrespondant($id) {
        return $this->model::where([["idcorrespondant", $id], ["actif", true]])->get();
    }
	
	public function showinfopjdemandeur($id) {
        return $this->model::where([["iddemandeur", $id], ["actif", true]])->get();
    }

    //Fonction qui retourne le correspondant en fonction de l'id user
    public function showcorrespondant($id) {
        return $this->model::where([["iduser", $id], ["actif", true]])->get();
    }

    public function showcorrespondantinactif($id) {
        return $this->model::where([["iduser", $id], ["actif", false]])->get();
    }

    public function showdemandeurinactif($id) {
        return $this->model::where([["iduser", $id], ["actif", false]])->get();
    }

    public function showdemandeur($id) {
        return $this->model::where("iduser", $id)->get();
    }

    public function showaccreditationverificateur(){
         return $this->model::where([["transfer",null], ["actif", true]])->orderBy("CREATED_AT", 'desc')->get();
    }
    
    public function showaccreditationcoordonateur(){
         return $this->model::where([["transfer",true], ["actif", true],["valider",null]])->orderBy("CREATED_AT", 'desc')->get();
    }
    
    public function showmyaccreditation($id) {
        return $this->model::where([["iduser", $id], ["actif", true]])->orderBy("CREATED_AT", 'desc')->get();
    }

}
