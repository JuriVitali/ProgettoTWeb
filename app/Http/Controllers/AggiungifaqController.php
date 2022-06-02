<?php

namespace App\Http\Controllers;

use App\Models\Resources\Faq;
use App\Models\Faqs;
use App\Http\Requests\newfaq;

class AggiungifaqController extends Controller
{
   protected $_faqsModel;
  
    public function __construct()
    {
       $this->_faqsModel = new Faqs();
    }

    public function showfaqform() {
        $faq = $this->_faqsModel->getAll();
        return view('aggiungifaq')
                        ->with('aggiungifaq', $faq);
    }

    public function addfaq(newfaq $request) {

        $faq = new Faq;
        $faq->fill($request->validated());
        $faq->save();
        return redirect()->action('PublicController@showFaqs');
       
    }
  public function deletefaq($id) {
      
      $faq= Faq::find($id);
              $faq->delete();
      return redirect()->action('PublicController@showFaqs');
    }
  public function modificafaq($id)
    {
        $faq = Faq::find($id);

        return view('modificafaq') -> with('faq', $faq);
    }
  public function updatefaq(newfaq $request, $id)
    {
      
        
        $faq = Faq::find($id);
        $faq->domanda = $request->input('domanda');
        $faq->risposta= $request->input('risposta');
        $faq->save();
        
        return redirect()->to('faq')-> with('success', 'Updated');
    }
    }

