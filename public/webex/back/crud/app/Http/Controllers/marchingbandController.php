<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marchingband;

class marchingbandController extends Controller
{
    public function index(){

        $data = marchingband::all();
        // dd($data);
        return view('admin.marchingband.marchingband', compact('data')) ;
    }

    public function insertdatamarchingband(Request $request){
        $data = marchingband::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('marchingband');
    }

    public function editmarchingband($id){
        $data = marchingband::find($id);
        return view('admin.marchingband.editmarchingband', compact('data'));
    }

    public function updatemarchingband(Request $request , $id){
        $data = marchingband::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('marchingband');
    }

    public function deletemarchingband($id){
        $data = marchingband::find($id);
        $data->delete();
        return redirect()->route('marchingband');
    }
}
