<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\japanclub;

class japanclubController extends Controller
{
    public function index(){

        $data = japanclub::all();
        // dd($data);
        return view('admin.japanclub.japanclub', compact('data')) ;
    }

    public function insertdatajapanclub(Request $request){
        $data = japanclub::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('japanclub');
    }

    public function editjapanclub($id){
        $data = japanclub::find($id);
        return view('admin.japanclub.editjapanclub', compact('data'));
    }

    public function updatejapanclub(Request $request , $id){
        $data = japanclub::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('japanclub');
    }

    public function deletejapanclub($id){
        $data = japanclub::find($id);
        $data->delete();
        return redirect()->route('japanclub');
    }
}
