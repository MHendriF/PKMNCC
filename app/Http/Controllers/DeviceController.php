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

    public function setDevice()
    {
    	$data = Devices::all();
        return view('devices.set_device', compact('data'));
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

    public function show($id)
    {
       
    }

    public function edit($id)
    {
       
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
}
