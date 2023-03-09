<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
C'est ici que vous pouvez enregistrer des routes Web pour votre application. Ces
| les routes sont chargées par le RouteServiceProvider et toutes seront
| être affecté au groupe middleware "web". Faites quelque chose de génial !
|
*/
 // ************Premier méthodde**********
Route::get('/', function () {
     return view('base')->with("nom", "Ndour");
 });
 Route::get('/about', function () {
     return view('pages/about')
 ->with("prenom", "Astou")->with("nom", "Ndour");
//   ->with("prenom", "Astou")->with("nom", "Ndour");:sa c'est une senase de méthode.
 });


// // *************Deuxiem méthode**************
// Route::get('/about', function()
// {
//     return view('pages/about')
//     ->withDepertement('Informatique')
//     ->withService('Dévelopment');
//     // ->withPrenom('Astou')->withNom('Ndour'): Isi on parle with rassoursise.
// });


//  // *************Triosem méthode**************
Route::get('/about', function () {
    return view('pages/about')
    ->with([
        'prenom'=>'Astou',
        'nom'=>'Diouf'
    ]);
    
});

                 
// *************Qutereme méthode**************
Route::get('/about', function () {

    $tab = [
        'prenom'=>'Astou',
        'nom'=>'Diouf',
    ];
    $nomComplet = "Astou Ndour";
  return view('pages/about', compact('tab', 'nomComplet'));
});

// *************Cinquem méthode**************
Route::get('about', function()
{
    $view = view('pages.about');
    $view->nom = 'Ndour';
    $view->prenom = 'Astou';
    $view->adresse = 'Diagane';

    return $view;

});