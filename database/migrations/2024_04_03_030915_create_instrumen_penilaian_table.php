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
        Schema::create('instrumen_penilaian', function (Blueprint $table) {
            $table->increments('id_instrumen_penilaian');
            $table->string('nama_instrumen_penilaian',30)->nullable();
            $table->string('deskripsi_instrumen_penilaian',200)->nullable();
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
        Schema::dropIfExists('instrumen_penilaian');
    }
};
