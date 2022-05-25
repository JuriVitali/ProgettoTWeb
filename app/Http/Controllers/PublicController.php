<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Catalog;

class PublicController extends Controller
{
    
    protected $_catalogModel; 
    
    
    public function __construct() {
        $this->_catalogModel = new Catalog;
    }
    
    public function showCatalog(){
        
        //Recupero di tutti gli alloggi
        $accommodations = $this->_catalogModel->getAll();
        
        return view('catalogo')
                        ->with('accommodations', $accommodations);
    }
    
    //public function showAccInfo($AccId){
    public function showAccInfo($id){
        
        //recupero dell'alloggio 
        $accommodation = $this->_catalogModel->getAccById($id);
        
        //recupero dei servizi inclusi nell'alloggio
        $services = $this->_catalogModel->getServById($id);
        
        
        return view('infoalloggio')
                        ->with('accommodation', $accommodation)
                        ->with('services', $services);   
    }
}
