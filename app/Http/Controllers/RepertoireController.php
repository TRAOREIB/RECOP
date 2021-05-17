<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RepertoireController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $categories = DB::table("categorie")
                ->pluck("libelle", "id");
        return view("candidat.form_administrateur", compact("categories"));
    }

    public function repertoire(Request $request) {

        $categories = DB::table("categorie")
                ->pluck("libelle", "id");

        $macategorie = DB::table("categorie")
                ->where("id", "=", $request->categorie)
                ->first();

      
        if ($macategorie->libelle != "Choisir") {

            if ($request->genre == "Tous") {
                $listoeuvre = DB::table('vueoeuvres')
                        ->join("candidat", "candidat.id", "=", "vueoeuvres.idcandidat")
                        ->join("oeuvre", "oeuvre.id", "=", "vueoeuvres.id")
                        ->select("candidat.*", "vueoeuvres.*","oeuvre.fichieroeuvre1","oeuvre.fichieroeuvre2","oeuvre.url1","oeuvre.url2")
                        ->where('categorie', "=", "$macategorie->libelle")
                        ->get();
            } else {
                $listoeuvre = DB::table('vueoeuvres')
                        ->join("candidat", "candidat.id", "=", "vueoeuvres.idcandidat")
                        ->join("oeuvre", "oeuvre.id", "=", "vueoeuvres.id")
                        ->select("candidat.*", "vueoeuvres.*","oeuvre.fichieroeuvre1","oeuvre.fichieroeuvre2","oeuvre.url1","oeuvre.url2")
                        ->where('categorie', "=", "$macategorie->libelle")
                        ->where('vueoeuvres.idgenre', "=", "$request->genre")
                        ->get();
                
              
            }

              echo $listoeuvre;
            return view("candidat.form_administrateur", compact("listoeuvre", "categories"));
        } else {
            $message = "vous devez choisir une categorie";
            return view("candidat.form_administrateur", compact("message", "categories"));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
