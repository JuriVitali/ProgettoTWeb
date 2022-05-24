<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
    public function showFaqs(){
        
        //Recupero di tutti gli alloggi
        $faqs = $this->_faqModel->getAll();
        
        return view('faq')
                        ->with('faqs', $faqs);
    }
}
