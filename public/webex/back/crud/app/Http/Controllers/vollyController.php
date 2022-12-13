<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volly;

class vollyController extends Controller
{
    public function index(){

        $data = volly::all();
        // dd($data);
        return view('admin.volly.volly', compact('data')) ;
    }

    public function insertdatavolly(Request $request){
        $data = volly::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('volly');
    }

    public function editvolly($id){
        $data = volly::find($id);
        return view('admin.volly.editvolly', compact('data'));
    }

    public function updatevolly(Request $request , $id){
        $data = volly::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('volly');
    }

    public function deletevolly($id){
        $data = volly::find($id);
        $data->delete();
        return redirect()->route('volly');
    }
}
