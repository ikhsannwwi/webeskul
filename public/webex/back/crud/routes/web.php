<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itclubController;
use App\Http\Controllers\mpkController;
use App\Http\Controllers\osisController;
use App\Http\Controllers\irmaController;
use App\Http\Controllers\pksController;
use App\Http\Controllers\pramukaController;
use App\Http\Controllers\paskibraController;
use App\Http\Controllers\vollyController;
use App\Http\Controllers\futsalputraController;
use App\Http\Controllers\futsalputriController;
use App\Http\Controllers\sepakbolaController;
use App\Http\Controllers\basketController;
use App\Http\Controllers\hockeyController;
use App\Http\Controllers\badmintonController;
use App\Http\Controllers\karateController;
use App\Http\Controllers\taekwondoController;
use App\Http\Controllers\silatController;
use App\Http\Controllers\tarungderajatController;
use App\Http\Controllers\kirController;
use App\Http\Controllers\kopsisController;
use App\Http\Controllers\pmrController;
use App\Http\Controllers\senitariController;
use App\Http\Controllers\marchingbandController;
use App\Http\Controllers\senikriyaController;
use App\Http\Controllers\paduansuaraController;
use App\Http\Controllers\karawitanController;
use App\Http\Controllers\teaterController;
use App\Http\Controllers\senimusikController;
use App\Http\Controllers\broadcastController;
use App\Http\Controllers\englishclubController;
use App\Http\Controllers\koreanclubController;
use App\Http\Controllers\japanclubController;
use App\Http\Controllers\deutschclubController;
use App\Http\Controllers\administratorController;
use App\Http\Controllers\headerController;






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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', [headerController::class, 'index'])->name('header');

Route::get('/administrator', [administratorController::class, 'index'])->name('administrator');


//itclub
Route::get('/itclub', [itclubController::class, 'index'])->name('itclub');
Route::post('/insertdataitclub', [itclubController::class, 'insertdataitclub'])->name('insertdataitclub');

Route::get('/edititclub/{id}', [itclubController::class, 'edititclub'])->name('edititclub{id}');
Route::post('/updateitclub/{id}', [itclubController::class, 'updateitclub'])->name('updateitclub');

Route::get('/deleteitclub/{id}', [itclubController::class, 'deleteitclub'])->name('deleteitclub');


//mpk
Route::get('/mpk', [mpkController::class, 'index'])->name('mpk');
Route::post('/insertdatampk', [mpkController::class, 'insertdatampk'])->name('insertdatampk');

Route::get('/editmpk/{id}', [mpkController::class, 'editmpk'])->name('editmpk{id}');
Route::post('/updatempk/{id}', [mpkController::class, 'updatempk'])->name('updatempk');

Route::get('/deletempk/{id}', [mpkController::class, 'deletempk'])->name('deletempk');

//osis
Route::get('/osis', [osisController::class, 'index'])->name('osis');
Route::post('/insertdataosis', [osisController::class, 'insertdataosis'])->name('insertdataosis');

Route::get('/editosis/{id}', [osisController::class, 'editosis'])->name('editosis{id}');
Route::post('/updateosis/{id}', [osisController::class, 'updateosis'])->name('updateosis');

Route::get('/deleteosis/{id}', [osisController::class, 'deleteosis'])->name('deleteosis');


//irma
Route::get('/irma', [irmaController::class, 'index'])->name('irma');
Route::post('/insertdatairma', [irmaController::class, 'insertdatairma'])->name('insertdatairma');

Route::get('/editirma/{id}', [irmaController::class, 'editirma'])->name('editirma{id}');
Route::post('/updateirma/{id}', [irmaController::class, 'updateirma'])->name('updateirma');

Route::get('/deleteirma/{id}', [irmaController::class, 'deleteirma'])->name('deleteirma');


//pks
Route::get('/pks', [pksController::class, 'index'])->name('pks');
Route::post('/insertdatapks', [pksController::class, 'insertdatapks'])->name('insertdatapks');

Route::get('/editpks/{id}', [pksController::class, 'editpks'])->name('editpks{id}');
Route::post('/updatepks/{id}', [pksController::class, 'updatepks'])->name('updatepks');

