<?php

namespace Database\Seeders;

use App\Models\Profil_Lulusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilLulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profilLulusan = [
            [
                'kodePL' => 'PL01',
                'deskripsiPL' => 'Lulusan memiliki kemampuan menganalisis, merancang, membuat, dan mengevaluasi sistem informasi secara efektif dan komprehensif yang selaras dengan tujuan organisasi.'
            ],
            [
                'kodePL' => 'PL02',
                'deskripsiPL' => 'Lulusan memiliki kemampuan memahami, menerapkan dan mengintegrasikan model sistem, menggunakan berbagai metode dan teknik kecerdasan bisnis untuk mengidentifikasi peluang dan optimalisasi bisnis organisasi.'
            ],
            [
                'kodePL' => 'PL03',
                'deskripsiPL' => 'Lulusan memiliki kemampuan mengelola penerapan sistem informasi di dalam organisasi, serta mampu berkomunikasi secara efektif, baik lisan maupun tulisan.'
            ],
            [
                'kodePL' => 'PL04',
                'deskripsiPL' => 'Lulusan memiliki sikap excellence with morality sebagai profesional sistem informasi.'
            ]
        ];
        foreach ($profilLulusan as $pl) {
            Profil_Lulusan::create($pl);
        }
    }
}
