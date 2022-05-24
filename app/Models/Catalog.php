<?php

namespace App\Models;

use App\Models\Resources\Accommodation;


class Catalog {

    //Ritorna tutti gli alloggi paginati in pagine da 6
    public function getAll($limit = 2){
        $accommodations = Accommodation::paginate($limit);
        return $accommodations;
    }
    
    //Ritorna gli alloggi che soddisfano il filtro inserito paginati in pagine da 6
    public function getFiltered($filter){
        
    }

}