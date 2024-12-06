<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("minggu_rps", function (Blueprint $table) {
            $table->foreignId("id_kriteria_penilaians")->nullable();
            $table->foreignId("kodePenilaian")->nullable();
            $table->foreignId("id_metode")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("minggu_rps", function (Blueprint $table) {
            $table->dropColumn("id_kriteria_penilaians");
            $table->dropColumn("kodePenilaian");
            $table->dropColumn("id_metode");
        });
    }
};
