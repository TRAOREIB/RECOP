<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Vueinformationcorrespondantmedia;



use Illuminate\Http\Request;

class PaginationControlller extends Controller
{
    //
    public function paginationvueinformation() {

     
        

        $liste = Vueinformationcorrespondantmedia::select('vueinformationcorrespondantmedias.*')->orderBy('vueinformationcorrespondantmedias.id')->paginate(100);
    
    
            return view('liste', ['liste'=>$liste]) ;
          //  return "good" ;
    }
}
