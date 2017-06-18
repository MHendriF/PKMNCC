<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Devices;
use App\User;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use App\Transformers\DeviceTransformer;

use DB;
use Input;

class AndroidController extends Controller
{
    public function add($nama_device, $status_device, Devices $device)
    {
        $devices = $device->create([
            'nama_device'    => $nama_device,
            'status_device'  => $status_device,
            'deskripsi'      => "Kamar A",
        ]);

         $response = fractal()
            ->item($devices)
            ->transformWith(new DeviceTransformer)
            ->toArray();

        return response()->json($response, 201);
    }

    public function status_lampu(Devices $device)
    {
        $device =  Devices::where('nama_device', '=' , 'lampu_a')
                            ->orderBy('created_at', 'desc')->limit(1)
                            ->get();
        $device2 =  Devices::where('nama_device', '=' , 'lampu_b')
                            ->orderBy('created_at', 'desc')->limit(1)
                            ->get();
        $device3 =  Devices::where('nama_device', '=' , 'lampu_c')
                            ->orderBy('created_at', 'desc')->limit(1)
                            ->get();

        $allItems = new \Illuminate\Database\Eloquent\Collection;
        $allItems = $allItems->merge($device);
        $allItems = $allItems->merge($device2);
        $allItems = $allItems->merge($device3);

         $response = fractal()
            ->collection($allItems)
            ->transformWith(new DeviceTransformer())
            ->toArray();

        return response()->json($response);
    }


    public function users(User $user)
    {
        $users = $user->all();
        return fractal()
            ->collection($users)
            ->transformWith(new UserTransformer())
            ->toArray();
    }

    public function login()
    {
        return view('auth.login_android');
    }

}
