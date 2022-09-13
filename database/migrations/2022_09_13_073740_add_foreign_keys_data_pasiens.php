<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysDataPasiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_pasiens', function (Blueprint $table) {
            $table->foreign('id_data_pasien','fk_data_pasiens_to_tikets')->references('id')
            ->on('tikets')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pasiens', function (Blueprint $table) {
            $table->dropForeign('fk_data_pasiens_to_tikets');
        });
    }
}
