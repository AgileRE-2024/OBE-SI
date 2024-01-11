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
            'kodeMK' => 'AGP101',
            'kodeCPMK' => 'CPMK001',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'AGK101',
            'kodeCPMK' => 'CPMK002',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'AGI101',
            'kodeCPMK' => 'CPMK003',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'AGH101',
            'kodeCPMK' => 'CPMK004',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'AGB101',
            'kodeCPMK' => 'CPMK005',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'AGC101',
            'kodeCPMK' => 'CPMK006',
        ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'SII103',
        //     'kodeCPMK' => 'CPMK011',
        // ]);
        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'PHP103',
        //     'kodeCPMK' => 'CPMK011',
        // ]);
        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'SII103',
        //     'kodeCPMK' => 'CPMK012',
        // ]);
        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'SII103',
        //     'kodeCPMK' => 'CPMK013',
        // ]);
    }
}
