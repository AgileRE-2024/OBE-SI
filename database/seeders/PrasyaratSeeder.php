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
    }
}
