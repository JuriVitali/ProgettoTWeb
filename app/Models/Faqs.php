<?php

namespace App\Models;

use App\Models\Resources\Faq;


class Faqs {

    //Ritorna tutte le faqs paginate in pagine da 8
    public function getAll(){
        $accomodations = Accomodation::all();
        return $accomodations->paginate(8);
    }
   
}

