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
        ->name('chat')->middleware('can:isLocatoreOrLocatario');

//Visualizzazione della pagina della chat con i messaggi scambiati con l'utente selezionato
Route::get('/chat/messages/{selectedId}', 'ChatController@showMessages')
        ->name('chat_messages')->middleware('can:isLocatoreOrLocatario');

//Invio di un messaggio ad un utente con cui l'utente autenticato ha già scambiato messaggi
Route::post('/chat/messages/{selectedId}/send', 'ChatController@sendMessageToContact')
        ->name('send_message')->middleware('can:isLocatoreOrLocatario');

//Visualizzazione della form per l'invio di un messaggio ad un nuovo locatore
Route::get('/chat/messages/new_loc/{locId?}', 'ChatController@chatNewLocatore')
        ->name('chat_new_locatore')->middleware('can:isLocatario');

//Invio di un messaggio ad un locatore con cui il locatario autenticato non ha mai scambiato messaggi
Route::post('/chat/new_locatore', 'ChatController@sendMessageToNewLoc')
        ->name('send_message_new_loc')->middleware('can:isLocatario');

/* Profilo utente
--------------------------------------------------------------------------------------------------------------- */

//Visualizzazione profilo
Route::view('/profilo', 'profilo')
        ->name('profilo')->middleware('can:isLocatoreOrLocatario');

// Rotte profilo e per la la modifica del profilo
Route::get('/profilo', 'Auth\UpdateController@index')
        ->name('profilo')->middleware('can:isLocatoreOrLocatario');

Route::post('/profilo/modificaInfo', 'Auth\UpdateController@update')
        ->name('profiloupdate')->middleware('can:isLocatoreOrLocatario');

Route::put('/profilo', 'Auth\UpdateController@updatepassword')
        ->name('passwordupdate')->middleware('can:isLocatoreOrLocatario');

Route::post('/profilo', 'Auth\UpdateController@updateusername')
        ->name('usernameupdate')->middleware('can:isLocatoreOrLocatario');

Route::post('/profilo/username', 'Auth\UpdateController@validateusername')
        ->name('validateusername')->middleware('can:isLocatoreOrLocatario');

Route::get('/profilo/modificaprofilo', 'Auth\UpdateController@edit')
        ->name('modificaprofilo')->middleware('can:isLocatoreOrLocatario');

Route::get('/profilo/cambiapassword', 'Auth\UpdateController@editpassword')
        ->name('cambiapassword')->middleware('can:isLocatoreOrLocatario');

Route::get('/profilo/cambiausername', 'Auth\UpdateController@editusername')
        ->name('cambiausername')->middleware('can:isLocatoreOrLocatario');

/* Gestione Alloggi
--------------------------------------------------------------------------------------------------------------- */

//Visualizzazione gestione alloggi locatore
Route::get('/visualizzalloggi', 'GestioneAlloggiController@showAlloggi')
        ->name('visualizzalloggi')->middleware('can:isLocatore');

//Visualizzazione informazioni alloggio di un locatore
Route::get('/visualizzalloggi/infoalloggio{Id}', 'GestioneAlloggiController@showAccInfo')
        ->name('infoalloggiolocatore')->middleware('can:isLocatore');

//Form per l'inserimento dell'alloggio di un locatore dalla home
Route::get('/inseriscialloggio', 'GestioneAlloggiController@showInserisciFormHome')
        ->name('inseriscialloggiohome')->middleware('can:isLocatore');

//Form per l'inserimento dell'alloggio di un locatore da visualizzalloggi
Route::get('/visualizzalloggi/inseriscialloggio', 'GestioneAlloggiController@showInserisciForm')
        ->name('inseriscialloggio')->middleware('can:isLocatore');

Route::post('/inseriscialloggio', 'GestioneAlloggiController@addAlloggio')
        ->name('addannuncio')->middleware('can:isLocatore');

Route::post('/eliminalloggio{id}', 'GestioneAlloggiController@destroy')
        ->name('eliminalloggio')->middleware('can:isLocatore');

Route::get('/visualizzalloggi/infoalloggio/modificalloggio{Id}', 'GestioneAlloggiController@editAlloggio')
        ->name('modificalloggio')->middleware('can:isLocatore');

Route::post('/visualizzalloggi/infoalloggio{id}', 'GestioneAlloggiController@updateAlloggio')
        ->name('alloggioupdate')->middleware('can:isLocatore');

/* Faqs
--------------------------------------------------------------------------------------------------------------- */

//Visualizzazione Faq
Route::get('/faq', 'FaqController@showFaqs')
        ->name('faq');

//aggiunta faqs
Route::get('/aggiungifaq','FaqController@showfaqform')
        ->name('aggiungifaq')->middleware('can:isAdmin');

Route::post('/aggiungifaq','FaqController@addfaq')
        ->middleware('can:isAdmin');

//elimina faq
Route::get('eliminafaq/{id}','FaqController@deletefaq')
         ->name('eliminafaq')->middleware('can:isAdmin');

//modifica faq
Route::get('modificafaq/{id}','FaqController@modificafaq')
        ->name('modificafaq')->middleware('can:isAdmin');

Route::post('/faq/{id}','FaqController@updatefaq')
        ->name('updatefaq')->middleware('can:isAdmin');

/* Statistiche
--------------------------------------------------------------------------------------------------------------- */
//pagina per la selezione delle statistiche
Route::view('/showstatistiche', 'statistiche')
        ->name('statistiche')->middleware('can:isAdmin');

//pagina con risultati delle statistiche
Route::get('/statistiche','StatisticheController@confstatistiche')
        ->name('cambiastatistiche')->middleware('can:isAdmin');

/* Proposte
--------------------------------------------------------------------------------------------------------------- */

Route::get('/catalogo/InvioProposta{Id}', 'ProposalController@showProposalForm')
        ->name('InvioProposta')->middleware('can:isLocatario');

Route::post('/catalogo/InvioProposta{Id}/conferma/{userId}', 'ProposalController@__insert')
        ->middleware('can:isLocatario');
     
Route::get('/VisualPropInviate{userId}', 'ProposalController@showPropInviate')
        ->name('VisualPropInviate')->middleware('can:isLocatario');

Route::post('/catalogo/VisualPropInviate{userId}/conferma/{PropId}', 'ProposalController@EliminaProposta')
        ->middleware('can:isLocatario');

Route::get('/VisualPropRicevute{userId}', 'ProposalController@showPropRicevute')
        ->name('VisualPropRicevute')->middleware('can:isLocatore');