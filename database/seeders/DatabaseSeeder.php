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
            'role' => true,
        ]);
        User::create([
            'nip' => '198206062007101001',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Faried Effendy',
            'password' => '$2a$12$.08Y4L4sR1PQCrxZjv7J5e2L/kDYNkHEiyqLOcRd3ro2PkhCyo7wm', //password coba123
            'email' => 'Petir@gmail.com',
            'role' => true,
        ]);

        RPS::create([
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2022,
            'pustaka'=> 'Johnson and Wichern, 2002. Applied Multivariate Statistical Analysis, Prentice Hall.',
            'kodeMK' => 'SIJ202',
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
            'kodeMK' => 'SII103'
        ]);

        Detail_BK_MK::create([
            'kodeBK' => 'BK13',
            'kodeMK' => 'PHP103'
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
