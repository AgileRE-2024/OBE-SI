<?php

namespace Database\Seeders;

use App\Models\Pengampu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FPB Praktikum
        Pengampu::create([
            'id_rps' => 'SIA2052103',
            'kodeMK' => 'SIA205',
            'nip' => '198206062007101001'
        ]);

        Pengampu::create([
            'id_rps' => 'SIA2052103',
            'kodeMK' => 'SIA205',
            'nip' => '198002172005012001'
        ]);

        //Statistika Inferensi
        Pengampu::create([
            'id_rps' => 'MAS2342303',
            'kodeMK' => 'MAS234',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAS2342303',
            'kodeMK' => 'MAS234',
            'nip' => '197206021998022001'
        ]);

        //Statistika Deskriptif
        Pengampu::create([
            'id_rps' => 'MAS1182302',
            'kodeMK' => 'MAS118',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAS1182302',
            'kodeMK' => 'MAS118',
            'nip' => '197206021998022001'
        ]);

        //Matriks dan Transformasi Linier
        Pengampu::create([
            'id_rps' => 'MAL1032302',
            'kodeMK' => 'MAL103',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAL1032302',
            'kodeMK' => 'MAL103',
            'nip' => '196609051991022001'
        ]);
    }
}
