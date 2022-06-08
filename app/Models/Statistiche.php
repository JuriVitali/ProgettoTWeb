<?php

namespace App\Models;

use App\Models\Resources\Accommodation;
use App\Models\Resources\Proposal;

class Statistiche {
    
 public function GetStatiAcc($datai, $dataf,$tipologia) {

    $stati = Accommodation::whereDate('data_inserimento', '>=', $datai)
                ->whereDate('data_inserimento', '<=', $dataf)
                ->where('tipologia', $tipologia)
                ->count();
    return $stati;
    }

    public function GetStatiPro($datai, $dataf,$tipologia) {

    $stati1 = Accommodation::where('tipologia', $tipologia)
                ->get('id');
    $stati = Proposal::where('data', '<=', $datai)
                ->where('data', '=>', $dataf)
                ->where('alloggio', $stati1)
                ->count();
    return $stati;
    }

    public function GetStatiAllo($datai, $dataf,$tipologia) {

    $stati = Accommodation::where('data_inserimento', '>=', $datai)
                ->where('data_inserimento', '<=', $dataf)
                ->where('tipologia', $tipologia)
                ->where('data_locazione', '!=', 'NULL')
                ->count();
        return $stati;
    }

}

