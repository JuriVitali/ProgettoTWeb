<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources\Message;
use App\Models\Chat;
use Auth;

class ChatController extends Controller
{
    protected $_chatModel;  
    
    public function __construct() {
        $this->_chatModel = new Chat;
    }
    
    public function showContacts(){
        
        //recupera gli utenti con cui l'utente di cui viene passato l'id ha scambiato almeno un messaggio
        $contacts = $this->_chatModel->getContacts(Auth::id());
        
        return view('chat')
                        ->with('contacts', $contacts);
    }
    
    public function showMessages($selectedId){
        
        //recupera i messaggi scambiati tra l'utente autenticato e quello selezionato
        $messages = $this->_chatModel->getMessages(Auth::id(), $selectedId);
        
        //recupera gli utenti con cui l'utente autenticato ha scambiato almano un messaggio 
        $contacts = $this->_chatModel->getContacts(Auth::id());
        
        //recupera l'utente corrispondente all'id $selectedId
        $selectedUser = $this->_chatModel->getUserById($selectedId);
        
        return view('chat')
                        ->with('contacts', $contacts)
                        ->with('messages', $messages)
                        ->with('selectedUser', $selectedUser);               
    }
    
    public function sendMessage(Request $request, $selectedId){
        
        date_default_timezone_set('Europe/Rome');
        
        $message = new Message;
        $message->testo = $request->text_mess;
        $message->letto = false;
        $message->mittente = Auth::id();
        $message->destinatario = $selectedId;
        $message->data = date("Y-m-d h:i");
        $message->save();

        return redirect()->action('ChatController@showMessages', [$selectedId]);               
    }
}
