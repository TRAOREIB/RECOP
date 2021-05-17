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
         return DB::table("$vue")->where("actif","=","true")->get();
    }

    public function showvue($vue, $id) {
         return DB::table("$vue")->where("id","=",$id)->where("actif","=","true")->get();
    }

}
