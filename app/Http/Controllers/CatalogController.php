<?php

namespace App\Http\Controllers;

use \App\Models\Catalog;
use \App\Models\Faqs;
use App\Http\Requests\FiltriCatRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class CatalogController extends Controller
{
    
    protected $_catalogModel; 
    protected $_faqModel; 
    
    
    public function __construct() {
        $this->_catalogModel = new Catalog;
        $this->_faqModel = new Faqs;
    }
    
    
    
    public function showCatalog(){
        
        //Recupero di tutti gli alloggi
        $accommodations = $this->_catalogModel->getAll();
        
        return view('catalogo')
                        ->with('accommodations', $accommodations);
    }
    

    public function showAccInfo($id){
        
        //recupero dell'alloggio 
        $accommodation = $this->_catalogModel->getAccById($id);
        
        //recupero dei servizi inclusi nell'alloggio
        $services = $this->_catalogModel->getServById($id);
        
        
        return view('infoalloggio')
                        ->with('accommodation', $accommodation)
                        ->with('services', $services);   
    }
    
    public function filter(FiltriCatRequest $request){
        
        $accommodations = $this->_catalogModel->getAll();
        
        
        $filteredAccommodations = $this->controlCommonFeatures($request, $accommodations);
        
        //filtri appartamento
        if ($request->input('tipologia') == 'appartamento'){
            $filteredAccommodations = $this->controlApFeatures($request, $accommodations);
        }
        
        //filtri posto letto
        elseif ($request->input('tipologia') == 'posto letto'){
            $filteredAccommodations = $this->controlBedFeatures($request, $accommodations);
        }
        
        $filteredPagAccommodations = $this->_catalogModel->getAccPaginated($filteredAccommodations);
        
        return view('catalogo')
                        ->with('accommodations', $filteredPagAccommodations); 
    }
    
    public function controlCommonFeatures($request, $accommodations){
        
        //Canone affitto min
        if ($request->filled('canone_affitto_min')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->canone_affitto > $request->input('canone_affitto_min'));  })
            ->values();
        }
        
        //Canone affitto max
        if ($request->filled('canone_affitto_max')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->canone_affitto < $request->input('canone_affitto_max'));  })
            ->values();
        }
        
        //Data min
        if ($request->filled('data_inizio')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->inizio_disponibilita > $request->input('data_inizio'));  })
            ->values();
        }
        
        //Data max
        if ($request->filled('data_fine')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->fine_disponibilita < $request->input('data_fine'));  })
            ->values();
        }
        
        //Dimensione min 
        if ($request->filled('dimensione_min')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->superficie > $request->input('dimensione_min'));  })
            ->values();
        }
        
        //Dimensione max
        if ($request->filled('dimensione_max')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->superficie < $request->input('dimensione_max'));  })
            ->values();
        }
        
        //Posti letto totali min
        if ($request->filled('posti_letto_min')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->posti_tot > $request->input('posti_letto_min'));  })
            ->values();
        }
        
        //Posti letto totali max
        if ($request->filled('posti_letto_max')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->posti_tot < $request->input('posti_letto_max'));  })
            ->values();
        }
        
        //Tipologia
        if ($request->input('tipologia') != 'tutte') {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->tipologia == $request->input('tipologia'));  })
            ->values();
        }
        
        return $accommodations;
    }
    
    public function controlApFeatures($request, $accommodations){
        
        //Cucina
        if ($request->has('cucina')) {
            $accommodations = $accommodations->filter(function  ($item) {
                    return ($item->cucina == true);  })
            ->values();
        }
        
        //Locale ricreativo
        if ($request->has('locale_ricreativo')) {
            $accommodations = $accommodations->filter(function  ($item) {
                    return ($item->locale_ricreativo == true);  })
            ->values();
        }
        
        return $accommodations;
    }
    
    public function controlBedFeatures($request, $accommodations){
        
        //Angolo studio
        if ($request->has('angolo_studio')) {
            $accommodations = $accommodations->filter(function ($item) {
                    return ($item->angolo_studio == true);  })
            ->values();
        }
        
        //Posti letto nella camera
        if ($request->input('letti_camera') != 0) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($accommodations->letti_stanza == $request->input('letti_camera'));  })
            ->values();
        }
            
        return $accommodations;
    }
    
    
    
    public function controlService($request){
        return Accommodation::with('included_services')->get();
        
        if ($request->has('fibra_ottica')) {
            $accommodations = $accommodations->filter(function  ($item) use ($request) {
                    return ($item->canone_affitto > $request->input('canone_affitto_min'));  })
            ->values();
        }
        
        
    }
}
