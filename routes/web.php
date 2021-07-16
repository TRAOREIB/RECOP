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


Route::get('choixcorrespondant', function () {
    return view('correspondant.choix_correspondant');
});

Route::get('accueil', function () {
    return view('accueil.accueil');
});

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
Route::resource('home', 'HomeController');
Route::resource('verificateur', 'VerificateurController');
Route::resource('coordonateur', 'CoordonateurController');
Route::post('transfererdemande', 'VerificateurController@transferer')->name('transfererdemande');
Route::post('validerdemande', 'CoordonateurController@validerdemande')->name('validerdemande');
Route::post('invaliderdemande', 'CoordonateurController@invaliderdemande')->name('invaliderdemande');
Route::post('recherchedemande', 'CoordonateurController@recherchedemande')->name('recherchedemande');
Route::post('info', 'CoordonateurController@showMessage')->name('info');
Route::post('envoieinfo', 'CoordonateurController@invaliderdemande')->name('envoieinfo');
Route::resource('ampliateur', 'AmpliateurController');
Route::post('infoampliateur', 'AmpliateurController@formCommenter')->name('infoampliateur');
Route::get('listemessages', 'AmpliateurController@listeMessages')->name('listemessages');
Route::post('formmodifiermessage', 'AmpliateurController@formModifMessage')->name('formmodifiermessage');
Route::post('modifiermessage', 'AmpliateurController@modifierMessage')->name('modifiermessage');
Route::post('tousmessage', 'AmpliateurController@allMessages')->name('tousmessage');


// AJOUT ROUTE DEMANDEURS 17/06/2021

Route::post('detailsdemandeur', 'DemandeurController@detailsdemandeur')->name('detailsdemandeur');
// END

// LISTE PDF 

Route::get('generatepdf', 'EtatController@listevisiteur')->name('generatepdf');
Route::get('listecorrespondant', 'EtatController@listecorrespondant')->name('listecorrespondant');
Route::get('listeaccreditation1', 'EtatController@listeaccreditation')->name('listeaccreditation1');
Route::get('listedemandeur1', 'EtatController@listedemandeur')->name('listedemandeur1');
Route::get('generateattestation', 'EtatController@attestationaccreditation')->name('generateattestation');
Route::post('attestationdef', 'EtatController@attestationaccreditation')->name('attestationdef');
//END


Route::resource('accreditation', 'AccreditationController');
Route::post('retirersujet', 'AccreditationController@retirerSujet')->name("retirersujet");
/* Route::resource('recherche', 'RechercheController'); */
Route::resource('correspondant', 'CorrespondantController');
Route::resource('piecesjointes', 'PiecesJointesController');
Route::post('detailsaccreditation', 'AccreditationController@detailsaccreditation')->name('detailsaccreditation');
Route::post('detailscoordonateur', 'CoordonateurController@detailsaccreditation')->name('detailscoordonateur');
Route::post('detailsampliateur', 'AmpliateurController@detailsaccreditation')->name('detailsampliateur');

Route::post('detailsverificateur', 'VerificateurController@detailsaccreditation')->name('detailsverificateur');
Route::post('modifsujet', 'AccreditationController@modifsujets')->name('modifsujet');
Route::post('retraitmodifsujet', 'AccreditationController@retirerSujetModif')->name('retraitmodifsujet');
Route::post('detailscorrespondant', 'CorrespondantController@detailsCorrespondant')->name('detailscorrespondant');
Route::post('editpjcorrespondant', 'PiecesJointesController@editpjcorrespondant')->name('editpjcorrespondant');
Route::post('updatecorrespondant', 'PiecesJointesController@updatecorrespondant')->name('updatecorrespondant');
Route::post('devenircorrespondant', 'CorrespondantController@devenirCorrespondant')->name('devenircorrespondant');
Route::post('choixdevenircorrespondant', 'CorrespondantController@choixCorrespondantDevenir')->name('choixdevenircorrespondant');


