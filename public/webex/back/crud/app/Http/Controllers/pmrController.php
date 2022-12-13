<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pmr;


class pmrController extends Controller
{
    public function index(){

        $data = pmr::all();
        // dd($data);
        return view('admin.pmr.pmr', compact('data')) ;
    }

    public function insertdatapmr(Request $request){
        $data = pmr::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pmr');
    }

    public function editpmr($id){
        $data = pmr::find($id);
        return view('admin.pmr.editpmr', compact('data'));
    }

    public function updatepmr(Request $request , $id){
        $data = pmr::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('pmr');
    }

    public function deletepmr($id){
        $data = pmr::find($id);
        $data->delete();
        return redirect()->route('pmr');
    }
}
