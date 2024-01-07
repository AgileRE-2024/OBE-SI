<?php

namespace Database\Seeders;

use App\Models\Detail_MK_CPMK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailMkCpmkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail_MK_CPMK::create([
            'kodeMK' => 'SII103',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'PHP103',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'SII103',
            'kodeCPMK' => 'CPMK012',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'SII103',
            'kodeCPMK' => 'CPMK013',
        ]);
    }
}
