<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teknik_penilaian_rps', function (Blueprint $table) {
            $table->increments('id_teknik_penilaian');
            $table->string('nama_teknik_penilaian',30)->nullable();
            $table->string('deskripsi_teknik_penilaian',200)->nullable();
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
        Schema::table('teknik_penilaian_rps', function (Blueprint $table) {
            //
        });
    }
};