Route::get('/deletepks/{id}', [pksController::class, 'deletepks'])->name('deletepks');

//pramuka
Route::get('/pramuka', [pramukaController::class, 'index'])->name('pramuka');
Route::post('/insertdatapramuka', [pramukaController::class, 'insertdatapramuka'])->name('insertdatapramuka');

Route::get('/editpramuka/{id}', [pramukaController::class, 'editpramuka'])->name('editpramuka{id}');
Route::post('/updatepramuka/{id}', [pramukaController::class, 'updatepramuka'])->name('updatepramuka');

Route::get('/deletepramuka/{id}', [pramukaController::class, 'deletepramuka'])->name('deletepramuka');


//paskibra
Route::get('/paskibra', [paskibraController::class, 'index'])->name('paskibra');
Route::post('/insertdatapaskibra', [paskibraController::class, 'insertdatapaskibra'])->name('insertdatapaskibra');

Route::get('/editpaskibra/{id}', [paskibraController::class, 'editpaskibra'])->name('editpaskibra{id}');
Route::post('/updatepaskibra/{id}', [paskibraController::class, 'updatepaskibra'])->name('updatepaskibra');

Route::get('/deletepaskibra/{id}', [paskibraController::class, 'deletepaskibra'])->name('deletepaskibra');


//volly
Route::get('/volly', [vollyController::class, 'index'])->name('volly');
Route::post('/insertdatavolly', [vollyController::class, 'insertdatavolly'])->name('insertdatavolly');

Route::get('/editvolly/{id}', [vollyController::class, 'editvolly'])->name('editvolly{id}');
Route::post('/updatevolly/{id}', [vollyController::class, 'updatevolly'])->name('updatevolly');

Route::get('/deletevolly/{id}', [vollyController::class, 'deletevolly'])->name('deletevolly');

//futsalputra
Route::get('/futsalputra', [futsalputraController::class, 'index'])->name('futsalputra');
Route::post('/insertdatafutsalputra', [futsalputraController::class, 'insertdatafutsalputra'])->name('insertdatafutsalputra');

Route::get('/editfutsalputra/{id}', [futsalputraController::class, 'editfutsalputra'])->name('editfutsalputra{id}');
Route::post('/updatefutsalputra/{id}', [futsalputraController::class, 'updatefutsalputra'])->name('updatefutsalputra');

Route::get('/deletefutsalputra/{id}', [futsalputraController::class, 'deletefutsalputra'])->name('deletefutsalputra');


//futsalputri
Route::get('/futsalputri', [futsalputriController::class, 'index'])->name('futsalputri');
Route::post('/insertdatafutsalputri', [futsalputriController::class, 'insertdatafutsalputri'])->name('insertdatafutsalputri');

Route::get('/editfutsalputri/{id}', [futsalputriController::class, 'editfutsalputri'])->name('editfutsalputri{id}');
Route::post('/updatefutsalputri/{id}', [futsalputriController::class, 'updatefutsalputri'])->name('updatefutsalputri');

Route::get('/deletefutsalputri/{id}', [futsalputriController::class, 'deletefutsalputri'])->name('deletefutsalputri');


//sepakbola
Route::get('/sepakbola', [sepakbolaController::class, 'index'])->name('sepakbola');
Route::post('/insertdatasepakbola', [sepakbolaController::class, 'insertdatasepakbola'])->name('insertdatasepakbola');

Route::get('/editsepakbola/{id}', [sepakbolaController::class, 'editsepakbola'])->name('editsepakbola{id}');
Route::post('/updatesepakbola/{id}', [sepakbolaController::class, 'updatesepakbola'])->name('updatesepakbola');

Route::get('/deletesepakbola/{id}', [sepakbolaController::class, 'deletesepakbola'])->name('deletesepakbola');

//basket
Route::get('/basket', [basketController::class, 'index'])->name('basket');
Route::post('/insertdatabasket', [basketController::class, 'insertdatabasket'])->name('insertdatabasket');

Route::get('/editbasket/{id}', [basketController::class, 'editbasket'])->name('editbasket{id}');
Route::post('/updatebasket/{id}', [basketController::class, 'updatebasket'])->name('updatebasket');

