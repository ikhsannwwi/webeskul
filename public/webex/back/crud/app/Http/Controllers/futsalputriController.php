<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\futsalputri;


class futsalputriController extends Controller
{
    public function index(){

        $data = futsalputri::all();
        // dd($data);
        return view('admin.futsalputri.futsalputri', compact('data')) ;
    }

    public function insertdatafutsalputri(Request $request){
        $data = futsalputri::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('futsalputri');
    }

    public function editfutsalputri($id){
        $data = futsalputri::find($id);
        return view('admin.futsalputri.editfutsalputri', compact('data'));
    }

    public function updatefutsalputri(Request $request , $id){
        $data = futsalputri::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('futsalputri');
    }

    public function deletefutsalputri($id){
        $data = futsalputri::find($id);
        $data->delete();
        return redirect()->route('futsalputri');
    }
}
