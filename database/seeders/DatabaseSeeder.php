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
use App\Models\User;
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

        Bahan_Kajian::create([
            'kodeBK' => 'BK01',
            'namaBK' => 'Foundation of Information Systems',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK02',
            'namaBK' => 'Data/Information Management',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK03',
            'namaBK' => 'IT Infrastructure',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK04',
            'namaBK' => 'IS Project Management',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK06',
            'namaBK' => 'IS Management and Strategy',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK07',
            'namaBK' => 'Application Development / Programming',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK08',
            'namaBK' => 'Secure Computing',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK09',
            'namaBK' => 'Ethics, use and implication for society',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK10',
            'namaBK' => 'Praktikum',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK11',
            'namaBK' => 'Mathematics and statistics',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK12',
            'namaBK' => 'Data / Business Analytics',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK13',
            'namaBK' => 'Personality Development',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK14',
            'namaBK' => 'Business Process Management',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK15',
            'namaBK' => 'Enterprise Architecture',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK16',
            'namaBK' => 'User Interface Design',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK17',
            'namaBK' => 'Emerging Technologies',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK18',
            'namaBK' => 'Digital Innovation',
            'kategoriBK' => TRUE,
            "referensiBK" =>'IS2020',
        ]);

        Bahan_Kajian::create([
            'kodeBK' => 'BK19',
            'namaBK' => 'Foundation of Science',
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

        User::create([
            'nip' => '123456789987654321',
            'jabatanDosen' => 'kps',
            'namaDosen' => 'Rimuljo',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email'=>'rimuljo@gmail.com',
            'role'=>true,
            'status'=> "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '32532425252',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Taufik',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email'=>'taufik@gmail.com',
            'role'=>0,
            'status'=> "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '32525252523',
            'jabatanDosen' => 'Admin',
            'namaDosen' => 'Admin',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email'=>'admin@gmail.com',
            'role'=>2,
            'status'=> "Aktif Bekerja"
        ]);

        RPS::create([
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2022,
            'kodeMK' => 'MK01',
            'kps' => '123456789987654321'
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

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL08',
            'kodeBK' => 'BK01'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL04',
            'kodeBK' => 'BK02'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL09',
            'kodeBK' => 'BK03'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL08',
            'kodeBK' => 'BK04'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL05',
            'kodeBK' => 'BK05'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL07',
            'kodeBK' => 'BK06'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL05',
            'kodeBK' => 'BK07'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL13',
            'kodeBK' => 'BK07'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL07',
            'kodeBK' => 'BK08'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL09',
            'kodeBK' => 'BK08'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL06',
            'kodeBK' => 'BK09'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL01',
            'kodeBK' => 'BK10'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL02',
            'kodeBK' => 'BK10'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL11',
            'kodeBK' => 'BK11'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL04',
            'kodeBK' => 'BK12'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL10',
            'kodeBK' => 'BK12'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL11',
            'kodeBK' => 'BK12'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL04',
            'kodeBK' => 'BK12'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL01',
            'kodeBK' => 'BK13'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL02',
            'kodeBK' => 'BK13'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL03',
            'kodeBK' => 'BK14'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL12',
            'kodeBK' => 'BK14'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL07',
            'kodeBK' => 'BK15'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL05',
            'kodeBK' => 'BK16'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL03',
            'kodeBK' => 'BK17'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL12',
            'kodeBK' => 'BK17'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL03',
            'kodeBK' => 'BK18'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL12',
            'kodeBK' => 'BK18'
        ]);
        
        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL02',
            'kodeBK' => 'BK19'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK01',
            'kodeMK' => 'MK14'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK02',
            'kodeMK' => 'MK26'
        ]);
        
        Detail_BK_MK::create([
            'kodeBK' => 'BK02',
            'kodeMK' => 'MK27'
        ]);
        
        Detail_BK_MK::create([
            'kodeBK' => 'BK03',
            'kodeMK' => 'MK31'
        ]);
               
        Detail_BK_MK::create([
            'kodeBK' => 'BK03',
            'kodeMK' => 'MK32'
        ]);
               
        Detail_BK_MK::create([
            'kodeBK' => 'BK03',
            'kodeMK' => 'MK38'
        ]);
               
        Detail_BK_MK::create([
            'kodeBK' => 'BK03',
            'kodeMK' => 'MK39'
        ]);
                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK04',
            'kodeMK' => 'MK68'
        ]);
                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK05',
            'kodeMK' => 'MK34'
        ]);
                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK05',
            'kodeMK' => 'MK35'
        ]);
                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK05',
            'kodeMK' => 'MK77'
        ]);
                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK06',
            'kodeMK' => 'MK60'
        ]);
                                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK06',
            'kodeMK' => 'MK63'
        ]);
                                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK06',
            'kodeMK' => 'MK68'
        ]);
                                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK06',
            'kodeMK' => 'MK73'
        ]);
                                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK06',
            'kodeMK' => 'MK76'
        ]);
                                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK18'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK19'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK28'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK29'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK42'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK43'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK44'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK45'
        ]);
                                       
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK52'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK53'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK67'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK75'
        ]);
                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK07',
            'kodeMK' => 'MK18'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK08',
            'kodeMK' => 'MK48'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK09',
            'kodeMK' => 'MK65'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK10',
            'kodeMK' => 'MK61'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK10',
            'kodeMK' => 'MK62'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK10',
            'kodeMK' => 'MK78'
        ]);
        
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK11'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK13'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK17'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK22'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK30'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK33'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK11',
            'kodeMK' => 'MK64'
        ]);
                
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK36'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK37'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK54'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK55'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK64'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK66'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK69'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK70'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK71'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK72'
        ]);
                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK12',
            'kodeMK' => 'MK74'
        ]);
                                
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK01'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK02'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK03'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK04'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK05'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK06'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK07'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK08'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK12'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK16'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK20'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK21'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK23'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK41'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK47'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK49'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK58'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'MK59'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK14',
            'kodeMK' => 'MK24'
        ]);
                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK14',
            'kodeMK' => 'MK25'
        ]);
                                                
        Detail_BK_MK::create([
            'kodeBK' => 'BK15',
            'kodeMK' => 'MK40'
        ]);
                                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK15',
            'kodeMK' => 'MK56'
        ]);
                                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK15',
            'kodeMK' => 'MK57'
        ]);
                                                        
        Detail_BK_MK::create([
            'kodeBK' => 'BK16',
            'kodeMK' => 'MK50'
        ]);
                                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK16',
            'kodeMK' => 'MK51'
        ]);
                                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK17',
            'kodeMK' => 'MK40'
        ]);
                                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK17',
            'kodeMK' => 'MK46'
        ]);
                                                               
        Detail_BK_MK::create([
            'kodeBK' => 'BK17',
            'kodeMK' => 'MK50'
        ]);
                                                          
        Detail_BK_MK::create([
            'kodeBK' => 'BK18',
            'kodeMK' => 'MK46'
        ]);
                                                                  
        Detail_BK_MK::create([
            'kodeBK' => 'BK18',
            'kodeMK' => 'MK49'
        ]);
                                                                          
        Detail_BK_MK::create([
            'kodeBK' => 'BK19',
            'kodeMK' => 'MK09'
        ]);
                                                                                  
        Detail_BK_MK::create([
            'kodeBK' => 'BK19',
            'kodeMK' => 'MK10'
        ]);
                                                                                  
        Detail_BK_MK::create([
            'kodeBK' => 'BK19',
            'kodeMK' => 'MK15'
        ]);
        
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '123456789987654321',
            'peranDosen' => 'Pengembang RPS',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK012',
        ]);

        Detail_RPS::create([
            'kodeRPS' => 'RPS001',
            'kodeMingguRPS' => 'MR11',
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