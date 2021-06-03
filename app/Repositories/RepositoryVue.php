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
           return DB::table("$vue")->where('actif',true)->orderBy('dateinfo','DESC')->get();
    }

    public function showvue($vue, $id) {
         return DB::table("$vue")->where("id","=",$id)->where("actif","=",true)->get();
    }

    public function rechercheregion($vue, $region){
     return DB::table("$vue")->where("region","=",$region)->where("actif","=",true)->get();
    }

    public function rechercheregioninter($vue, $region){
     return DB::table("$vue")->where("region","=",$region)->where("actif","=",true)->get();
    }

}
