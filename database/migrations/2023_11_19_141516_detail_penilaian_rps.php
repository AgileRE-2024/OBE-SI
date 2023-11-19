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
        Schema::create('detail_penilaian_rps', function (Blueprint $table) {
            $table->id();
            $table->string('kodePenilaian',10);
            $table->char('id_rps',7);
            $table->foreign('id_rps')->references('id_rps')->on('RPS')->onDelete('restrict');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('restrict');
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
        Schema::dropIfExists('detail_penilaian_rps');
    }
};
