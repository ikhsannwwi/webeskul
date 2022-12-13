<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\senitari;

class senitariController extends Controller
{
    public function index(){

        $data = senitari::all();
        // dd($data);
        return view('admin.senitari.senitari', compact('data')) ;
    }

    public function insertdatasenitari(Request $request){
        $data = senitari::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('senitari');
    }

    public function editsenitari($id){
        $data = senitari::find($id);
        return view('admin.senitari.editsenitari', compact('data'));
    }

    public function updatesenitari(Request $request , $id){
        $data = senitari::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('senitari');
    }

    public function deletesenitari($id){
        $data = senitari::find($id);
        $data->delete();
        return redirect()->route('senitari');
    }
}
