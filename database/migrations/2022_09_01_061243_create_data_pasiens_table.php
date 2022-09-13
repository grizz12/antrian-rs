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
            $table->date('tgl_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kec')->nullable();
            $table->string('kota')->nullable();
            $table->string('nama_orang_tua')->nullable();
            $table->string('alamat_orang_tua')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('agama')->nullable();
            $table->string('status')->nullable();
            $table->string('jenis_kelamin')->nullable();
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