Route::get('/deletebasket/{id}', [basketController::class, 'deletebasket'])->name('deletebasket');


//hockey
Route::get('/hockey', [hockeyController::class, 'index'])->name('hockey');
Route::post('/insertdatahockey', [hockeyController::class, 'insertdatahockey'])->name('insertdatahockey');

Route::get('/edithockey/{id}', [hockeyController::class, 'edithockey'])->name('edithockey{id}');
Route::post('/updatehockey/{id}', [hockeyController::class, 'updatehockey'])->name('updatehockey');

Route::get('/deletehockey/{id}', [hockeyController::class, 'deletehockey'])->name('deletehockey');


//badminton
Route::get('/badminton', [badmintonController::class, 'index'])->name('badminton');
Route::post('/insertdatabadminton', [badmintonController::class, 'insertdatabadminton'])->name('insertdatabadminton');

Route::get('/editbadminton/{id}', [badmintonController::class, 'editbadminton'])->name('editbadminton{id}');
Route::post('/updatebadminton/{id}', [badmintonController::class, 'updatebadminton'])->name('updatebadminton');

Route::get('/deletebadminton/{id}', [badmintonController::class, 'deletebadminton'])->name('deletebadminton');

//karate
Route::get('/karate', [karateController::class, 'index'])->name('karate');
Route::post('/insertdatakarate', [karateController::class, 'insertdatakarate'])->name('insertdatakarate');

Route::get('/editkarate/{id}', [karateController::class, 'editkarate'])->name('editkarate{id}');
Route::post('/updatekarate/{id}', [karateController::class, 'updatekarate'])->name('updatekarate');

Route::get('/deletekarate/{id}', [karateController::class, 'deletekarate'])->name('deletekarate');


//taekwondo
Route::get('/taekwondo', [taekwondoController::class, 'index'])->name('taekwondo');
Route::post('/insertdatataekwondo', [taekwondoController::class, 'insertdatataekwondo'])->name('insertdatataekwondo');

Route::get('/edittaekwondo/{id}', [taekwondoController::class, 'edittaekwondo'])->name('edittaekwondo{id}');
Route::post('/updatetaekwondo/{id}', [taekwondoController::class, 'updatetaekwondo'])->name('updatetaekwondo');

Route::get('/deletetaekwondo/{id}', [taekwondoController::class, 'deletetaekwondo'])->name('deletetaekwondo');


//silat
Route::get('/silat', [silatController::class, 'index'])->name('silat');
Route::post('/insertdatasilat', [silatController::class, 'insertdatasilat'])->name('insertdatasilat');

Route::get('/editsilat/{id}', [silatController::class, 'editsilat'])->name('editsilat{id}');
Route::post('/updatesilat/{id}', [silatController::class, 'updatesilat'])->name('updatesilat');

Route::get('/deletesilat/{id}', [silatController::class, 'deletesilat'])->name('deletesilat');

//tarungderajat
Route::get('/tarungderajat', [tarungderajatController::class, 'index'])->name('tarungderajat');
Route::post('/insertdatatarungderajat', [tarungderajatController::class, 'insertdatatarungderajat'])->name('insertdatatarungderajat');

Route::get('/edittarungderajat/{id}', [tarungderajatController::class, 'edittarungderajat'])->name('edittarungderajat{id}');
Route::post('/updatetarungderajat/{id}', [tarungderajatController::class, 'updatetarungderajat'])->name('updatetarungderajat');

Route::get('/deletetarungderajat/{id}', [tarungderajatController::class, 'deletetarungderajat'])->name('deletetarungderajat');


//kir
Route::get('/kir', [kirController::class, 'index'])->name('kir');
Route::post('/insertdatakir', [kirController::class, 'insertdatakir'])->name('insertdatakir');

Route::get('/editkir/{id}', [kirController::class, 'editkir'])->name('editkir{id}');
Route::post('/updatekir/{id}', [kirController::class, 'updatekir'])->name('updatekir');

Route::get('/deletekir/{id}', [kirController::class, 'deletekir'])->name('deletekir');


//kopsis
Route::get('/kopsis', [kopsisController::class, 'index'])->name('kopsis');
Route::post('/insertdatakopsis', [kopsisController::class, 'insertdatakopsis'])->name('insertdatakopsis');

