<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paskibra;

class paskibraController extends Controller
{
    public function index(){

        $data = paskibra::all();
        // dd($data);
        return view('admin.paskibra.paskibra', compact('data')) ;
    }

    public function insertdatapaskibra(Request $request){
        $data = paskibra::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('paskibra');
    }

    public function editpaskibra($id){
        $data = paskibra::find($id);
        return view('admin.paskibra.editpaskibra', compact('data'));
    }

    public function updatepaskibra(Request $request , $id){
        $data = paskibra::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('paskibra');
    }

    public function deletepaskibra($id){
        $data = paskibra::find($id);
        $data->delete();
        return redirect()->route('paskibra');
    }
}