Route::post('formdevenirdemandeur', 'DemandeurController@formDemandeur')->name('formdevenirdemandeur');
Route::post('nouvcorrespondant', 'CorrespondantController@storenouvCorrespondant')->name('nouvcorrespondant');
Route::post('nouvcorrespondantpj', 'CorrespondantController@strorenouvcorrespondantpj')->name('nouvcorrespondantpj');
Route::post('devenirdemandeur', 'DemandeurController@devenirdemandeur')->name('devenirdemandeur');
Route::post('storenouvdemandeur', 'DemandeurController@storenouvdemandeur')->name('storenouvdemandeur');
Route::post('nouvdemandeurpj', 'DemandeurController@strorenouvdemandeurpj')->name('nouvdemandeurpj');
Route::post('modifcorrespondant', 'CorrespondantController@formModifCorrespondant')->name('modifcorrespondant');
Route::post('nouveaudemandeur', 'DemandeurController@form_demandeur')->name('nouveaudemandeur');
Route::post('modifdemandeur', 'DemandeurController@formChoixDemandeur')->name('modifdemandeur');
Route::post('formdemandeur', 'DemandeurController@formModifDemandeur')->name('formdemandeur');

//Route::resource('information', 'RechercheController');


//Route::resource('information', 'RechercheController');

Route::resource('informations', 'InformationController');
Route::get('informationvue', 'InformationController@indexvue');
Route::get('enrinf', 'InformationController@index')->name('enrinf');;
Route::get('listeinfoperso', 'InformationController@listeinfoperso');
Route::get('editfv/{idinfo}', 'InformationController@editfv')->name('editfv');
Route::put('updatefv/{idinfo}', 'InformationController@updatefv')->name('updatefv');
Route::put('destroyfv/{idinfo}', 'InformationController@destroyfv')->name('destroyfv');

Route::resource('informations', 'InformationController');
Route::get('informationvue', 'InformationController@indexvue');
Route::get('enrinf', 'InformationController@index')->name('enrinf');;

//Route::get('rechercheinfo', 'InformationController@indexvue');
//Route::get('demandeinscrip',"OeuvreController@demandeinscrip");
//Route::get('presseecrite', function () {
//    return view('candidat.form_presseecrite');
//});



//Route::get('presseligne','OeuvreController@presseligne');
//Route::get('presseecrite','OeuvreController@presseecrite');
//Route::get('mediatele','OeuvreController@pressetelevision');
//Route::get('mediaradio','OeuvreController@presseradio');
//Route::post('recap','OeuvreController@recapinscription');
//Route::get('recepisse','SnappyController@generer')->name("recepisse");
//Route::get('repertoireliste','SnappyController@repertoire')->name("repertoireliste");
//Route::get('conindex','ConnexionController@debut')->name("conindex"); 
//Route::post('connecte','ConnexionController@connecte')->name("connecte"); 
//Route::get('deconnecte','ConnexionController@deconnecte')->name('deconnecte');
//Route::post('choixrepertoire','RepertoireController@repertoire')->name('choixrepertoire');
//Route::get('getgenre','OeuvreController@getGenre')->name('getgenre');  
//Route::post('chgpassword','OeuvreController@showFormPassword')->name('chgpassword');  
//
//
//Route::post('modifcandidat','CandidatController@modifCandidat')->name('modifcandidat');
//Route::resource('candidat', 'CandidatController');
//Route::resource('password', 'ModifPasswordController');
//Route::resource('categorie', 'CategorieController');
//Route::resource('genre', 'GenreController');
//Route::resource('oeuvre', 'OeuvreController');
//Route::resource('categoriegenre', 'CategorieGenreController');
//Route::resource('concours', 'ConcoursController');
//Route::resource('concourscategorie', 'ConcoursCategorieController');
//Route::resource('palmares', 'PalmaresController');
//Route::resource('album', 'AlbumController');
//Route::resource('phototheque', 'PhotothequeController');
//Route::resource('document', 'DocumentController');
//Route::resource('repertoire','RepertoireController');


// Route::get('/', function () {
//     return view('form_ajout_information');
// });

