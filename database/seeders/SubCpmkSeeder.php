<?php

namespace Database\Seeders;

use App\Models\SubCPMK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCpmkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs = [
            [
                'kodeSubCPMK' => 'Sub-CPMK0111',
                'deskripsiSubCPMK' => 'Mampu menjelaskan konsep dasar sistem',
                'kodeCPMK' => 'CPMK011'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0112',
                'deskripsiSubCPMK' => 'Mampu menjelaskan konsep informasi dan sistem informasi',
                'kodeCPMK' => 'CPMK011'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0121',
                'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
                'kodeCPMK' => 'CPMK012'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0122',
                'deskripsiSubCPMK' => 'Mampu menganalisis sistem organisasi',
                'kodeCPMK' => 'CPMK012'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0131',
                'deskripsiSubCPMK' => 'Mampu menilai proses yang ada pada organisasi',
                'kodeCPMK' => 'CPMK013'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0132',
                'deskripsiSubCPMK' => 'Mampu menilai sistem pengolahan data pada organisasi',
                'kodeCPMK' => 'CPMK013'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0141',
                'deskripsiSubCPMK' => 'Mampu menilai peran sistem informasi pada organisasi',
                'kodeCPMK' => 'CPMK014'
            ],
            [
                'kodeSubCPMK' => 'Sub-CPMK0142',
                'deskripsiSubCPMK' => 'Mampu memberikan rekomendasi pengambilan keputusan di organisasi',
                'kodeCPMK' => 'CPMK014'
            ],
            // [
            //     'kodeSubCPMK' => 'Sub-CPMK0211',
            //     'deskripsiSubCPMK' => 'Mampu memahami database',
            //     'kodeCPMK' => 'CPMK021'
            // ],
            // [
            //     'kodeSubCPMK' => 'Sub-CPMK0212',
            //     'deskripsiSubCPMK' => 'Mampu merancang database',
            //     'kodeCPMK' => 'CPMK021'
            // ],
            // [
            //     'kodeSubCPMK' => 'Sub-CPMK0231',
            //     'deskripsiSubCPMK' => 'Mampu mengolah data dengan alat pengolahan data',
            //     'kodeCPMK' => 'CPMK023'
            // ],
            // [
            //     'kodeSubCPMK' => 'Sub-CPMK0232',
            //     'deskripsiSubCPMK' => 'Mampu mengolah data dengan teknik pengolahan data',
            //     'kodeCPMK' => 'CPMK023'
            // ],
            // [
            //     'kodeSubCPMK' => 'Sub-CPMK01',
            //     'deskripsiSubCPMK' => ' Mampu menggunakan sistem manajemen basis data',
            //     'kodeCPMK' => 'CPMK022'
            // ]
        ];

        foreach ($subs as $sub) {
            SubCPMK::create($sub);
        }
    }
}
