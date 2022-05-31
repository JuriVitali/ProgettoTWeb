<?php

namespace App\Http\Controllers;

use \App\Models\Catalog;
use \App\Models\Faqs;

class PublicController extends Controller
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

    public function showFaqs(){
        
        //Recupero di tutte le faqs
        $faqs = $this->_faqModel->getAll();
        
        return view('faq')
                        ->with('faqs', $faqs);
    }
}
