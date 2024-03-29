<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\User;
use App\Transformers\UserTransformer;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
    	try{

    		$validator = Validator::make($request->all(), [
	    		'name'            => 'required|max:255',
	            'email'           => 'required|email|max:255|unique:users',
	            'password'        => 'required|min:6',
	            'no_hp'           => 'required',
	            'alamat'          => 'required',
	            'kota_domisili'   => 'required',
	            'negara_domisili' => 'required',
	        ]);

	        $user = $user->create([
	        	'name'            => $request->name,
	            'email'           => $request->email,
	            'password'        => bcrypt($request->password),
	            'no_hp'           => $request->no_hp,
	            'alamat'          => $request->alamat,
	            'kota_domisili'   => $request->kota_domisili,
	            'negara_domisili' => $request->negara_domisili,
	            'status_akun'     => "Pelanggan",
	            'api_token'       => bcrypt($request->email),
	        ]);

	        $response = fractal()
	            ->item($user)
	            ->transformWith(new UserTransformer)
	            ->addMeta([
	            	'token' => $user->api_token,
	            	])
	            ->toArray();

	        //return response()->json($response, 201);
	            return response()->json(['code' => '200', 'message' => 'berhasil', 'data' => $user], 201);

    	} catch(\Exception $e){
            return response()->json(['code' => '400', 'message' => 'gagal', 'errors' => $validator->errors()], 422);
        }
    	
    }

    public function login(Request $request, User $user)
    {
    	if(!Auth::attempt([
    		'email' => $request->email, 
    		'password' => $request->password])){
    		return response()->json(['code' => '400', 'message' => 'gagal','errors' => 'Username atau Password salah'], 401);
    	}

    	$user = $user->find(Auth::user()->id);

    	$response = fractal()
	            ->item($user)
	            ->transformWith(new UserTransformer)
	            ->addMeta([
	            	'token' => $user->api_token,
	            	])
	            ->toArray();
	    return response()->json(['code' => '200', 'message' => 'berhasil', 'data' => $user], 200);
    }
}
