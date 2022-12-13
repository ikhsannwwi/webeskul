<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hockey;

class hockeyController extends Controller
{
    public function index(){

        $data = hockey::all();
        // dd($data);
        return view('admin.hockey.hockey', compact('data')) ;
    }

    public function insertdatahockey(Request $request){
        $data = hockey::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('hockey');
    }

    public function edithockey($id){
        $data = hockey::find($id);
        return view('admin.hockey.edithockey', compact('data'));
    }

    public function updatehockey(Request $request , $id){
        $data = hockey::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('hockey');
    }

    public function deletehockey($id){
        $data = hockey::find($id);
        $data->delete();
        return redirect()->route('hockey');
    }
}
