<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devices;
use Session;

class DeviceController extends Controller
{
    public function index()
    {
    	$data = Devices::all();
    	return view('devices.device', compact('data'));
    }

    public function create()
    {
        return view('devices.add_device');
    }

    public function direct()
    {
        return view('devices.device');
    }

    public function store(Request $request)
    {
       
       try{
            $this->validate($request, array(
				'nama_device'   => 'required',
				'status_device' => 'required',
				'deskripsi'     => 'required'
            ));
            
            if(Devices::create($request->all())){
                Session::flash('new', 'New device was successfully added!');
                return redirect('device');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
            
    }


    public function update(Request $request, $id)
    {
         try{
           
            if(Devices::find($id)->update($request->all())){
                Session::flash('new', 'Device was successfully updated!');
                return redirect('set_device');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 

    }

    public function destroy($id)
    {
      	if(Devices::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Device was successfully deleted!');
            return redirect('device');
        }  
    }

    public function manual()
    {
        $data = Devices::where('nama_device','lampu_a')
                ->orderBy('created_at', 'desc')->limit(1)->get();
                
        $data2 = Devices::where('nama_device','lampu_b')
                ->orderBy('created_at', 'desc')->limit(1)->get();

        $data3 = Devices::where('nama_device','lampu_c')
                ->orderBy('created_at', 'desc')->limit(1)->get();
        
        return view('devices.set_device', compact('data','data2','data3'));
    }
    
    public function simpan($nama_device, $status_device)
    {
        $deskripsi = "lampu lala";
        $tambah = new devices(); //membuat objek yang terhubung ke table Logs
        $tambah->nama_device = $nama_device;
        $tambah->status_device = $status_device;
        $tambah->deskripsi = $deskripsi;
       
        $tambah->save();
        Session::flash('update', 'Device was successfully updated!');
        return redirect('set_device');
    }
    
    public function status_terbaru()
    {
     //   $newlongsor = Devices::select('status_device')->where('nama_device', '=' , 'lampu_a')->first();
     $newlongsor = Devices::select('status_device')->where('nama_device', '=' , 'lampu_a')->orderBy('created_at', 'desc')->first();
        return $newlongsor->status_device; //mengembalikan single value
    }
    
    public function record()
    {
        $data = Devices::all();
        return view('device.record_device', compact('data'));
    }
}
