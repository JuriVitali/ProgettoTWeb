<?php

namespace App\Http\Controllers;

use App\Models\Resources\Accommodation;
use App\Models\Statistiche;
use Illuminate\Http\Request;


class StatisticheController extends Controller {
    
      protected $_statisticheModel;
      
      public function __construct() {
        $this->_statisticheModel = new Statistiche;
    }
  public function confstatistiche(Request $prova) {
    $this->validate($prova, [
            'dai' => ['max:10','after:2020-01-01'],
            'daf' => ['max:10',],
            'tipologia' => ['required', 'string'] ]);
     
  
     $datai=$prova->input('dai');
      $dataf=$prova->input('daf');
       $tipologia=$prova->input('tipologia');
      if($datai==0) $datai=date('0001-01-01');
     if($dataf==0)  $dataf=date('9999-12-30');
       if($tipologia=='tutte')
       { $newdata= $this-> _statisticheModel-> GetStatiAcc($datai,$dataf,'appartamento')+ $this-> _statisticheModel-> GetStatiAcc($datai,$dataf,'posto letto');
          $proposte=$this->_statisticheModel->GetStatiPro($datai, $dataf, 'appartamento')+$this->_statisticheModel->GetStatiPro($datai, $dataf, 'posto letto');
           $allocati=$this->_statisticheModel->GetStatiAllo($datai, $dataf, 'appartamento')+$this->_statisticheModel->GetStatiAllo($datai, $dataf, 'posto letto');
  }
  else{  $newdata= $this-> _statisticheModel-> GetStatiAcc($datai,$dataf,$tipologia);
   $proposte=$this->_statisticheModel->GetStatiPro($datai, $dataf, $tipologia);
           $allocati=$this->_statisticheModel->GetStatiAllo($datai, $dataf, $tipologia);
          }
 return view('statistiche')
          ->with('newdata',$newdata)
              ->with('allocati',$allocati)
           ->with('proposte',$proposte);
}
 
 
   }
  