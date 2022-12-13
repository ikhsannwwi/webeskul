<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kir;

class kirController extends Controller
{
    public function index(){

        $data = kir::all();
        // dd($data);
        return view('admin.kir.kir', compact('data')) ;
    }

    public function insertdatakir(Request $request){
        $data = kir::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kir');
    }

    public function editkir($id){
        $data = kir::find($id);
        return view('admin.kir.editkir', compact('data'));
    }

    public function updatekir(Request $request , $id){
        $data = kir::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('kir');
    }

    public function deletekir($id){
        $data = kir::find($id);
        $data->delete();
        return redirect()->route('kir');
    }
}
