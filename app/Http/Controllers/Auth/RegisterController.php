<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'name'            => 'required|max:255',
            'email'           => 'required|email|max:255|unique:users',
            'password'        => 'required|min:6|confirmed',
            'no_hp'           => 'required',
            'alamat'          => 'required',
            'kota_domisili'   => 'required',
            'negara_domisili' => 'required',
            'status_akun'     => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'            => $data['name'],
            'email'           => $data['email'],
            'password'        => bcrypt($data['password']),
            'no_hp'           => $data['no_hp'],
            'alamat'          => $data['alamat'],
            'kota_domisili'   => $data['kota_domisili'],
            'negara_domisili' => $data['negara_domisili'],
            'status_akun'     => "Pelanggan",
        ]);

    }
}
