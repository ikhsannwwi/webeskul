<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\basket;


class basketController extends Controller
{
    public function index(){

        $data = basket::all();
        // dd($data);
        return view('admin.basket.basket', compact('data')) ;
    }

    public function insertdatabasket(Request $request){
        $data = basket::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('basket');
    }

    public function editbasket($id){
        $data = basket::find($id);
        return view('admin.basket.editbasket', compact('data'));
    }

    public function updatebasket(Request $request , $id){
        $data = basket::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->foto = $request->file('logo')->getClientOriginalName();
            $data->save();
            
        }
        return redirect()->route('basket');
    }

    public function deletebasket($id){
        $data = basket::find($id);
        $data->delete();
        return redirect()->route('basket');
    }
}
