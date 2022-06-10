<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposals;
use App\Models\Resources\Proposal;
use App\Models\Resources\Accommodation;
use Auth;
use Illuminate\Support\Facades\Log;

        
class ProposalController extends Controller
{
    
    protected $_proposalModel; 

    public function __construct() {
        $this->_proposalModel = new Proposals;
        $this->middleware('auth');
    }
    
    //mostra le proposte inviate da un locatario
    public function showPropInviate(){
        
        $proposals = $this->_proposalModel->getPropInviate(Auth::id());
        
        $proposalsWithAccInfo = $this->_proposalModel->getAccInfo($proposals); 
        
        return view('VisualPropInviate')
                         ->with('proposals', $proposalsWithAccInfo);                  
    }
    
    //mostra le proposte ricevute da un locatore
    public function showPropRicevute(){
        
        $proposals = $this->_proposalModel->getPropRicevute(Auth::id());
        
        $proposalsWithInfo = $this->_proposalModel->getAccUserInfo($proposals);
        
        return view('VisualPropRicevute')
                         ->with('proposals', $proposalsWithInfo);  
                                            
    }
    
    
    //mostra la form per l'invio di una proposta
    public function showProposalForm($accId){
        $accommodation = $this->_proposalModel->getAccById($accId);
       
        return view('InvioProposta')
                         ->with('accommodation', $accommodation);            
    }
    
    //inserisce i dati della proposta inviata dal locatario
     public function __insert(Request $request, $accId) {
         
        $this->validate($request, [
          'testo' => ['required', 'max:200', 'string'],  
        ]);
        
        date_default_timezone_set('Europe/Rome');
        
        $proposal = new Proposal;
        $proposal->testo = $request->input('testo');
        $proposal->mittente = Auth::id();
        $proposal->alloggio = $accId;
        $proposal->stato = 'in valutazione';
        $proposal->data = date('y-m-d');
        $proposal->ora= date('H:i:s');
        $proposal->save();

        return redirect()->to('catalogo')->withSuccess(['La proposta è stata inviata.']); 
    }
   
    
    public function EliminaProposta($PropId){
        Proposal::find($PropId)->delete();
        
        return redirect()->route('VisualPropInviate');
    }
    
    public function AccettaProposta($PropId){
        
        Proposal::where('id', $PropId)->update(['stato' => 'accettata']);
        
        $proposal = Proposal::find($PropId);
        
        date_default_timezone_set('Europe/Rome');
        Accommodation::find($proposal->alloggio)->update(['data_locazione' => date('y-m-d')]);
        
        //rifiuta in automatico tutte le altre proopste per quell'alloggio
        Proposal::where('alloggio', $proposal->alloggio)->update(['stato' => 'rifiutata']);
        
        return redirect()->route('VisualPropRicevute');
    }
    
    public function RifiutaProposta($PropId){
        Proposal::where('id', $PropId)->update(['stato' => 'rifiutata']);
        
        return redirect()->route('VisualPropRicevute');
    }
     
}