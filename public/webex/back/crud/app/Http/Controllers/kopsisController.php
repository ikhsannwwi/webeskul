<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kopsis;

class kopsisController extends Controller
{
    public function index(){

        $data = kopsis::all();
        // dd($data);
        return view('admin.kopsis.kopsis', compact('data')) ;
    }

    public function insertdatakopsis(Request $request){
        $data = kopsis::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kopsis');
    }

    public function editkopsis($id){
        $data = kopsis::find($id);
        return view('admin.kopsis.editkopsis', compact('data'));
    }

    public function updatekopsis(Request $request , $id){
        $data = kopsis::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('kopsis');
    }

    public function deletekopsis($id){
        $data = kopsis::find($id);
        $data->delete();
        return redirect()->route('kopsis');
    }
}
