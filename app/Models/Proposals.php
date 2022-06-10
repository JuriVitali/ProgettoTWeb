<?php

namespace App\Models;

use App\Models\Resources\Proposal;
use App\Models\Resources\Accommodation;
use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class Proposals
{
 
    //Ritorna le proposte inviate da un locatario 
    public function getPropInviate($userId){
        
        $proposals = Proposal::where('mittente',$userId)->get();
        return $proposals;
    }
    
    //Ritorna le proposte ricevute da un locatore 
    public function getPropRicevute ($userId){
        
        //recupera gli id degli alloggi posseduti dal locatore
        $locatoreAccId = Accommodation::select('id')->where('proprietario', $userId)->get();
        
        $proposals = Proposal::whereIn('alloggio', $locatoreAccId->values())->get();
        
        return $proposals;
    }
    
    //Ritorna le proposte per un alloggio 
    public function getPropByAlloggio($AllId){
        
        $proposals = Proposal::where('alloggio',$AllId)->get();
        return $proposals;
    }
    
    //Metodo che ritorna un array avente come valori oggetti composti a loro volta da 
    //una proposta (oggetto), l'id e il titolo dell'annuncio a cui fa riferimento e la foto associata all'alloggio
    public function getAccInfo($proposals){
        
        $proposalsWithAccInfo = [];
        foreach($proposals as $proposal){
            $accommodation = Accommodation::find($proposal->alloggio);
            
            $proposalsWithAccInfo = Arr::add($proposalsWithAccInfo, $proposal->id, (object) [
                'proposta' => $proposal,
                'accId' => $accommodation->id,
                'titolo'=> $accommodation->titolo_annuncio,
                'foto' => $accommodation->foto
            ]);
        }
        
        return $proposalsWithAccInfo;
            
    }
    
    //Metodo che ritorna un array avente come valori oggetti composti a loro volta da 
    //una proposta (oggetto), l'id e il titolo dell'annuncio a cui fa riferimento, la foto associata all'alloggio
    //e il mittente (oggetto)
    public function getAccUserInfo($proposals){
        
        $proposalsWithInfo = [];
        foreach($proposals as $proposal){
            $accommodation = Accommodation::find($proposal->alloggio);
            $user = User::find($proposal->mittente);
            
            $proposalsWithInfo = Arr::add($proposalsWithInfo, $proposal->id, (object) [
                'proposta' => $proposal,
                'accId' => $accommodation->id,
                'titolo'=> $accommodation->titolo_annuncio,
                'foto' => $accommodation->foto,
                'user' => $user
            ]);
        }
        
        return $proposalsWithInfo;
            
    }
    
    
    public function getAccById($AccId){

        return Accommodation::find($AccId);
    }
  
}

