<?php

namespace Database\Seeders;

use App\Models\kriteria_penilaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kriteria_penilaian::create([
            'nama_kriteria_penilaians' => 'Kriteria 1',
            'indikatorPenilaian' => 'Indikator 1A',
            'deskripsi_kriteria_penilaians' => 'Deskripsi Kriteria 1A',
        ]);
    }
}
