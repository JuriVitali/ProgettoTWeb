<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
    //protected $redirectTo = '/home';
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:30'],
            'surname' => ['required', 'string', 'max:30'],
            'data_nascita' => ['required', 'date' ],
            'genere' => ['required', 'string', 'max:1'],
            'citta' => ['required', 'string', 'max:30'],
            'provincia' => ['required', 'string','min:2', 'max:2'],
            'indirizzo' => ['required', 'string', 'max:40'],
            'image' => ['string','unique:users'],
            'role' => ['required', 'string', 'max:10'],
            'username' => ['required', 'string', 'min:8', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'data_nascita' => $data['data_nascita'],
            'genere' => $data['genere'],
            'citta' => $data['citta'],
            'provincia' => $data['provincia'],
            'indirizzo' => $data['indirizzo'],
            /*'image' => $data['image'],*/
            'role' => $data['role'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
