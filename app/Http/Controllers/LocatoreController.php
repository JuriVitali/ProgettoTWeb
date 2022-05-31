<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class LocatoreController extends Controller
{
    
    protected $_chatModel;  
    
    public function __construct() {
        $this->_chatModel = new Chat;
    }
    
    public function showContacts($userId){
        $contacts = $this->_chatModel->getContacts($userId);
        
        return view('chat')
                        ->with('contacts', $contacts);

    }
}
