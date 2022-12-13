<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deutschclub;


class deutschclubController extends Controller
{
    public function index(){

        $data = deutschclub::all();
        // dd($data);
        return view('admin.deutschclub.deutschclub', compact('data')) ;
    }

    public function insertdatadeutschclub(Request $request){
        $data = deutschclub::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('deutschclub');
    }

    public function editdeutschclub($id){
        $data = deutschclub::find($id);
        return view('admin.deutschclub.editdeutschclub', compact('data'));
    }

    public function updatedeutschclub(Request $request , $id){
        $data = deutschclub::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('deutschclub');
    }

    public function deletedeutschclub($id){
        $data = deutschclub::find($id);
        $data->delete();
        return redirect()->route('deutschclub');
    }
}
