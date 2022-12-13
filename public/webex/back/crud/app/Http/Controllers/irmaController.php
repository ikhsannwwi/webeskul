<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\irma;


class irmaController extends Controller
{
    public function index(){

        $data = irma::all();
        // dd($data);
        return view('admin.irma.irma', compact('data')) ;
    }

    public function insertdatairma(Request $request){
        $data = irma::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('irma');
    }

    public function editirma($id){
        $data = irma::find($id);
        return view('admin.irma.editirma', compact('data'));
    }

    public function updateirma(Request $request , $id){
        $data = irma::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('irma');
    }

    public function deleteirma($id){
        $data = irma::find($id);
        $data->delete();
        return redirect()->route('irma');
    }
}
