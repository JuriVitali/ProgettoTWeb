<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class UpdateController extends Controller
{

   /*protected $redirectTo = '/profilo';*/
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function edit($Id)
    {
        $user = User::find($Id);

        return view('modificaprofilo') -> with ('user', $user);
    }
    
     public function editpassword($Id)
    {
        $user = User::find($Id);

        return view('cambiapassword') -> with ('user', $user);
    }
    
     public function editusername($Id)
    {
        $user = User::find($Id);

        return view('cambiausername') -> with ('user', $user);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:30'],
            'surname' => ['required', 'string', 'max:30'],
            'data_nascita' => ['required', 'date'],
            'genere' => ['required', 'string', 'max:1'],
            'citta' => ['required', 'string', 'max:30'],
            'provincia' => ['required', 'string','min:2', 'max:2'],
            'indirizzo' => ['required', 'string', 'max:40'],
            'role' => ['required', 'string', 'max:10'],
            /*'username' => ['required', 'string', 'min:8', 'max:20', 'unique:users']*/
        ]);
        
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->data_nascita = $request->input('data_nascita');
        $user->genere = $request->input('genere');
        $user->citta = $request->input('citta');
        $user->provincia = $request->input('provincia');
        $user->indirizzo = $request->input('indirizzo');
        $user->role = $request->input('role');
        $user->save();

        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        return redirect()->to('profilo')-> with('success', 'Updated');
    }
    
    
    public function updatepassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        
        
        $user = User::find($id);
        $user->password = Hash::make($request->input('password'));
        $user->save();

        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        return redirect()->to('profilo')-> with('success', 'Updated');
    }
    
    public function updateusername(Request $request, $id)
    {
        $this->validate($request, [
            'username' => ['required', 'string', 'min:8', 'max:20', 'unique:users']
        ]);
        
        
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->save();

        /*if( $user->save() ) {
            Session::flash('message', 'User Updated Successfully');
        }*/
        
        return redirect()->to('profilo')-> with('success', 'Updated');
    }

}
