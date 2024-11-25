<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelcplToCplProdiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("cpl_prodi", function (Blueprint $table) {
            $table
                ->enum("levelCPL", [
                    "B-I Mengingat",
                    "B-II Memahami",
                    "B-III Menerapkan",
                    "B-IV Menganalisis",
                    "B-V Mengevaluasi",
                    "B-VI Menciptakan",
                ])
                ->nullable()
                ->after("deskripsiCPL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("cpl_prodi", function (Blueprint $table) {
            $table->dropColumn("levelCPL");
        });
    }
}
