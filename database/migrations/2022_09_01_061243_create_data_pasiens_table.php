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
            $table->string('nama')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('nik')->nullable();
            $table->string('status')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kec')->nullable();
            $table->string('kota')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('alergi')->nullable();
            $table->string('keterangan_alergi')->nullable();
            // Data Ayah
            $table->string('pilih_orang_tua')->nullable();
            $table->string('nama_orang_tua')->nullable();
            $table->date('tgl_lahir_orang_tua')->nullable();
            $table->string('pendidikan_orang_tua')->nullable();
            $table->string('pekerjaan_orang_tua')->nullable();
            $table->string('alamat_orang_tua')->nullable();
            $table->string('penghasilan_orang_tua')->nullable();

            // Data Ibu

            
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
