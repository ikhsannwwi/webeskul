<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\headerController;

use App\Http\Controllers\eskulController;
use App\Http\Controllers\exController;
use App\Http\Controllers\dokumentasiController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\authController;
use App\Http\Controllers\contactpersonController;
use App\Http\Controllers\kepsekController;
use App\Http\Controllers\wakasekController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\userController;










/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tentang-web-ini', [tentangwebController::class, 'tentangweb'])->name('tentangweb');
Route::get('/tentang-web-ini', function () {
    return view('layout.subnav.tentangkami.tentang-web-ini');
});
Route::get('/', [eskulController::class, 'eskul'])->name('eskul');

Route::get('/dokumentasi_', [dokumentasiController::class, 'dokumentasi'])->name('dokumentasi');
Route::get('/dokumentasi/{slug}', [dokumentasiController::class, 'detail_dokumentasi'])->name('detail_dokumentasi');

Route::get('/news', [beritaController::class, 'berita'])->name('berita');
Route::get('/news/{slug}', [beritaController::class, 'detail_berita'])->name('detail_berita');

Route::get('/contact-person', [contactpersonController::class, 'contactperson'])->name('contactperson');

Route::get('/kepala-sekolah', [kepsekController::class, 'kepsek'])->name('kepsek');
Route::get('/wakil-kepala-sekolah', [wakasekController::class, 'wakasek'])->name('wakasek');
Route::get('/visi-misi-sejarah', [eskulController::class, 'visimisisejarah'])->name('visimisisejarah');


// Route::get('/administrator', [administratorController::class, 'index'])->name('administrator');

Route::get('/eskul/{slug}', [exController::class, 'ex'])->name('ex');
// Route::get('/osis{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/irma{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/pks{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/pramuka-putra{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/pramuka-putri{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/paskibra{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/volly{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/futsal-putra{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/futsal-putri{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/sepakbola{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/basket{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/hockey{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/badminton{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/karate{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/taekwondo{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/silat{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/tarung-derajat{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/kir{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/kopsis{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/pmr{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/seni-tari{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/marching-band{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/seni-kriya{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/paduan-suara{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/karawitan{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/teater{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/seni-musik{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/it-club{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/broadcast{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/english-club{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/japan-club{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/korean-club{id}', [exController::class, 'ex'])->name('ex');
// Route::get('/deutsch-club{id}', [exController::class, 'ex'])->name('ex');


// Validation
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/loginproses', [authController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [authController::class, 'logout'])->name('logout');






// Route::group(['middleware' => ['auth','ceklevel:root']], function(){

    Route::get('/users', [userController::class, 'index'])->name('users');
    Route::get('/register', [userController::class, 'register'])->name('register');
    Route::post('/registeruser', [userController::class, 'registeruser'])->name('registeruser');
    Route::get('/edituser/{id}', [userController::class, 'edituser'])->name('edituser{id}')->middleware('auth');
    Route::post('/updateuser/{id}', [userController::class, 'updateuser'])->name('updateuser');
    Route::get('/deleteuser/{id}', [userController::class, 'deleteuser'])->name('deleteuser');
    Route::get('edituser/editpassword/{id}', [userController::class, 'editpassword'])->name('editpassword{id}')->middleware('auth');
    Route::post('/updatepassword/{id}', [userController::class, 'updatepassword'])->name('updatepassword');
    Route::get('edituser/editpassword/backtoedituser/{id}', [userController::class, 'backtoedituser'])->name('backtoedituser');
    




    //anggota
    Route::get('/anggota', [anggotaController::class, 'index'])->name('anggota')->middleware('auth');
    Route::post('/insertdataanggota', [anggotaController::class, 'insertdataanggota'])->name('insertdataanggota');

    Route::get('/editanggota/{id}', [anggotaController::class, 'editanggota'])->name('editanggota{id}')->middleware('auth');
    Route::post('/updateanggota/{id}', [anggotaController::class, 'updateanggota'])->name('updateanggota');
    
    Route::get('/deleteanggota/{id}', [anggotaController::class, 'deleteanggota'])->name('deleteanggota');
    


    
    //kepsek
    Route::get('/kepsek', [kepsekController::class, 'index'])->name('kepsek')->middleware('auth');
    Route::post('/insertdatakepsek', [kepsekController::class, 'insertdatakepsek'])->name('insertdatakepsek');

    Route::get('/editkepsek/{id}', [kepsekController::class, 'editkepsek'])->name('editkepsek{id}')->middleware('auth');
    Route::post('/updatekepsek/{id}', [kepsekController::class, 'updatekepsek'])->name('updatekepsek');

    Route::get('/deletekepsek/{id}', [kepsekController::class, 'deletekepsek'])->name('deletekepsek');




    //wakasek
    Route::get('/wakasek', [wakasekController::class, 'index'])->name('wakasek')->middleware('auth');
    Route::post('/insertdatawakasek', [wakasekController::class, 'insertdatawakasek'])->name('insertdatawakasek');

    Route::get('/editwakasek/{id}', [wakasekController::class, 'editwakasek'])->name('editwakasek{id}')->middleware('auth');
    Route::post('/updatewakasek/{id}', [wakasekController::class, 'updatewakasek'])->name('updatewakasek');

    Route::get('/deletewakasek/{id}', [wakasekController::class, 'deletewakasek'])->name('deletewakasek');



    


// });




// //////////////////////////////////////////CRUD///////////////////////////////////////////// //
//eskul
Route::get('/administrator', [eskulController::class, 'index'])->name('eskul')->middleware('auth');
// Route::get('/admin', [eskulController::class, 'index'])->name('eskul')->middleware('auth');
Route::post('/insertdataeskul', [eskulController::class, 'insertdataeskul'])->name('insertdataeskul');

Route::get('/editeskul/{id}', [eskulController::class, 'editeskul'])->name('editeskul{id}')->middleware('auth');
Route::post('/updateeskul/{id}', [eskulController::class, 'updateeskul'])->name('updateeskul');

Route::get('/deleteeskul/{id}', [eskulController::class, 'deleteeskul'])->name('deleteeskul');




//dokumentasi
Route::get('/dokumentasi', [dokumentasiController::class, 'index'])->name('dokumentasi')->middleware('auth');
Route::post('/insertdatadokumentasi', [dokumentasiController::class, 'insertdatadokumentasi'])->name('insertdatadokumentasi');

Route::get('/editdokumentasi/{id}', [dokumentasiController::class, 'editdokumentasi'])->name('editdokumentasi{id}')->middleware('auth');
Route::post('/updatedokumentasi/{id}', [dokumentasiController::class, 'updatedokumentasi'])->name('updatedokumentasi');

Route::get('/deletedokumentasi/{id}', [dokumentasiController::class, 'deletedokumentasi'])->name('deletedokumentasi');




//berita
Route::get('/berita', [beritaController::class, 'index'])->name('berita')->middleware('auth');
Route::post('/insertdataberita', [beritaController::class, 'insertdataberita'])->name('insertdataberita');

Route::get('/editberita/{id}', [beritaController::class, 'editberita'])->name('editberita{id}')->middleware('auth');
Route::post('/updateberita/{id}', [beritaController::class, 'updateberita'])->name('updateberita');

Route::get('/deleteberita/{id}', [beritaController::class, 'deleteberita'])->name('deleteberita');





