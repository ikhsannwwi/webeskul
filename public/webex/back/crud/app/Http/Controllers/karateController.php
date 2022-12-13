<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karate;

class karateController extends Controller
{
    public function index(){

        $data = karate::all();
        // dd($data);
        return view('admin.karate.karate', compact('data')) ;
    }

    public function insertdatakarate(Request $request){
        $data = karate::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('karate');
    }

    public function editkarate($id){
        $data = karate::find($id);
        return view('admin.karate.editkarate', compact('data'));
    }

    public function updatekarate(Request $request , $id){
        $data = karate::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('karate');
    }

    public function deletekarate($id){
        $data = karate::find($id);
        $data->delete();
        return redirect()->route('karate');
    }
}
