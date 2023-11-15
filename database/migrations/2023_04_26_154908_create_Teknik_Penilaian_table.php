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
        Schema::create('Teknik_Penilaian', function (Blueprint $table) {
            $table->char('kodePenilaian', 2)->primary('kodePenilaian');
            $table->string('teknikPenilaian',100);
            $table->integer('bobotPenilaian');
            $table->string('kriteriaPenilaian', 20);
            $table->string('tahapPenilaian', 50);
            $table->string('instrumenPenilaian', 50);
            $table->date('deleted_at')->nullable();
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
        Schema::dropIfExists('Teknik_Penilaian');
    }
};
