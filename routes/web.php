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

/*Route::get('/selTopCat/{topCatId}/selCat/{catId}', 'PublicController@showCatalog3')
        ->name('catalog3');

Route::get('/selTopCat/{topCatId}', 'PublicController@showCatalog2')
        ->name('catalog2');

Route::get('/', 'PublicController@showCatalog1')
        ->name('catalog1');

Route::get('/admin/newproduct', 'AdminController@addProduct')
        ->name('newproduct');

Route::post('/admin/newproduct', 'AdminController@storeProduct')
        ->name('newproduct.store');

Route::get('/admin', 'AdminController@index')
        ->name('admin');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');*/

// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::get('/catalogo', 'PublicController@showCatalog')
        ->name('catalogo');

Route::view('catalogo/infoalloggio', 'infoalloggio')
        ->name('infoalloggio');
Route::view('catalogo/infoalloggio_1', 'infoalloggio_1')
        ->name('infoalloggio_1');

/*Route::get('/catalogo/alloggi{alloggioId}', '')
        ->name('alloggio');*/

Route::view('/chisiamo', 'chisiamo')
        ->name('chisiamo');

Route::get('/', 'home')
        ->name('home');

Route::view('/condizioniuso', 'condizioniuso')
        ->name('condizioniuso');

Route::view('/faq', 'faq')
        ->name('faq');

// Rotte inserite dal comando artisan "ui vue --auth" 
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
