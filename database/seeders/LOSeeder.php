<?php

namespace Database\Seeders;

use App\Models\Learning_Outcomes;
use Illuminate\Database\Seeder;

class LOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $levels = [
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'pilih', ''],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'temukan'],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'tunjukkan'],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'ingat'],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'sebutkan'],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'apa'],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'siapa'],
            ['level_lo' => 'B-I Mengingat', 'kata_kerja' => 'milih'],
            ['level_lo' => 'B-II Memahami', 'kata_kerja' => 'klasifikasi'],
            ['level_lo' => 'B-II Memahami', 'kata_kerja' => 'bandingkan'],
            ['level_lo' => 'B-II Memahami', 'kata_kerja' => 'demonstrasi'],
            ['level_lo' => 'B-II Memahami', 'kata_kerja' => 'uraikan'],
            ['level_lo' => 'B-II Memahami', 'kata_kerja' => 'terangkan'],
            ['level_lo' => 'B-II Memahami', 'kata_kerja' => 'ringkas'],
            ['level_lo' => 'B-III Menerapkan', 'kata_kerja' => 'terapkan'],
            ['level_lo' => 'B-III Menerapkan', 'kata_kerja' => 'bangun'],
            ['level_lo' => 'B-III Menerapkan', 'kata_kerja' => 'pilih'],
            ['level_lo' => 'B-III Menerapkan', 'kata_kerja' => 'buat'],
            ['level_lo' => 'B-III Menerapkan', 'kata_kerja' => 'rencanakan'],
            ['level_lo' => 'B-III Menerapkan', 'kata_kerja' => 'gunakan'],
            ['level_lo' => 'B-IV Menganalisis', 'kata_kerja' => 'analisis'],
            ['level_lo' => 'B-IV Menganalisis', 'kata_kerja' => 'klasifikasikan'],
            ['level_lo' => 'B-IV Menganalisis', 'kata_kerja' => 'identifikasi'],
            ['level_lo' => 'B-IV Menganalisis', 'kata_kerja' => 'teliti'],
            ['level_lo' => 'B-IV Menganalisis', 'kata_kerja' => 'uraikan'],
            ['level_lo' => 'B-IV Menganalisis', 'kata_kerja' => 'struktur'],
            ['level_lo' => 'B-V Mengevaluasi', 'kata_kerja' => 'nilai'],
            ['level_lo' => 'B-V Mengevaluasi', 'kata_kerja' => 'evaluasi'],
            ['level_lo' => 'B-V Mengevaluasi', 'kata_kerja' => 'tentukan'],
            ['level_lo' => 'B-V Mengevaluasi', 'kata_kerja' => 'uji'],
            ['level_lo' => 'B-V Mengevaluasi', 'kata_kerja' => 'bandingkan'],
            ['level_lo' => 'B-V Mengevaluasi', 'kata_kerja' => 'kritik'],
            ['level_lo' => 'B-VI Menciptakan', 'kata_kerja' => 'cipta'],
            ['level_lo' => 'B-VI Menciptakan', 'kata_kerja' => 'desain'],
            ['level_lo' => 'B-VI Menciptakan', 'kata_kerja' => 'rumuskan'],
            ['level_lo' => 'B-VI Menciptakan', 'kata_kerja' => 'kembangkan'],
            ['level_lo' => 'B-VI Menciptakan', 'kata_kerja' => 'susun'],
            ['level_lo' => 'B-VI Menciptakan', 'kata_kerja' => 'prediksi'],
        ];


        foreach ($levels as $level) {
            Learning_Outcomes::create($level);
        }
    }
}
