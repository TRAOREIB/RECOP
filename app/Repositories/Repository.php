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
		Session::put("pj","");
    }

    // Get all instances of model
    public function all() {
        return $this->model->all()->where('actif',true);
    }

    // create a new record in the database
    public function create(array $data){
		 // MAJ OK 28/05/2021
		 
		if(!empty(session("pj"))){
			if(session("pj")=="demandeur"){
				$data["iddemandeur"]=session("iddemandeur");
			} 
			
		}
        return $this->model->create($data);
    }
 
    // update record in the database
    public function update(array $data, $id) {
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

}
