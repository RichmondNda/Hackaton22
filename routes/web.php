<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'App\Http\Controllers\AdminController@welcome')->name('welcome');

// Route::get('/loading', function () {
//     return view('participants.encours');
// })->name('encours');

// Route::get('/inscription-terminer', function () {
//     return view('terminer');
// })->name('terminer');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Les routes relatives à la partie de l'administration

    // Parametrage des Hackatons
    
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {

        Route::get('/restauration','App\Http\Controllers\AdminController@restauration' )->name('restauration');
        Route::post('/commander','App\Http\Controllers\AdminController@getCommandes' )->name('get.commande');



        Route::group(['middleware' => ['role:Super@Administrateur']], function () {
            
            Route::get('/admin/parametres',  'App\Http\Controllers\AdminController@index')->name('Admin.parametres.index');
            Route::get('/admin/groupes',  'App\Http\Controllers\AdminController@selectionGroupe')->name('Admin.groupe.selection');
            Route::get('/admin/impression',  'App\Http\Controllers\AdminController@impression')->name('Admin.groupe.impression');
            Route::get('/admin/restauration',  'App\Http\Controllers\AdminController@gestionRestaurant')->name('Admin.restauration');
    
            Route::get('/pdf/listeEquipe/niveau1', 'App\Http\Controllers\pdfController@listeEquipeN1')->name('liste.equipe.n1');
            Route::get('/pdf/listeEquipe/niveau2', 'App\Http\Controllers\pdfController@listeEquipeN2')->name('liste.equipe.n2');
            Route::get('/pdf/listeEquipe/niveau3', 'App\Http\Controllers\pdfController@listeEquipeN3')->name('liste.equipe.n3');

            Route::get('/pdf/listeEquipe/selection/niveau1', 'App\Http\Controllers\pdfController@listeselectEquipeN1')->name('liste.equipe.select.n1');
            Route::get('/pdf/listeEquipe/selection/niveau2', 'App\Http\Controllers\pdfController@listeselectEquipeN2')->name('liste.equipe.select.n2');
            Route::get('/pdf/listeEquipe/selection/niveau3', 'App\Http\Controllers\pdfController@listeselectEquipeN3')->name('liste.equipe.select.n3');
            

            Route::get('/pdf/repartitions/equipes', 'App\Http\Controllers\pdfController@repartition')->name('pdf.repartition');
            Route::get('/pdf/salles/commandes', 'App\Http\Controllers\pdfController@commandes')->name('pdf.commandes');
            //qrcode 

            Route::post('/admin/restauration/soumission', 'App\Http\Controllers\AdminController@Soumission')->name('qrcode.Soumission');

        });


     });
    

// les participants

Route::get('/inscriptions', 'App\Http\Controllers\AdminController@inscription')->name('Participants.inscription');
Route::get('/inscription-terminer', 'App\Http\Controllers\AdminController@inscriptionterminer')->name('terminer');



//Route::get('/registrer', ) ;
    
