<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Message;
use App\User;
use Illuminate\Support\Arr;

class Chat extends Model
{
    //Ritorna tutti gli utenti con cui l'utente di cui viene passato l'id ha scambiato messaggi
    public function getContacts($userId){
        
        //Estrae l'id di tutti gli utenti a cui l'utente ha inviato messaggi
        $contacts_Id_1 = Message::select('destinatario as user')->where('mittente', $userId)->get();
        
        //Estrae l'id di tutti gli utenti da cui l'utente ha ricevuto messaggi
        $contacts_Id_2 = Message::select('mittente as user')->where('destinatario', $userId)->get();
        
        //Combina i risultati ottenuti mettendoli in un'unica collezione e mantenendo una copia per ogni id 
        $AllcontactsId = $contacts_Id_1->union($contacts_Id_2);
        $AllcontactsId->unique();
        $AllcontactsId->values();
        
        //Mette tutti gli User corrispondenti agli id trovati in un array $contacts
        $contacts = [];
        foreach ($AllcontactsId as $contactId) {
            $user = User::find($contactId);
            array_push($contacts,$user);
        }
        
        
        return Arr::collapse($contacts);       
    }
    
}