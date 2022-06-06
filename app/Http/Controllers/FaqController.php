<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Faqs;
use App\Models\Resources\Faq;
use App\Http\Requests\newfaq;

class FaqController extends Controller
{
    protected $_faqModel; 
        
    public function __construct() {
        $this->_faqModel = new Faqs;
    }
    
    public function showFaqs(){
        
        //Recupero di tutte le faqs
        $faqs = $this->_faqModel->getAll();
        
        return view('faq')
                        ->with('faqs', $faqs);
    }
    
    public function showfaqform() {
        $faq = $this->_faqModel->getAll();
        return view('aggiungifaq')
                        ->with('aggiungifaq', $faq);
    }

    public function addfaq(newfaq $request) {

        $faq = new Faq;
        $faq->fill($request->validated());
        $faq->save();
        return redirect()->action('FaqController@showFaqs');       
    }
    
  public function deletefaq($id) {
      
      $faq= Faq::find($id);
              $faq->delete();
      return redirect()->action('FaqController@showFaqs');
    }
    
  public function modificafaq($id)
    {
        $faq = Faq::find($id);

        return view('modificafaq')->with('faq', $faq);
    }
    
  public function updatefaq(newfaq $request, $id)
    {          
        $faq = Faq::find($id);
        $faq->domanda = $request->input('domanda');
        $faq->risposta= $request->input('risposta');
        $faq->save();
        
        return redirect()->to('faq')->with('success', 'Updated');
    }
    
    
}
