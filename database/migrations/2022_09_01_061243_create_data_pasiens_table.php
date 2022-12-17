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
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->date('tgl')->nullable();
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
            $table->string('nama_ayah')->nullable();
            $table->date('tgl_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();

            // Data Ibu
            $table->string('nama_ibu')->nullable();
            $table->date('tgl_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();

            
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


// $table->unsignedBigInteger('id_user');
//             $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
