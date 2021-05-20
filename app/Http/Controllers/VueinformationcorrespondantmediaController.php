<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vueinformationcorrespondantmedia ;
class VueinformationcorrespondantmediaController extends Controller
{
    //
    public function index(){





				$liste=vueinformationcorrespondantmedia::all() ;
				return view('liste', ['liste'=>$liste]) ;


				}


}
