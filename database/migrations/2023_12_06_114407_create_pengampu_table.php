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
        Schema::create('pengampu', function (Blueprint $table) {
            $table->increments('id_pengampu');
            $table->char('id_rps',10);
            $table->char('kodeMK', 10);
            $table->char('nip', 18)->nullable();
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
            $table->foreign('kodeMK')->references('kodeMK')->on('mata_kuliah')->onDelete('restrict');
            $table->foreign('nip')->references('nip')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengampu');
    }
};
