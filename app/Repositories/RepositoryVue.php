<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class RepositoryVue implements RepositoryVueInterface {

    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct() {
        
    }

    public function allvue($vue) {
        //return DB::table("$vue")->where("actif","=",true)->get();
        // return DB::table("$vue")->where("actif","=",true)->get();
        return DB::table("$vue")->where('actif', true)->orderBy('created_at', 'DESC')->get();
    }

    public function showvue($vue, $id) {
        return DB::table("$vue")->where("id", "=", $id)->where("actif", "=", true)->get();
    }

    public function recherchetype($vue, $typecorrespondant, $originecorrespondant) {
		if($typecorrespondant==null && $originecorrespondant==null){
		return DB::table("$vue")->where("actif", "=", true)->get();	
		}
		if($typecorrespondant!=null && $originecorrespondant!=null){
        return DB::table("$vue")->where("typecorrespondant", "=", $typecorrespondant)->where("originecorrespondant","=",$originecorrespondant)->where("actif", "=", true)->get();
		}
		if($typecorrespondant!=null && $originecorrespondant==null){
        return DB::table("$vue")->where("typecorrespondant", "=", $typecorrespondant)->where("actif", "=", true)->get();
		}
		if($typecorrespondant==null && $originecorrespondant!=null){
        echo ('type null & origine non null');
		return DB::table("$vue")->where("originecorrespondant", "=", $originecorrespondant)->where("actif", "=", true)->get();
		}
	}
	
	 public function recherchetypeorgane($vue, $typeorgane) {
		if($typeorgane==null){
		return DB::table("$vue")->where("actif", "=", true)->get();	
		}
		else{
        return DB::table("$vue")->where("typeorgane", "=", $typeorgane)->where("actif", "=", true)->get();
		}
	}

    public function rechercheaccredi($vue, $nomregion) {
		if($nomregion==null){
        return DB::table("$vue")->where("actif", "=", true)->get();
		}
		else{
		return DB::table("$vue")->where("nomregion", "=", $nomregion)->where("actif", "=", true)->get();	
		}	
		
	}

    public function showmyaccreditation($vue, $iduser) {
        return DB::table("$vue")->where("iduser", "=", $iduser)->where("actif", "=", true)->get();
    }

}
