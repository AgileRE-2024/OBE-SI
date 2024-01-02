<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CPL_Prodi;
use App\Models\CPL_SN_Dikti;
use App\Models\Detail_SN_CPLProdi;
use App\Models\Detail_PL_CPLProdi;
use App\Models\Detail_CPLProdi_BK;
use App\Models\Detail_BK_MK;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_RPS_Penilaian;
use App\Models\Detail_Pustaka_Minggurps;
use App\Models\Profil_Lulusan;
use App\Models\Bahan_Kajian;
use App\Models\Mata_Kuliah;
use App\Models\RPS;
use App\Models\Pustaka;
use App\Models\kriteria_penilaian;
use App\Models\Prodi;
use App\Models\CPMK;
use App\Models\Mahasiswa;
use App\Models\Minggu_RPS;
use App\Models\SubCPMK;
use App\Models\Kelas;
use App\Models\Page;
use App\Models\Detail_Nilai_Mahasiswa;
use App\Models\Teknik_Penilaian;
use App\Models\User;
use App\Models\Pengampu;
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
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'kps',
            'namaDosen' => 'Dr. Rimuljo Hendradi, S.Si.,M.Si.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'rimuljohendradi@fst.unair.ac.id',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);

        // ------------------------------------ Buat testing aja
        User::create([
            'nip' => '082011633029',
            'jabatanDosen' => 'kps',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Daffa Hafiizh Permadi',
            'password' => bcrypt('12345678'), //password 12345678
            'email' => 'daffagt123@gmail.com',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);
        // ------------------------------------

        User::create([
            'nip' => '197101042008121001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Taufik',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'taufik@gmail.com',
            'role' => 0,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '32525252523',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Admin',
            'namaDosen' => 'Admin',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'admin@gmail.com',
            'role' => 2,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '198410272010122005',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Ira Puspitasari',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'Guntur@gmail.com',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '198002172005012001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Indah Werdiningsih, S.Si., M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'indah-w@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '198206062007101001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Faried Effendy',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'Petir@gmail.com',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198110282006041003',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Indra Kharisma R, S.Kom., M.T.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'indra.kharisma@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197801262006041001',
            'jabatanDosen' => 'lektor',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Badrus Zaman, S.Kom., M.Cs.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'badruszaman@fst.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);

        kriteria_penilaian::create([
            'nama_kriteria_penilaians' => 'Kriteria 1',
            'indikatorPenilaian' => 'Indikator 1A',
            'deskripsi_kriteria_penilaians' => 'Deskripsi Kriteria 1A',
        ]);

        RPS::create([
            'id_rps' => 'SII1032301',
            'nip' => '197102111997021001',
            'kodeMK' => 'SII103',
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2023,
            'semester' => 1,
            'diperiksa_oleh' => 'Rimuljo Hendradi',
            'disiapkan_oleh' => 'Rimuljo Hendradi',
            'disetujui_oleh' => 'Rimuljo Hendradi',
            'dibuat_oleh' => 'Rimuljo Hendradi',
            'versi' => 1,
            'penanggungJawab' => 'Rimuljo Hendradi',
            'dosenPengampu' => 'Rimuljo Hendradi',
            'detail_penilaian' => 'Penilainnya begini',
        ]);

        Pustaka::create([
            'id_pustaka' => '1',
            'nama_penulis' => 'Johnson and Wichern',
            'tahun' => 2002,
            'judul' => 'Applied Multivariate Statistical Analysis',
            'penerbit' => 'Prentice Hall'
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
        ]);

        Teknik_Penilaian::create([
            'kodePenilaian' => '0002',
            'teknikPenilaian' => 'UTS',
            'bobotPenilaian' => '65',
            'kriteriaPenilaian' => 'Isi kriteria penilaian',
            'tahapPenilaian' => 'Tengah Semester',
            'instrumenPenilaian' => 'Rubrik holistik',
        ]);

        Detail_RPS_Penilaian::create([
            'id_rps' => 'SII1032301',
            'kodePenilaian' => '0001',
        ]);

        Detail_RPS_Penilaian::create([
            'id_rps' => 'SII1032301',
            'kodePenilaian' => '0002',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032301',
            'kodeMingguRPS' => '2',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '1',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => 'Tugas 1',
            'waktuPembelajaran' => '2 jam',
            'pengalaman_belajar' => 'Pembelajaran 1',
            'bahan_kajian' => 'Bahan 1',
        ]);

        Detail_Pustaka_Minggurps::create([
            'id_pustaka' => '1',
            'kodeMingguRPS' => '2',
        ],);

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

        $sncplprodiData = [
            ['kodeCPLSN' => 'CPL-S01', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S02', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S03', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S04', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S05', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S06', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S07', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S08', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S09', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-S10', 'kodeCPL' => 'CPL-01'],
            ['kodeCPLSN' => 'CPL-KU01', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU02', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU03', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU04', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU05', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU06', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU07', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU08', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU09', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KU10', 'kodeCPL' => 'CPL-02'],
            ['kodeCPLSN' => 'CPL-KK01', 'kodeCPL' => 'CPL-03'],
            ['kodeCPLSN' => 'CPL-KK02', 'kodeCPL' => 'CPL-04'],
            ['kodeCPLSN' => 'CPL-KK03', 'kodeCPL' => 'CPL-09'],
            ['kodeCPLSN' => 'CPL-KK04', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-KK05', 'kodeCPL' => 'CPL-11'],
            ['kodeCPLSN' => 'CPL-KK06', 'kodeCPL' => 'CPL-06'],
            ['kodeCPLSN' => 'CPL-KK07', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-KK08', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-KK09', 'kodeCPL' => 'CPL-08'],
            ['kodeCPLSN' => 'CPL-KK10', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-KK11', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-KK12', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-KK13', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-KK14', 'kodeCPL' => 'CPL-10'],
            ['kodeCPLSN' => 'CPL-KK15', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-KK16', 'kodeCPL' => 'CPL-12'],
            ['kodeCPLSN' => 'CPL-KK17', 'kodeCPL' => 'CPL-10'],
            ['kodeCPLSN' => 'CPL-KK18', 'kodeCPL' => 'CPL-09'],
            ['kodeCPLSN' => 'CPL-P01', 'kodeCPL' => 'CPL-03'],
            ['kodeCPLSN' => 'CPL-P02', 'kodeCPL' => 'CPL-04'],
            ['kodeCPLSN' => 'CPL-P03', 'kodeCPL' => 'CPL-09'],
            ['kodeCPLSN' => 'CPL-P04', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P05', 'kodeCPL' => 'CPL-11'],
            ['kodeCPLSN' => 'CPL-P06', 'kodeCPL' => 'CPL-06'],
            ['kodeCPLSN' => 'CPL-P07', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-P08', 'kodeCPL' => 'CPL-08'],
            ['kodeCPLSN' => 'CPL-P09', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P10', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P11', 'kodeCPL' => 'CPL-04'],
            ['kodeCPLSN' => 'CPL-P11', 'kodeCPL' => 'CPL-10'],
            ['kodeCPLSN' => 'CPL-P12', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-P13', 'kodeCPL' => 'CPL-13'],
            ['kodeCPLSN' => 'CPL-P14', 'kodeCPL' => 'CPL-05'],
            ['kodeCPLSN' => 'CPL-P15', 'kodeCPL' => 'CPL-12'],
            ['kodeCPLSN' => 'CPL-P16', 'kodeCPL' => 'CPL-07'],
            ['kodeCPLSN' => 'CPL-P17', 'kodeCPL' => 'CPL-12'],
        ];

        Detail_SN_CPLProdi::insert($sncplprodiData);

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


        $cplplData = [
            ['kodeCPL' => 'CPL-01', 'kodePL' => 'PL04'],
            ['kodeCPL' => 'CPL-02', 'kodePL' => 'PL03'],
            ['kodeCPL' => 'CPL-03', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-03', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-04', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-04', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-05', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-06', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-06', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-07', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-07', 'kodePL' => 'PL03'],
            ['kodeCPL' => 'CPL-08', 'kodePL' => 'PL03'],
            ['kodeCPL' => 'CPL-09', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-10', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-11', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-12', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-12', 'kodePL' => 'PL02'],
            ['kodeCPL' => 'CPL-13', 'kodePL' => 'PL01'],
            ['kodeCPL' => 'CPL-13', 'kodePL' => 'PL02'],
        ];
        Detail_PL_CPLProdi::insert($cplplData);

        // Detail_PL_CPLProdi::create([
        //     'kodePL' => 'PL01',
        //     'kodeCPL' => 'CPL-01',
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL08',
        //     'kodeBK' => 'BK01'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL04',
        //     'kodeBK' => 'BK02'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL09',
        //     'kodeBK' => 'BK03'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL08',
        //     'kodeBK' => 'BK04'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL05',
        //     'kodeBK' => 'BK05'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL07',
        //     'kodeBK' => 'BK06'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL05',
        //     'kodeBK' => 'BK07'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL13',
        //     'kodeBK' => 'BK07'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL07',
        //     'kodeBK' => 'BK08'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL09',
        //     'kodeBK' => 'BK08'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL06',
        //     'kodeBK' => 'BK09'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL-01',
        //     'kodeBK' => 'BK10'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL-02',
        //     'kodeBK' => 'BK10'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL11',
        //     'kodeBK' => 'BK11'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL04',
        //     'kodeBK' => 'BK12'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL10',
        //     'kodeBK' => 'BK12'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL11',
        //     'kodeBK' => 'BK12'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL04',
        //     'kodeBK' => 'BK12'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL-01',
        //     'kodeBK' => 'BK13'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL-02',
        //     'kodeBK' => 'BK13'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL03',
        //     'kodeBK' => 'BK14'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL12',
        //     'kodeBK' => 'BK14'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL07',
        //     'kodeBK' => 'BK15'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL05',
        //     'kodeBK' => 'BK16'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL03',
        //     'kodeBK' => 'BK17'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL12',
        //     'kodeBK' => 'BK17'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL03',
        //     'kodeBK' => 'BK18'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL12',
        //     'kodeBK' => 'BK18'
        // ]);

        // Detail_CPLProdi_Bk::create([
        //     'kodeCPL' => 'CPL-02',
        //     'kodeBK' => 'BK19'
        // ]);
        // Detail_CPLProdi_BK::create([
        //     'kodeBK' => 'BK01',
        //     'kodeCPL' => 'CPL-01',
        // ]);

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
            ['kodeMK' => 'MAL103', 'kodeBK' => 'BK11'],
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

        Detail_RPS_Penilaian::create([
            'id_rps' => 'SII1032301',
            'kodePenilaian' => '0001',
        ]);

        Detail_Nilai_Mahasiswa::create([
            'kodePenilaian' => '0001',
            'nilaiPerTeknik' => '60',
        ]);

        Detail_Nilai_Mahasiswa::create([
            'kodePenilaian' => '0002',
            'nilaiPerTeknik' => '40',
        ]);
        // $SN_Dikti = CPL_SN_Dikti::where('kodeCPLSN', '=', 'CPL-S01');
        // $SN_Dikti->CPL_Prodi()->attach('CPL-01');
        // // $SN_Prodi = CPL_Prodi::where('kodeCPL', '=', 'CPL-01')->update()->CPL_SN_Dikti()->attach('CPL-S01');
        // // $SN_Prodi = CPL_Prodi::where('kodeCPL', 'CPL-01')->get();
        // // $SN_Dikti->CPL_Prodi()->attach('CPL-01');

        User::create([
            'nip' => '123456',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'DOSEN',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'dosen@gmail.com',
            'role' => 3,
            'status' => "Aktif Mengajar"
        ]);

        //FPB Praktikum
        RPS::create([
            'id_rps' => 'SIA2052303',
            'nip' => '198206062007101001',
            'kodeMK' => 'SIA205',
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2023,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disiapkan_oleh' => '198206062007101001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '198206062007101001',
            'versi' => 1,
            'penanggungJawab' => '198206062007101001',
            'dosenPengampu' => '["198206062007101001","198002172005012001"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (30%), SoftSkill (10%)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIA2052303',
            'kodeMingguRPS' => '11',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '1',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Mahasiswa memahami fungsi dan proses bisnis beserta komponen bisnis. Mahasiswa mampu menjelaskan komponen-komponen bisnis :● Proses Operasi ● Proses Informasi Proses Manajamen',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIA2052303',
            'kodeMingguRPS' => '12',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '2',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Mahasiswa memahami fungsi dan proses bisnis beserta komponen bisnis. Mahasiswa mampu menjelaskan komponen-komponen bisnis :● Proses Operasi ● Proses Informasi Proses Manajamen',
        ]);

        Pengampu::create([
            'id_rps' => 'SIA2052303',
            'kodeMK' => 'SIA205',
            'nip' => '198206062007101001'
        ]);

        Pengampu::create([
            'id_rps' => 'SIA2052303',
            'kodeMK' => 'SIA205',
            'nip' => '198002172005012001'
        ]);

        User::create([
            'nip' => '197206021998022001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Nur Chamidah, S.Si., M.Si.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'nur-c@fst.unair.ac.id',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);

        //Statistika Inferensi
        RPS::create([
            'id_rps' => 'MAS2342303',
            'nip' => '197102111997021001',
            'kodeMK' => 'MAS234',
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2023,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disiapkan_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197102111997021001',
            'versi' => 1,
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (30%), UTS (30%), Tugas (20%), Quiz (15%), soft skills (5%)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS2342303',
            'kodeMingguRPS' => '21',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '1',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1.Alasan Penggunaan Sampling 2.Metode Sampling Acak & Non Acak 3.Distribusi Sampling dari Mean Sampel 4.Teorema Limit Sentral 5.Estimasi Titik & Interval Kepercayaan 6.Besar sampel 7.Estimasi Parameter rerata 8.Estimasi Parameter selisih 2 rerata',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS2342303',
            'kodeMingguRPS' => '22',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '2',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1.Estimasi Parameter Varians 2.Estimasi Parameter rasio 2 varians 3.Estimasi Parameter Proporsi 4.Estimasi Parameter selisih 2 proporsi',
        ]);

        Pengampu::create([
            'id_rps' => 'MAS2342303',
            'kodeMK' => 'MAS234',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAS2342303',
            'kodeMK' => 'MAS234',
            'nip' => '197206021998022001'
        ]);

        User::create([
            'nip' => '196609281991021001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Drs. Eto Wuryanto, DEA.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'eto-w@fst.unair.ac.id',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);

        //Statistika Deskriptif
        RPS::create([
            'id_rps' => 'MAS1182302',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAS118',
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2023,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disiapkan_oleh' => '196609281991021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '196609281991021001',
            'versi' => 1,
            'penanggungJawab' => '196609281991021001',
            'dosenPengampu' => '["196609281991021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (40%), UTS (40%), Tugas (20%)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS1182302',
            'kodeMingguRPS' => '31',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '1',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'a. Jenis data di Statistika b. skala pengukuran data : nominal, ordinal, interval dan rasio c. populasi dan sampel : parameter dan estimator d. Univariate, bivariate dan multivariate e. intro R : R sebagai functional programming, R Studio, perintah dasar R',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS1182302',
            'kodeMingguRPS' => '32',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '1',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "1x50'",
            'pengalaman_belajar' => 'Dapat melakukan intalasi R dan R studio dan melakukan operasi dasar di R',
            'bahan_kajian' => 'praktek operasi dasar di R : a. intalasi R dan R Studio b. gunakan R notebook untuk mencoba operasi dasar yang ada di R',
        ]);

        Pengampu::create([
            'id_rps' => 'MAS1182302',
            'kodeMK' => 'MAS118',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAS1182302',
            'kodeMK' => 'MAS118',
            'nip' => '197206021998022001'
        ]);

        User::create([
            'nip' => '196609051991022001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Inna Kuswandari,M.Si.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'inna-k@fst.unair.ac.id',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);

        //Matriks dan Transformasi Linier
        RPS::create([
            'id_rps' => 'MAL1032302',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAL103',
            'kodeRPS' => 'RPS001',
            'tahunAjaran' => 2023,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disiapkan_oleh' => '197102111997021001',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197102111997021001',
            'versi' => 1,
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","196609051991022001"]',
            'detail_penilaian' => 'NA = Tugas (20%), Kuis (15%), UTS (30%), UAS (30%), Soft Skill (5%)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAL1032302',
            'kodeMingguRPS' => '41',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '1',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Penjelasan Tentang Persamaan Linier, Aljabar Linier',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAL1032302',
            'kodeMingguRPS' => '42',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'mingguKe' => '2',
            'deleted_at' => null,
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => 'Dapat melakukan intalasi R dan R studio dan melakukan operasi dasar di R',
            'bahan_kajian' => 'Matriks 7. Operasi Matriks 8. Kesamaan 2 Matriks',
        ]);

        Pengampu::create([
            'id_rps' => 'MAL1032302',
            'kodeMK' => 'MAL103',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAL1032302',
            'kodeMK' => 'MAL103',
            'nip' => '196609051991022001'
        ]);

    }
}
