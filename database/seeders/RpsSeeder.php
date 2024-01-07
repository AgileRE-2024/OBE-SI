<?php

namespace Database\Seeders;

use App\Models\RPS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FPB Praktikum
        RPS::create([
            'id_rps' => 'SIA2052103',
            'nip' => '198206062007101001',
            'kodeMK' => 'SIA205',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '198206062007101001',
            'penanggungJawab' => '198206062007101001',
            'dosenPengampu' => '["198206062007101001","198002172005012001"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (30%), SoftSkill (10%)',
        ]);

        //Statistika Inferensi
        RPS::create([
            'id_rps' => 'MAS2342103',
            'nip' => '197102111997021001',
            'kodeMK' => 'MAS234',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (30%), UTS (30%), Tugas (20%), Quiz (15%), soft skills (5%)',
        ]);

        //Statistika Deskriptif
        RPS::create([
            'id_rps' => 'MAS1182102',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAS118',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '196609281991021001',
            'penanggungJawab' => '196609281991021001',
            'dosenPengampu' => '["196609281991021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (40%), UTS (40%), Tugas (20%)',
        ]);

        //Matriks dan Transformasi Linier
        RPS::create([
            'id_rps' => 'MAL1032102',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAL103',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","196609051991022001"]',
            'detail_penilaian' => 'NA = Tugas (20%), Kuis (15%), UTS (30%), UAS (30%), Soft Skill (5%)',
        ]);

        //Sistem Berbasis Pengetahuan
        RPS::create([
            'id_rps' => 'SIC4012107',
            'nip' => '198002172005012001',
            'kodeMK' => 'SIC401',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198002172005012001',
            'penanggungJawab' => '198002172005012001',
            'dosenPengampu' => '["198002172005012001"]',
            'detail_penilaian' => '<p>Komponen penilaian:&nbsp;</p><p>NA = UAS (30%), UTS (30%), Tugas (35%), Softskill(5%)</p>',
        ]);

        //Audit Sistem Informasi
        RPS::create([
            'id_rps' => 'SII4042107',
            'nip' => '198206062007101001',
            'kodeMK' => 'SII404',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198206062007101001',
            'penanggungJawab' => '198206062007101001',
            'dosenPengampu' => '["198206062007101001", "198105082005012001"]',
            'detail_penilaian' => '<p>&nbsp;</p><p><strong>Penilaian yang diberikan berdasarkan kriteria berikut:&nbsp;</strong></p><p>1. Nilai Akhir diperoleh melalui rumus&nbsp;</p><p>35% Tugas + 30% UTS +30% UAS + 5% Softskill&nbsp;</p><p>Tugas dalam mata kuliah audit sistem informasi berkaitan dengan penyusunan dokumen perangkat audit yang dilakukan secara berkelompok menggunakan studi kasus tertentu. Setiap kelompok mahasiswa menyusun dan melakukan simulasi audit dengan studi kasus yang berbeda-beda. Perbedaan studi kasus ditentukan dari ruang lingkup audit yang dipilih, standar/kerangka kerja yang digunakan, dan bidang bisnis organisasi yang diaudit. Setiap tugas dipresentasikan pada pertemuan yang telah ditentukan, yang hasilnya digunakan sebagai dasar untuk menentukan nilai tugas (sebesar 35%). Hasil akhir dari keseluruhan tugas, akan dipresentasikan secara komprehensif oleh setiap kelompok pada saat UAS, dan menjadi nilai UAS (sebesar 30%). Sehingga prosentase nilai yang diperoleh dari pembelajaran partisipatif dan kolaboratif melalui studi kasus adalah 65%.&nbsp;</p><p>2. Pengelompokan nilai adalah sebagai berikut:</p><figure class="table"><table><tbody><tr><td>Nilai</td><td>Point</td><td>Rentang Skor</td></tr><tr><td>4</td><td>A</td><td>75 - 100</td></tr><tr><td>3.5</td><td>AB</td><td>70 - 74,99</td></tr><tr><td>3</td><td>B</td><td>65 - 69,99</td></tr><tr><td>2.5</td><td>BC</td><td>60 - 64,99</td></tr><tr><td>2</td><td>C</td><td>55 - 59,99</td></tr><tr><td>1</td><td>D</td><td>40 - 54,99</td></tr><tr><td>0</td><td>E</td><td>0 - 39,99</td></tr></tbody></table></figure><p>&nbsp;</p><p><strong>Deskripsi komponen penilaian:</strong></p><p>1. Penyusunan dokumen perangkat audit&nbsp;</p><p>Mahasiswa diminta untuk membuat dokumen perangkat audit yang minimal berupa: dokumen rencana audit, audit program, dan laporan audit. Studi kasus ditentukan berdasarkan ruang lingkup audit, standar/kerangka kerja yang digunakan, dan bidang bisnis organisasi yang diaudit. Setiap perangkan audit yang dihasilkan, harus dipresentasikan pada sesi pertemuan yang telah ditentukan dan menjadi dasar untuk penilaian komponen tugas.&nbsp;</p><p>2. UTS&nbsp;</p><p>UTS diselenggarakan sesuai dengan jadwal UTS yang telah ditetapkan oleh Universitas Airlangga. Bentuk soal UTS adalah uraian dan pilihan ganda.&nbsp;</p><p>3. UAS&nbsp;</p><p>UAS diselenggarakan sesuai dengan jadwal UAS yang telah ditetapkan oleh Universitas Airlangga. Bentuk soal UAS adalah pembahasan secara komprehensif terkait penyusunan dokumen perangkat audit dan simulasi pelaksanaan audit oleh setiap kelompok.</p>',
        ]);
        //pemograman mobile prak
        RPS::create([
            'id_rps' => 'SIS3052104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS305',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p> NA = Tugas (40%), UTS (25%), UAS (25%), Softskill (10%) </p><p> Tugas dalam bentuk progress proyek yang akan dikerjakan.</p>',
        ]);
        ////pemograman mobile teo
        RPS::create([
            'id_rps' => 'SIS3042104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS304',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p> <p>NA = Tugas (30%), UTS (30%), UAS (30%), Softskill (10%)</p>',
        ]);
        //pemograman web prak
        RPS::create([
            'id_rps' => 'SIS2052104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS205',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p>NA = Tugas (25%), UTS (30%), UAS (35%), Softskill (10%)</p>',
        ]);
        //pemograman web teo
        RPS::create([
            'id_rps' => 'SIS2042104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS204',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p> NA = Tugas (25%), UTS (30%), UAS (35%), Softskill (10%)</p>',
        ]);
        //sistem enterprise
        RPS::create([
            'id_rps' => 'SIS2022104',
            'nip' => '197812172005012001',
            'kodeMK' => 'SIS202',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197812172005012001',
            'penanggungJawab' => '197812172005012001',
            'dosenPengampu' => '["197812172005012001", "198105082005012001"]',
            'detail_penilaian' => '<p>Penilaian yang diberikan berdasarkan kriteria berikut: </p><p> 1. Nilai Akhir diperoleh melalui rumus: </p> <p>Tugas (20%), UTS (25%), UAS (30%), Kuis (20%), SoftSkill (5%)
                Tugas pada minggu ke 11-13 berkaitan dengan analisis, pemodelan, dan perbaikan model proses bisnis di dalam sebuah enterprise untuk suatu kasus tertentu.
                Mahasiswa mengerjakan tugas tersebut secara berkelompok. Setiap kelompok mengerjakan tugas dengan studi kasus yang berbeda-beda. Perbedaan studi kasus
                ditentukan dari lingkup proses bisnis yang dikerjakan. Setiap progress dari tugas tersebut dipresentasikan pada pertemuan yang telah ditentukan, yang hasilnya
                digunakan sebagai dasar untuk menentukan nilai tugas sebesar 10%. Nilai Kuis 2 dengan bobot 10% diperoleh berdasarkan laporan akhir dari tugas di minggu
                11-13. Sedangkan nilai UAS dengan bobot 30% diperoleh berdasarkan presentasi dan laporan akhir yang komprehensif, terkait tugas pada minggu 11-13.
                Sehingga bobot nilai yang diperoleh dari pembelajaran partisipatif dan kolaboratif melalui studi kasus adalah 50%.</p>',
        ]);
        //APS Prak
        RPS::create([
            'id_rps' => 'SII3142104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SII314',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '199203222019032018',
            'penanggungJawab' => '199203222019032018',
            'dosenPengampu' => '["199203222019032018", "198002172005012001"]',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p> NA = Tugas (25%), UTS (30%), UAS (35%), Softskill (10%)</p>',
        ]);
    }
}
