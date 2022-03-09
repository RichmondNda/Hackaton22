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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Les routes relatives à la partie de l'administration

    // Parametrage des Hackatons
    
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {


        Route::group(['middleware' => ['role:Super@Administrateur']], function () {
            
            Route::get('/admin/parametres',  'App\Http\Controllers\AdminController@index')->name('Admin.parametres.index');
            Route::get('/admin/groupes',  'App\Http\Controllers\AdminController@selectionGroupe')->name('Admin.groupe.selection');
    
        });


     });
    

// les participants

Route::get('/inscriptions', function() { 
         return view('participants.inscription') ;
    })->name('Participants.inscription');
