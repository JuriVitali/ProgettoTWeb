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

//Chi siamo
Route::view('/chisiamo', 'chisiamo')
        ->name('chisiamo');

//Home pubblica
Route::view('/', 'home')
        ->name('home');

//Condizioni d'uso
Route::view('/condizioniuso', 'condizioniuso')
        ->name('condizioniuso');

//Visualizzazione Faq
Route::get('/faq', 'PublicController@showFaqs')
        ->name('faq');

//Visualizzazione profilo
Route::view('/profilo', 'profilo')
        ->name('profilo');

//Visualizzazione form di login
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

//Login utente
Route::post('login', 'Auth\LoginController@login');

//Logout
Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

//Visualizzazione form di registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

//Registrazione utente
Route::post('register', 'Auth\RegisterController@register');

//Visualizzazione catalogo pubblico
Route::get('/catalogo', 'PublicController@showCatalog')
        ->name('catalogo');

//Visualizzazione informazioni alloggio
Route::get('/catalogo/infoalloggio{Id}', 'PublicController@showAccInfo')
        ->name('infoalloggio');

//Visualizzazione chat per un locatore
Route::get('/chat_locatore{IdLocatore}', 'LocatoreController@showContacts')
        ->name('chat_locatore');

//Visualizzazione chat per un locatario
Route::view('/chat_locatario', 'chat')
        ->name('chat');


// Rotte profilo e per la la modifica del profilo
Route::get('/profilo', 'UserController@index')
        ->name('profilo');

Route::post('/profilo{id}', 'Auth\UpdateController@update')
        ->name('profiloupdate');

Route::put('/profilo{id}', 'Auth\UpdateController@updatepassword')
        ->name('passwordupdate');

Route::put('/profilo/{id}', 'Auth\UpdateController@updateusername')
        ->name('usernameupdate');

Route::get('/profilo/modificaprofilo={Id}', 'Auth\UpdateController@edit')
        ->name('modificaprofilo');

Route::get('/profilo/cambiapassword={Id}', 'Auth\UpdateController@editpassword')
        ->name('cambiapassword');

Route::get('/profilo/cambiausername={Id}', 'Auth\UpdateController@editusername')
        ->name('cambiausername');

Route::get('/allprofilo', 'UserController@showUsers')
        ->name('allprofilo');


// Rott* per la gestione alloggi locatore
Route::get('/visualizzalloggi{Id}', 'PublicController@showAlloggi')
        ->name('visualizzalloggi');