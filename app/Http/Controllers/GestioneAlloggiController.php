<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Catalog;
use App\Models\GestioneAlloggi;
use App\Models\Resources\Accommodation;
use App\Models\Resources\Included_service;
use Auth;

class GestioneAlloggiController extends Controller
{
    protected $_catalogModel; 
    
    public function __construct() {
        $this->middleware('auth');
        $this->_catalogModel = new Catalog;
        $this->_alloggiModel = new GestioneAlloggi;
    }

    public function showInserisciForm()
    {
        return view('inseriscialloggio')
                         ->with('proprietario', true);   
    }
    
     public function showInserisciFormHome()
    {
        return view('inseriscialloggio');   
    }
    
    
    public function showAlloggi(){
        
        //Recupero di tutti gli alloggi
        $accommodations = $this->_catalogModel->getAlloggiLocatore(Auth::id());
        return view('visualizzalloggi')
                        ->with('accommodations', $accommodations);
    }
    
    public function showAccInfo($id){
        
        //recupero dell'alloggio 
        $accommodation = $this->_catalogModel->getAccById($id);
        
        //recupero dei servizi inclusi nell'alloggio
        $services = $this->_catalogModel->getServById($id);
        
        
        return view('infoalloggio')
                        ->with('accommodation', $accommodation)
                        ->with('services', $services)
                        ->with('proprietario', true);   
    }
    
    //Funzione che verifica se un servizio è presente nella richiesta della form e nel caso lo assoccia all'alloggio tramite id e poi lo aggiunge al db
    public function checkAndAddService(Request $request, $servizio, $idalloggio){
        if (!is_null($request->input($servizio))){
            $fibra = new Included_service;
            $fibra->servizio=$request->input($servizio);
            $fibra->alloggio= $idalloggio;
            $fibra->save();
        }
    }
    
    //Funzione che verifica se un servizio è presente o meno nella richiesta della form per la modifica dell'alloggio 
    //Se presente lo associa all'alloggio passato per id e lo salve nel db, se non è presente nella richiesta lo cancella.
    //$val è il valore associato al servizio nel db
    public function checkAndUpdateService(Request $request, $servizio, $idAll, $val){
        if (!is_null($request->input($servizio))){
            if(($this->_alloggiModel->checkService($idAll, $val)) < 1){
                $fibra = new Included_service;
                $fibra->servizio=$request->input($servizio);
                $fibra->alloggio= $idAll ; 
                $fibra->save();
            }
        }
        else{
            $fibra = $this->_alloggiModel->getServicebyIdAndVal($idAll, $val);
            $fibra->delete();
        }
    }
    
    // Funzione per l'aggiunta di un nuovo alloggio di un locatore 
    public function addAlloggio(Request $request)
    {
        //verifico la correttezza dei dati
        $this->validate($request, [
            'titolo_annuncio' => ['required', 'string', 'max:100'],
            'tipologia' => ['required', 'string', 'max:15'],
            'inizio_disponibilita' => ['required', 'date','after_or_equal:'. date('Y-m-d'), 'before_or_equal:'. date('31-12-2025')],
            'fine_disponibilita' => ['required', 'date', 'after:inizio_disponibilita', 'before_or_equal:'. date('31-12-2025')],
            'descrizione' => ['required', 'string'],
            'canone_affitto' => ['required', 'integer', 'min:1', 'max:40000'], 
            'citta' => ['required', 'string', 'max:30'],
            'provincia' => ['required', 'string','alpha', 'max:2'],
            'indirizzo' => ['required', 'string', 'max:40'],
            'superficie' => ['required', 'integer', 'min:1', 'max:9999'],
            'genere_locatario' => ['string'],
            'posti_tot' => ['required','integer', 'min:1', 'max:50'],
            'eta_min_locatario' => ['nullable', 'integer', 'min:16', 'max:120'],
            'eta_max_locatario' => ['nullable', 'integer', 'gt:eta_min_locatario', 'max:120'],
            'n_camere' => ['nullable', 'integer', 'min:1', 'max:50'],
            'letti_stanza' => ['nullable', 'integer', 'min:1', 'max:20'],
            'foto' => ['image', 'mimes:jpg,png,jpeg,gif,svg'],
        ]);
     
        //controllo immagine
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $imageName = 'images/accommodations/' . $foto->getClientOriginalName();
        } else {
            $imageName = 'images/accommodations/default.jpg';
        }
        
