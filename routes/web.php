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


Route::get('/', function () {
    return view('accueil.accueil');
});  

// Route::get('/', function () {
//     return view('demandeur.ajout_correspondant');
// }); 
/*Route::get('/', function () {
    return view('template');
});*/


//  Route::get('/', function () {
//   return view('candidat.listecorrespondant');
//   //return view('candidat.listecorrespondantadmin');
// // return view('candidat.form_ajouter');
//  });

// Route::resource('vehicule', 'VehiculeController');

Route::resource('demandeur', 'DemandeurController');

Route::resource('accreditation', 'AccreditationController');

Route::resource('recherche', 'RechercheController');
Route::resource('correspondant', 'CorrespondantController');
Route::resource('piecesjointes', 'PiecesJointesController');
//Route::resource('piecesjointesaccreditation', 'PiecesJointesAccreditationController');
Route::post('pjaccreditation', 'PiecesJointesController@storepjaccreditation')->name('pjaccreditation');
