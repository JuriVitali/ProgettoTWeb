<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources\Message;
use App\Models\Chat;
use Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\messageNewLocatoreRequest;

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
        
        //setta come letti i messaggi non letti inviati dall'utente selezionato all'utente autenticato
        $this->_chatModel->readMessages(Auth::id(), $selectedId);
        
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
    
    //funzione che inserisce nel db il messaggio di cui vengono passati testo e mittente
    public function sendMess($text, $contactId) {
        date_default_timezone_set('Europe/Rome');
        
        $message = new Message;
        $message->testo = $text;
        $message->letto = false;
        $message->mittente = Auth::id();
        $message->destinatario = $contactId;
        $message->data = date("Y-m-d H:i:s");
        $message->save();
    }
    
    public function sendMessageToContact(Request $request, $selectedId){
        
        $this->sendMess($request->text_mess, $selectedId);     

        return redirect()->action('ChatController@showMessages', [$selectedId]);               
    }
    
    public function chatNewLocatore($locId = null){
        //recupera gli utenti con cui l'utente di cui viene passato l'id ha scambiato almeno un messaggio
        $contacts = $this->_chatModel->getContacts(Auth::id());
        
        if ($locId != null) {
            $destinatario = $this->_chatModel->getUserById($locId);
            return view('chat')
                        ->with('contacts', $contacts)
                        ->with('newLocatore', true)
                        ->with('locUsername', $destinatario->username);
        }
        else {
        return view('chat')
                        ->with('contacts', $contacts)
                        ->with('newLocatore', true);
        } 
    }
    
    public function sendMessageToNewLoc(messageNewLocatoreRequest $request){
        
        //recupero del locatore con l'username passato
        $newLoc = $this->_chatModel->getUserByUsername($request->locatore);
        
        //invio del messaggio al locatore estratto
        $this->sendMess($request->text_mess, $newLoc->id); 
        
        return redirect()->action('ChatController@showMessages', [$newLoc->id]);
    }
    
}
