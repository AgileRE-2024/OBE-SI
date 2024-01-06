<?php

namespace Database\Seeders;

use App\Models\Detail_SN_CPLProdi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSnCplSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sncplprodiData = [
            ['kodeCPLSN' => 'CPL-S01', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S02', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S03', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S04', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S05', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S06', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S07', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S08', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S09', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S10', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-KU01', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU02', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU03', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU04', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU05', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU06', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU07', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU08', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU09', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU10', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KK01', 'kodeCPL' => 'CPL-03'],
            ['kodeCPLSN' => 'CPL-KK02', 'kodeCPL' => 'CPL-04'],
            ['kodeCPLSN' => 'CPL-KK03', 'kodeCPL' => 'CPL-09'],
            ['kodeCPLSN' => 'CPL-KK04', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-KK05', 'kodeCPL' => 'CPL-11'],
            ['kodeCPLSN' => 'CPL-KK06', 'kodeCPL' => 'CPL-06'],
            ['kodeCPLSN' => 'CPL-KK07', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-KK08', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-KK09', 'kodeCPL' => 'CPL-08'],
            ['kodeCPLSN' => 'CPL-KK10', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-KK11', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-KK12', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-KK13', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-KK14', 'kodeCPL' => 'CPL-10'],
            ['kodeCPLSN' => 'CPL-KK15', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-KK16', 'kodeCPL' => 'CPL-12'],
            ['kodeCPLSN' => 'CPL-KK17', 'kodeCPL' => 'CPL-10'],
            ['kodeCPLSN' => 'CPL-KK18', 'kodeCPL' => 'CPL-09'],
            ['kodeCPLSN' => 'CPL-P01', 'kodeCPL' => 'CPL-03'],
            ['kodeCPLSN' => 'CPL-P02', 'kodeCPL' => 'CPL-04'],
            ['kodeCPLSN' => 'CPL-P03', 'kodeCPL' => 'CPL-09'],
            ['kodeCPLSN' => 'CPL-P04', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P05', 'kodeCPL' => 'CPL-11'],
            ['kodeCPLSN' => 'CPL-P06', 'kodeCPL' => 'CPL-06'],
            ['kodeCPLSN' => 'CPL-P07', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-P08', 'kodeCPL' => 'CPL-08'],
            ['kodeCPLSN' => 'CPL-P09', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P10', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P11', 'kodeCPL' => 'CPL-04'],
            ['kodeCPLSN' => 'CPL-P11', 'kodeCPL' => 'CPL-10'],
            ['kodeCPLSN' => 'CPL-P12', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-P13', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-P14', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P15', 'kodeCPL' => 'CPL-12'],
            ['kodeCPLSN' => 'CPL-P16', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-P17', 'kodeCPL' => 'CPL-12'],
        ];

        Detail_SN_CPLProdi::insert($sncplprodiData);
    }
}
