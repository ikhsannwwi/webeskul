<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\eskul;
use App\Models\role;
use App\Models\dokumentasi;
use App\Models\berita;


class eskulController extends Controller
{
    public function index(Request $request){
        
        // $data = eskul::latest();

        // if(request('search')) {
        //     $data->where('nama_eskul','slug' , '%' .request('search'). '%');
        // }else{
        //     $data = eskul::paginate(5);

        // }

        if($request->has('search')){
                // $adminitc = DB::
            $adminitc = eskul::where('slug','like', '%' .$request->search. '%')->
            orWhere('nama_eskul','like', '%' .$request->search. '%')->paginate(2);

            $data = eskul::where('slug','like', '%' .$request->search. '%')->
            orWhere('nama_eskul','like', '%' .$request->search. '%')->paginate(2);
        }else{
            
            $adminmpk = DB::select('select * from eskuls where id = 1 ');
            $adminosis = DB::select('select * from eskuls where id = 2 ');
            $adminirma = DB::select('select * from eskuls where id = 3 ');
            $adminpks = DB::select('select * from eskuls where id = 4 ');
            $adminpramukaputra = DB::select('select * from eskuls where id = 5 ');
            $adminpramukaputri = DB::select('select * from eskuls where id = 6 ');
            $adminpaskibra = DB::select('select * from eskuls where id = 7 ');
            $adminvolly = DB::select('select * from eskuls where id = 8 ');
            $adminfutsalputra = DB::select('select * from eskuls where id = 9 ');
            $adminfutsalputri = DB::select('select * from eskuls where id = 10 ');
            $adminsepakbola = DB::select('select * from eskuls where id = 11 ');
            $adminbasket = DB::select('select * from eskuls where id = 12 ');
            $adminhockey = DB::select('select * from eskuls where id = 13 ');
            $adminbadminton = DB::select('select * from eskuls where id = 14 ');
            $adminkarate = DB::select('select * from eskuls where id = 15 ');
            $admintaekwondo = DB::select('select * from eskuls where id = 16 ');
            $adminsilat = DB::select('select * from eskuls where id = 17 ');
            $admintarungderajat = DB::select('select * from eskuls where id = 18 ');
            $adminkir = DB::select('select * from eskuls where id = 19 ');
            $adminkopsis = DB::select('select * from eskuls where id = 20 ');
            $adminpmr = DB::select('select * from eskuls where id = 21 ');
            $adminsenitari = DB::select('select * from eskuls where id = 22 ');
            $adminmarchingband = DB::select('select * from eskuls where id = 23 ');
            $adminsenikriya = DB::select('select * from eskuls where id = 24 ');
            $adminpaduansuara = DB::select('select * from eskuls where id = 25 ');
            $adminkarawitan = DB::select('select * from eskuls where id = 26 ');
            $adminteater = DB::select('select * from eskuls where id = 27 ');
            $adminsenimusik = DB::select('select * from eskuls where id = 28 ');
            $adminitclub = DB::select('select * from eskuls where id = 29 ');
            $adminbroadcast = DB::select('select * from eskuls where id = 30 ');
            $adminenglishclub = DB::select('select * from eskuls where id = 31 ');
            $adminkoreanclub = DB::select('select * from eskuls where id = 32 ');
            $adminjapanclub = DB::select('select * from eskuls where id = 33 ');
            $admindeutschclub = DB::select('select * from eskuls where id = 34 ');

            
            
            $data = eskul::paginate(2);

        }
        $role = role::all();

        // dd($data);
        return view('admin.eskul', compact(
            'data',
            'role',
            'adminmpk',
            'adminosis',
            'adminirma',
            'adminpks',
            'adminpramukaputra',
            'adminpramukaputri',
            'adminpaskibra',
            'adminvolly',
            'adminfutsalputra',
            'adminfutsalputri',
            'adminsepakbola',
            'adminbasket',
            'adminhockey',
            'adminbadminton',
            'adminkarate',
            'admintaekwondo',
            'adminsilat',
            'admintarungderajat',
            'adminkir',
            'adminkopsis',
            'adminpmr',
            'adminsenitari',
            'adminmarchingband',
            'adminsenikriya',
            'adminpaduansuara',
            'adminkarawitan',
            'adminteater',
            'adminsenimusik',
            'adminitclub',
            'adminbroadcast',
            'adminenglishclub',
            'adminkoreanclub',
            'adminjapanclub',
            'admindeutschclub',
        )) ;
    }
    
    public function visimisisejarah(){

        $data = eskul::all();
        // dd($data);
        return view('layout.subnav.tentangkami.visi-misi-sejarah', compact('data')) ;
    }

    public function eskul(){

        $data = eskul::all();

        $dok = dokumentasi::all();

        $news = berita::all();
        // dd($data);
        return view('welcome', compact('data', 'dok', 'news')) ;
    }

    public function insertdataeskul(Request $request){
        $data = eskul::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editeskul($id){
        $data = eskul::find($id);
        return view('admin.editeskul', compact('data'));
    }

    public function updateeskul(Request $request , $id){
        $data = eskul::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Update');
    }

    public function deleteeskul($id){
        $data = eskul::find($id);
        $data->delete();
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Delete');
    }
}
