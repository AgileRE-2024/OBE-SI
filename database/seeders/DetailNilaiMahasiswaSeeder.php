<?php

namespace Database\Seeders;

use App\Models\Detail_Nilai_Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailNilaiMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail_Nilai_Mahasiswa::create([
            "kodePenilaian" => "0001",
            "nilaiPerTeknik" => "60",
        ]);

        Detail_Nilai_Mahasiswa::create([
            "kodePenilaian" => "0002",
            "nilaiPerTeknik" => "40",
        ]);
    }
}
