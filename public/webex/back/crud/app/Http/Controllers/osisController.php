<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\osis;


class osisController extends Controller
{
    public function index(){

        $data = osis::all();
        // dd($data);
        return view('admin.osis.osis', compact('data')) ;
    }

    public function insertdataosis(Request $request){
        $data = osis::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('osis');
    }

    public function editosis($id){
        $data = osis::find($id);
        return view('admin.osis.editosis', compact('data'));
    }

    public function updateosis(Request $request , $id){
        $data = osis::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('osis');
    }

    public function deleteosis($id){
        $data = osis::find($id);
        $data->delete();
        return redirect()->route('osis');
    }
}
