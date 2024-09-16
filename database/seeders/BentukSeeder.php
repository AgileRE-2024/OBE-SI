<?php

namespace Database\Seeders;

use App\Models\Bentuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BentukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bentuk::create([
            "id_bentuk" => "1",
            "nama_bentuk" => "Kuliah, responsi, tutorial",
        ]);

        Bentuk::create([
            "id_bentuk" => "2",
            "nama_bentuk" => "Praktikum",
        ]);

        Bentuk::create([
            "id_bentuk" => "3",
            "nama_bentuk" => "Seminar",
        ]);
    }
}
