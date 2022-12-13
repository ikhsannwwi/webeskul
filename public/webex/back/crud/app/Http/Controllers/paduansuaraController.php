<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paduansuara;

class paduansuaraController extends Controller
{
    public function index(){

        $data = paduansuara::all();
        // dd($data);
        return view('admin.paduansuara.paduansuara', compact('data')) ;
    }

    public function insertdatapaduansuara(Request $request){
        $data = paduansuara::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('paduansuara');
    }

    public function editpaduansuara($id){
        $data = paduansuara::find($id);
        return view('admin.paduansuara.editpaduansuara', compact('data'));
    }

    public function updatepaduansuara(Request $request , $id){
        $data = paduansuara::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('paduansuara');
    }

    public function deletepaduansuara($id){
        $data = paduansuara::find($id);
        $data->delete();
        return redirect()->route('paduansuara');
    }
}
