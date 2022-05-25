<?php

namespace App\Models;

use App\Models\Resources\Accommodation;
use App\Models\Resources\Included_service;


class Catalog {
   
    //Ritorna tutti gli alloggi paginati in pagine da 6
    public function getAll($limit = 6){
        $accommodations = Accommodation::paginate($limit);
        return $accommodations;
    }
    
    //Ritorna l'alloggio di cui viene passato l'id
    public function getAccById($id){
        return Accommodation::find($id); 
    }

    //Ritorna un'array con i nomi dei servizi inclusi nell'alloggio di cui viene passato l'id
    public function getServById($id){
        
        //recupera i servizi inclusi nell'alloggio
        $services = Included_service::where('alloggio',$id)->get();
        
        //recupera i nomi dei servizi estratti
        $servNames = []; 
        foreach ($services as $service) {    
            array_push($servNames,$service->servizio()->select('descrizione')->get());
        }
        
        //restituisce i nomi dei servizi estratti
        return $servNames;
        
    }
        
}