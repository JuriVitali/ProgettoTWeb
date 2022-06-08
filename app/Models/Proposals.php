<?php

namespace App\Models;

use App\Models\Resources\Proposal;

class Proposals
{
    protected $guarded = ['id'];
    public $timestamps = false;
    
    // Relazione one-to-many con User
    public function mittente()
    {
        return $this->belongsTo(User::class, 'mittente', 'id');
    }
    
    // Relazione one-to-many con Accommodation
    public function alloggio()
    {
        return $this->belongsTo(Accommodation::class, 'alloggio', 'id');
    }
        
    //Ritorna tutte le proposte paginate in pagine da 6
    public function getAll($limit = 6){
        $proposals = Proposal::paginate($limit);
        return $proposals;
    }
    
    //Ritorna le proposte inviate da un locatario paginate in pagine da 6
    public function getPropInviate($userId){
        $proposals = Proposal::where('mittente',$userId)->get();
        return $proposals;
    }
    
    
     //Ritorna le proposte per un alloggio paginate in pagine da 6
    public function getPropByAlloggio($AllId){
        $proposals = Proposal::where('alloggio',$AllId)->get();
        return $proposals;
    }
    
  
}

