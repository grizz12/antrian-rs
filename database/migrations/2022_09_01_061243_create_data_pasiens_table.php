<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pasiens', function (Blueprint $table) {
            $table->id();
            $table->integer('no_rekam')->unique();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->string('no_tlp');
            $table->string('alamat');
            $table->string('kec');
            $table->string('kota');
            $table->string('nama_orang_tua');
            $table->string('alamat_orang_tua');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('status');
            $table->string('jenis_kelamin');
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
        Schema::dropIfExists('data_pasiens');
    }
}
