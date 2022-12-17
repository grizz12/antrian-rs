<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_data_pasien')->nullable()->index('fk_data_pasiens_to_tikets');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('pinjaman')->nullable();
            $table->string('poli')->nullable();
            $table->date('tgl_kunjungan')->nullable();
            $table->string('dokter')->nullable();
            $table->time('waktu_kunjungan')->nullable();
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
        Schema::dropIfExists('tikets');
    }
}
// $table->unsignedBigInteger('id_user');
//             $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
