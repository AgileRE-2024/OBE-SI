<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create([
            'id_media' => '1',
            'nama_media' => 'LMS',
        ],);

        Media::create([
            'id_media' => '2',
            'nama_media' => 'PPT',
        ],);

        Media::create([
            'id_media' => '3',
            'nama_media' => 'Kasus',
        ],);
    }
}
