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
   // return view('candidat.recherchenational');
    return view('candidat.rechercheinternational');
  //return view('candidat.listecorrespondant');
  //return view('candidat.listecorrespondantadmin');
});

// Route::get('documents', function () {
//     return view('documents.form_documents');
// });

// Route::post('annuler', function () {
//     return back()->withInput();
// });

// Route::get('home', function () {
//     return view('candidat.home');
// })->name("home");

// Route::get('demandeinscrip',"OeuvreController@demandeinscrip");
// //Route::get('presseecrite', function () {
// //    return view('candidat.form_presseecrite');
// //});



// Route::get('presseligne','OeuvreController@presseligne');
// Route::get('presseecrite','OeuvreController@presseecrite');
// Route::get('mediatele','OeuvreController@pressetelevision');
// Route::get('mediaradio','OeuvreController@presseradio');
// Route::post('recap','OeuvreController@recapinscription');
// Route::get('recepisse','SnappyController@generer')->name("recepisse");
// Route::get('repertoireliste','SnappyController@repertoire')->name("repertoireliste");
// Route::get('conindex','ConnexionController@debut')->name("conindex"); 
// Route::post('connecte','ConnexionController@connecte')->name("connecte"); 
// Route::get('deconnecte','ConnexionController@deconnecte')->name('deconnecte');
// Route::post('choixrepertoire','RepertoireController@repertoire')->name('choixrepertoire');
// Route::get('getgenre','OeuvreController@getGenre')->name('getgenre');  
// Route::post('chgpassword','OeuvreController@showFormPassword')->name('chgpassword');  


// Route::post('modifcandidat','CandidatController@modifCandidat')->name('modifcandidat');
// Route::resource('candidat', 'CandidatController');
// Route::resource('password', 'ModifPasswordController');
// Route::resource('categorie', 'CategorieController');
// Route::resource('genre', 'GenreController');
// Route::resource('oeuvre', 'OeuvreController');
// Route::resource('categoriegenre', 'CategorieGenreController');
// Route::resource('concours', 'ConcoursController');
// Route::resource('concourscategorie', 'ConcoursCategorieController');
// Route::resource('palmares', 'PalmaresController');
// Route::resource('album', 'AlbumController');
// Route::resource('phototheque', 'PhotothequeController');
// Route::resource('document', 'DocumentController');
// Route::resource('repertoire','RepertoireController');
