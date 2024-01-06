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
            ['kodeCPL' => 'CPL-01', 'kodePL' => 'PL04'],
            ['kodeCPL' => 'CPL-02', 'kodePL' => 'PL03'],
            ['kodeCPL' => 'CPL-03', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-03', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-04', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-04', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-05', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-06', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-06', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-07', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-07', 'kodePL' => 'PL03'],
            ['kodeCPL' => 'CPL-08', 'kodePL' => 'PL03'],
            ['kodeCPL' => 'CPL-09', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-10', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-11', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-12', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-12', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-13', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-13', 'kodePL' => 'PL02'],
        ];
        Detail_PL_CPLProdi::insert($cplplData);
    }
}
