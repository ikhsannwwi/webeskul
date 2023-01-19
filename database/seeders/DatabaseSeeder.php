<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use App\Models\User;
use App\Models\berita;
use App\Models\dokumentasi;
use App\Models\eskul;

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
            'name' => 'ITCLUB',
            'role' => 'adminitc',
            'email' => 'itc@smknegeri1garut.sch.id',
            'password' => bcrypt('adminitc'),
            'foto' => '1.png',
            'remember_token' => Str::random(60),
        ]);










        // eskul::create([
        //     'id' => 1,
        //     'nama_eskul' => 'Majelis Permusyawaratan Kelas',
        //     'slug' => 'mpk1',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 2,
        //     'nama_eskul' => 'OSIS',
        //     'slug' => 'osis2',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 3,
        //     'nama_eskul' => 'IRMA',
        //     'slug' => 'irma3',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 4,
        //     'nama_eskul' => 'Patroli Keamanan Sekolah',
        //     'slug' => 'pks4',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 5,
        //     'nama_eskul' => 'Pramuka Putra',
        //     'slug' => 'pramuka-putra5',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 6,
        //     'nama_eskul' => 'Pramuka Putri',
        //     'slug' => 'pramuka-putri6',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 7,
        //     'nama_eskul' => 'Paskibra',
        //     'slug' => 'paskibra7',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 8,
        //     'nama_eskul' => 'Volly',
        //     'slug' => 'volly8',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 9,
        //     'nama_eskul' => 'Futsal Putra',
        //     'slug' => 'futsal-putra9',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 10,
        //     'nama_eskul' => 'Futsal Putri',
        //     'slug' => 'futsal-putri10',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 11,
        //     'nama_eskul' => 'Sepak Bola',
        //     'slug' => 'sepak-bola11',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 12,
        //     'nama_eskul' => 'Basket',
        //     'slug' => 'basket12',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 13,
        //     'nama_eskul' => 'Hockey',
        //     'slug' => 'hockey13',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 14,
        //     'nama_eskul' => 'Badminton',
        //     'slug' => 'badminton14',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 15,
        //     'nama_eskul' => 'Karate',
        //     'slug' => 'karate15',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 16,
        //     'nama_eskul' => 'Taekwondo',
        //     'slug' => 'taekwondo16',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 17,
        //     'nama_eskul' => 'Silat',
        //     'slug' => 'silat17',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 18,
        //     'nama_eskul' => 'Tarung Derajat',
        //     'slug' => 'tarung-derajat18',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 19,
        //     'nama_eskul' => 'Karya Ilmiah Remaja',
        //     'slug' => 'kir19',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 20,
        //     'nama_eskul' => 'Koperasi Siswa',
        //     'slug' => 'kopsis20',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 21,
        //     'nama_eskul' => 'Palang Merah Remaja',
        //     'slug' => 'pmr21',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' =>22,
        //     'nama_eskul' => 'Seni Tari',
        //     'slug' => 'seni-tari22',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 23,
        //     'nama_eskul' => 'Marching Band',
        //     'slug' => 'marching-band23',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 24,
        //     'nama_eskul' => 'Seni Kriya',
        //     'slug' => 'seni-kriya24',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 25,
        //     'nama_eskul' => 'Paduan Suara',
        //     'slug' => 'paduan-suara25',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 26,
        //     'nama_eskul' => 'Karawitan',
        //     'slug' => 'karawitan26',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 27,
        //     'nama_eskul' => 'Teater',
        //     'slug' => 'teater27',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 28,
        //     'nama_eskul' => 'Seni Musik',
        //     'slug' => 'seni-musik28',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 29,
        //     'nama_eskul' => 'IT Club',
        //     'slug' => 'it-club29',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 30,
        //     'nama_eskul' => 'Broadcast',
        //     'slug' => 'broadcast30',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 31,
        //     'nama_eskul' => 'English Club',
        //     'slug' => 'english-club31',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 32,
        //     'nama_eskul' => 'Korean Club',
        //     'slug' => 'korean-club32',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 33,
        //     'nama_eskul' => 'Japan Club',
        //     'slug' => 'japan-club33',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        // eskul::create([
        //     'id' => 34,
        //     'nama_eskul' => 'Deutsch Club',
        //     'slug' => 'deutsch-club34',
        //     'logo' => Str::random(7).'.png',
        //     'pembina' => Str::random(7),
        //     'ketua' => Str::random(7),
        //     'wakilketua' => Str::random(7),
        //     'jadwal_kumpulan' => Str::random(7),
        //     'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
        //     'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
        //     'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
        //     'nama_instagram' => Str::random(7),
        // ]);
        




















        // dokumentasi::create([
        //     'nama_kegiatan' => Str::random(10),
        //     'logo' => Str::random(5).'.png',
        //     'penyelenggara' => Str::random(7),
        //     'foto_kegiatan' => Str::random(5).'.png',
        // ]);
        // dokumentasi::create([
        //     'nama_kegiatan' => Str::random(10),
        //     'logo' => Str::random(5).'.png',
        //     'penyelenggara' => Str::random(7),
        //     'foto_kegiatan' => Str::random(5).'.png',
        // ]);
        // dokumentasi::create([
        //     'nama_kegiatan' => Str::random(10),
        //     'logo' => Str::random(5).'.png',
        //     'penyelenggara' => Str::random(7),
        //     'foto_kegiatan' => Str::random(5).'.png',
        // ]);
        // dokumentasi::create([
        //     'nama_kegiatan' => Str::random(10),
        //     'logo' => Str::random(5).'.png',
        //     'penyelenggara' => Str::random(7),
        //     'foto_kegiatan' => Str::random(5).'.png',
        // ]);
        // dokumentasi::create([
        //     'nama_kegiatan' => Str::random(10),
        //     'logo' => Str::random(5).'.png',
        //     'penyelenggara' => Str::random(7),
        //     'foto_kegiatan' => Str::random(5).'.png',
        // ]);
        // dokumentasi::create([
        //     'nama_kegiatan' => Str::random(10),
        //     'logo' => Str::random(5).'.png',
        //     'penyelenggara' => Str::random(7),
        //     'foto_kegiatan' => Str::random(5).'.png',
        // ]);









        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
        // berita::create([
        //     'judul_berita' => Str::random(10),
        //     'foto_berita' => Str::random(10).'.png',
        //     'tanggal_berita' => '2022-11-11'
        // ]);
    }
}
