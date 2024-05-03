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
        Schema::create('detail_rps_penilaian', function (Blueprint $table) {
            $table->char('id_rps',10)->nullable('id_rps');
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
            $table->string('kodePenilaian',10)->nullable();
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('teknik_penilaian')->onDelete('restrict');
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
    Schema::table('detail_rps_penilaian', function (Blueprint $table) {
        $table->dropForeign('detail_rps_penilaian_kodepenilaian_foreign');
    });

    Schema::dropIfExists('detail_rps_penilaian');
}

};
