<?php

namespace App\Repositories;

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
        // MAJ OK 28/05/2021

      //    echo $data['photo'];
          if (!empty(session("accrediregion"))) {
               $data['idregion']=session('idregion');
               $data['idaccreditation'] = session('idaccreditation');
              
          }
        if (!empty(session("pj"))) {

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
                echo $data["cv"]->getClientOriginalName();
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


        if (!empty(session("pj"))) {
            $data["iduser"] = session("iduser");
            $data["iddemandeur"] = session("iddemandeur");
            $data["idaccreditation"] = session("idaccreditation");
        }

        if (!empty(session("pj"))) {
            $data["iduser"] = session("iduser");
        }
        $this->model->findOrFail($id)->update($data);
    }

    // remove record from the database
    public function delete($id) {
        $this->model->find($id)->update(["actif" => false]);
    }

    // show the record with the given id
    public function show($idinfo) {
        return $this->model->findOrFail($idinfo);
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

}
