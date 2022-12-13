<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\englishclub;


class englishclubController extends Controller
{
    public function index(){

        $data = englishclub::all();
        // dd($data);
        return view('admin.englishclub.englishclub', compact('data')) ;
    }

    public function insertdataenglishclub(Request $request){
        $data = englishclub::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('englishclub');
    }

    public function editenglishclub($id){
        $data = englishclub::find($id);
        return view('admin.englishclub.editenglishclub', compact('data'));
    }

    public function updateenglishclub(Request $request , $id){
        $data = englishclub::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('englishclub');
    }

    public function deleteenglishclub($id){
        $data = englishclub::find($id);
        $data->delete();
        return redirect()->route('englishclub');
    }
}
