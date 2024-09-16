<?php

namespace Database\Seeders;

use App\Models\Detail_BK_MK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailBkMkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bkmkData = [
            ["kodeMK" => "AGI101", "kodeBK" => "BK13"],
            ["kodeMK" => "AGP101", "kodeBK" => "BK13"],
            ["kodeMK" => "AGK101", "kodeBK" => "BK13"],
            ["kodeMK" => "AGH101", "kodeBK" => "BK13"],
            ["kodeMK" => "AGB101", "kodeBK" => "BK13"],
            ["kodeMK" => "AGC101", "kodeBK" => "BK13"],
            ["kodeMK" => "NOP103", "kodeBK" => "BK13"],
            ["kodeMK" => "NOP101", "kodeBK" => "BK13"],
            ["kodeMK" => "KID107", "kodeBK" => "BK19"],
            ["kodeMK" => "BID108", "kodeBK" => "BK19"],
            ["kodeMK" => "MAA101", "kodeBK" => "BK11"],
            ["kodeMK" => "BAI101", "kodeBK" => "BK13"],
            ["kodeMK" => "SIP107", "kodeBK" => "BK11"],
            ["kodeMK" => "SII103", "kodeBK" => "BK01"],
            ["kodeMK" => "FID112", "kodeBK" => "BK19"],
            ["kodeMK" => "PHP103", "kodeBK" => "BK13"],
            ["kodeMK" => "MAL103", "kodeBK" => "BK11"],
            ["kodeMK" => "MAT101", "kodeBK" => "BK07"],
            ["kodeMK" => "MAT102", "kodeBK" => "BK07"],
            ["kodeMK" => "MNM107", "kodeBK" => "BK13"],
            ["kodeMK" => "MNM106", "kodeBK" => "BK13"],
            ["kodeMK" => "MAS118", "kodeBK" => "BK11"],
            ["kodeMK" => "BAE111", "kodeBK" => "BK13"],
            ["kodeMK" => "SIA204", "kodeBK" => "BK14"],
            ["kodeMK" => "SIA205", "kodeBK" => "BK14"],
            ["kodeMK" => "SID201", "kodeBK" => "BK02"],
            ["kodeMK" => "SID203", "kodeBK" => "BK02"],
            ["kodeMK" => "SIR201", "kodeBK" => "BK07"],
            ["kodeMK" => "SIR203", "kodeBK" => "BK07"],
            ["kodeMK" => "MAS234", "kodeBK" => "BK11"],
            ["kodeMK" => "SIJ201", "kodeBK" => "BK03"],
            ["kodeMK" => "SIJ203", "kodeBK" => "BK03"],
            ["kodeMK" => "MAL204", "kodeBK" => "BK11"],
            ["kodeMK" => "SII301", "kodeBK" => "BK05"],
            ["kodeMK" => "SII314", "kodeBK" => "BK05"],
            ["kodeMK" => "SIC201", "kodeBK" => "BK12"],
            ["kodeMK" => "SIC202", "kodeBK" => "BK12"],
            ["kodeMK" => "SIJ202", "kodeBK" => "BK03"],
            ["kodeMK" => "SIJ204", "kodeBK" => "BK03"],
            ["kodeMK" => "SIS202", "kodeBK" => "BK15"],
            ["kodeMK" => "SIS202", "kodeBK" => "BK18"],
            ["kodeMK" => "MNM203", "kodeBK" => "BK13"],
            ["kodeMK" => "SIS204", "kodeBK" => "BK07"],
            ["kodeMK" => "SIS205", "kodeBK" => "BK07"],
            ["kodeMK" => "SIS304", "kodeBK" => "BK07"],
            ["kodeMK" => "SIS305", "kodeBK" => "BK07"],
            ["kodeMK" => "SII213", "kodeBK" => "BK17"],
            ["kodeMK" => "SII213", "kodeBK" => "BK18"],
            ["kodeMK" => "BAE112", "kodeBK" => "BK13"],
            ["kodeMK" => "SIS309", "kodeBK" => "BK08"],
            ["kodeMK" => "MNW401", "kodeBK" => "BK13"],
            ["kodeMK" => "MNW401", "kodeBK" => "BK18"],
            ["kodeMK" => "SII208", "kodeBK" => "BK16"],
            ["kodeMK" => "SII209", "kodeBK" => "BK16"],
            ["kodeMK" => "SII318", "kodeBK" => "BK07"],
            ["kodeMK" => "SII319", "kodeBK" => "BK07"],
            ["kodeMK" => "SID303", "kodeBK" => "BK12"],
            ["kodeMK" => "SID304", "kodeBK" => "BK12"],
            ["kodeMK" => "SIA301", "kodeBK" => "BK15"],
            ["kodeMK" => "SIA302", "kodeBK" => "BK15"],
            ["kodeMK" => "KNT401", "kodeBK" => "BK13"],
            ["kodeMK" => "ETT301", "kodeBK" => "BK13"],
            ["kodeMK" => "SII323", "kodeBK" => "BK06"],
            ["kodeMK" => "PNT497", "kodeBK" => "BK10"],
            ["kodeMK" => "KLT301", "kodeBK" => "BK10"],
            ["kodeMK" => "MNG206", "kodeBK" => "BK06"],
            ["kodeMK" => "MAS235", "kodeBK" => "BK11"],
            ["kodeMK" => "MAS235", "kodeBK" => "BK12"],
            ["kodeMK" => "SII214", "kodeBK" => "BK09"],
            ["kodeMK" => "SII322", "kodeBK" => "BK12"],
            ["kodeMK" => "SIS308", "kodeBK" => "BK07"],
            ["kodeMK" => "MNG310", "kodeBK" => "BK04"],
            ["kodeMK" => "MNG310", "kodeBK" => "BK06"],
            ["kodeMK" => "SIC401", "kodeBK" => "BK12"],
            ["kodeMK" => "SIC402", "kodeBK" => "BK12"],
            ["kodeMK" => "SIR301", "kodeBK" => "BK12"],
            ["kodeMK" => "MAS324", "kodeBK" => "BK12"],
            ["kodeMK" => "SII404", "kodeBK" => "BK06"],
            ["kodeMK" => "SIC404", "kodeBK" => "BK12"],
            ["kodeMK" => "SII408", "kodeBK" => "BK07"],
            ["kodeMK" => "MNG402", "kodeBK" => "BK06"],
            ["kodeMK" => "SII317", "kodeBK" => "BK05"],
            ["kodeMK" => "PNT499", "kodeBK" => "BK10"],
        ];

        Detail_BK_MK::insert($bkmkData);
    }
}
