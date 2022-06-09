<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Proposals;
use \App\Models\Catalog;
use \App\Models\Faqs;
use App\User;
use App\Http\Controllers\Auth;
use Auth;


date_default_timezone_set('Europe/Rome');

        
class ProposalController extends Controller
{
    
    protected $_proposalModel; 
    
    

    public function __construct() {
        $this->_catalogModel = new Catalog;
        $this->_faqModel = new Faqs;
        $this->_proposalModel = new Proposals;
        $this->userModel = new User;
        $this->middleware('auth');
    }
    
    
    //mostra le proposte inviate da un locatario
    public function showPropInviate(){
        $proposals = $this->_proposalModel->getPropInviate(Auth::id());
        $accommodations = $this->_catalogModel->getAll();
       
        return view('VisualPropInviate')
                         ->with('proposals', $proposals)  
                         ->with('accommodations', $accommodations);
                       
                        
    }
    
    
  
    
     //mostra le proposte ricevute da un locatore
    public function showPropRicevute(){
        
        $accommodations = $this->_catalogModel->getAlloggiLocatore(Auth::id());
        $proposals = $this->_proposalModel->getAll();
        $users = $this->userModel->getAll();
        return view('VisualPropRicevute')
                         ->with('proposals', $proposals)  
                         ->with('accommodations', $accommodations)
                         ->with('users', $users);
                                            
    }
    
    
    //mostra la form per l'invio di una proposta
    public function showProposalForm($id){
        $accommodation = $this->_catalogModel->getAccById($id);
       
        return view('InvioProposta')
                         ->with('accommodation', $accommodation);
                       
                        
    }
    
    //inserisce i dati della proposta inviata dal locatario
     public function __insert(Request $request, $id) {
         
        $this->validate($request, [
          'testo' => ['required', 'string'],  
        ]);
        
        $this->_proposalModel->testo= $request->input('testo');
        $this->_proposalModel->mittente = Auth::id();
        $this->_proposalModel->alloggio = $id;
        $this->_proposalModel->stato = 'in valutazione';
        $this->_proposalModel->data = date('y-m-d');
        $this->_proposalModel->ora = date('H:i:s');
        
        $this->_proposalModel->save();

        return redirect()->to('catalogo')-> with('success', 'Updated'); 
    }
   
    
    public function EliminaProposta($PropId){
        Proposal::find($PropId)->delete();
        
        return redirect()->route('VisualPropInviate');
    }
     
}