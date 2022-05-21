<?php

namespace App\Models;

use App\Models\Resources\Accomodation;


class Catalog {

    //Ritorna tutti gli alloggi paginati in pagine da 6
    public function getAll(){
        $accomodations = Accomodation::all();
        return $accomodations->paginate(6);
    }
    
    //Ritorna gli alloggi che soddisfano il filtro inserito paginati in pagine da 6
    public function getFiltered($filter){
        
    }

}