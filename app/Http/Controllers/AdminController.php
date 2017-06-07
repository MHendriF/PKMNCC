<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devices;

class AdminController extends Controller
{
    public function index()
    {
    	$data = Devices::all();
    	return view('on_off', compact('data'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
       
       dd($request->all());
            
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
         

    }

    public function destroy($id)
    {
      
    }
}
