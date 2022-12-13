<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pramuka;

class pramukaController extends Controller
{
    public function index(){

        $data = pramuka::all();
        // dd($data);
        return view('admin.pramuka.pramuka', compact('data')) ;
    }

    public function insertdatapramuka(Request $request){
        $data = pramuka::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pramuka');
    }

    public function editpramuka($id){
        $data = pramuka::find($id);
        return view('admin.pramuka.editpramuka', compact('data'));
    }

    public function updatepramuka(Request $request , $id){
        $data = pramuka::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('pramuka');
    }

    public function deletepramuka($id){
        $data = pramuka::find($id);
        $data->delete();
        return redirect()->route('pramuka');
    }
}
