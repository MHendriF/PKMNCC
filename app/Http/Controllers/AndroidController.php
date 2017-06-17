<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Devices;
use App\User;
use DB;
use Input;

class AndroidController extends Controller
{
    public function status()
    {
     	$lampu = Devices::select(array('nama_device','status_device'))->where('nama_device', '=' , 'lampu_a')->orderBy('created_at', 'desc')->first();
     	$lampu2 = Devices::select(array('nama_device','status_device'))->where('nama_device', '=' , 'lampu_b')->orderBy('created_at', 'desc')->first();
        $lampu3 = Devices::select(array('nama_device','status_device'))->where('nama_device', '=' , 'lampu_c')->orderBy('created_at', 'desc')->first();

     	$obj = json_encode($lampu);
     	$obj2 = json_encode($lampu2);
        $obj3 = json_encode($lampu3);
        
        echo $obj;
        echo ","; 
        echo $obj2;
        echo ","; 
        echo $obj3;
    }

    public function simpan($nama_device, $status_device)
    {
        $deskripsi = "lampu lala";
        $tambah = new devices();
        $tambah->nama_device = $nama_device;
        $tambah->status_device = $status_device;
        $tambah->deskripsi = $deskripsi;
        
        if($tambah->save())
        {
            $obj = ['message' => 'Success'];
                $obj = json_encode($obj);
                echo $obj;
        }
        else{
            $obj = ['message' => 'Error'];
                $obj = json_encode($obj);
                echo $obj;
        }

    }


    public function postLogin(Request $request)
    {
        try{

            $email = $request->get('email');
            $password = $request->get('password');
            
            $pass = Hash::make($request->get('password'));

            $user = User::all()->where('email', '=' , $email)->first();
      
            if ($user == null) {
                $obj = ['error' => 'User tidak terdaftar'];
                $obj = json_encode($obj);
                echo $obj;
            }
            else{
                if(Hash::check($password, $user->password)){
                    $obj = json_encode($user);
                    echo $obj;
                }
                else{
                    $obj = ['error' => 'Password dalah'];
                    $obj = json_encode($obj);
                    echo $obj;
                }
                
            }

        } catch (Exception $e) {
            return redirect()->back()->with(['error' => 'Your account is not activated!']);
        } 
        
    }
}
