<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelLoTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("learning_outcomes", function (Blueprint $table) {
            $table->id();
            $table->enum("level_lo", [
                "B-I Mengingat",
                "B-II Memahami",
                "B-III Menerapkan",
                "B-IV Menganalisis",
                "B-V Mengevaluasi",
                "B-VI Menciptakan",
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("learning_outcomes");
    }
}
