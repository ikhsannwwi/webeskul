<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\silat;

class silatController extends Controller
{
    public function index(){

        $data = silat::all();
        // dd($data);
        return view('admin.silat.silat', compact('data')) ;
    }

    public function insertdatasilat(Request $request){
        $data = silat::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('silat');
    }

    public function editsilat($id){
        $data = silat::find($id);
        return view('admin.silat.editsilat', compact('data'));
    }

    public function updatesilat(Request $request , $id){
        $data = silat::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('silat');
    }

    public function deletesilat($id){
        $data = silat::find($id);
        $data->delete();
        return redirect()->route('silat');
    }
}
