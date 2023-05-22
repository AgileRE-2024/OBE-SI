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
        Schema::create('Prodi', function (Blueprint $table) {
            $table->String('namaProdi',25)->primary('namaProdi');
            $table->String('fakultas',30);
            $table->String('namaPT',25);
            $table->String('akreditasi',11);
            $table->String('jenjangPendidikan',4);
            $table->String('gelarLulusan',5);
            $table->text('visi');
            $table->text('misi');
            $table->text('tujuan');
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
        Schema::dropIfExists('Prodi');
    }
};
