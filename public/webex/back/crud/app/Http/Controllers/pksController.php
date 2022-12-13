<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pks;


class pksController extends Controller
{
    public function index(){

        $data = pks::all();
        // dd($data);
        return view('admin.pks.pks', compact('data')) ;
    }

    public function insertdatapks(Request $request){
        $data = pks::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pks');
    }

    public function editpks($id){
        $data = pks::find($id);
        return view('admin.pks.editpks', compact('data'));
    }

    public function updatepks(Request $request , $id){
        $data = pks::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('pks');
    }

    public function deletepks($id){
        $data = pks::find($id);
        $data->delete();
        return redirect()->route('pks');
    }
}
