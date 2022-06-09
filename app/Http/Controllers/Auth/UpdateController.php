<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUsernameRequest;
use App\User;
use Auth;

class UpdateController extends Controller
{

   /*protected $redirectTo = '/profilo';*/
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //Ritorna la vista profilo
    public function index() {
        return view('profilo');
    }
    
    //Ritorna la vista modificaprofilo con l'utente
    public function edit()
    {
        return view('modificaprofilo') -> with ('user', Auth::user());
    }
    
     public function editpassword()
    {
        return view('cambiapassword') -> with ('user', Auth::user());
    }
    
     public function editusername()
    {
        return view('cambiausername') -> with ('user', Auth::user());
    }
    
    //Funzione per la modifica dei dati dell'utente
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:30'],
            'surname' => ['required', 'string', 'max:30'],
            'data_nascita' => ['required', 'date', 'before:18 years ago', 'after_or_equal:'. date('01-01-1910')],
            'genere' => ['required', 'string', 'max:1'],
            'citta' => ['required', 'string', 'max:30'],
            'provincia' => ['required', 'string', 'alpha','min:2', 'max:2'],
            'indirizzo' => ['required', 'string', 'max:40'],
            
        ]);
        
        
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->data_nascita = $request->input('data_nascita');
        $user->genere = $request->input('genere');
        $user->citta = $request->input('citta');
        $user->provincia = $request->input('provincia');
        $user->indirizzo = $request->input('indirizzo');
        $user->save();

        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        return redirect()->to('profilo')->withSuccess(['I Dati del profilo sono stati aggiornati con Successo!']);
    }
    
    //Funzione per la modifica della password
    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        
        
        $user = Auth::user();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        return redirect()->to('profilo')->withSuccess(['Password aggiornata con Successo!']);
    }
    
    //funzione per la validazione dell'username con metodo ajax
    public function validateusername(UpdateUsernameRequest $request){
        return response()->json(['redirect' => route('profilo')]);
    }
    
    //funzione per la modifica dell'username con metodo ajax
    public function updateusername(UpdateUsernameRequest $request)
    {
        
        User::where('id', Auth::id())->update(['username' => $request->input('username')]);

        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        //return redirect()->to('profilo')-> with('success', 'Updated');
        return response()->json(['redirect' => route('profilo')]);
    }

}


