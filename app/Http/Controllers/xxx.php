<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class xxx extends Controller
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
    protected $redirectTo = '/index';

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
            'nombre' => 'required|alpha|max:255',
            'apellido' => 'required|alpha|max:255',
            'fecha' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'profesion' => 'required|alpha|max:255',
            'pais' => 'required',
            'provincia' => 'required',
            'ciudad' => 'required',
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
          'nombre' => $data['nombre'],
          'apellido' => $data['apellido'],
          'fecha' => $data['fecha'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'profesion' => $data['profesion'],
          'genero' => $data['genero'],
          'pais' => $data['pais'],
          'provincia' => $data['provincia'],
          'ciudad' => $data['ciudad'],
        ]);
    }
}
