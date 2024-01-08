<?php

namespace Database\Seeders;

use App\Models\Prasyarat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrasyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sistem Berbasis Pengetahuan
        Prasyarat::create([
            'kodeMK' => 'SIC401',
            'mat_kodeMK' => 'MAS234',
        ],);

        Prasyarat::create([
            'kodeMK' => 'SIC401',
            'mat_kodeMK' => 'MAT101',
        ],);

        //Audit Sistem Informasi
        Prasyarat::create([
            'kodeMK' => 'SII404',
            'mat_kodeMK' => 'SII323',
        ],);

        //FPB Praktikum
        Prasyarat::create([
            'kodeMK' => 'SIA205',
            'mat_kodeMK' => 'SII103',
        ]);

        //Statistika Inferensi
        Prasyarat::create([
            'kodeMK' => 'MAS234',
            'mat_kodeMK' => 'MAS118',
        ]);

        //Pemograman mobile prak
        Prasyarat::create([
            'kodeMK' => 'SIS305',
            'mat_kodeMK' => 'SIR201',
        ]);

        //Pemograman mobile teo
        Prasyarat::create([
            'kodeMK' => 'SIS304',
            'mat_kodeMK' => 'SIR201',
        ]);

        //Pemograman web prak
        Prasyarat::create([
            'kodeMK' => 'SIS205',
            'mat_kodeMK' => 'MAT101',
        ]);

        //Pemograman teo teo
        Prasyarat::create([
            'kodeMK' => 'SIS204',
            'mat_kodeMK' => 'MAT101',
        ]);
        //APS Prak
        Prasyarat::create([
            'kodeMK' => 'SII314',
            'mat_kodeMK' => 'MAT101',
        ]);
        //Sistem Enterprise
        Prasyarat::create([
            'kodeMK' => 'SIS202',
            'mat_kodeMK' => 'SIA204',
        ]);

          //Bahasa Inggris II
        Prasyarat::create([
            'kodeMK' => 'BAE112',
            'mat_kodeMK' => 'BAE111',
        ]);

        //Desain Interaksi Teori
        Prasyarat::create([
            'kodeMK' => 'SII208',
            'mat_kodeMK' => 'SII301',
        ]);

        //Desain Interaksi Praktikum
        Prasyarat::create([
            'kodeMK' => 'SII209',
            'mat_kodeMK' => 'SII301',
        ]);

        //Manajemen Proyek Teknologi Informasi
        Prasyarat::create([
            'kodeMK' => 'MNG310',
            'mat_kodeMK' => 'MNM203',
        ]);

        //Metode Kuantitatif Bisnis
        Prasyarat::create([
            'kodeMK' => 'MAS235',
            'mat_kodeMK' => 'MAS234',
        ]);

        

        //Pembangunan Aplikasi Enterprise
        Prasyarat::create([
            'kodeMK' => 'SIS308',
            'mat_kodeMK' => 'SIR201',
        ]);

        //Tata Kelola Teknologi Informasi
        Prasyarat::create([
            'kodeMK' => 'SII323',
            'mat_kodeMK' => 'SIA204',
        ]);

        //Temu Kembali Informasi
        Prasyarat::create([
            'kodeMK' => 'SII322',
            'mat_kodeMK' => 'SIC201',
        ]);

    }
}