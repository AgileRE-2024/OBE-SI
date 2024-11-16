<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::table('cpl_prodi', function (Blueprint $table) {
            $levels = ["B-I Mengingat", "B-II Memahami", "B-III Menerapkan", "B-IV Menganalisis", "B-V Mengevaluasi", "B-VI Menciptakan"];
            $table->enum('levelCPL', $levels);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
