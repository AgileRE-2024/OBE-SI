<?php

namespace Database\Seeders;

use App\Models\Minggu_RPS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MingguRpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FPB Praktikum
        Minggu_RPS::create([
            'id_rps' => 'SIA2052103',
            'kodeMingguRPS' => '11',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Mahasiswa memahami fungsi dan proses bisnis beserta komponen bisnis. Mahasiswa mampu menjelaskan komponen-komponen bisnis :● Proses Operasi ● Proses Informasi Proses Manajamen',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIA2052103',
            'kodeMingguRPS' => '12',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Mahasiswa memahami fungsi dan proses bisnis beserta komponen bisnis. Mahasiswa mampu menjelaskan komponen-komponen bisnis :● Proses Operasi ● Proses Informasi Proses Manajamen',
        ]);

        //Statistika Inferensi
        Minggu_RPS::create([
            'id_rps' => 'MAS2342103',
            'kodeMingguRPS' => '21',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1.Alasan Penggunaan Sampling 2.Metode Sampling Acak & Non Acak 3.Distribusi Sampling dari Mean Sampel 4.Teorema Limit Sentral 5.Estimasi Titik & Interval Kepercayaan 6.Besar sampel 7.Estimasi Parameter rerata 8.Estimasi Parameter selisih 2 rerata',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS2342103',
            'kodeMingguRPS' => '22',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1.Estimasi Parameter Varians 2.Estimasi Parameter rasio 2 varians 3.Estimasi Parameter Proporsi 4.Estimasi Parameter selisih 2 proporsi',
        ]);

        //Statistika Deskriptif
        Minggu_RPS::create([
            'id_rps' => 'MAS1182102',
            'kodeMingguRPS' => '31',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'a. Jenis data di Statistika b. skala pengukuran data : nominal, ordinal, interval dan rasio c. populasi dan sampel : parameter dan estimator d. Univariate, bivariate dan multivariate e. intro R : R sebagai functional programming, R Studio, perintah dasar R',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS1182102',
            'kodeMingguRPS' => '32',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "1x50'",
            'pengalaman_belajar' => 'Dapat melakukan intalasi R dan R studio dan melakukan operasi dasar di R',
            'bahan_kajian' => 'praktek operasi dasar di R : a. intalasi R dan R Studio b. gunakan R notebook untuk mencoba operasi dasar yang ada di R',
        ]);

        //Matriks dan Transformasi Linier
        Minggu_RPS::create([
            'id_rps' => 'MAL1032102',
            'kodeMingguRPS' => '41',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Penjelasan Tentang Persamaan Linier, Aljabar Linier',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAL1032102',
            'kodeMingguRPS' => '42',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => 'Dapat melakukan intalasi R dan R studio dan melakukan operasi dasar di R',
            'bahan_kajian' => 'Matriks 7. Operasi Matriks 8. Kesamaan 2 Matriks',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'kodeSubCPMK' => 'Sub-CPMK0111',
            'luring' => true,
            'penugasan' => '',
            'waktuPembelajaran' => "2x50'",
            'pengalaman_belajar' => 'Dapat melakukan intalasi R dan R studio dan melakukan operasi dasar di R',
            'bahan_kajian' => 'Matriks 7. Operasi Matriks 8. Kesamaan 2 Matriks',
        ]);

        //Sistem Berbasis Pengetahuan

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0151',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Pengenalan Sistem Berbasis Pengetahuan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0152',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Knowledge; Jaringan Semantik; Frame; Script; Logika dan Himpunan; Aturan Produksi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0153',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Definisi Inferensi; Penalaran Deduktif dan Silogisme; Kaidah dari Inferensi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0154',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep Dasar Sistem Pakar/SP; Definisi Sistem Pakar Berbasis Pengetahuan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0154',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep Dasar Sistem Pakar/SP; Definisi Sistem Pakar Berbasis Pengetahuan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0154',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep Dasar Sistem Pakar/SP; Definisi Sistem Pakar Berbasis Pengetahuan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0154',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep Dasar Sistem Pakar/SP; Definisi Sistem Pakar Berbasis Pengetahuan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0155',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Faktor ketidakpastian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0156',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Logika Fuzzy; Variabel Linguistik, Nilai Linguistik dan Istilah Linguistik; Fuzzy Set dan Fungsi Anggota; Model Sistem Pakar Fuzzy',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC40121079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0156',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Logika Fuzzy; Variabel Linguistik, Nilai Linguistik dan Istilah Linguistik; Fuzzy Set dan Fungsi Anggota; Model Sistem Pakar Fuzzy',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC401210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0156',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Logika Fuzzy; Variabel Linguistik, Nilai Linguistik dan Istilah Linguistik; Fuzzy Set dan Fungsi Anggota; Model Sistem Pakar Fuzzy',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC401210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0156',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Logika Fuzzy; Variabel Linguistik, Nilai Linguistik dan Istilah Linguistik; Fuzzy Set dan Fungsi Anggota; Model Sistem Pakar Fuzzy',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC401210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0157',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Pengenalan CBR; Tahapan CBR',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4012107',
            'kodeMingguRPS' => 'SIC401210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0157',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Pengenalan CBR; Tahapan CBR',
        ]);

        // Audit Sistem Informasi

        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0160',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pendahuluan Audit Sistem Informasi: Teknologi dan Audit; Batch and On-Line system; Fungsi Audit Sistem Informasi',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0161',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Resiko IS dan konsep dasar Audit: Resiko komputer dan paparannya; Efek dari resiko; Audit dan resiko; Bukti Audit; Kehandalan Bukti Audit; Prosedur Bukti Audit; Tanggung jawab untuk Deteksi dan Pencegahan Penipuan; Pembahasan topik literature review',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0162',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Standards and Guidelines for IS Auditing: IIA Standards; Code of Ethics; ISACA Standards; ISACA Code of Ethics; COSO: Internal Control Standards; Pembahasan topik literature review',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pembahasan tugas literature review',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0163',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep dasar kontrol Internal: Kontrol Internal; Tipe kontrol internal; Sistem kontrol internal; Elemet kontrol internal; Kontrol Prosedur',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0164',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Manajamen Resiko dari Fungsi Sistem Informasi: Resiko Natural; Audit secara umum; Elemen dari Analisis Resiko; Definisi Audit Universe; Ancaman di Sistem Komputer; Manajemen Resiko; Pembahasan topik literature review',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0165',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan materi yang diajarkan, dan menyusun dokumen rencana audit',
            'bahan_kajian' => 'Proses Perencanaan Audit: Tujuan dan konteks Audit plan; Struktur dari Rencana Audit; Penjadwalan Audit; Anggaran dan cakupan Audit; Tim Audit, Tugas dan Deadline; Penyusunan dokumen rencana audit berdasarkan kasus tertentu',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0166',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan materi yang diajarkan, dan menyusun dokumen audit',
            'bahan_kajian' => 'Proses Audit: Preliminary Review; Rekayasa Prosedur
            Audit; Kontrol Tes; Substantive Testing; Document Results; Tipe-tipe Audit Sistem Informasi; Penyusunan audit program atau kertas kerja audit berdasarkan kasus tertentu',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0167',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Tools dan Teknik yang digunakan saat Audit Sistem Informasia: Audit Productivity Tools; Teknik Dokumentasi Sistem; Penggunaan Flowchart; Ketepatan Penggunaan Teknik Flowchart; Penggunaan CAAT',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII40421079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0168',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan materi yang diajarkan, dan mengelola tim audit',
            'bahan_kajian' => 'Audit Management: Organisasi dari Function; Integrated IS Auditot vs Integrated IS Audit; Auditee sebagai bagian dari tim Audit; Specialist Auditor; Penjaminan Mutu; Audit Sistem Informasi; Mengelola tim audit dan melakukan pembagian kerja sesuai kasus ruang',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII404210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pembahasan dokumen rencana audit dan audit program',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII404210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0169',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan materi yang diajarkan, dan melakukan simulasi sebagai auditor TI',
            'bahan_kajian' => 'Audit Evidence Process: Prosedur Audit Evidence; Kriteria untuk sukses; Statistical Sampling; Judgmental [Or Non Statistical] sampling; Sampling Risk; Calculating Sample Size; Quantitative Methods; Melakukansimulasi audit menggunakan dokumen perangkat audit yang telah dibuat',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII404210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0170',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan mengaitkan materi yang diajarkan, dan menyusun laporan audit',
            'bahan_kajian' => 'Follow-up Laporan Audit: Audit Reporting; Interim Reporting; Closing ConferenceWritten Report; Executive Summary; Detailed Findings; Polishing the Report; Menyusun laporan audit berdasarkan proses audit yang telah dilakukan',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'SII4042107',
            'kodeMingguRPS' => 'SII404210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0171',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, dan meyimpulkan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Strategi dan Tata Kelola IT: Penyelarasan IT dengan proses bisnis; Fremawork Tata Kelola IT; Matriks Performa IT; Pembahasan topik literature review',
        ]);
    }
}
