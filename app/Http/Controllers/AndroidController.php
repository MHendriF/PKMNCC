<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Devices;
use App\User;

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\Collection;
use League\Fractal\Serializer\DataArraySerializer;

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
        try{
            $devices = $device->create([
            'nama_device'    => $nama_device,
            'status_device'  => $status_device,
            'deskripsi'      => "Kamar A",
            ]);

            $response = fractal()
                ->item($devices)
                ->transformWith(new DeviceTransformer)
                ->toArray();

            //return response()->json($response, 201);
            return response()->json(['code' => '200', 'message' => 'berhasil', 'data' => $devices], 201);

        } catch(\Exception $e){
            return response()->json(['code' => '400', 'message' => 'gagal', 'errors' => 'Something was wrong'], 422);
        }

        
    }

    public function tes_lampu(Devices $device)
    {
        $manager = new Manager();
        //$manager->setSerializer(new DataArraySerializer());
        $book = Devices::find(1);
        //return $book;

        // Make a resource out of the data and
        // $resource = new Item($book, new DeviceTransformer());

        // // Run all transformers
        // $manager->createData($resource)->toArray();
        // return response()->json($manager, 200);

        return fractal($book, new DeviceTransformer())->toArray();

        // $resource = new Collection($book, new DeviceTransformer());
        // $manager->createData($resource)->toArray();
        // return response()->json($tes, 200);
    }

    public function status_lampu(Devices $device)
    {
        try{
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
            return response()->json(['code' => '200', 'message' => 'berhasil', 'data' => $allItems], 200);

        } catch(\Exception $e){
            return response()->json(['code' => '400', 'message' => 'gagal', 'errors' => 'Something was wrong'], 401);
        }
   
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

    public function store(Request $request)
    {
        try{
            
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }

        //dd($request->all()); 
    }


}
