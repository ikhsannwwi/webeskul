<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarungderajat;

class tarungderajatController extends Controller
{
    public function index(){

        $data = tarungderajat::all();
        // dd($data);
        return view('admin.tarungderajat.tarungderajat', compact('data')) ;
    }

    public function insertdatatarungderajat(Request $request){
        $data = tarungderajat::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tarungderajat');
    }

    public function edittarungderajat($id){
        $data = tarungderajat::find($id);
        return view('admin.tarungderajat.edittarungderajat', compact('data'));
    }

    public function updatetarungderajat(Request $request , $id){
        $data = tarungderajat::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('tarungderajat');
    }

    public function deletetarungderajat($id){
        $data = tarungderajat::find($id);
        $data->delete();
        return redirect()->route('tarungderajat');
    }
}
