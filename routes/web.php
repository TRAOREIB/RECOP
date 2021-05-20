<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 //Route::get('/', function () {
   // return view('candidat.recherchenational');
    //return view('candidat.rechercheinternational');
  //return view('candidat.listecorrespondant');
  //return view('candidat.listecorrespondantadmin');
// return view('candidat.form_ajouter');
 //});

//Route::resource('vehicule', 'VehiculeController');

Route::resource('recherche', 'RechercheController');

Route::get('rechercheregion', 'RechercheController@rechercheregion')->name('region');
