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
            ['kodeSubCPMK' => 'Sub-CPMK0111', 'deskripsiSubCPMK' => 'Mampu menjelaskan konsep dasar sistem', 'kodeCPMK' => 'CPMK011'],
            ['kodeSubCPMK' => 'Sub-CPMK0112', 'deskripsiSubCPMK' => 'Mampu menjelaskan konsep informasi dan sistem informasi', 'kodeCPMK' => 'CPMK011'],
            ['kodeSubCPMK' => 'Sub-CPMK0121', 'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi', 'kodeCPMK' => 'CPMK012'],
            ['kodeSubCPMK' => 'Sub-CPMK0122', 'deskripsiSubCPMK' => 'Mampu menganalisis sistem organisasi', 'kodeCPMK' => 'CPMK012'],
            ['kodeSubCPMK' => 'Sub-CPMK0131', 'deskripsiSubCPMK' => 'Mampu menilai proses yang ada pada organisasi', 'kodeCPMK' => 'CPMK013'],
            ['kodeSubCPMK' => 'Sub-CPMK0132', 'deskripsiSubCPMK' => 'Mampu menilai sistem pengolahan data pada organisasi', 'kodeCPMK' => 'CPMK013'],
            ['kodeSubCPMK' => 'Sub-CPMK0141', 'deskripsiSubCPMK' => 'Mampu menilai peran sistem informasi pada organisasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0142', 'deskripsiSubCPMK' => 'Mampu memberikan rekomendasi pengambilan keputusan di organisasi', 'kodeCPMK' => 'CPMK014'],

            // Sistem Berbasis Pengetahuan (kode CPMK masih dummy)
            ['kodeSubCPMK' => 'Sub-CPMK0151', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami data, Informasi, dan Pengetahuan (Knowledge) dalam system berbasis pengetahuan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0152', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami jenis cara representasi pengetahuan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0153', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses reasoning dan inferensi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0154', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan Sistem Pakar Berbasis Pengetahuan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0155', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami factor ketidakpastian', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0156', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan konsep dasar logika fuzzy', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0157', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan konsep CBR', 'kodeCPMK' => 'CPMK014'],

            // Audit Sistem Informasi (kode CPMK masih dummy)
            ['kodeSubCPMK' => 'Sub-CPMK0160', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami tujuan dan fungsi Audit Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0161', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami resiko Sistem Informasi dan konsep dasar audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0162', 'deskripsiSubCPMK' => 'Mahasiswa mampu mengetahui Standard dan Guideline untuk Audit Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0163', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami konsep dasar kontrol internal', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0164', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami manajemen resiko dari Fungsi Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0165', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses perencanaan Audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0166', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0167', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami tools dan teknik yang digunakan saat Audit Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0168', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses pengelolaan audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0169', 'deskripsiSubCPMK' => 'Mahasiswa mampu mamahami proses pembuktian pada saat audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0170', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses follow-up laporan audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0171', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami perumusan strategi dan tata kelola IT', 'kodeCPMK' => 'CPMK014'],
        ];

        foreach ($subs as $sub) {
            SubCPMK::create($sub);
        }
    }
}
