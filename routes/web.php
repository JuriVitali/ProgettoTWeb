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

/* Homepage e altre rotte statiche
--------------------------------------------------------------------------------------------------------------- */

//Chi siamo
Route::view('/chisiamo', 'chisiamo')
        ->name('chisiamo');

//Home pubblica
Route::view('/', 'home')
        ->name('home');

//Condizioni d'uso
Route::view('/condizioniuso', 'condizioniuso')
        ->name('condizioniuso');

/* Registrazione e autenticazione
--------------------------------------------------------------------------------------------------------------- */

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

/* Catalogo
--------------------------------------------------------------------------------------------------------------- */
//Visualizzazione catalogo pubblico
Route::get('/catalogo', 'CatalogController@showCatalog')
        ->name('catalogo');

//Visualizzazione informazioni alloggio
Route::get('/catalogo/infoalloggio{Id}', 'CatalogController@showAccInfo')
        ->name('infoalloggio');


/* Chat
--------------------------------------------------------------------------------------------------------------- */

//Visualizzazione della pagina della chat
Route::get('/chat', 'chatController@showContacts')
        ->name('chat');

//Visualizzazione della pagina della chat con i messaggi scambiati con l'utente selezionato
Route::get('/chat/messages/{selectedId}', 'ChatController@showMessages')
        ->name('chat_messages');

//Invio di un messaggio ad un utente con cui l'utente autenticato ha già scambiato messaggi
Route::post('/chat/messages/{selectedId}/send', 'ChatController@sendMessageToContact')
        ->name('send_message');

//Visualizzazione della form per l'invio di un messaggio ad un nuovo locatore
Route::get('/chat/messages/new_loc/{locId?}', 'ChatController@chatNewLocatore')
        ->name('chat_new_locatore');

//Invio di un messaggio ad un locatore con cui il locatario autenticato non ha mai scambiato messaggi
Route::post('/chat/new_locatore', 'ChatController@sendMessageToNewLoc')
        ->name('send_message_new_loc');

/* Visualizzazione e modifica del profilo utente
--------------------------------------------------------------------------------------------------------------- */

// Rotte profilo e per la la modifica del profilo
Route::get('/profilo', 'UserController@index')
        ->name('profilo');

Route::post('/profilo{id}', 'Auth\UpdateController@update')
        ->name('profiloupdate');

Route::put('/profilo{id}', 'Auth\UpdateController@updatepassword')
        ->name('passwordupdate');

Route::put('/profilo/{id}', 'Auth\UpdateController@updateusername')
        ->name('usernameupdate');

Route::get('/profilo/modificaprofilo{Id}', 'Auth\UpdateController@edit')
        ->name('modificaprofilo');

Route::get('/profilo/cambiapassword{Id}', 'Auth\UpdateController@editpassword')
        ->name('cambiapassword');

Route::get('/profilo/cambiausername{Id}', 'Auth\UpdateController@editusername')
        ->name('cambiausername');

Route::get('/allprofilo', 'UserController@showUsers')
        ->name('allprofilo');

/* Gestione Alloggi
--------------------------------------------------------------------------------------------------------------- */

// Rotta per la gestione alloggi locatore
Route::get('/visualizzalloggi{Id}', 'CatalogController@showAlloggi')
        ->name('visualizzalloggi');

/* Faqs
--------------------------------------------------------------------------------------------------------------- */

//Visualizzazione Faq
Route::get('/faq', 'FaqController@showFaqs')
        ->name('faq');

//aggiunta faqs
Route::get('/aggiungifaq','FaqController@showfaqform')
        ->name('aggiungifaq');

Route::post('/aggiungifaq','FaqController@addfaq');

//elimina faq
Route::get('eliminafaq/{id}','FaqController@deletefaq')
         ->name('eliminafaq');

//modifica faq
Route::get('modificafaq/{id}','FaqController@modificafaq')
        ->name('modificafaq');

Route::post('/faq/{id}','FaqController@updatefaq')
        ->name('updatefaq');

/* Statistiche
--------------------------------------------------------------------------------------------------------------- */
//pagina per la selezione delle statistiche
Route::view('/showstatistiche', 'statistiche')
        ->name('statistiche');

//pagina con risultati delle statistiche
Route::get('/statistiche','StatisticheController@confstatistiche')
        ->name('cambiastatistiche');

/* Proposte
--------------------------------------------------------------------------------------------------------------- */

Route::get('/catalogo/InvioProposta{Id}', 'ProposalController@showProposalForm')
        ->name('InvioProposta');

Route::post('/catalogo/InvioProposta{Id}/conferma/{userId}', 'ProposalController@__insert');
     
Route::get('/VisualPropInviate{userId}', 'ProposalController@showPropInviate')
        ->name('VisualPropInviate');

Route::post('/catalogo/VisualPropInviate{userId}/conferma/{PropId}', 'ProposalController@EliminaProposta');

Route::get('/VisualPropRicevute{userId}', 'ProposalController@showPropRicevute')
        ->name('VisualPropRicevute');