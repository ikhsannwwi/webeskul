<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itclub;

class itclubController extends Controller
{
    public function index(){

        $data = itclub::all();
        // dd($data);
        return view('admin.itclub.itclub', compact('data')) ;
    }

    public function insertdataitclub(Request $request){
        $data = itclub::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('itclub');
    }

    public function edititclub($id){
        $data = itclub::find($id);
        return view('admin.itclub.edititclub', compact('data'));
    }

    public function updateitclub(Request $request , $id){
        $data = itclub::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('itclub');
    }

    public function deleteitclub($id){
        $data = itclub::find($id);
        $data->delete();
        return redirect()->route('itclub');
    }
}
