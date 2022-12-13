<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mpk;


class mpkController extends Controller
{
    public function index(){

        $data = mpk::all();
        // dd($data);
        return view('admin.mpk.mpk', compact('data')) ;
    }

    public function insertdatampk(Request $request){
        $data = mpk::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('mpk');
    }

    public function editmpk($id){
        $data = mpk::find($id);
        return view('admin.mpk.editmpk', compact('data'));
    }

    public function updatempk(Request $request , $id){
        $data = mpk::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('mpk');
    }

    public function deletempk($id){
        $data = mpk::find($id);
        $data->delete();
        return redirect()->route('mpk');
    }
}
