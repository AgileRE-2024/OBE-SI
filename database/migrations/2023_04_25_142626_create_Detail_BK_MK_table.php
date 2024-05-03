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
        Schema::create('detail_bk_mk', function (Blueprint $table) {
            $table->char('kodeBK', 10);
            $table->char('kodeMK', 10);
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('kodeBK')->references('kodeBK')->on('bahan_kajian')->onDelete('restrict');
            $table->foreign('kodeMK')->references('kodeMK')->on('mata_kuliah')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bk_mk');
    }
};
