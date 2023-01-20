<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use App\Models\User;
use App\Models\berita;
use App\Models\dokumentasi;
use App\Models\eskul;
use App\Models\kepsek;
use App\Models\wakasek;
use App\Models\role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'root',
            'role' => 'root',
            'email' => 'root@root',
            'password' => bcrypt('root'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'mpk',
            'role' => 'adminmpk',
            'email' => 'mpk@smknegeri1garut.sch.id',
            'password' => bcrypt('adminmpk'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'osis',
            'role' => 'adminosis',
            'email' => 'osis@smknegeri1garut.sch.id',
            'password' => bcrypt('adminosis'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'irma',
            'role' => 'adminirma',
            'email' => 'irma@smknegeri1garut.sch.id',
            'password' => bcrypt('adminirma'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pks',
            'role' => 'adminpks',
            'email' => 'pks@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpks'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pramukaputra',
            'role' => 'adminpramukaputra',
            'email' => 'pramukaputra@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpramukaputra'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pramukaputri',
            'role' => 'adminpramukaputri',
            'email' => 'pramukaputri@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpramukaputri'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Paskibra',
            'role' => 'adminpaskibra',
            'email' => 'paskibra@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpaskibra'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'volly',
            'role' => 'adminvolly',
            'email' => 'volly@smknegeri1garut.sch.id',
            'password' => bcrypt('adminvolly'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'futsalputra',
            'role' => 'adminfutsalputra',
            'email' => 'futsalputra@smknegeri1garut.sch.id',
            'password' => bcrypt('adminfutsalputra'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'futsalputri',
            'role' => 'adminfutsalputri',
            'email' => 'futsalputri@smknegeri1garut.sch.id',
            'password' => bcrypt('adminfutsalputri'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'sepakbola',
            'role' => 'adminsepakbola',
            'email' => 'sepakbola@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsepakbola'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'basket',
            'role' => 'adminbasket',
            'email' => 'basket@smknegeri1garut.sch.id',
            'password' => bcrypt('adminbasket'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'hockey',
            'role' => 'adminhockey',
            'email' => 'hockey@smknegeri1garut.sch.id',
            'password' => bcrypt('adminhockey'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'badminton',
            'role' => 'adminbadminton',
            'email' => 'badminton@smknegeri1garut.sch.id',
            'password' => bcrypt('adminbadminton'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'karate',
            'role' => 'adminkarate',
            'email' => 'karate@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkarate'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'taekwondo',
            'role' => 'admintaekwondo',
            'email' => 'taekwondo@smknegeri1garut.sch.id',
            'password' => bcrypt('admintaekwondo'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'silat',
            'role' => 'adminsilat',
            'email' => 'silat@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsilat'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'tarungderajat',
            'role' => 'admintarungderajat',
            'email' => 'tarungderajat@smknegeri1garut.sch.id',
            'password' => bcrypt('admintarungderajat'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'kir',
            'role' => 'adminkir',
            'email' => 'kir@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkir'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'kopsis',
            'role' => 'adminkopsis',
            'email' => 'kopsis@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkopsis'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pmr',
            'role' => 'adminpmr',
            'email' => 'pmr@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpmr'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'senitari',
            'role' => 'adminsenitari',
            'email' => 'senitari@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsenitari'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'marchingband',
            'role' => 'adminmarchingband',
            'email' => 'marchingband@smknegeri1garut.sch.id',
            'password' => bcrypt('adminmarchingband'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'senikriya',
            'role' => 'adminsenikriya',
            'email' => 'senikriya@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsenikriya'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'paduansuara',
            'role' => 'adminpaduansuara',
            'email' => 'paduansuara@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpaduansuara'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'karawitan',
            'role' => 'adminkarawitan',
            'email' => 'karawitan@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkarawitan'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'teater',
            'role' => 'adminteater',
            'email' => 'teater@smknegeri1garut.sch.id',
            'password' => bcrypt('adminteater'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'senimusik',
            'role' => 'adminsenimusik',
            'email' => 'senimusik@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsenimusik'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'itclub',
            'role' => 'adminitclub',
            'email' => 'itclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminitclub'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'broadcast',
            'role' => 'adminbroadcast',
            'email' => 'broadcast@smknegeri1garut.sch.id',
            'password' => bcrypt('adminbroadcast'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'englishclub',
            'role' => 'adminenglishclub',
            'email' => 'englishclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminenglishclub'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Koreanclub',
            'role' => 'adminkoreanclub',
            'email' => 'koreanclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkoreanclub'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Japanclub',
            'role' => 'adminjapanclub',
            'email' => 'japanclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminjapanclub'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Deutschclub',
            'role' => 'admindeutschclub',
            'email' => 'deutschclub@smknegeri1garut.sch.id',
            'password' => bcrypt('admindeutschclub'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);







        role::create([
            'role' => 'root'
        ]);
        role::create([
            'role' => 'adminmpk'
        ]);
        role::create([
            'role' => 'adminosis'
        ]);
        role::create([
            'role' => 'adminirma'
        ]);
        role::create([
            'role' => 'adminpks'
        ]);
        role::create([
            'role' => 'adminpramukaputra'
        ]);
        role::create([
            'role' => 'adminpramukaputri'
        ]);
        role::create([
            'role' => 'adminmpkpaskibra'
        ]);
        role::create([
            'role' => 'adminvolly'
        ]);
        role::create([
            'role' => 'adminfutsalputra'
        ]);
        role::create([
            'role' => 'adminfutsalputri'
        ]);
        role::create([
            'role' => 'adminsepakbola'
        ]);
        role::create([
            'role' => 'adminbasket'
        ]);
        role::create([
            'role' => 'adminhockey'
        ]);
        role::create([
            'role' => 'adminbadminton'
        ]);
        role::create([
            'role' => 'adminkarate'
        ]);
        role::create([
            'role' => 'admintaekwondo'
        ]);
        role::create([
            'role' => 'adminsilat'
        ]);
        role::create([
            'role' => 'admintarungderajat'
        ]);
        role::create([
            'role' => 'adminkir'
        ]);
        role::create([
            'role' => 'adminkopsis'
        ]);
        role::create([
            'role' => 'adminpmr'
        ]);
        role::create([
            'role' => 'adminsenitari'
        ]);
        role::create([
            'role' => 'adminmarchingband'
        ]);
        role::create([
            'role' => 'adminsenikriya'
        ]);
        role::create([
            'role' => 'adminpaduansuara'
        ]);
        role::create([
            'role' => 'adminkarawitan'
        ]);
        role::create([
            'role' => 'adminteater'
        ]);
        role::create([
            'role' => 'adminsenimusik'
        ]);
        role::create([
            'role' => 'adminitclub'
        ]);
        role::create([
            'role' => 'adminbroadcast'
        ]);
        role::create([
            'role' => 'adminenglishclub'
        ]);
        role::create([
            'role' => 'adminkoreanclub'
        ]);
        role::create([
            'role' => 'adminjapanclub'
        ]);
        role::create([
            'role' => 'admindeutschclub'
        ]);






        kepsek::create([
            'nama_kepsek' => 'Bejo Siswoyo S.Pd',
            'foto_kepsek' => Str::random(5).'.png',
            'pembuka_sambutan' => '<p>'.Str::random(15).'</p>',
            'isi_sambutan' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(90).'</p>'.'<p>'.Str::random(50).'</p>',
            'penutup_sambutan' => '<p>'.Str::random(20).'</p>',
        ]);
        wakasek::create([
            'nama_wakasek' => 'Nurdin Ruslih S.Pd',
            'foto_wakasek' => Str::random(5).'.png',
            'pembuka_sambutan' => '<p>'.Str::random(15).'</p>',
            'isi_sambutan' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(90).'</p>'.'<p>'.Str::random(50).'</p>',
            'penutup_sambutan' => '<p>'.Str::random(20).'</p>',
        ]);







        eskul::create([
            'id' => 1,
            'nama_eskul' => 'Majelis Permusyawaratan Kelas',
            'slug' => 'mpk1',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 2,
            'nama_eskul' => 'OSIS',
            'slug' => 'osis2',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 3,
            'nama_eskul' => 'IRMA',
            'slug' => 'irma3',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 4,
            'nama_eskul' => 'Patroli Keamanan Sekolah',
            'slug' => 'pks4',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 5,
            'nama_eskul' => 'Pramuka Putra',
            'slug' => 'pramuka-putra5',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 6,
            'nama_eskul' => 'Pramuka Putri',
            'slug' => 'pramuka-putri6',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 7,
            'nama_eskul' => 'Paskibra',
            'slug' => 'paskibra7',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 8,
            'nama_eskul' => 'Volly',
            'slug' => 'volly8',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 9,
            'nama_eskul' => 'Futsal Putra',
            'slug' => 'futsal-putra9',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 10,
            'nama_eskul' => 'Futsal Putri',
            'slug' => 'futsal-putri10',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 11,
            'nama_eskul' => 'Sepak Bola',
            'slug' => 'sepak-bola11',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 12,
            'nama_eskul' => 'Basket',
            'slug' => 'basket12',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 13,
            'nama_eskul' => 'Hockey',
            'slug' => 'hockey13',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 14,
            'nama_eskul' => 'Badminton',
            'slug' => 'badminton14',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 15,
            'nama_eskul' => 'Karate',
            'slug' => 'karate15',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 16,
            'nama_eskul' => 'Taekwondo',
            'slug' => 'taekwondo16',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 17,
            'nama_eskul' => 'Silat',
            'slug' => 'silat17',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 18,
            'nama_eskul' => 'Tarung Derajat',
            'slug' => 'tarung-derajat18',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 19,
            'nama_eskul' => 'Karya Ilmiah Remaja',
            'slug' => 'kir19',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 20,
            'nama_eskul' => 'Koperasi Siswa',
            'slug' => 'kopsis20',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 21,
            'nama_eskul' => 'Palang Merah Remaja',
            'slug' => 'pmr21',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' =>22,
            'nama_eskul' => 'Seni Tari',
            'slug' => 'seni-tari22',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 23,
            'nama_eskul' => 'Marching Band',
            'slug' => 'marching-band23',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 24,
            'nama_eskul' => 'Seni Kriya',
            'slug' => 'seni-kriya24',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 25,
            'nama_eskul' => 'Paduan Suara',
            'slug' => 'paduan-suara25',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 26,
            'nama_eskul' => 'Karawitan',
            'slug' => 'karawitan26',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 27,
            'nama_eskul' => 'Teater',
            'slug' => 'teater27',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 28,
            'nama_eskul' => 'Seni Musik',
            'slug' => 'seni-musik28',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 29,
            'nama_eskul' => 'IT Club',
            'slug' => 'it-club29',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 30,
            'nama_eskul' => 'Broadcast',
            'slug' => 'broadcast30',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 31,
            'nama_eskul' => 'English Club',
            'slug' => 'english-club31',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 32,
            'nama_eskul' => 'Korean Club',
            'slug' => 'korean-club32',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 33,
            'nama_eskul' => 'Japan Club',
            'slug' => 'japan-club33',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 34,
            'nama_eskul' => 'Deutsch Club',
            'slug' => 'deutsch-club34',
            'logo' => Str::random(7).'.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        




















        dokumentasi::create([
            'nama_kegiatan' => Str::random(10),
            'logo' => Str::random(5).'.png',
            'penyelenggara' => Str::random(7),
            'foto_kegiatan' => Str::random(5).'.png',
        ]);
        dokumentasi::create([
            'nama_kegiatan' => Str::random(10),
            'logo' => Str::random(5).'.png',
            'penyelenggara' => Str::random(7),
            'foto_kegiatan' => Str::random(5).'.png',
        ]);
        dokumentasi::create([
            'nama_kegiatan' => Str::random(10),
            'logo' => Str::random(5).'.png',
            'penyelenggara' => Str::random(7),
            'foto_kegiatan' => Str::random(5).'.png',
        ]);
        dokumentasi::create([
            'nama_kegiatan' => Str::random(10),
            'logo' => Str::random(5).'.png',
            'penyelenggara' => Str::random(7),
            'foto_kegiatan' => Str::random(5).'.png',
        ]);
        dokumentasi::create([
            'nama_kegiatan' => Str::random(10),
            'logo' => Str::random(5).'.png',
            'penyelenggara' => Str::random(7),
            'foto_kegiatan' => Str::random(5).'.png',
        ]);
        dokumentasi::create([
            'nama_kegiatan' => Str::random(10),
            'logo' => Str::random(5).'.png',
            'penyelenggara' => Str::random(7),
            'foto_kegiatan' => Str::random(5).'.png',
        ]);









        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => Str::random(10).'.png',
            'tanggal_berita' => '2022-11-11'
        ]);
    }
}
