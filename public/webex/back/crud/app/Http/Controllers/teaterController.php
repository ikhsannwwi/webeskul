<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teater;

class teaterController extends Controller
{
    public function index(){

        $data = teater::all();
        // dd($data);
        return view('admin.teater.teater', compact('data')) ;
    }

    public function insertdatateater(Request $request){
        $data = teater::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('teater');
    }

    public function editteater($id){
        $data = teater::find($id);
        return view('admin.teater.editteater', compact('data'));
    }

    public function updateteater(Request $request , $id){
        $data = teater::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('teater');
    }

    public function deleteteater($id){
        $data = teater::find($id);
        $data->delete();
        return redirect()->route('teater');
    }
}
