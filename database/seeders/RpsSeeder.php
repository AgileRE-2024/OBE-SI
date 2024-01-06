<?php

namespace Database\Seeders;

use App\Models\RPS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FPB Praktikum
        RPS::create([
            'id_rps' => 'SIA2052103',
            'nip' => '198206062007101001',
            'kodeMK' => 'SIA205',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '198206062007101001',
            'penanggungJawab' => '198206062007101001',
            'dosenPengampu' => '["198206062007101001","198002172005012001"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (30%), SoftSkill (10%)',
        ]);

        //Statistika Inferensi
        RPS::create([
            'id_rps' => 'MAS2342303',
            'nip' => '197102111997021001',
            'kodeMK' => 'MAS234',
            'tahunAjaran' => 2023,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (30%), UTS (30%), Tugas (20%), Quiz (15%), soft skills (5%)',
        ]);

        //Statistika Deskriptif
        RPS::create([
            'id_rps' => 'MAS1182302',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAS118',
            'tahunAjaran' => 2023,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '196609281991021001',
            'penanggungJawab' => '196609281991021001',
            'dosenPengampu' => '["196609281991021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (40%), UTS (40%), Tugas (20%)',
        ]);

        //Matriks dan Transformasi Linier
        RPS::create([
            'id_rps' => 'MAL1032302',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAL103',
            'tahunAjaran' => 2023,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","196609051991022001"]',
            'detail_penilaian' => 'NA = Tugas (20%), Kuis (15%), UTS (30%), UAS (30%), Soft Skill (5%)',
        ]);
    }
}
