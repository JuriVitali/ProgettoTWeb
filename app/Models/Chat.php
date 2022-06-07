<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Message;
use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Auth;

class Chat extends Model
{
    //Ritorna un array contenente id, nome, cognome di ogni utente con cui l'utente autenticato dha scambiato messaggi
    //e il numero di messaggi non letti dall'utente autenticato, raggruppati per mittente
    public function getContacts(){
        
        //Estrae l'id di tutti gli utenti a cui l'utente ha inviato messaggi
        $contacts_Id_1 = Message::select('destinatario as user')->where('mittente', Auth::id())->distinct()->get();
        
        //Estrae l'id di tutti gli utenti da cui l'utente ha ricevuto messaggi
        $contacts_Id_2 = Message::select('mittente as user')->where('destinatario', Auth::id())->distinct()->get();   
        
        //Combina i risultati ottenuti mettendoli in un'unica collezione 
        $AllcontactsId = $contacts_Id_1->union($contacts_Id_2);
        
        //Recupera gli utenti associati agli id estratti
        $users = User::whereIn('id', $AllcontactsId)->get();
        
        //Per ogni utente viene creato un oggetto con id, nome, cognome e numero di messaggi non letti
        //Tutti gli oggetti così creati vengono immagazzinati all'interno dell'array contacts
        $contacts = [];
        foreach ($users as $user) {
            $notReadMessages = Message::where('mittente', $user->id)->where('destinatario', Auth::id())->where('letto', false)->count(); 
            
            $contacts = Arr::add($contacts, $user->id, (object) [
                'id' => $user->id,
                'name' => $user->name,
                'surname' => $user->surname,
                'notReadMessages' => $notReadMessages,
            ]);
        }

        //Ordinamento dell'array in ordine decrescente di messaggi non letti
        usort($contacts, function($user1, $user2) {return $user2->notReadMessages - $user1->notReadMessages;});
        
        return $contacts;            
    }
    
    //Assegna valore true all'attributo 'letto' di tutti i messaggi non letti contenuti nell'array che gli viene passato
    //Ritorna l'array inizialmente passatogli ma con tutti i messaggi aventi valore true associato all'attributo 'letto'
    public function readMessages($authUserId, $selectedUserId){
        
        $messagesId = Message::select('id')->where(function ($query) use ($authUserId, $selectedUserId) {
                        $query->where('mittente', $selectedUserId)->where('destinatario', $authUserId);
                        })
                    ->where('letto', false)
                    ->update(['letto' => true]);
    }
    
    
    //Ritorna tutti i messaggi scambiati tra i due utenti di cui viene passato l'id, ordinati per data e ora
    public function getMessages($authUserId, $selectedUserId){
        
        $messages = Message::where(function($query) use ($authUserId, $selectedUserId) {$query->where('mittente', $authUserId)->where('destinatario', $selectedUserId);} )
                                ->orWhere(function($query) use ($authUserId, $selectedUserId) {$query->where('mittente', $selectedUserId)->where('destinatario', $authUserId);} )
                                ->orderBy('data', 'DESC')
                                ->get();
               
        return $messages;    
        
    }
    
    //Ritorna l'utente associato all'id passato come parametro
    public function getUserById($userId){
        
        return User::find($userId);   
    }
}