<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header;
use App\Models\badminton;
use App\Models\basket;
use App\Models\broadcast;
use App\Models\deutschclub;
use App\Models\englishclub;
use App\Models\futsalputra;
use App\Models\futsalputri;
use App\Models\hockey;
use App\Models\irma;
use App\Models\itclub;
use App\Models\japanclub;
use App\Models\karate;
use App\Models\karawitan;
use App\Models\kir;
use App\Models\kopsis;
use App\Models\koreanclub;
use App\Models\marchingband;
use App\Models\mpk;
use App\Models\osis;
use App\Models\paduansuara;
use App\Models\paskibra;
use App\Models\pks;
use App\Models\pmr;
use App\Models\pramuka;
use App\Models\senitari;
use App\Models\senikriya;
use App\Models\senimusik;
use App\Models\sepakbola;
use App\Models\silat;
use App\Models\taekwondo;
use App\Models\tarungderajat;
use App\Models\teater;
use App\Models\volly;







class headerController extends Controller
{
    public function index(){

        $data = header::all();
    //     badminton::find($nama_eskul),
    //     basket::find($nama_eskul),
    //     broadcast::find($nama_eskul),
    //     deutschclub::find($nama_eskul),
    //     englishclub::find($nama_eskul),
    //     futsalputra::find($nama_eskul),
    //     futsalputri::find($nama_eskul),
    //     hockey::find($nama_eskul),
    //     irma::find($nama_eskul),
    //     itclub::find($nama_eskul),
    //     japanclub::find($nama_eskul),
    //     karate::find($nama_eskul),
    //     karawitan::find($nama_eskul),
    //     kir::find($nama_eskul),
    //     kopsis::find($nama_eskul),
    //     koreanclub::find($nama_eskul),
    //     marchingband::find($nama_eskul),
    //     mpk::find($nama_eskul),
    //     osis::find($nama_eskul),
    //     paduansuara::find($nama_eskul),
    //     paskibra::find($nama_eskul),
    //     pks::find($nama_eskul),
    //     pmr::find($nama_eskul),
    //     pramuka::find($nama_eskul),
    //     senitari::find($nama_eskul),
    //     senikriya::find($nama_eskul),
    //     senimusik::find($nama_eskul),
    //     sepakbola::find($nama_eskul),
    //     silat::find($nama_eskul),
    //     taekwondo::find($nama_eskul),
    //     tarungderajat::find($nama_eskul),
    //     teater::find($nama_eskul),
    //     volly::find($nama_eskul),
    // ];
        // dd($data);
        return view('admin.header.header', compact('data')) ;
    }
}
