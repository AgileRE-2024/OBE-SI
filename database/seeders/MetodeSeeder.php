<?php

namespace Database\Seeders;

use App\Models\Metode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Metode jangan ditambah, pilihannya cuma 3 ini
        Metode::create([
            'id_metode' => '1',
            'nama_metode' => 'Problem Based Learning',
        ],);

        Metode::create([
            'id_metode' => '2',
            'nama_metode' => 'Project Based Learning',
        ],);

        Metode::create([
            'id_metode' => '3',
            'nama_metode' => 'Case Based Learning',
        ],);

        Metode::create([
            'id_metode' => '4',
            'nama_metode' => 'Video conference dan SDL',
        ],);

    }
}
