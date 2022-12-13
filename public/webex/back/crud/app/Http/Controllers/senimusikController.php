<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\senimusik;

class senimusikController extends Controller
{
    public function index(){

        $data = senimusik::all();
        // dd($data);
        return view('admin.senimusik.senimusik', compact('data')) ;
    }

    public function insertdatasenimusik(Request $request){
        $data = senimusik::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('senimusik');
    }

    public function editsenimusik($id){
        $data = senimusik::find($id);
        return view('admin.senimusik.editsenimusik', compact('data'));
    }

    public function updatesenimusik(Request $request , $id){
        $data = senimusik::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('senimusik');
    }

    public function deletesenimusik($id){
        $data = senimusik::find($id);
        $data->delete();
        return redirect()->route('senimusik');
    }
}
