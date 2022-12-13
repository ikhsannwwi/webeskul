<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaekwondoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taekwondos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_eskul');
            $table->string('logo');
            $table->string('pembina');
            $table->string('ketua');
            $table->string('wakilketua');
            $table->string('jadwal_kumpulan');
            $table->text('visi');
            $table->text('misi_eskul');
            $table->text('program_kerja');
            $table->string('nama_instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taekwondo');
    }
}