        //creo un nuovo Alloggio
        $alloggio = new Accommodation;
        $alloggio->proprietario = Auth::id();
        $alloggio->titolo_annuncio = $request->input('titolo_annuncio');
        
        //
        if($request->input('tipologia') == 'postoletto'){
            $tipologia = 'posto letto';
        }
        else{
            $tipologia = 'appartamento';
        }
   
        $alloggio->tipologia = $tipologia;
        $alloggio->inizio_disponibilita = $request->input('inizio_disponibilita');
        $alloggio->fine_disponibilita = $request->input('fine_disponibilita');
        $alloggio->data_inserimento = date("Y-m-d");
        $alloggio->descrizione = $request->input('descrizione');
        $alloggio->canone_affitto = $request->input('canone_affitto');
        $alloggio->citta = $request->input('citta');
        $alloggio->provincia = $request->input('provincia');
        $alloggio->indirizzo = $request->input('indirizzo');
        $alloggio->superficie = $request->input('superficie');
        $alloggio->genere_locatario = $request->input('genere_locatario');
        $alloggio->posti_tot = $request->input('posti_tot');
        $alloggio->eta_min_locatario = $request->input('eta_min_locatario');
        $alloggio->eta_max_locatario = $request->input('eta_max_locatario');
        $alloggio->foto = $imageName;
        
        //vengono eseguite azione differenti in base al tipo d'alloggio (appartamento o posto letto)
        if ($alloggio->tipologia == 'appartamento') {
            $alloggio->n_camere = $request->input('n_camere');
            $alloggio->cucina = $request->input('cucina');
            $alloggio->locale_ricreativo = $request->input('locale_ricreativo');
        }
        else{
            $alloggio->letti_stanza = $request->input('letti_stanza');
            $alloggio->angolo_studio = $request->input('angolo_studio');
        }
        
        //aggiungo il nuovo alloggio al db
        $alloggio->save();
        
        //recupero l'id massimo tra gli alloggi presenti nel db
        $idalloggio = $this->_alloggiModel->getMaxId();
        
        //Se nella richiesta è presente il servizio lo associo all'alloggio e lo aggiungo al db
        $this->checkAndAddService($request, 'fibra', $idalloggio);
        $this->checkAndAddService($request, 'postoauto', $idalloggio);
        $this->checkAndAddService($request, 'lavatrice', $idalloggio);
        $this->checkAndAddService($request, 'ariacondizionata', $idalloggio);
        $this->checkAndAddService($request, 'allarme', $idalloggio);
        $this->checkAndAddService($request, 'portablindata', $idalloggio);
        
        //trasferimento dell'immagine nella cartella di destinazione
        if ($imageName != 'images/accommodations/default.jpg') {
            $destinationPath = public_path() . '/images/accommodations';
            $foto->move($destinationPath, $imageName);
        }

        /*if( $alloggio->save() ) {
            Session::flash('message', 'Alloggio Inserito Correttamente');
        }*/
        
