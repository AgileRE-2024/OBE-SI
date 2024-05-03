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
        Schema::create('detail_sn_cplprodi', function (Blueprint $table) {
            $table->char('kodeCPLSN', 10);
            $table->char('kodeCPL', 10);
            $table->timestamps();
            $table->foreign('kodeCPLSN')->references('kodeCPLSN')->on('cpl_sn_dikti')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kodeCPL')->references('kodeCPL')->on('cpl_prodi')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_sn_cplprodi');
    }
};
