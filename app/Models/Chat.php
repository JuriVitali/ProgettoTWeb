<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Message;
use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class Chat extends Model
{
    //Ritorna tutti gli utenti con cui l'utente di cui viene passato l'id ha scambiato messaggi
    public function getContacts($userId){
        
        //Estrae l'id di tutti gli utenti a cui l'utente ha inviato messaggi
        $contacts_Id_1 = Message::select('destinatario as user')->where('mittente', $userId)->distinct()->get();
        
        //Estrae l'id di tutti gli utenti da cui l'utente ha ricevuto messaggi
        $contacts_Id_2 = Message::select('mittente as user')->where('destinatario', $userId)->distinct()->get();   
        
        //Combina i risultati ottenuti mettendoli in un'unica collezione 
        $AllcontactsId = $contacts_Id_1->union($contacts_Id_2);
        
        //Mette tutti gli User corrispondenti agli id trovati in un array $contacts
        $contacts = [];
        foreach ($AllcontactsId as $contactId) {
            $user = User::find($contactId);
            array_push($contacts,$user);
        }
               
        return Arr::collapse($contacts);    
    }
    
    //Ritorna tutti i messaggi scambiati tra i due utenti di cui viene passato l'id, ordinati per data e ora
    public function getMessages($user1, $user2){
        
        $messages = Message::where(function($query) use ($user1, $user2) {$query->where('mittente', $user1)->where('destinatario', $user2);} )
                                ->orWhere(function($query) use ($user1, $user2) {$query->where('mittente', $user2)->where('destinatario', $user1);} )
                                ->orderBy('data', 'DESC')
                                ->get();
               
        return $messages;    
        
    }
    
    //Ritorna l'utente associato all'id passato come parametro
    public function getUserById($userId){
        
        return User::find($userId);   
    }
}