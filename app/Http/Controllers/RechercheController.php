<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\RepositoryVue;

class RechercheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $vuerecherche;
    protected $vue="vuecorrespondant";

    public function __construct() {
        $this->vuerecherche = new RepositoryVue();
    }

    public function index()
    {
        //
        $allcorrespondant = $this->vuerecherche->allvue($this->vue);
        //echo $allcorrespondant;
        return view('candidat.recherchenational',compact('allcorrespondant'));
    }


    public function rechercheregion(Request $request)
    {
        //
        $allcorrespondant = $this->vuerecherche->rechercheregion($this->vue,$request->region);
        //echo $allcorrespondant;
        return view('candidat.recherchenational',compact('allcorrespondant'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