Route::get('/editkopsis/{id}', [kopsisController::class, 'editkopsis'])->name('editkopsis{id}');
Route::post('/updatekopsis/{id}', [kopsisController::class, 'updatekopsis'])->name('updatekopsis');

Route::get('/deletekopsis/{id}', [kopsisController::class, 'deletekopsis'])->name('deletekopsis');

//pmr
Route::get('/pmr', [pmrController::class, 'index'])->name('pmr');
Route::post('/insertdatapmr', [pmrController::class, 'insertdatapmr'])->name('insertdatapmr');

Route::get('/editpmr/{id}', [pmrController::class, 'editpmr'])->name('editpmr{id}');
Route::post('/updatepmr/{id}', [pmrController::class, 'updatepmr'])->name('updatepmr');

Route::get('/deletepmr/{id}', [pmrController::class, 'deletepmr'])->name('deletepmr');


//senitari
Route::get('/senitari', [senitariController::class, 'index'])->name('senitari');
Route::post('/insertdatasenitari', [senitariController::class, 'insertdatasenitari'])->name('insertdatasenitari');

Route::get('/editsenitari/{id}', [senitariController::class, 'editsenitari'])->name('editsenitari{id}');
Route::post('/updatesenitari/{id}', [senitariController::class, 'updatesenitari'])->name('updatesenitari');

Route::get('/deletesenitari/{id}', [senitariController::class, 'deletesenitari'])->name('deletesenitari');


//marchingband
Route::get('/marchingband', [marchingbandController::class, 'index'])->name('marchingband');
Route::post('/insertdatamarchingband', [marchingbandController::class, 'insertdatamarchingband'])->name('insertdatamarchingband');

Route::get('/editmarchingband/{id}', [marchingbandController::class, 'editmarchingband'])->name('editmarchingband{id}');
Route::post('/updatemarchingband/{id}', [marchingbandController::class, 'updatemarchingband'])->name('updatemarchingband');

Route::get('/deletemarchingband/{id}', [marchingbandController::class, 'deletemarchingband'])->name('deletemarchingband');

//senikriya
Route::get('/senikriya', [senikriyaController::class, 'index'])->name('senikriya');
Route::post('/insertdatasenikriya', [senikriyaController::class, 'insertdatasenikriya'])->name('insertdatasenikriya');

Route::get('/editsenikriya/{id}', [senikriyaController::class, 'editsenikriya'])->name('editsenikriya{id}');
Route::post('/updatesenikriya/{id}', [senikriyaController::class, 'updatesenikriya'])->name('updatesenikriya');

Route::get('/deletesenikriya/{id}', [senikriyaController::class, 'deletesenikriya'])->name('deletesenikriya');


//paduansuara
Route::get('/paduansuara', [paduansuaraController::class, 'index'])->name('paduansuara');
Route::post('/insertdatapaduansuara', [paduansuaraController::class, 'insertdatapaduansuara'])->name('insertdatapaduansuara');

Route::get('/editpaduansuara/{id}', [paduansuaraController::class, 'editpaduansuara'])->name('editpaduansuara{id}');
Route::post('/updatepaduansuara/{id}', [paduansuaraController::class, 'updatepaduansuara'])->name('updatepaduansuara');

Route::get('/deletepaduansuara/{id}', [paduansuaraController::class, 'deletepaduansuara'])->name('deletepaduansuara');


//karawitan
Route::get('/karawitan', [karawitanController::class, 'index'])->name('karawitan');
Route::post('/insertdatakarawitan', [karawitanController::class, 'insertdatakarawitan'])->name('insertdatakarawitan');

Route::get('/editkarawitan/{id}', [karawitanController::class, 'editkarawitan'])->name('editkarawitan{id}');
Route::post('/updatekarawitan/{id}', [karawitanController::class, 'updatekarawitan'])->name('updatekarawitan');

Route::get('/deletekarawitan/{id}', [karawitanController::class, 'deletekarawitan'])->name('deletekarawitan');

