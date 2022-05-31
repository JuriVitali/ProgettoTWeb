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