// Route::get('/', function () {
//     return view('form_ajout_information');
// });


//Route::get('/', function () {
//    return view('form_ajout_information');
//});

//   Route::get('/vue', 'PaginationControlller@paginationvueinformationcorrespondantmedia') ;



// Route::get('/', function () {
//     return view('form_ajout_information');
// });

/*  Route::get('/', function () {
    return view('form_ajout_information');
});  */
//Route::get('vue','vuecontroller@paginationvueinformation');






/*  Route::get('/', function () {
    return view('form_ajout_information');
});  */
//Route::get('vue','vuecontroller@paginationvueinformation');




Route::resource('vehicule', 'VehiculeController');


//Route::resource('vehicule', 'VehiculeController');


// Route::get('ajout', function () {
//     return view('candidat.form_ajouter');
// });

Route::get('recherchetype', 'ChercheController@recherchetype')->name('type');

Route::get('recherchetypeorgane', 'ChercheController@recherchetypeorgane')->name('typeorgane');

Route::get('rechercheaccredi', 'AccreditationController@rechercheaccredi')->name('lieuaccredi');



Route::get('rechercheregioninter', 'ChercheController@rechercheregion')->name('region');

Route::get('rechercheregioninter', 'ChercheController@rechercheregioninter')->name('regioninter');



//Route::get('/', function () {
// return view('information.ajout_information');
//});





////////////////Route::resource('informations', 'InformationController');

Route::resource('informations', 'InformationController');



//Route::get('rechercheregioninter', 'RechercheController@rechercheregioninter')->name('region');


Route::get('listevisiteur', 'ChercheController@listevisiteur');

Route::get('retirer/{id}', 'ChercheController@destroy')->name('retirer');

Route::get('listeadmin', 'ChercheController@listeadmin')->name('rechercher');


Auth::routes();

//Route::get('connect', 'ConnexionController@connexion')->name('connect');

//Route::post('login', 'ConnexionController@login')->name('login');
//Auth::routes(); 


Route::get('/home', 'HomeController@index')->name('home');

Route::post('pjaccreditation', 'PiecesJointesController@storepjaccreditation')->name('pjaccreditation');


Route::get('listeaccreditation', 'AccreditationController@listeaccreditation')->name('listeaccreditation');

Route::get('choixmodif', function () {
    return view('accreditation.formsmodif_accreditation');
});

Route::get('modifdem', function () {
    return view('demandeur.modif_demandeur');
});


Route::get('listedem', 'DemandeurController@listedemandeur');

Route::post('modifpjaccreditation/{idpiecesjointes}', 'PiecesJointesController@editpjaccreditation')->name('modifpjaccreditation');

//add zoure 20/06/2021
Route::post('creeruser', 'CreationUtilisateurController@store')->name('creeruser');
Route::post('changepassword', 'CreationUtilisateurController@index')->name('changepassword');
Route::post('updatepassword', 'CreationUtilisateurController@update')->name('updatepassword');
Route::post('updateadmin', 'CreationUtilisateurController@updateadmin')->name('updateadmin');

Route::get('resetadmin', function () {
    return view('auth.passwords.reset_admin');
});

//Add 24/06

Route::get('panneau', 'CreationUtilisateurController@listeuser')->name('panneau');

Route::post('adduser', 'CreationUtilisateurController@creeruser')->name('adduser');

Route::post('edituser/{iduser}', 'CreationUtilisateurController@edituser')->name('edituser');

Route::post('updateuser/{iduser}', 'CreationUtilisateurController@updateuser')->name('updateuser');

Route::post('resetpass/{iduser}', 'CreationUtilisateurController@editpass')->name('resetpass');

Route::post('updatereset/{iduser}', 'CreationUtilisateurController@updatereset')->name('updatereset');

Route::post('supprimer/{iduser}', 'CreationUtilisateurController@destroy')->name('supprimer');

Route::get('refreshCaptcha', 'CaptchaController@refreshCaptcha')->name('refreshCaptcha');
