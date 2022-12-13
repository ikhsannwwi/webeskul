<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\koreanclub;

class koreanclubController extends Controller
{
    public function index(){

        $data = koreanclub::all();
        // dd($data);
        return view('admin.koreanclub.koreanclub', compact('data')) ;
    }

    public function insertdatakoreanclub(Request $request){
        $data = koreanclub::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('koreanclub');
    }

    public function editkoreanclub($id){
        $data = koreanclub::find($id);
        return view('admin.koreanclub.editkoreanclub', compact('data'));
    }

    public function updatekoreanclub(Request $request , $id){
        $data = koreanclub::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('koreanclub');
    }

    public function deletekoreanclub($id){
        $data = koreanclub::find($id);
        $data->delete();
        return redirect()->route('koreanclub');
    }
}
