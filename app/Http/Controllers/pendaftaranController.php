<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Support\Str;
use App\Models\eskul;
use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    public function index(Request $request ){

        if($request->has('search')){

            $adminmpk = pendaftaran::where('id_eskul','=','1')->get();
            $adminosis = pendaftaran::where('id_eskul','=','2')->get();
            $adminirma = pendaftaran::where('id_eskul','=','3')->get();
            $adminpks = pendaftaran::where('id_eskul','=','4')->get();
            $adminpramukaputra = pendaftaran::where('id_eskul','=','5')->get();
            $adminpramukaputri = pendaftaran::where('id_eskul','=','6')->get();
            $adminpaskibra = pendaftaran::where('id_eskul','=','7')->get();
            $adminvolly = pendaftaran::where('id_eskul','=','8')->get();
            $adminfutsalputra = pendaftaran::where('id_eskul','=','9')->get();
            $adminfutsalputri = pendaftaran::where('id_eskul','=','10')->get();
            $adminsepakbola = pendaftaran::where('id_eskul','=','11')->get();
            $adminbasket = pendaftaran::where('id_eskul','=','12')->get();
            $adminhockey = pendaftaran::where('id_eskul','=','13')->get();
            $adminbadminton = pendaftaran::where('id_eskul','=','14')->get();
            $adminkarate = pendaftaran::where('id_eskul','=','15')->get();
            $admintaekwondo = pendaftaran::where('id_eskul','=','16')->get();
            $adminsilat = pendaftaran::where('id_eskul','=','17')->get();
            $admintarungderajat = pendaftaran::where('id_eskul','=','18')->get();
            $adminkir = pendaftaran::where('id_eskul','=','19')->get();
            $adminkopsis = pendaftaran::where('id_eskul','=','20')->get();
            $adminpmr = pendaftaran::where('id_eskul','=','21')->get();
            $adminsenitari = pendaftaran::where('id_eskul','=','22')->get();
            $adminmarchingband = pendaftaran::where('id_eskul','=','23')->get();
            $adminsenikriya = pendaftaran::where('id_eskul','=','24')->get();
            $adminpaduansuara = pendaftaran::where('id_eskul','=','25')->get();
            $adminkarawitan = pendaftaran::where('id_eskul','=','26')->get();
            $adminteater = pendaftaran::where('id_eskul','=','27')->get();
            $adminsenimusik = pendaftaran::where('id_eskul','=','28')->get();
            $adminitclub = pendaftaran::where('id_eskul','=','29')->get();
            $adminbroadcast = pendaftaran::where('id_eskul','=','30')->get();
            $adminenglishclub = pendaftaran::where('id_eskul','=','31')->get();
            $adminkoreanclub = pendaftaran::where('id_eskul','=','32')->get();
            $adminjapanclub = pendaftaran::where('id_eskul','=','33')->get();
            $admindeutschclub = pendaftaran::where('id_eskul','=','34')->get();


            $data = pendaftaran::where('nama_calon_anggota','like', '%' .$request->search. '%')
                ->orWhere('id_eskul','like', '%' .$request->search. '%')->paginate(5);

            $data_eskul = eskul::all();

        }else{
            $adminmpk = pendaftaran::where('id_eskul','=','1')->get();
            $adminosis = pendaftaran::where('id_eskul','=','2')->get();
            $adminirma = pendaftaran::where('id_eskul','=','3')->get();
            $adminpks = pendaftaran::where('id_eskul','=','4')->get();
            $adminpramukaputra = pendaftaran::where('id_eskul','=','5')->get();
            $adminpramukaputri = pendaftaran::where('id_eskul','=','6')->get();
            $adminpaskibra = pendaftaran::where('id_eskul','=','7')->get();;
            $adminvolly = pendaftaran::where('id_eskul','=','8')->get();
            $adminfutsalputra = pendaftaran::where('id_eskul','=','9')->get();
            $adminfutsalputri = pendaftaran::where('id_eskul','=','10')->get();
            $adminsepakbola = pendaftaran::where('id_eskul','=','11')->get();
            $adminbasket = pendaftaran::where('id_eskul','=','12')->get();
            $adminhockey = pendaftaran::where('id_eskul','=','13')->get();
            $adminbadminton = pendaftaran::where('id_eskul','=','14')->get();
            $adminkarate = pendaftaran::where('id_eskul','=','15')->get();
            $admintaekwondo = pendaftaran::where('id_eskul','=','16')->get();
            $adminsilat = pendaftaran::where('id_eskul','=','17')->get();
            $admintarungderajat = pendaftaran::where('id_eskul','=','18')->get();
            $adminkir = pendaftaran::where('id_eskul','=','19')->get();
            $adminkopsis = pendaftaran::where('id_eskul','=','20')->get();
            $adminpmr = pendaftaran::where('id_eskul','=','21')->get();
            $adminsenitari = pendaftaran::where('id_eskul','=','22')->get();
            $adminmarchingband = pendaftaran::where('id_eskul','=','23')->get();
            $adminsenikriya = pendaftaran::where('id_eskul','=','24')->get();
            $adminpaduansuara = pendaftaran::where('id_eskul','=','25')->get();
            $adminkarawitan = pendaftaran::where('id_eskul','=','26')->get();
            $adminteater = pendaftaran::where('id_eskul','=','27')->get();
            $adminsenimusik = pendaftaran::where('id_eskul','=','28')->get();
            $adminitclub = pendaftaran::where('id_eskul','=','29')->get();
            $adminbroadcast = pendaftaran::where('id_eskul','=','30')->get();
            $adminenglishclub = pendaftaran::where('id_eskul','=','31')->get();
            $adminkoreanclub = pendaftaran::where('id_eskul','=','32')->get();
            $adminjapanclub = pendaftaran::where('id_eskul','=','33')->get();
            $admindeutschclub = pendaftaran::where('id_eskul','=','34')->get();



            $data = pendaftaran::orderBy('created_at', 'DESC')->paginate(5);
            $data_eskul = eskul::all();
        }
        // dd($data);
        return view('admin.pendaftaran-eskul.pendaftaran', compact(
            'data',
            'data_eskul',
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

    public function pendaftaran_eskul(){

        $data = pendaftaran::all();
        $data_eskul = eskul::all();
        
        // dd($data);
        return view('layout.subnav.pendaftaran-eskul.pendaftaran', compact('data','data_eskul')) ;
    }
    public function detail_pendaftaran($slug){

        $detail = pendaftaran::where('slug_pendaftaran', $slug)->first();
        // dd($detail);
        return view('layout.subnav.detail-pendaftaran', compact('detail')) ;
    }

    public function insertdatapendaftaran(Request $request){
        $data = pendaftaran::create($request->all());
        
        $data->save();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editpendaftaran($id){
        $data = pendaftaran::find($id);
        $data_eskul = eskul::all();
        return view('admin.pendaftaran-eskul.editpendaftaran', compact('data','data_eskul'));
    }

    public function updatependaftaran(Request $request , $id){
        $data = pendaftaran::find($id);
        $data->slug_pendaftaran = Str::slug($request->get('judul_pendaftaran'));
    
        $data->update($request->all());
        
        $data->save();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Update');
    }

    public function deletependaftaran($id){
        $data = pendaftaran::find($id);  

        $data->delete();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Delete');
    }
}