//teater
Route::get('/teater', [teaterController::class, 'index'])->name('teater');
Route::post('/insertdatateater', [teaterController::class, 'insertdatateater'])->name('insertdatateater');

Route::get('/editteater/{id}', [teaterController::class, 'editteater'])->name('editteater{id}');
Route::post('/updateteater/{id}', [teaterController::class, 'updateteater'])->name('updateteater');

Route::get('/deleteteater/{id}', [teaterController::class, 'deleteteater'])->name('deleteteater');


//senimusik
Route::get('/senimusik', [senimusikController::class, 'index'])->name('senimusik');
Route::post('/insertdatasenimusik', [senimusikController::class, 'insertdatasenimusik'])->name('insertdatasenimusik');

Route::get('/editsenimusik/{id}', [senimusikController::class, 'editsenimusik'])->name('editsenimusik{id}');
Route::post('/updatesenimusik/{id}', [senimusikController::class, 'updatesenimusik'])->name('updatesenimusik');

Route::get('/deletesenimusik/{id}', [senimusikController::class, 'deletesenimusik'])->name('deletesenimusik');


//broadcast
Route::get('/broadcast', [broadcastController::class, 'index'])->name('broadcast');
Route::post('/insertdatabroadcast', [broadcastController::class, 'insertdatabroadcast'])->name('insertdatabroadcast');

Route::get('/editbroadcast/{id}', [broadcastController::class, 'editbroadcast'])->name('editbroadcast{id}');
Route::post('/updatebroadcast/{id}', [broadcastController::class, 'updatebroadcast'])->name('updatebroadcast');

Route::get('/deletebroadcast/{id}', [broadcastController::class, 'deletebroadcast'])->name('deletebroadcast');

//englishclub
Route::get('/englishclub', [englishclubController::class, 'index'])->name('englishclub');
Route::post('/insertdataenglishclub', [englishclubController::class, 'insertdataenglishclub'])->name('insertdataenglishclub');

Route::get('/editenglishclub/{id}', [englishclubController::class, 'editenglishclub'])->name('editenglishclub{id}');
Route::post('/updateenglishclub/{id}', [englishclubController::class, 'updateenglishclub'])->name('updateenglishclub');

Route::get('/deleteenglishclub/{id}', [englishclubController::class, 'deleteenglishclub'])->name('deleteenglishclub');


//koreanclub
Route::get('/koreanclub', [koreanclubController::class, 'index'])->name('koreanclub');
Route::post('/insertdatakoreanclub', [koreanclubController::class, 'insertdatakoreanclub'])->name('insertdatakoreanclub');

Route::get('/editkoreanclub/{id}', [koreanclubController::class, 'editkoreanclub'])->name('editkoreanclub{id}');
Route::post('/updatekoreanclub/{id}', [koreanclubController::class, 'updatekoreanclub'])->name('updatekoreanclub');

Route::get('/deletekoreanclub/{id}', [koreanclubController::class, 'deletekoreanclub'])->name('deletekoreanclub');


//japanclub
Route::get('/japanclub', [japanclubController::class, 'index'])->name('japanclub');
Route::post('/insertdatajapanclub', [japanclubController::class, 'insertdatajapanclub'])->name('insertdatajapanclub');

Route::get('/editjapanclub/{id}', [japanclubController::class, 'editjapanclub'])->name('editjapanclub{id}');
Route::post('/updatejapanclub/{id}', [japanclubController::class, 'updatejapanclub'])->name('updatejapanclub');

Route::get('/deletejapanclub/{id}', [japanclubController::class, 'deletejapanclub'])->name('deletejapanclub');

//deutschclub
Route::get('/deutschclub', [deutschclubController::class, 'index'])->name('deutschclub');
Route::post('/insertdatadeutschclub', [deutschclubController::class, 'insertdatadeutschclub'])->name('insertdatadeutschclub');

Route::get('/editdeutschclub/{id}', [deutschclubController::class, 'editdeutschclub'])->name('editdeutschclub{id}');
Route::post('/updatedeutschclub/{id}', [deutschclubController::class, 'updatedeutschclub'])->name('updatedeutschclub');

Route::get('/deletedeutschclub/{id}', [deutschclubController::class, 'deletedeutschclub'])->name('deletedeutschclub');