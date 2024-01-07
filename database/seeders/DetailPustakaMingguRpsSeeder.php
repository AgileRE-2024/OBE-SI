<?php

namespace Database\Seeders;

use App\Models\Detail_Pustaka_Minggurps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPustakaMingguRpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_pustaka' => '', 'kodeMingguRPS' => '', 'referensi' => ''],
        ];
        Detail_Pustaka_Minggurps::insert($data);
    }
}
