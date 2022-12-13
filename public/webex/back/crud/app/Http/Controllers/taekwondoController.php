<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taekwondo;

class taekwondoController extends Controller
{
    public function index(){

        $data = taekwondo::all();
        // dd($data);
        return view('admin.taekwondo.taekwondo', compact('data')) ;
    }

    public function insertdatataekwondo(Request $request){
        $data = taekwondo::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('taekwondo');
    }

    public function edittaekwondo($id){
        $data = taekwondo::find($id);
        return view('admin.taekwondo.edittaekwondo', compact('data'));
    }

    public function updatetaekwondo(Request $request , $id){
        $data = taekwondo::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('taekwondo');
    }

    public function deletetaekwondo($id){
        $data = taekwondo::find($id);
        $data->delete();
        return redirect()->route('taekwondo');
    }
}
