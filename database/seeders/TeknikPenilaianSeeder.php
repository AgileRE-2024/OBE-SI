<?php

namespace Database\Seeders;

use App\Models\Teknik_Penilaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeknikPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teknik_Penilaian::create([
            'kodePenilaian' => '0001',
            'teknikPenilaian' => 'Partisipasi (Kehadiran / Quiz)',
            'bobotPenilaian' => '35',
            'kriteriaPenilaian' => 'Isi kriteria penilaian',
            'tahapPenilaian' => 'Awal Tengah Semester',
            'instrumenPenilaian' => 'Rubrik holistik',
        ]);

        Teknik_Penilaian::create([
            'kodePenilaian' => '0002',
            'teknikPenilaian' => 'UTS',
            'bobotPenilaian' => '65',
            'kriteriaPenilaian' => 'Isi kriteria penilaian',
            'tahapPenilaian' => 'Tengah Semester',
            'instrumenPenilaian' => 'Rubrik holistik',
        ]);
    }
}
