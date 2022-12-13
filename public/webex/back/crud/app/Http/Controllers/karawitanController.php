<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karawitan;

class karawitanController extends Controller
{
    public function index(){

        $data = karawitan::all();
        // dd($data);
        return view('admin.karawitan.karawitan', compact('data')) ;
    }

    public function insertdatakarawitan(Request $request){
        $data = karawitan::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('karawitan');
    }

    public function editkarawitan($id){
        $data = karawitan::find($id);
        return view('admin.karawitan.editkarawitan', compact('data'));
    }

    public function updatekarawitan(Request $request , $id){
        $data = karawitan::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('karawitan');
    }

    public function deletekarawitan($id){
        $data = karawitan::find($id);
        $data->delete();
        return redirect()->route('karawitan');
    }
}
