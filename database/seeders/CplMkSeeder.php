<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CPL_Prodi;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\CPMK;

class CplMkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CPL_Prodi::create([
            'kodeCPL' => 'CPL01',
            'deskripsiCPL' => 'Mampu memahami, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);
        CPL_Prodi::create([
            'kodeCPL' => 'CPL02',
            'deskripsiCPL' => 'Mampu merancang dan menggunakan
            database, serta mengolah dan menganalisa
            data dengan alat dan teknik pengolahan data',
            'referensiCPL' => 'IS2020 A3.2.1 Data/Information Management'
        ]);
        CPL_Prodi::create([
            'kodeCPL' => 'CPL03',
            'deskripsiCPL' => 'Mampu merancang dan menggunakan
            database, serta mengolah dan menganalisa
            data dengan alat dan teknik pengolahan data',
            'referensiCPL' => 'IS2020 A3.2.1 Data/Information Management'
        ]);
        CPL_Prodi::create([
            'kodeCPL' => 'CPL04',
            'deskripsiCPL' => 'Mampu merancang dan menggunakan
            database, serta mengolah dan menganalisa
            data dengan alat dan teknik pengolahan data',
            'referensiCPL' => 'IS2020 A3.2.1 Data/Information Management'
        ]);
        CPL_Prodi::create([
            'kodeCPL' => 'CPL05',
            'deskripsiCPL' => 'Mampu merancang dan menggunakan
            database, serta mengolah dan menganalisa
            data dengan alat dan teknik pengolahan data',
            'referensiCPL' => 'IS2020 A3.2.1 Data/Information Management'
        ]);
        Mata_Kuliah::create([
            'kodeMK' => 'MK01',
            'namaMK' => 'Konsep Sistem Informasi',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK01',
        ]);
        Mata_Kuliah::create([
            'kodeMK' => 'MK02',
            'namaMK' => 'Pembangunan Perangkat Lunak',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK02',
        ]);
        Mata_Kuliah::create([
            'kodeMK' => 'MK03',
            'namaMK' => 'Teori Sistem Informasi',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK03',
        ]);
        Mata_Kuliah::create([
            'kodeMK' => 'MK04',
            'namaMK' => 'Statistika Deskriptif',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK04',
        ]);
        Mata_Kuliah::create([
            'kodeMK' => 'MK05',
            'namaMK' => 'Algoritma Pemrograman',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK05',
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK011',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK012',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK013',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK021',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK031',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL03'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK041',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL04'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK051',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL05'
        ]);


        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK02',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK03',
            'kodeCPMK' => 'CPMK021',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK04',
            'kodeCPMK' => 'CPMK041',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK05',
            'kodeCPMK' => 'CPMK013',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK05',
            'kodeCPMK' => 'CPMK031',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK03',
            'kodeCPMK' => 'CPMK051',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK04',
            'kodeCPMK' => 'CPMK012',
        ]);
    }
}
