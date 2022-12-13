<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sepakbola;

class sepakbolaController extends Controller
{
    public function index(){

        $data = sepakbola::all();
        // dd($data);
        return view('admin.sepakbola.sepakbola', compact('data')) ;
    }

    public function insertdatasepakbola(Request $request){
        $data = sepakbola::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('sepakbola');
    }

    public function editsepakbola($id){
        $data = sepakbola::find($id);
        return view('admin.sepakbola.editsepakbola', compact('data'));
    }

    public function updatesepakbola(Request $request , $id){
        $data = sepakbola::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('sepakbola');
    }

    public function deletesepakbola($id){
        $data = sepakbola::find($id);
        $data->delete();
        return redirect()->route('sepakbola');
    }
}
