<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create([
            'namaProdi'=>'S1 Sistem Informasi',
            'fakultas'=>'Sains dan Teknologi',
            'namaPT'=>'Universitas Airlangga',
            'akreditasi'=>'Unggul',
            'jenjangPendidikan'=>'S-1',
            'gelarLulusan'=>'S.Kom',
            'visi'=>'Menjadi program studi unggul dan terkemuka dalam bidang Sistem Informasi di tingkat nasional dan internasional, serta berperan serta dalam pengembangan masyarakat ilmiah, yang beradab, dan bermoral agama.',
            'misi'=>'Untuk mencapai visi di atas, maka misi Program Studi S1 Sistem Informasi adalah:
                1. Menyelengarakan proses pendidikan dan pengajaran untuk menghasilkan sumber daya manusia yang mampu menguasai, menerapkan, mengembangkan dan melakukan inovasi di bidang Sistem Informasi.
                2. Melakukan penelitian yang berkualitas dan bermanfaat di bidang Sistem Informasi.
                3. Mendarmabaktikan keahlian dalam bidang Sistem Informasi kepada masyarakat/lembaga/industri/pemerintah.',
            'tujuan'=>'Tujuan yang hendak dicapai oleh Program Studi S1 Sistem Informasi adalah sebagai:
                1. Menyelenggarakan proses pembelajaran yang berkualitas untuk menghasilkan lulusan yang bermoral, mampu menguasai, menerapkan, mengembangkan dan melakukan inovasi di bidang Sistem Informasi
                2. Menghasilkan penelitian di bidang sistem informasi yang inovatif, produktif dan berkualitas.
                3. Menghasilkan pengabdian masyarakat dengan memberdayakan masyarakat agar mampu memecahkan masalah secara mandiri dan berkelanjutan.',
        ]);

        Page::create([
            'pemetaan'=>'cpl-mk',
            'deskripsi'=>'Pemetaan CPL terhadap MK dilakukan untuk menunjukkan keterhubungan antara mata kuliah terhadap CPL Program Studi pada Tabel 9 Pemetaan CPL terhadap MK.',
        ]);
        Profil_Lulusan::create([
            'kodePL' => 'PL01',
            'deskripsiPL' => 'Lulusan memiliki kemampuan menganalisis, merancang, membuat, dan melakukan evaluasi sistem informasi yang selaras dengan tujuan organisasi. (IS2020)'
        ]);

        CPL_SN_Dikti::create([
            'kodeCPLSN' => 'CPL-S01',
            'deskripsiSN' => 'Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.',
            'sumberSN' => 'SN-DIKTI',
            'kategoriSN'=>TRUE,
            'jenisSN'=>'MK praktikum'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL01',
            'deskripsiCPL' => 'Mampu memahami, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        CPL_Prodi::create([
            'kodeCPL' => 'CPL02',
            'deskripsiCPL' => 'Menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi',
            'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK01',
            'namaBK' => 'Foundation of Information Systems',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
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
            'namaMK' => 'Kkkk',
            'jenisMK' => TRUE,
            'sks'=>3,
            'semester'=>'1',
            'kategoriMK'=> TRUE,
            'pustaka'=> 'Pustaka Belum Tau',
            'deskripsiMK'=> 'Deskripsi MK Belum Tau',
            'prasyaratTambahan'=> 'Prasyarat MK Belum Tau',
            'mat_kodeMK'=>'MK01',
        ]);

        User::create([
            'nip' => '123456789987654321',
            'jabatanDosen' => 'kps',
            'namaDosen' => 'Rimuljo',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email'=>'rimuljo@gmail.com',
            'role'=>true,
        ]
    );
        User::create([
            'nip' => '123456789987654322',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Guntur',
            'password' => '1234',
            'email'=>'Guntur@gmail.com',
            'role'=>true,
        ]);
        User::create([
            'nip' => '123456789987654323',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Petir',
            'password' => '1234',
            'email'=>'Petir@gmail.com',
            'role'=>true,
        ]);

        RPS::create([
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2022,
            'pustaka'=> 'isi pustaka',
            'kodeMK' => 'MK01',
            'kps' => '123456789987654321'
        ],);
        RPS::create([
            'kodeRPS' => 'RPS003',
            'tahunAjaran' => 2022,
            'pustaka'=> 'isi pustaka',
            'kodeMK' => 'MK01',
            'kps' => '123456789987654321'
        ],);
        CPMK::create([
            'kodeCPMK' => 'CPMK011',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK012',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK013',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK014',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK015',
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
            'kodeCPMK' => 'CPMK013'
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

        Minggu_RPS::create([
            'kodeMingguRPS'=> '2',
            'kodeSubCPMK'=> 'Sub-CPMK0111',
            'mingguKe'=>'1',
            'bentukPembelajaran'=>true,
            'indikatorMingguRPS'=>'Isi indikator RPS',
            'kriteriaMingguRPS'=>'Isi kriteria RPS',
            'deskripsiPembelajaran'=>'Isi deskripsi pembelajaran RPS',
            'materiPembelajaran'=>'Isi materi pembelajaran RPS',
        ]);
        Minggu_RPS::create([
            'kodeMingguRPS'=> '3',
            'kodeSubCPMK'=> 'Sub-CPMK0111',
            'mingguKe'=>'2',
            'bentukPembelajaran'=>false,
            'indikatorMingguRPS'=>'Isi indikator RPS',
            'kriteriaMingguRPS'=>'Isi kriteria RPS',
            'deskripsiPembelajaran'=>'Isi deskripsi pembelajaran RPS',
            'materiPembelajaran'=>'Isi materi pembelajaran RPS',
        ]);

        Mahasiswa::create([
            'nim'=>'082011633100',
            'namaMahasiswa'=>'Cantika Mantuliti',
            'tahunMasuk'=>'2020',
        ]);

        Kelas::create([
            'kodeKelas'=>'ABCDLITS6',
            'namaKelas'=>'Konsep Sistem Informasi Teori',
            'jadwal' =>'Selasa 7-8',
            'kuota' => '60',
            'kodeMK'=> 'MK01'
        ]);

        Detail_SN_CPLProdi::create([
            'kodeCPLSN' => 'CPL-S01',
            'kodeCPL' => 'CPL01',
        ]);

        Detail_PL_CPLProdi::create([
            'kodePL' => 'PL01',
            'kodeCPL' => 'CPL01',
        ]);

        Detail_CPLProdi_BK::create([
            'kodeBK' => 'BK01',
            'kodeCPL' => 'CPL01',
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK01',
            'kodeMK' => 'MK01',
        ]);
        
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '123456789987654321',
            'peranDosen' => 'Dosen Pengembang RPS',
        ]);
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '123456789987654322',
            'peranDosen' => 'Koordinator BK',
        ]);
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '123456789987654323',
            'peranDosen' => 'Dosen Pengampu',
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
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK012',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK013',
        ]);

        Detail_RPS::create([
            'kodeRPS' => 'RPS001',
            'kodeMingguRPS' => '2',
            'kodePenilaian'=> '0001',
        ]);

        Nilai_Mahasiswa::create([
            'kodeNilai'=>1,
            'nim'=>'082011633100', 
            'kodeKelas' => 'ABCDLITS6', 
            'kodeRPS'=>'RPS001', 
            'semesterAmbil'=>'01', 
        ]);

        Detail_Nilai_Mahasiswa::create([
            'kodeNilai'=>'1', 
            'kodePenilaian' => '0001',  
            'nilaiPerTeknik'=>'60', 
        ]);

        Detail_Nilai_Mahasiswa::create([
            'kodeNilai'=>'1', 
            'kodePenilaian' => '0002', 
            'nilaiPerTeknik'=>'40', 
        ]);
        // $SN_Dikti = CPL_SN_Dikti::where('kodeCPLSN', '=', 'CPL-S01');
        // $SN_Dikti->CPL_Prodi()->attach('CPL01');
        // // $SN_Prodi = CPL_Prodi::where('kodeCPL', '=', 'CPL01')->update()->CPL_SN_Dikti()->attach('CPL-S01');
        // // $SN_Prodi = CPL_Prodi::where('kodeCPL', 'CPL01')->get();
        // // $SN_Dikti->CPL_Prodi()->attach('CPL01');
    }
}