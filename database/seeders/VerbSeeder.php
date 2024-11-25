<?php

namespace Database\Seeders;

use App\Models\Verbs;
use Illuminate\Database\Seeder;

class VerbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $verbs = [
            ["level_lo" => 1, "kata_kerja" => "temukan"],
            ["level_lo" => 1, "kata_kerja" => "tunjukkan"],
            ["level_lo" => 1, "kata_kerja" => "ingat"],
            ["level_lo" => 1, "kata_kerja" => "sebutkan"],
            ["level_lo" => 1, "kata_kerja" => "apa"],
            ["level_lo" => 1, "kata_kerja" => "siapa"],
            ["level_lo" => 1, "kata_kerja" => "milih"],
            ["level_lo" => 2, "kata_kerja" => "klasifikasi"],
            ["level_lo" => 2, "kata_kerja" => "bandingkan"],
            ["level_lo" => 2, "kata_kerja" => "demonstrasi"],
            ["level_lo" => 2, "kata_kerja" => "uraikan"],
            ["level_lo" => 2, "kata_kerja" => "terangkan"],
            ["level_lo" => 2, "kata_kerja" => "ringkas"],
            ["level_lo" => 3, "kata_kerja" => "terapkan"],
            ["level_lo" => 3, "kata_kerja" => "bangun"],
            ["level_lo" => 3, "kata_kerja" => "pilih"],
            ["level_lo" => 3, "kata_kerja" => "buat"],
            ["level_lo" => 3, "kata_kerja" => "rencanakan"],
            ["level_lo" => 3, "kata_kerja" => "gunakan"],
            ["level_lo" => 4, "kata_kerja" => "analisis"],
            ["level_lo" => 4, "kata_kerja" => "klasifikasikan"],
            ["level_lo" => 4, "kata_kerja" => "identifikasi"],
            ["level_lo" => 4, "kata_kerja" => "teliti"],
            ["level_lo" => 4, "kata_kerja" => "uraikan"],
            ["level_lo" => 4, "kata_kerja" => "struktur"],
            ["level_lo" => 5, "kata_kerja" => "nilai"],
            ["level_lo" => 5, "kata_kerja" => "evaluasi"],
            ["level_lo" => 5, "kata_kerja" => "tentukan"],
            ["level_lo" => 5, "kata_kerja" => "uji"],
            ["level_lo" => 5, "kata_kerja" => "bandingkan"],
            ["level_lo" => 5, "kata_kerja" => "kritik"],
            ["level_lo" => 6, "kata_kerja" => "cipta"],
            ["level_lo" => 6, "kata_kerja" => "desain"],
            ["level_lo" => 6, "kata_kerja" => "rumuskan"],
            ["level_lo" => 6, "kata_kerja" => "kembangkan"],
            ["level_lo" => 6, "kata_kerja" => "susun"],
            ["level_lo" => 6, "kata_kerja" => "prediksi"],
        ];

        foreach ($verbs as $verb) {
            Verbs::create($verb);
        }
    }
}
