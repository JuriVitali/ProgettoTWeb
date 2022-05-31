<?php

namespace App\Http\Controllers;
use App\User;



class userController extends Controller {
    
    protected $_usersModel; 

    public function __construct() {
        $this->middleware('auth');
        $this->_usersModel = new User;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index() {
        return view('profilo');
    }
    
    
    public function showUsers(){
        
        //Recupero di tutti gli alloggi
        $users = $this->_usersModel->getAll();
        
        return view('allprofilo')
                        ->with('users', $users);
    }
    
    
}