        return redirect()->route('visualizzalloggi', ['Id' => $idalloggio])->withSuccess(['Alloggio aggiunto con Successo!']);
    
    }
    
    public function editAlloggio($idAll)
    {
        $alloggio = $this->_alloggiModel->getAlloggioById($idAll);
        $servizi = $this->_alloggiModel->getServicesById($idAll);
        $serv =[false,false,false,false,false,false];
        foreach($servizi as $servizio){
            $serv[$servizio->servizio -1]= true;
        }
       
        return view('modificalloggio') 
                   -> with ('alloggio', $alloggio)
                   -> with ('servizi', $serv);
    }
    
    
    // Funzione per l'aggiorna un alloggio di un locatore 
    public function updateAlloggio(Request $request, $idAll)
    {
        //verifico la correttezza dei dati
        $this->validate($request, [
            'titolo_annuncio' => ['required', 'string', 'max:100'],
            'inizio_disponibilita' => ['required', 'date','after_or_equal:'. date('Y-m-d'), 'before_or_equal:'. date('31-12-2025')],
            'fine_disponibilita' => ['required', 'date', 'after:inizio_disponibilita', 'before_or_equal:'. date('31-12-2025')],
            'descrizione' => ['required', 'string'],
            'canone_affitto' => ['required', 'integer', 'min:1'], 
            'citta' => ['required', 'string', 'max:30'],
            'provincia' => ['required', 'string', 'alpha', 'max:2'],
            'indirizzo' => ['required', 'string', 'max:40'],
            'superficie' => ['required', 'integer', 'min:1'],
            'genere_locatario' => ['string'],
            'posti_tot' => ['required','integer', 'min:0', 'max:50'],
            'eta_min_locatario' => ['nullable', 'integer', 'min:16', 'max:110'],
            'eta_max_locatario' => ['nullable', 'integer', 'gt:eta_min_locatario', 'max:120'],
            'n_camere' => ['nullable', 'integer', 'min:1', 'max:50'],
            'letti_stanza' => ['nullable', 'integer', 'min:1', 'max:20'],
            'foto' => ['image', 'mimes:jpg,png,jpeg,gif,svg'],
        ]);
        
        //controllo immagine e spostamento nella cartella public/imges/accommodations
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $imageName = 'images/accommodations/' . $foto->getClientOriginalName();
            $destinationPath = public_path() . '/images/accommodations';
            $foto->move($destinationPath, $imageName);
        } else {
            $imageName = $this->_alloggiModel->getImageById($idAll);
        }
        
        //Recupero l'alloggio tramite l'id
        $alloggio = $this->_alloggiModel->getAlloggioById($idAll);
        
        $alloggio->titolo_annuncio = $request->input('titolo_annuncio');
        $alloggio->inizio_disponibilita = $request->input('inizio_disponibilita');
        $alloggio->fine_disponibilita = $request->input('fine_disponibilita');
        $alloggio->data_inserimento = date("Y-m-d");
        $alloggio->canone_affitto = $request->input('canone_affitto');
        $alloggio->citta = $request->input('citta');
        $alloggio->provincia = $request->input('provincia');
        $alloggio->indirizzo = $request->input('indirizzo');
        $alloggio->superficie = $request->input('superficie');
        $alloggio->descrizione = $request->input('descrizione');
        $alloggio->genere_locatario = $request->input('genere_locatario');
        $alloggio->posti_tot = $request->input('posti_tot');
        $alloggio->eta_min_locatario = $request->input('eta_min_locatario');
        $alloggio->eta_max_locatario = $request->input('eta_max_locatario');
        $alloggio->foto = $imageName;
        
        //vengono eseguite azione differenti in base al tipo d'alloggio (appartamento o posto letto)
        if ($alloggio->tipologia == 'appartamento') {
            $alloggio->n_camere = $request->input('n_camere');
            $alloggio->cucina = $request->input('cucina');
            $alloggio->locale_ricreativo = $request->input('locale_ricreativo');
        }
        else{
            $alloggio->letti_stanza = $request->input('letti_stanza');
            $alloggio->angolo_studio = $request->input('angolo_studio');
        }
        
        //aggiungo il nuovo alloggio al db
        $alloggio->save();
        
        //Verifico se i servizi sono associati all'alloggio e applico le modifiche
        $this->checkAndUpdateService($request, 'fibra' , $idAll, 1);
        $this->checkAndUpdateService($request, 'postoauto' , $idAll, 2);
        $this->checkAndUpdateService($request, 'lavatrice' , $idAll, 3);
        $this->checkAndUpdateService($request, 'ariacondizionata' , $idAll, 4);
        $this->checkAndUpdateService($request, 'allarme' , $idAll, 5);
        $this->checkAndUpdateService($request, 'portablindata' , $idAll, 6);
        
        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        return redirect()->route('infoalloggiolocatore', ['Id' => $alloggio->id])->withSuccess(['Alloggio aggiornato con Successo!']);
    }
    
    
    // Funzione che elimina di un alloggio selezionato
     public function destroy($idAll)
    {
        $alloggio = $this->_alloggiModel->getAlloggioById($idAll);
        
        //Check if post exists before deleting
        if (!isset($alloggio)){
            return redirect()->route('visualizzalloggi', ['Id' => auth()->user()->id])->withSuccess(['Alloggio non trovato']);
        }

        $alloggio->delete();
        return redirect()->route('visualizzalloggi', ['Id' => auth()->user()->id])->withSuccess(['Alloggio eliminato con Successo!']);
    }
}