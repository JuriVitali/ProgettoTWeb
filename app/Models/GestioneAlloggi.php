<?php

namespace App\Models;

use App\Models\Resources\Accommodation;
use App\Models\Resources\Included_service;
use Illuminate\Support\Facades\DB;


class GestioneAlloggi {
    
    //Ritorna l'id massimo tra gli alloggi presenti nel db
    public function getMaxId(){
        return Accommodation::max('id');
    }
    
    //Ritorna l'alloggio di cui viene passato l'id
    public function getAlloggioById($id){
        return Accommodation::find($id);
    }
    
    //Ritorna i servizi relativi all'alloggio passato per id
    public function getServicesById($id){
        return Included_service::where('alloggio',$id)->get();
    }
    
    //Ritorna il path della foto dell'alloggiodi cui viene passato l'id
    public function getImageById($id){
        return DB::table('accommodations')->where('id', $id)->value('foto');
    }
    
    //Ritorna 1 se presente il servizio, 0 se non è presente il servizi passando l'id e il valore che identifica il servizio nel db
    public function checkService($id, $val){
        return (DB::table('included_services')->where('alloggio', $id)->where('servizio', $val)->count());
    }
    
    //Ritorna il servizio (val) associato all'alloggio passato per id
    public function getServicebyIdAndVal($id, $val){
        return DB::table('included_services')->where('alloggio', $id)->where('servizio', $val);
    }

        
}