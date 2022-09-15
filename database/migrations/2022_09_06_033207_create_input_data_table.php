<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_data', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_berobat')->nullable();
            $table->string('klinik')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('pasien_datang')->nullable();
            $table->string('nama_dokter')->nullable();
            $table->string('diagnosa')->nullable();
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
        Schema::dropIfExists('input_data');
    }
}
