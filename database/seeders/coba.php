<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CPL_Prodi;
use App\Models\CPL_SN_Dikti;
use App\Models\Detail_SN_CPLProdi;
use App\Models\Detail_PL_CPLProdi;
use App\Models\Detail_Peran_Dosen;
use App\Models\Detail_CPLProdi_BK;
use App\Models\Detail_BK_MK;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_RPS;
use App\Models\Profil_Lulusan;
use App\Models\Bahan_Kajian;
use App\Models\Mata_Kuliah;
use App\Models\RPS;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\CPMK;
use App\Models\Mahasiswa;
use App\Models\Minggu_RPS;
use App\Models\SubCPMK;
use App\Models\Kelas;
use App\Models\Page;
use App\Models\Nilai_Mahasiswa;
use App\Models\Detail_Nilai_Mahasiswa;
use App\Models\Teknik_Penilaian;

class coba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'nip' => '123456789987654321',
            'jabatanDosen' => 'kps',
            'namaDosen' => 'Rimuljo',
            'password' => '1234',
            'role'=>true,
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
            'namaMK' => 'TSI',
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
            'namaMK' => 'PM',
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
            'namaMK' => 'PPL',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK04',
        ]);
        CPL_Prodi::create([
            'kodeCPL' => 'CPL01',
            'deskripsiCPL' => 'Mampu memahami, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL02',
            'deskripsiCPL' => 'Memiliki kemampuan untuk belajar seumur hidup (life-long learning).',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL03',
            'deskripsiCPL' => 'Mampu menjelaskan, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL04',
            'deskripsiCPL' => 'Mampu merancang dan menggunakan database, serta mengolah, menganalisa, dan memvisualisasi data dengan alat dan teknik pengolahan data.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL05',
            'deskripsiCPL' => 'Mampu menjelaskan dan menggunakan berbagai metodologi pengembangan sistem beserta alat pemodelan sistem dan menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL06',
            'deskripsiCPL' => 'Mampu menjelaskan dan menerapkan kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL07',
            'deskripsiCPL' => 'Mampu merencanakan, menerapkan, memelihara dan meningkatkan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi yang strategis baik jangka pendek maupun jangka panjang.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL09',
            'deskripsiCPL' => 'Mampu menjelaskan konsep dan membuat perencanaan infrastruktur TI, arsitektur jaringan, layanan fisik dan cloud, menganalisa konsep identifikasi, otentikasi, otorisasi akses dalam konteks melindungi orang dan perangkat.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL10',
            'deskripsiCPL' => 'Mampu menerapkan konsep kecerdasan bisnis untuk menyelesaikan permasalahan dalam organisasi.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL11',
            'deskripsiCPL' => 'Mampu menjelaskan konsep matematika dan statistika yang digunakan dalam sistem informasi.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL12',
            'deskripsiCPL' => 'Mampu mengidentifikasi peluang yang diciptakan oleh inovasi teknologi informasi menjadi nilai organisasi yang berkelanjutan melalui proses yang sistematis.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL13',
            'deskripsiCPL' => 'Mampu menggunakan konsep logika dan algoritma untuk memecahkan permasalahan serta menerapkannya ke dalam beberapa bahasa pemrograman.',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK011',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK012',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK013',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK014',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK021',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK023',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK022',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL02'
        ]);

        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'deskripsiSubCPMK' => 'Mampu memahami konsep dasar sistem informasi',
            'kodeCPMK' => 'CPMK011'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0112',
            'deskripsiSubCPMK' => 'Mampu menjelaskan konsep informasi dan sistem informasi',
            'kodeCPMK' => 'CPMK011'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0121',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK012'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0122',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK012'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0131',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK013'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0132',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK013'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0141',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK014'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0142',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK014'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0211',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK021'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0212',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK021'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0231',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK023'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK0232',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK023'
        ]);
        SubCPMK::create([
            'kodeSubCPMK' => 'Sub-CPMK01',
            'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi',
            'kodeCPMK' => 'CPMK022'
        ]);
        RPS::create([
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2022,
            'kodeMK' => 'MK01',
            'kps' => '123456789987654321'
        ]);
        RPS::create([
            'kodeRPS' => 'RPS002',
            'tahunAjaran' => 2022,
            'kodeMK' => 'MK02',
            'kps' => '123456789987654321'
        ]);
        RPS::create([
            'kodeRPS' => 'RPS003',
            'tahunAjaran' => 2022,
            'kodeMK' => 'MK03',
            'kps' => '123456789987654321'
        ]);
        RPS::create([
            'kodeRPS' => 'RPS004',
            'tahunAjaran' => 2022,
            'kodeMK' => 'MK04',
            'kps' => '123456789987654321'
        ]);
        Teknik_Penilaian::create([
            'kodePenilaian'=> '0001',
            'teknikPenilaian'=> 'Partisipasi (Kehadiran / Quiz)',
            'bobotPenilaian'=>'35',
            'kriteriaPenilaian'=>'Isi kriteria penilaian',
            'tahapPenilaian'=>'Awal Tengah Semester',
            'instrumenPenilaian'=>'Rubrik holistik',
            'kodeRPS'=>'RPS001',
        ]);
        Teknik_Penilaian::create([
            'kodePenilaian'=> '0002',
            'teknikPenilaian'=> 'UTS',
            'bobotPenilaian'=>'65',
            'kriteriaPenilaian'=>'Isi kriteria penilaian',
            'tahapPenilaian'=>'Tengah Semester',
            'instrumenPenilaian'=>'Rubrik holistik',
            'kodeRPS'=>'RPS001',
        ]);
        Teknik_Penilaian::create([
            'kodePenilaian'=> '0003',
            'teknikPenilaian'=> 'Tes Tulis (UAS)',
            'bobotPenilaian'=>'65',
            'kriteriaPenilaian'=>'Isi kriteria penilaian',
            'tahapPenilaian'=>'Tengah Semester',
            'instrumenPenilaian'=>'Rubrik holistik',
            'kodeRPS'=>'RPS001',
        ]);
        Teknik_Penilaian::create([
            'kodePenilaian'=> '0004',
            'teknikPenilaian'=> 'Tes Lisan (Tugas Kelompok)',
            'bobotPenilaian'=>'65',
            'kriteriaPenilaian'=>'Isi kriteria penilaian',
            'tahapPenilaian'=>'Tengah Semester',
            'instrumenPenilaian'=>'Rubrik holistik',
            'kodeRPS'=>'RPS001',
        ]);

        Minggu_RPS::create([
            'kodeMingguRPS'=> 'MR11',
            'kodeSubCPMK'=> 'Sub-CPMK0111',
            'mingguKe'=>'1',
            'bentukPembelajaran'=>true,
            'indikatorMingguRPS'=>'Isi indikator RPS',
            'kriteriaMingguRPS'=>'Isi kriteria RPS',
            'deskripsiPembelajaran'=>'Isi deskripsi pembelajaran RPS',
            'materiPembelajaran'=>'Isi materi pembelajaran RPS',
        ]);
        Minggu_RPS::create([
            'kodeMingguRPS'=> 'MR12',
            'kodeSubCPMK'=> 'Sub-CPMK0111',
            'mingguKe'=>'2',
            'bentukPembelajaran'=>false,
            'indikatorMingguRPS'=>'Isi indikator RPS',
            'kriteriaMingguRPS'=>'Isi kriteria RPS',
            'deskripsiPembelajaran'=>'Isi deskripsi pembelajaran RPS',
            'materiPembelajaran'=>'Isi materi pembelajaran RPS',
        ]);
        Minggu_RPS::create([
            'kodeMingguRPS'=> 'MR13',
            'kodeSubCPMK'=> 'Sub-CPMK0131',
            'mingguKe'=>'2',
            'bentukPembelajaran'=>false,
            'indikatorMingguRPS'=>'Isi indikator RPS',
            'kriteriaMingguRPS'=>'Isi kriteria RPS',
            'deskripsiPembelajaran'=>'Isi deskripsi pembelajaran RPS',
            'materiPembelajaran'=>'Isi materi pembelajaran RPS',
        ]);
        Minggu_RPS::create([
            'kodeMingguRPS'=> 'MR14',
            'kodeSubCPMK'=> 'Sub-CPMK0141',
            'mingguKe'=>'2',
            'bentukPembelajaran'=>false,
            'indikatorMingguRPS'=>'Isi indikator RPS',
            'kriteriaMingguRPS'=>'Isi kriteria RPS',
            'deskripsiPembelajaran'=>'Isi deskripsi pembelajaran RPS',
            'materiPembelajaran'=>'Isi materi pembelajaran RPS',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK012',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK02',
            'kodeCPMK' => 'CPMK013',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK02',
            'kodeCPMK' => 'CPMK014',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK03',
            'kodeCPMK' => 'CPMK021',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK03',
            'kodeCPMK' => 'CPMK023',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK04',
            'kodeCPMK' => 'CPMK022',
        ]);
        Detail_RPS::create([
            'kodeRPS' => 'RPS001',
            'kodeMingguRPS' => 'MR11',
            'kodePenilaian'=> '0001',
        ]);
        Detail_RPS::create([
            'kodeRPS' => 'RPS001',
            'kodeMingguRPS' => 'MR11',
            'kodePenilaian'=> '0002',
        ]);
        Detail_RPS::create([
            'kodeRPS' => 'RPS001',
            'kodeMingguRPS' => 'MR12',
            'kodePenilaian'=> '0003',
        ]);
        Detail_RPS::create([
            'kodeRPS' => 'RPS002',
            'kodeMingguRPS' => 'MR13',
            'kodePenilaian'=> '0002',
        ]);
        Detail_RPS::create([
            'kodeRPS' => 'RPS002',
            'kodeMingguRPS' => 'MR14',
            'kodePenilaian'=> '0001',
        ]);
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '123456789987654321',
            'peranDosen' => 'Pengembang RPS',
        ]);
        


        
    }
}
