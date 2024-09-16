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
            ["kodeCPLSN" => "CPL-S01", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S02", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S03", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S04", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S05", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S06", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S07", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S08", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S09", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-S10", "kodeCPL" => "LO-01"],
            ["kodeCPLSN" => "CPL-KU01", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU02", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU03", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU04", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU05", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU06", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU07", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU08", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU09", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KU10", "kodeCPL" => "LO-02"],
            ["kodeCPLSN" => "CPL-KK01", "kodeCPL" => "LO-03"],
            ["kodeCPLSN" => "CPL-KK02", "kodeCPL" => "LO-04"],
            ["kodeCPLSN" => "CPL-KK03", "kodeCPL" => "LO-09"],
            ["kodeCPLSN" => "CPL-KK04", "kodeCPL" => "LO-05"],
            ["kodeCPLSN" => "CPL-KK05", "kodeCPL" => "LO-11"],
            ["kodeCPLSN" => "CPL-KK06", "kodeCPL" => "LO-06"],
            ["kodeCPLSN" => "CPL-KK07", "kodeCPL" => "LO-07"],
            ["kodeCPLSN" => "CPL-KK08", "kodeCPL" => "LO-07"],
            ["kodeCPLSN" => "CPL-KK09", "kodeCPL" => "LO-08"],
            ["kodeCPLSN" => "CPL-KK10", "kodeCPL" => "LO-13"],
            ["kodeCPLSN" => "CPL-KK11", "kodeCPL" => "LO-13"],
            ["kodeCPLSN" => "CPL-KK12", "kodeCPL" => "LO-13"],
            ["kodeCPLSN" => "CPL-KK13", "kodeCPL" => "LO-05"],
            ["kodeCPLSN" => "CPL-KK14", "kodeCPL" => "LO-10"],
            ["kodeCPLSN" => "CPL-KK15", "kodeCPL" => "LO-07"],
            ["kodeCPLSN" => "CPL-KK16", "kodeCPL" => "LO-12"],
            ["kodeCPLSN" => "CPL-KK17", "kodeCPL" => "LO-10"],
            ["kodeCPLSN" => "CPL-KK18", "kodeCPL" => "LO-09"],
            ["kodeCPLSN" => "CPL-P01", "kodeCPL" => "LO-03"],
            ["kodeCPLSN" => "CPL-P02", "kodeCPL" => "LO-04"],
            ["kodeCPLSN" => "CPL-P03", "kodeCPL" => "LO-09"],
            ["kodeCPLSN" => "CPL-P04", "kodeCPL" => "LO-05"],
            ["kodeCPLSN" => "CPL-P05", "kodeCPL" => "LO-11"],
            ["kodeCPLSN" => "CPL-P06", "kodeCPL" => "LO-06"],
            ["kodeCPLSN" => "CPL-P07", "kodeCPL" => "LO-07"],
            ["kodeCPLSN" => "CPL-P08", "kodeCPL" => "LO-08"],
            ["kodeCPLSN" => "CPL-P09", "kodeCPL" => "LO-05"],
            ["kodeCPLSN" => "CPL-P10", "kodeCPL" => "LO-05"],
            ["kodeCPLSN" => "CPL-P11", "kodeCPL" => "LO-04"],
            ["kodeCPLSN" => "CPL-P11", "kodeCPL" => "LO-10"],
            ["kodeCPLSN" => "CPL-P12", "kodeCPL" => "LO-13"],
            ["kodeCPLSN" => "CPL-P13", "kodeCPL" => "LO-13"],
            ["kodeCPLSN" => "CPL-P14", "kodeCPL" => "LO-05"],
            ["kodeCPLSN" => "CPL-P15", "kodeCPL" => "LO-12"],
            ["kodeCPLSN" => "CPL-P16", "kodeCPL" => "LO-07"],
            ["kodeCPLSN" => "CPL-P17", "kodeCPL" => "LO-12"],
        ];

        Detail_SN_CPLProdi::insert($sncplprodiData);
    }
}
