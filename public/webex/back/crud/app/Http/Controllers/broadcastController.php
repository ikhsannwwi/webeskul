<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\broadcast;


class broadcastController extends Controller
{
    public function index(){

        $data = broadcast::all();
        // dd($data);
        return view('admin.broadcast.broadcast', compact('data')) ;
    }

    public function insertdatabroadcast(Request $request){
        $data = broadcast::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('broadcast');
    }

    public function editbroadcast($id){
        $data = broadcast::find($id);
        return view('admin.broadcast.editbroadcast', compact('data'));
    }

    public function updatebroadcast(Request $request , $id){
        $data = broadcast::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('broadcast');
    }

    public function deletebroadcast($id){
        $data = broadcast::find($id);
        $data->delete();
        return redirect()->route('broadcast');
    }
}
