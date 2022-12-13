<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\futsalputra;


class futsalputraController extends Controller
{
    public function index(){

        $data = futsalputra::all();
        // dd($data);
        return view('admin.futsalputra.futsalputra', compact('data')) ;
    }

    public function insertdatafutsalputra(Request $request){
        $data = futsalputra::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('futsalputra');
    }

    public function editfutsalputra($id){
        $data = futsalputra::find($id);
        return view('admin.futsalputra.editfutsalputra', compact('data'));
    }

    public function updatefutsalputra(Request $request , $id){
        $data = futsalputra::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('futsalputra');
    }

    public function deletefutsalputra($id){
        $data = futsalputra::find($id);
        $data->delete();
        return redirect()->route('futsalputra');
    }
}
