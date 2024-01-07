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

        // Sistem Berbasis Pengetahuan
        kriteria_penilaian::create([
            'id_kriteria_penilaians' => '1',
            'nama_kriteria_penilaians' => 'Kriteria SBP',
            'indikatorPenilaian' => 'Indikator SBP',
            'deskripsi_kriteria_penilaians' => 'Pemahaman materi, kejelasan dalam memahami tugas, keaktifan dalam mengerjakan dan diskusi',
        ]);
    }
}
