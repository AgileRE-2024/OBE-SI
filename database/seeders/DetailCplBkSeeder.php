<?php

namespace Database\Seeders;

use App\Models\Detail_CPLProdi_BK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailCplBkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cplbkData = [
            ["kodeBK" => "BK01", "kodeCPL" => "LO-03"],
            ["kodeBK" => "BK02", "kodeCPL" => "LO-04"],
            ["kodeBK" => "BK03", "kodeCPL" => "LO-09"],
            ["kodeBK" => "BK04", "kodeCPL" => "LO-08"],
            ["kodeBK" => "BK05", "kodeCPL" => "LO-05"],
            ["kodeBK" => "BK06", "kodeCPL" => "LO-07"],
            ["kodeBK" => "BK07", "kodeCPL" => "LO-13"],
            ["kodeBK" => "BK08", "kodeCPL" => "LO-07"],
            ["kodeBK" => "BK08", "kodeCPL" => "LO-09"],
            ["kodeBK" => "BK09", "kodeCPL" => "LO-06"],
            ["kodeBK" => "BK10", "kodeCPL" => "LO-01"],
            ["kodeBK" => "BK10", "kodeCPL" => "LO-02"],
            ["kodeBK" => "BK11", "kodeCPL" => "LO-11"],
            ["kodeBK" => "BK12", "kodeCPL" => "LO-04"],
            ["kodeBK" => "BK12", "kodeCPL" => "LO-10"],
            ["kodeBK" => "BK12", "kodeCPL" => "LO-11"],
            ["kodeBK" => "BK13", "kodeCPL" => "LO-01"],
            ["kodeBK" => "BK13", "kodeCPL" => "LO-02"],
            ["kodeBK" => "BK14", "kodeCPL" => "LO-03"],
            ["kodeBK" => "BK14", "kodeCPL" => "LO-12"],
            ["kodeBK" => "BK15", "kodeCPL" => "LO-07"],
            ["kodeBK" => "BK16", "kodeCPL" => "LO-05"],
            ["kodeBK" => "BK17", "kodeCPL" => "LO-03"],
            ["kodeBK" => "BK17", "kodeCPL" => "LO-12"],
            ["kodeBK" => "BK18", "kodeCPL" => "LO-03"],
            ["kodeBK" => "BK18", "kodeCPL" => "LO-12"],
            ["kodeBK" => "BK19", "kodeCPL" => "LO-02"],
        ];
        Detail_CPLProdi_Bk::insert($cplbkData);
    }
}
