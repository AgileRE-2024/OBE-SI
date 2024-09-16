<?php

namespace Database\Seeders;

use App\Models\Detail_PL_CPLProdi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailCplPlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cplplData = [
            ["kodeCPL" => "LO-01", "kodePL" => "PL04"],
            ["kodeCPL" => "LO-02", "kodePL" => "PL03"],
            ["kodeCPL" => "LO-03", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-03", "kodePL" => "PL02"],
            ["kodeCPL" => "LO-04", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-04", "kodePL" => "PL02"],
            ["kodeCPL" => "LO-05", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-06", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-06", "kodePL" => "PL02"],
            ["kodeCPL" => "LO-07", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-07", "kodePL" => "PL03"],
            ["kodeCPL" => "LO-08", "kodePL" => "PL03"],
            ["kodeCPL" => "LO-09", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-10", "kodePL" => "PL02"],
            ["kodeCPL" => "LO-11", "kodePL" => "PL02"],
            ["kodeCPL" => "LO-12", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-12", "kodePL" => "PL02"],
            ["kodeCPL" => "LO-13", "kodePL" => "PL01"],
            ["kodeCPL" => "LO-13", "kodePL" => "PL02"],
        ];
        Detail_PL_CPLProdi::insert($cplplData);
    }
}
