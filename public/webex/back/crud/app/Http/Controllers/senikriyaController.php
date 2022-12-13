<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\senikriya;

class senikriyaController extends Controller
{
    public function index(){

        $data = senikriya::all();
        // dd($data);
        return view('admin.senikriya.senikriya', compact('data')) ;
    }

    public function insertdatasenikriya(Request $request){
        $data = senikriya::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('senikriya');
    }

    public function editsenikriya($id){
        $data = senikriya::find($id);
        return view('admin.senikriya.editsenikriya', compact('data'));
    }

    public function updatesenikriya(Request $request , $id){
        $data = senikriya::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('senikriya');
    }

    public function deletesenikriya($id){
        $data = senikriya::find($id);
        $data->delete();
        return redirect()->route('senikriya');
    }
}
