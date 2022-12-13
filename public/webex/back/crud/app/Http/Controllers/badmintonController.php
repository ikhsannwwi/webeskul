<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\badminton;

class badmintonController extends Controller
{
    public function index(){

        $data = badminton::all();
        // dd($data);
        return view('admin.badminton.badminton', compact('data')) ;
    }

    public function insertdatabadminton(Request $request){
        $data = badminton::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('badminton');
    }

    public function editbadminton($id){
        $data = badminton::find($id);
        return view('admin.badminton.editbadminton', compact('data'));
    }

    public function updatebadminton(Request $request , $id){
        $data = badminton::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('badminton');
    }

    public function deletebadminton($id){
        $data = badminton::find($id);
        $data->delete();
        return redirect()->route('badminton');
    }
}
