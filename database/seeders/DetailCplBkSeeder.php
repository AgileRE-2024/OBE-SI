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
            ['kodeBK' => 'BK01', 'kodeCPL' => 'CPL-03'],
            ['kodeBK' => 'BK02', 'kodeCPL' => 'CPL-04'],
            ['kodeBK' => 'BK03', 'kodeCPL' => 'CPL-09'],
            ['kodeBK' => 'BK04', 'kodeCPL' => 'CPL-08'],
            ['kodeBK' => 'BK05', 'kodeCPL' => 'CPL-05'],
            ['kodeBK' => 'BK06', 'kodeCPL' => 'CPL-07'],
            ['kodeBK' => 'BK07', 'kodeCPL' => 'CPL-13'],
            ['kodeBK' => 'BK08', 'kodeCPL' => 'CPL-07'],
            ['kodeBK' => 'BK08', 'kodeCPL' => 'CPL-09'],
            ['kodeBK' => 'BK09', 'kodeCPL' => 'CPL-06'],
            ['kodeBK' => 'BK10', 'kodeCPL' => 'CPL-01'],
            ['kodeBK' => 'BK10', 'kodeCPL' => 'CPL-02'],
            ['kodeBK' => 'BK11', 'kodeCPL' => 'CPL-11'],
            ['kodeBK' => 'BK12', 'kodeCPL' => 'CPL-04'],
            ['kodeBK' => 'BK12', 'kodeCPL' => 'CPL-10'],
            ['kodeBK' => 'BK12', 'kodeCPL' => 'CPL-11'],
            ['kodeBK' => 'BK13', 'kodeCPL' => 'CPL-01'],
            ['kodeBK' => 'BK13', 'kodeCPL' => 'CPL-02'],
            ['kodeBK' => 'BK14', 'kodeCPL' => 'CPL-03'],
            ['kodeBK' => 'BK14', 'kodeCPL' => 'CPL-12'],
            ['kodeBK' => 'BK15', 'kodeCPL' => 'CPL-07'],
            ['kodeBK' => 'BK16', 'kodeCPL' => 'CPL-05'],
            ['kodeBK' => 'BK17', 'kodeCPL' => 'CPL-03'],
            ['kodeBK' => 'BK17', 'kodeCPL' => 'CPL-12'],
            ['kodeBK' => 'BK18', 'kodeCPL' => 'CPL-03'],
            ['kodeBK' => 'BK18', 'kodeCPL' => 'CPL-12'],
            ['kodeBK' => 'BK19', 'kodeCPL' => 'CPL-02'],
        ];
        Detail_CPLProdi_Bk::insert($cplbkData);
    }
}
