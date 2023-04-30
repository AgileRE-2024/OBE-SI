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
        Schema::create('Detail_BK_MK', function (Blueprint $table) {
            $table->char('kodeBK',4);
            $table->char('kodeMK',10);
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('kodeBK')->references('kodeBK')->on('Bahan_Kajian')->onDelete('restrict');
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Detail_BK_MK');
    }
};
