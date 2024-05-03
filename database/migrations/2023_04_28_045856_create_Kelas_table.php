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
        Schema::create('Kelas', function (Blueprint $table) {
            $table->char('kodeKelas',9)->primary('kodeKelas');
            $table->char('id_rps',7)->nullable('id_rps');
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
            $table->string('namaKelas',100);
            $table->text('jadwal');
            $table->integer('kuota');
            $table->char('kodeMK',7);
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('Kelas');
    }
};
