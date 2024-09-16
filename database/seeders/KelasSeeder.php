<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            "kodeKelas" => "ABCDLITS6",
            "namaKelas" => "Konsep Sistem Informasi Teori",
            "jadwal" => "Selasa 7-8",
            "kuota" => "60",
            "kodeMK" => "SII103",
        ]);
    }
}
