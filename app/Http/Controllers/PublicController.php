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
}
