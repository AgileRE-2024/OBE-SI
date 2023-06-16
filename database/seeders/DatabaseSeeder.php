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
        $this->call(BahanKajianSeeder::class);
        $this->call(CPLDiktiSeeder::class);
        $this->call(ProfilLulusanSeeder::class);
        $this->call(CPLProdiSeeder::class);

        Prodi::create([
            'namaProdi' => 'S1 Sistem Informasi',
            'fakultas' => 'Sains dan Teknologi',
            'namaPT' => 'Universitas Airlangga',
            'akreditasi' => 'Unggul',
            'jenjangPendidikan' => 'S-1',
            'gelarLulusan' => 'S.Kom',
            'visi' => 'Menjadi program studi unggul dan terkemuka dalam bidang Sistem Informasi di tingkat nasional dan internasional, serta berperan serta dalam pengembangan masyarakat ilmiah, yang beradab, dan bermoral agama.',
            'misi' => 'Untuk mencapai visi di atas, maka misi Program Studi S1 Sistem Informasi adalah:
                1. Menyelengarakan proses pendidikan dan pengajaran untuk menghasilkan sumber daya manusia yang mampu menguasai, menerapkan, mengembangkan dan melakukan inovasi di bidang Sistem Informasi.
                2. Melakukan penelitian yang berkualitas dan bermanfaat di bidang Sistem Informasi.
                3. Mendarmabaktikan keahlian dalam bidang Sistem Informasi kepada masyarakat/lembaga/industri/pemerintah.',
            'tujuan' => 'Tujuan yang hendak dicapai oleh Program Studi S1 Sistem Informasi adalah sebagai:
                1. Menyelenggarakan proses pembelajaran yang berkualitas untuk menghasilkan lulusan yang bermoral, mampu menguasai, menerapkan, mengembangkan dan melakukan inovasi di bidang Sistem Informasi
                2. Menghasilkan penelitian di bidang sistem informasi yang inovatif, produktif dan berkualitas.
                3. Menghasilkan pengabdian masyarakat dengan memberdayakan masyarakat agar mampu memecahkan masalah secara mandiri dan berkelanjutan.',
        ]);

        Page::create([
            'pemetaan' => 'cpl-mk',
            'deskripsi' => 'Pemetaan CPL terhadap MK dilakukan untuk menunjukkan keterhubungan antara mata kuliah terhadap CPL Program Studi pada Tabel 9 Pemetaan CPL terhadap MK.',
        ]);


        $this->call(MataKuliahSeeder::class);


        User::create([
            'nip' => '197102111997021001',
            'jabatanDosen' => 'kps',
            'namaDosen' => 'Rimuljo',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'rimuljo@gmail.com',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '197101042008121001',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Taufik',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'taufik@gmail.com',
            'role' => 0,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '32525252523',
            'jabatanDosen' => 'Admin',
            'namaDosen' => 'Admin',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'admin@gmail.com',
            'role' => 2,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198410272010122005',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Ira Puspitasari',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'Guntur@gmail.com',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198206062007101001',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Faried Effendy',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'Petir@gmail.com',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198110282006041003',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Indra Kharisma R, S.Kom., M.T.',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'indra.kharisma@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197801262006041001',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Badrus Zaman, S.Kom., M.Cs.',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'badruszaman@fst.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);

        RPS::create([
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2022,
            'pustaka'=> 'Johnson and Wichern, 2002. Applied Multivariate Statistical Analysis, Prentice Hall.',
            'kodeMK' => 'SII103',
            'kps' => '197102111997021001'
        ],);

        CPMK::create([
            'kodeCPMK' => 'CPMK011',
            'deskripsiCPMK' => 'Mampu menjelaskan konsep dasar sistem',
            'kodeCPL' => 'CPL-01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK012',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL-02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK013',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL-01'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK014',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL-02'
        ]);
        CPMK::create([
            'kodeCPMK' => 'CPMK015',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL-02'
        ]);

        $this->call(SubCpmkSeeder::class);

        Teknik_Penilaian::create([
            'kodePenilaian' => '0001',
            'teknikPenilaian' => 'Partisipasi (Kehadiran / Quiz)',
            'bobotPenilaian' => '35',
            'kriteriaPenilaian' => 'Isi kriteria penilaian',
            'tahapPenilaian' => 'Awal Tengah Semester',
            'instrumenPenilaian' => 'Rubrik holistik',
            'kodeRPS' => 'RPS001',
        ]);

        Teknik_Penilaian::create([
            'kodePenilaian' => '0002',
            'teknikPenilaian' => 'UTS',
            'bobotPenilaian' => '65',
            'kriteriaPenilaian' => 'Isi kriteria penilaian',
            'tahapPenilaian' => 'Tengah Semester',
            'instrumenPenilaian' => 'Rubrik holistik',
            'kodeRPS' => 'RPS001',
        ]);

        Minggu_RPS::create([
            'kodeMingguRPS'=> '2',
            'kodeSubCPMK'=> 'Sub-CPMK0111',
            'mingguKe'=>'1',
            'bentukPembelajaran'=>true,
            'indikatorMingguRPS'=>'Mahasiswa dapat mengimplementasikan visualisasi data dan grafik pada tools yang ditentukan',
            'kriteriaMingguRPS'=>'Ketepatan dan penguasaan',
            'deskripsiPembelajaran'=>'Visualisasi data dengan membuat dan menginterpretasikan grafik',
            'materiPembelajaran'=>'Pengenalan R Studio',
        ]);
        Minggu_RPS::create([
            'kodeMingguRPS'=> '3',
            'kodeSubCPMK'=> 'Sub-CPMK0111',
            'mingguKe'=>'2',
            'bentukPembelajaran'=>false,
            'indikatorMingguRPS'=>'Mahasiswa dapat menghitung standar deviasi pada tools yang ditentukan',
            'kriteriaMingguRPS'=>'Ketepatan dan sistematika',
            'deskripsiPembelajaran'=>'Mengukur penyebaran data menggunakan rentang dan deviasi standar serta mengidentifikasi outlier dalam data set menggunakan konsep rentang interkuartil',
            'materiPembelajaran'=>'Standar Deviasi pada R Studio',
        ]);

        Mahasiswa::create([
            'nim' => '082011633100',
            'namaMahasiswa' => 'Cantika Mantuliti',
            'tahunMasuk' => '2020',
        ]);

        Kelas::create([
            'kodeKelas' => 'ABCDLITS6',
            'namaKelas' => 'Konsep Sistem Informasi Teori',
            'jadwal' => 'Selasa 7-8',
            'kuota' => '60',
            'kodeMK' => 'SII103'
        ]);

        Detail_SN_CPLProdi::create([
            'kodeCPLSN' => 'CPL-S01',
            'kodeCPL' => 'CPL-01',
        ]);

        Detail_PL_CPLProdi::create([
            'kodePL' => 'PL01',
            'kodeCPL' => 'CPL-01',
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
            'kodeCPL' => 'CPL-01',
            'kodeBK' => 'BK10'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL-02',
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
            'kodeCPL' => 'CPL-01',
            'kodeBK' => 'BK13'
        ]);

        Detail_CPLProdi_Bk::create([
            'kodeCPL' => 'CPL-02',
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
            'kodeCPL' => 'CPL-02',
            'kodeBK' => 'BK19'
        ]);
        Detail_CPLProdi_BK::create([
            'kodeBK' => 'BK01',
            'kodeCPL' => 'CPL-01',
        ]);

        $bkmkData = [
            ['kodeMK' => 'AGI101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'AGP101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'AGK101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'AGH101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'AGB101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'AGC101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'NOP103', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'NOP101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'KID107', 'kodeBK' => 'BK19'],
            ['kodeMK' => 'BID108', 'kodeBK' => 'BK19'],
            ['kodeMK' => 'MAA101', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'BAI101', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'SIP107', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'SII103', 'kodeBK' => 'BK01'],
            ['kodeMK' => 'FID112', 'kodeBK' => 'BK19'],
            ['kodeMK' => 'PHP103', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'MAL102', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'MAT101', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'MAT102', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'MNM107', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'MNM106', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'MAS118', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'BAE111', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'SIA204', 'kodeBK' => 'BK14'],
            ['kodeMK' => 'SIA205', 'kodeBK' => 'BK14'],
            ['kodeMK' => 'SID201', 'kodeBK' => 'BK02'],
            ['kodeMK' => 'SID203', 'kodeBK' => 'BK02'],
            ['kodeMK' => 'SIR201', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SIR203', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'MAS234', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'SIJ201', 'kodeBK' => 'BK03'],
            ['kodeMK' => 'SIJ203', 'kodeBK' => 'BK03'],
            ['kodeMK' => 'MAL204', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'SII301', 'kodeBK' => 'BK05'],
            ['kodeMK' => 'SII314', 'kodeBK' => 'BK05'],
            ['kodeMK' => 'SIC201', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SIC202', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SIJ202', 'kodeBK' => 'BK03'],
            ['kodeMK' => 'SIJ204', 'kodeBK' => 'BK03'],
            ['kodeMK' => 'SIS202', 'kodeBK' => 'BK15'],
            ['kodeMK' => 'SIS202', 'kodeBK' => 'BK18'],
            ['kodeMK' => 'MNM203', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'SIS204', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SIS205', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SIS304', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SIS305', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SII213', 'kodeBK' => 'BK17'],
            ['kodeMK' => 'SII213', 'kodeBK' => 'BK18'],
            ['kodeMK' => 'BAE112', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'SIS309', 'kodeBK' => 'BK08'],
            ['kodeMK' => 'MNW401', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'MNW401', 'kodeBK' => 'BK18'],
            ['kodeMK' => 'SII208', 'kodeBK' => 'BK16'],
            ['kodeMK' => 'SII209', 'kodeBK' => 'BK16'],
            ['kodeMK' => 'SII318', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SII319', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'SID303', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SID304', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SIA301', 'kodeBK' => 'BK15'],
            ['kodeMK' => 'SIA302', 'kodeBK' => 'BK15'],
            ['kodeMK' => 'KNT401', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'ETT301', 'kodeBK' => 'BK13'],
            ['kodeMK' => 'SII323', 'kodeBK' => 'BK06'],
            ['kodeMK' => 'PNT497', 'kodeBK' => 'BK10'],
            ['kodeMK' => 'KLT301', 'kodeBK' => 'BK10'],
            ['kodeMK' => 'MNG206', 'kodeBK' => 'BK06'],
            ['kodeMK' => 'MAS235', 'kodeBK' => 'BK11'],
            ['kodeMK' => 'MAS235', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SII214', 'kodeBK' => 'BK09'],
            ['kodeMK' => 'SII322', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SIS308', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'MNG310', 'kodeBK' => 'BK04'],
            ['kodeMK' => 'MNG310', 'kodeBK' => 'BK06'],
            ['kodeMK' => 'SIC401', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SIC402', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SIR301', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'MAS324', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SII404', 'kodeBK' => 'BK06'],
            ['kodeMK' => 'SIC404', 'kodeBK' => 'BK12'],
            ['kodeMK' => 'SII408', 'kodeBK' => 'BK07'],
            ['kodeMK' => 'MNG402', 'kodeBK' => 'BK06'],
            ['kodeMK' => 'SII317', 'kodeBK' => 'BK05'],
            ['kodeMK' => 'PNT499', 'kodeBK' => 'BK10']
        ];
        
        Detail_BK_MK::insert($bkmkData);

        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '198206062007101001',
            'peranDosen' => 'Dosen Pengembang RPS',
        ]);
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '197101042008121001',
            'peranDosen' => 'Koordinator BK',
        ]);
        Detail_Peran_Dosen::create([
            'kodeRPS' => 'RPS001',
            'nip' => '197101042008121001',
            'peranDosen' => 'Dosen Pengampu',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'SII103',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'PHP103',
            'kodeCPMK' => 'CPMK011',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'SII103',
            'kodeCPMK' => 'CPMK012',
        ]);
        Detail_MK_CPMK::create([
            'kodeMK' => 'SII103',
            'kodeCPMK' => 'CPMK013',
        ]);

        Detail_RPS::create([
            'kodeRPS' => 'RPS001',
            'kodeMingguRPS' => '2',
            'kodePenilaian' => '0001',
        ]);

        Nilai_Mahasiswa::create([
            'kodeNilai' => 1,
            'nim' => '082011633100',
            'kodeKelas' => 'ABCDLITS6',
            'kodeRPS' => 'RPS001',
            'semesterAmbil' => '01',
        ]);

        Detail_Nilai_Mahasiswa::create([
            'kodeNilai' => '1',
            'kodePenilaian' => '0001',
            'nilaiPerTeknik' => '60',
        ]);

        Detail_Nilai_Mahasiswa::create([
            'kodeNilai' => '1',
            'kodePenilaian' => '0002',
            'nilaiPerTeknik' => '40',
        ]);
        // $SN_Dikti = CPL_SN_Dikti::where('kodeCPLSN', '=', 'CPL-S01');
        // $SN_Dikti->CPL_Prodi()->attach('CPL-01');
        // // $SN_Prodi = CPL_Prodi::where('kodeCPL', '=', 'CPL-01')->update()->CPL_SN_Dikti()->attach('CPL-S01');
        // // $SN_Prodi = CPL_Prodi::where('kodeCPL', 'CPL-01')->get();
        // // $SN_Dikti->CPL_Prodi()->attach('CPL-01');
    }
}
