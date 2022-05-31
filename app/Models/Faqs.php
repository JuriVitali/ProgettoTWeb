<?php

namespace App\Models;

use App\Models\Resources\Faq;


class Faqs {

    //Ritorna tutte le faqs paginate in pagine da 8
    public function getAll($limit = 6){
        $faqs = Faq::paginate($limit);
        return $faqs;
    }
   
}

