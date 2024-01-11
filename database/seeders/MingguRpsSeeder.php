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
// <<<<<<< HEAD
// <<<<<<< HEAD

        //etika profesi

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121060',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => '
            1. Mempelajari referensi dan diskusi untuk mendefinisikan pengertian etika
            2. Membedakan etika dan etiket,
            3. Membedakan etika dan moralitas,
            4. Menyebutkan pentingnya etika untuk bidang TI',
            'bahan_kajian' => '
            1. Pengantar Etika Profesi
            2. Etika dan etiket
            3. Etika dan moralitas
            4. Pentingnya Etika
            untuk segala Profesi',
        ]);
            
// =======
// =======
// >>>>>>> 6bca087ef18578b5180c8444a7243ef979fe5ebb
        //Pemograman mobile prak
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Studi kasus: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0181',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 00 Kontrak; Flutter 01 Pengenalan Flutter; Flutter 02 Dart Basic, Extends, Mixin; Flutter 03 Stateless & Stateful; Flutter 04 Widget Dasar; Flutter 05 Text Widget; Flutter 06 Visible & Invisible Widget',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521042',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0182',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 07 List view; Flutter 08 List Title; Flutter 09 Image Widget; Flutter 10 Extract Widget; Flutter 11 Penggunaan stateful; Flutter 12 Mapping list; Flutter 13 Date Format',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521043',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0183',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 14 AppBar Widget; Flutter 15 TabBar Widget; Flutter 16 Fitur Text Field; Flutter 17 Dekorasi Text; Flutter 18 Penggunaan Text Field; Flutter 19 Grid View; Flutter 20 Dialog;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521044',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0184',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 21 Dismissible; Flutter 22 Navigation; Flutter 23 Routes; Flutter 24 Drawer; Flutter 25 Switch; Flutter 26 Model;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521045',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0185',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 27 Thema; Flutter 28 Responsive vs adaptive; Flutter 29 Media Query; Flutter 30 Flexible dan Expanded; Flutter 31 Fitted Box; Flutter 32 Layout Builder; Flutter 33 Cupertino;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521046',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0186',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 34 Date Picker; Flutter 35 State Management Provider; Flutter 36 Nested Model + Provider; Flutter 37 Consumer + Provider;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521047',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0187',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 38 Multi Provider; Flutter 39 State Management Provider - Review; Flutter 40 HTTP Request / Rest Api; Flutter 41 HTTP Request Post Method;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521048',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0188',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 42 HTTP Request Get, Put, Patch Method; Flutter 43 HTTP Request Delete Method; Flutter 44 HTTP Request - Firebase Realtime Database; Flutter 45 HTTP Request Post Method - Firebase; Flutter 46 HTTP Request Delete Method - Firebase; Flutter 47 HTTP Request Update Method - Firebase;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS30521049',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0188',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 48 HTTP Request Get Method - Firebase; Flutter 49 HTTP Request Error Handling - Firebase; Flutter 50 Widget Lifecycle',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS305210410',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0189',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 51 Application Lifecycle Flutter 52 Future Builder Flutter 53 Key Flutter 54 CheckBox Flutter 55 DropDown',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS305210411',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0190',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 56 Authentication; Flutter 57 Authentication - Login & Register; Flutter 58 Authentication - Error Handling; Flutter 59 Authentication - Token Handling; Flutter 60 Authentication - User ID Handling',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS305210412',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0190',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 61 Authentication - Logout; Flutter 62 Authentication - Login Otomatis; Flutter 63 Authentication - Null Safety Handling; Flutter 64 Shared Preferences; Flutter 65 State Management Bloc',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS305210413',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0191',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 66 Bloc Provider; Flutter 67 Bloc vs Cubit; Flutter 68 Multi Bloc Provider; Flutter 69 Bloc Listener;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3052104',
            'kodeMingguRPS' => 'SIS305210414',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0192',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 70 Bloc Consumer; Flutter Equatable',
        ]);

        //Pemograman Mobile Teo
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Studi kasus: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0181',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 00 Kontrak; Flutter 01 Pengenalan Flutter; Flutter 02 Dart Basic, Extends, Mixin; Flutter 03 Stateless & Stateful; Flutter 04 Widget Dasar; Flutter 05 Text Widget; Flutter 06 Visible & Invisible Widget',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421042',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0182',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 07 List view; Flutter 08 List Title; Flutter 09 Image Widget; Flutter 10 Extract Widget; Flutter 11 Penggunaan stateful; Flutter 12 Mapping list; Flutter 13 Date Format',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421043',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0183',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 14 AppBar Widget; Flutter 15 TabBar Widget; Flutter 16 Fitur Text Field; Flutter 17 Dekorasi Text; Flutter 18 Penggunaan Text Field; Flutter 19 Grid View; Flutter 20 Dialog;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421044',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0184',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 21 Dismissible; Flutter 22 Navigation; Flutter 23 Routes; Flutter 24 Drawer; Flutter 25 Switch; Flutter 26 Model;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421045',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0185',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 27 Thema; Flutter 28 Responsive vs adaptive; Flutter 29 Media Query; Flutter 30 Flexible dan Expanded; Flutter 31 Fitted Box; Flutter 32 Layout Builder; Flutter 33 Cupertino;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421046',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0186',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 34 Date Picker; Flutter 35 State Management Provider; Flutter 36 Nested Model + Provider; Flutter 37 Consumer + Provider;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421047',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0187',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 38 Multi Provider; Flutter 39 State Management Provider - Review; Flutter 40 HTTP Request / Rest Api; Flutter 41 HTTP Request Post Method;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421048',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0188',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 42 HTTP Request Get, Put, Patch Method; Flutter 43 HTTP Request Delete Method; Flutter 44 HTTP Request - Firebase Realtime Database; Flutter 45 HTTP Request Post Method - Firebase; Flutter 46 HTTP Request Delete Method - Firebase; Flutter 47 HTTP Request Update Method - Firebase;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS30421049',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0188',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 48 HTTP Request Get Method - Firebase; Flutter 49 HTTP Request Error Handling - Firebase; Flutter 50 Widget Lifecycle',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS304210410',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0189',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 51 Application Lifecycle Flutter 52 Future Builder Flutter 53 Key Flutter 54 CheckBox Flutter 55 DropDown',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS304210411',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0190',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 56 Authentication; Flutter 57 Authentication - Login & Register; Flutter 58 Authentication - Error Handling; Flutter 59 Authentication - Token Handling; Flutter 60 Authentication - User ID Handling',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS304210412',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0190',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 61 Authentication - Logout; Flutter 62 Authentication - Login Otomatis; Flutter 63 Authentication - Null Safety Handling; Flutter 64 Shared Preferences; Flutter 65 State Management Bloc',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS304210413',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0191',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 66 Bloc Provider; Flutter 67 Bloc vs Cubit; Flutter 68 Multi Bloc Provider; Flutter 69 Bloc Listener;',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS3042104',
            'kodeMingguRPS' => 'SIS304210414',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Semester: 60%, Tugas: 40%',
            'kodeSubCPMK' => 'Sub-CPMK0192',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu mengimplementasikan materi yang telah diajarkan',
            'bahan_kajian' => 'Flutter 70 Bloc Consumer; Flutter Equatable',
        ]);

        //Pemograman Web Prak
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0123',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Konsep dasar web dan pemrograman web',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521042',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0124',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'HTML, XHTML',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521043',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0124',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'HTML, XHTML',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521044',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0125',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'CSS',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521045',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0125',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'CSS',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521046',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0126',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Javascript',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521047',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0126',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Javascript',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521048',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0127',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Dasar-dasar PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS20521049',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0127',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Dasar-dasar PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS205210410',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0128',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'OOP PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS205210411',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS205210412',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS205210413',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2052104',
            'kodeMingguRPS' => 'SIS205210414',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);

        //Pemograman web Teo
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0123',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Konsep dasar web dan pemrograman web',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421042',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0124',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'HTML, XHTML',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421043',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0124',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'HTML, XHTML',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421044',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0125',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'CSS',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421045',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0125',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'CSS',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421046',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0126',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Javascript',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421047',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0126',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Javascript',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421048',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0127',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Dasar-dasar PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS20421049',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0127',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Dasar-dasar PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS204210410',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0128',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'OOP PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS204210411',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS204210412',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS204210413',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2042104',
            'kodeMingguRPS' => 'SIS204210414',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => 'Proyek Web Sederhana: 100%',
            'kodeSubCPMK' => 'Sub-CPMK0129',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "100 menit",
            'pengalaman_belajar' => 'Mampu menerapkan materi yang telah diajarkan',
            'bahan_kajian' => 'Framework berbasis PHP',
        ]);

        //Agama Budha I
        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210101',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210102',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hakekat Tuhan YangMaha Esa, didalam kitab suci UDANA VIII: 3 dilukiskan sebagai berikut : Yang Mutlak dan tidak berkondisi
            dan tidak dilahirkan adalah Nibbana (orang yang telah mencapai kesucian) Arahat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210103',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hakekat Tuhan YangMaha Esa, didalam kitab suci UDANA VIII: 3 dilukiskan sebagai berikut : Yang Mutlak dan tidak berkondisi
            dan tidak dilahirkan adalah Nibbana (orang yang telah mencapai kesucian) Arahat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210104',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Lahirnya P. Sidarta selama enam tahun dan pencapain penerangan sempurna (menjadi) Buddha, pembabaran Dharma di Taman Isipatana terbentuknya',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210105',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Lahirnya P. Sidarta selama enam tahun dan pencapain penerangan sempurna (menjadi) Buddha, pembabaran Dharma di Taman Isipatana terbentuknya',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210106',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sebelum seseorang menjadi Buddha harus menajdi seorang Bodisatva, mempunyai sifat Metta Karuna dan Mudita dan lebih
            mementingkan orang lain daripada diri sensiri',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210107',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sebelum seseorang menjadi Buddha harus menajdi seorang Bodisatva, mempunyai sifat Metta Karuna dan Mudita dan lebih
            mementingkan orang lain daripada diri sensiri',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210108',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sebelum seseorang menjadi Buddha harus menajdi seorang Bodisatva, mempunyai sifat Metta Karuna dan Mudita dan lebih
            mementingkan orang lain daripada diri sensiri',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210109',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Humum ke-Sunyataan yang berlaku di 31 alam kehidupan, alam Arupa Loka, Rupa Loka dan Karma Loka',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Humum ke-Sunyataan yang berlaku di 31 alam kehidupan, alam Arupa Loka, Rupa Loka dan Karma Loka',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Humum ke-Sunyataan yang berlaku di 31 alam kehidupan, alam Arupa Loka, Rupa Loka dan Karma Loka',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum karma perbuatan yang dilakukan oleh mano Vacci dan karma dan didorong oleh cetana, tanpa cetana tidak akan ada satu karma. Karma
            adalah hasil dari perbuatan dan akan menerima, menerapkan serta melaksanakan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum karma perbuatan yang dilakukan oleh mano Vacci dan karma dan didorong oleh cetana, tanpa cetana tidak akan ada satu karma. Karma
            adalah hasil dari perbuatan dan akan menerima, menerapkan serta melaksanakan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGB1012101',
            'kodeMingguRPS' => 'AGB101210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum karma perbuatan yang dilakukan oleh mano Vacci dan karma dan didorong oleh cetana, tanpa cetana tidak akan ada satu karma. Karma
            adalah hasil dari perbuatan dan akan menerima, menerapkan serta melaksanakan',
        ]);

        // Agama Hindu I
        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210101',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan, Konsepsi Ketuhanan (Brahma Widya)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210102',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Catur Marga Yoga',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210103',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hakekat Manusia Hindu I',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210104',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hakekat Manusia Hindu II',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210105',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Etika dan Moralitas I',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210106',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Etika dan Moralitas II',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210107',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Ilmu Pengetahuan Teknologi Dalam Perspektif Hindu I, II',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210108',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kerukunan Hidup Umat Beragama',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210109',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Masyarakat Kerja Jagadhita',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Masyarakat Kerja Jagadhita',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kerukunan Antar Umat Budaya Sebagai Pengalaman Ajaran Hindu',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kerukunan Antar Umat Budaya Sebagai Pengalaman Ajaran Hindu',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Politik Menurut Perspektif Hindu, Hindu Dalam Kerangka Menegakkan Keadilan Umat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGH1012101',
            'kodeMingguRPS' => 'AGH101210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Politik Menurut Perspektif Hindu, Hindu Dalam Kerangka Menegakkan Keadilan Umat',
        ]);

        //Agama Konghucu
        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210101',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan, Pengetahuan, nilai-nilai dasar dan contoh-contoh penerapan agama Khonghucu',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210102',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan, Pengetahuan, nilai-nilai dasar dan contoh-contoh penerapan agama Khonghucu',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210103',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahamidan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan, Pengetahuan, nilai-nilai dasar dan contoh-contoh penerapan agama Khonghucu',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210104',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Mendorong menjadi seorang Junzi (insan berbudi luhur) yang mengharmoniskan hubungan antara Tian (Tuhan), Di (Alam Semesta), dan Ren
            (Manusia)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210105',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Mendorong menjadi seorang Junzi (insan berbudi luhur) yang mengharmoniskan hubungan antara Tian (Tuhan), Di (Alam Semesta), dan Ren
            (Manusia)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210106',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Mendorong menjadi seorang Junzi (insan berbudi luhur) yang mengharmoniskan hubungan antara Tian (Tuhan), Di (Alam Semesta), dan Ren
            (Manusia)',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210107',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Memuliakan Lima Hubungan Kemasyarakatan (WuLun), menerapkan prinsip ZhiRen Yong (Bijaksana, Cinta Kasih
            dan Berani) sebagai wujud nyata memuliakan Tian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210108',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Memuliakan Lima Hubungan Kemasyarakatan (WuLun), menerapkan prinsip ZhiRen Yong (Bijaksana, Cinta Kasih
            dan Berani) sebagai wujud nyata memuliakan Tian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210109',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Memuliakan Lima Hubungan Kemasyarakatan (WuLun), menerapkan prinsip ZhiRen Yong (Bijaksana, Cinta Kasih
            dan Berani) sebagai wujud nyata memuliakan Tian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Menjunjung leluhur. E). nilai-nilai Kebajikan hakiki dalam kehidupan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Menjunjung leluhur. E). nilai-nilai Kebajikan hakiki dalam kehidupan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Menjunjung leluhur. E). nilai-nilai Kebajikan hakiki dalam kehidupan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Menjunjung leluhur. E). nilai-nilai Kebajikan hakiki dalam kehidupan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGC1012101',
            'kodeMingguRPS' => 'AGC101210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '4',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Menjunjung leluhur. E). nilai-nilai Kebajikan hakiki dalam kehidupan',
        ]);

        //Agama Katolik I
        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210101',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak Perkuliahan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210102',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Tuhan Yang Maha Esa',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210103',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Manusia',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210104',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Etika Moral',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210105',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Etika Moral',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210106',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Dialog dan Kerukunan Umat Beragama',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210107',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'IPTEKS dan Iman Katolik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210108',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'IPTEKS dan Iman Katolik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210109',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Budaya dan Iman Katolik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Budaya dan Iman Katolik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Iman dan Sosial Politik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Iman dan Sosial Politik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum, HAM dan Demokrasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK101210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum, HAM dan Demokrasi',
        ]);

        //Agama Protestan I
        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210101',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210102',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Agama sebagai sumber nilai dan pedoman dalam pengembangan kepribadian Kristiani yang menjunjung tinggi
            harkat dan martabat manusia',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210103',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Agama sebagai sumber nilai dan pedoman dalam pengembangan kepribadian Kristiani yang menjunjung tinggi
            harkat dan martabat manusia',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210104',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Agama sebagai sumber nilai dan pedoman dalam pengembangan kepribadian Kristiani yang menjunjung tinggi
            harkat dan martabat manusia',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210105',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Kompetensi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210106',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Kompetensi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210107',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Substansi Kajian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210108',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Substansi Kajian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210109',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Substansi Kajian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Sub Kajian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Sub Kajian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi (KBK) ; Sub Kajian',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGP1012101',
            'kodeMingguRPS' => 'AGP101210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen Kurikulum Berbasis Kompetensi',
        ]);

        //Agama Islam I
        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210101',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210102',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep ke Tuhanan dalam Islam',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210103',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Keimanan, Ketakwaan dan Implementasinya dalam Kehidupan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210104',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hakikat Manusia Menurut Islam',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210105',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum, HAM dan Demokrasi dalam Islam',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210106',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Hukum Islam dan Kontribusi Umat Islam Indonesia',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210107',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Etika, Moral dan Akhlak',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210108',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'IIPTEK dalam Islam,',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210109',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Masyarakat Madani',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Masyarakat Madani',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kerukunan Antar Umat Beragama',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Ekonomi Islam dan Kesejahteraan Umat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kebudayaan dan Seni dalam Islam',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGI1012101',
            'kodeMingguRPS' => 'AGI101210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '1',
            'bobot_nilai' => '7',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sistem Politik Islam',
        ]);

        //Pancasila
        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK10121011',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 50",
            'pengalaman_belajar' => 'Mahasiswa melakukan dialog terhadap Masalah Kebangsaan',
            'bahan_kajian' => 'Ruang Lingkup, konsep, alasan, dan urgensi Pendidikan Pancasila',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK10121012',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => false,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mengikuti kuliah umum secara daring dan membuat review',
            'bahan_kajian' => 'Urgensi Karakter Bangsadan Daya Saing Bangsa',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK10121013',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mereview buku/modul, memahami dan mengemukakan pendapat proses penggalian Pancasila dijadikan sebagai ideologi, dasar, filsafat, etika, dan tujuan negara, mengidentifikasi dan menjelaskan diperlukannya
            Pancasila sebagai
            dasar negara,
            membangun
            argumen
            dinamika dan
            tantangan
            Pancasila sebagai
            dasar negara',
            'bahan_kajian' => 'Pancasila dalam Kajian Sejarah Bangsa Indonesia dan Pancasila sebagai Dasar Negara',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK10121014',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mereview buku/modul/jurnal tentang Pancasila, menjelaskan alasan, urgensi, konsep, tantangan dan dinamika Pancasila sebagai ideologi negara',
            'bahan_kajian' => 'Pancasila sebagai Ideologi Negara',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'AGK1012101',
            'kodeMingguRPS' => 'AGK10121015',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mereview buku/modul /jurnal Pancasila, menjelaskan konsep, alasan, urgensi, tantangan dan dinamika Pancasila sebagai sistem filsafat',
            'bahan_kajian' => 'Pancasila sebagai Sistem Filsafat',
        ]);

        //PSI
        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321011',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kegunaan, teknologi, manusia dan komponen sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321012',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Globalisasi dan peran sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321013',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen perangkat keras dalam infrastruktur sistem Informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321014',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Komponen perangkat lunak dalam infrastruktur sistem Informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321015',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Manajemen sumber data pada infrastruktur sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321016',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Telekomunikasi dan jaringan untuk mendukung infrastruktur sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321017',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Sistem bisnis elektronik pada sebuah arsitektur sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321018',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Bisnis di dalam perusahaan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII10321019',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Sistem perdagangan elektronik',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII103210110',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Business Intelligence untuk pengambilan keputusan dalam organisasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII103210111',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Strategi Bisnis/IT untuk pengembangan sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII103210112',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi solusi bisnis/IT pada sebuah arsitektur sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII103210113',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Tantangan keamanan dan etika dalam sistem informasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII1032101',
            'kodeMingguRPS' => 'SII103210114',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami, meyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => 'Teknologi informasi dalam perusahaan dan manajemen global',
        ]);

        //Alpro teo
        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121021',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pengantar Algoritma dan Pemrograman dan Flowchart',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121022',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Variabel dan Operator',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121023',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Conditional IF',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121024',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Looping FOR',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121025',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Looping While',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121026',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121027',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kuis 1',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121028',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT10121029',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Java dari Variabel, Conditional IF, Loop FOR',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT101210210',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Java dari Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT101210211',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Java dari Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT101210212',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Phyton dari Looping FOR dan WHILE',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT101210213',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Phyton dari Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1012102',
            'kodeMingguRPS' => 'MAT101210214',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kuis 2',
        ]);

        //Alpro prak
        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221021',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pengantar Algoritma dan Pemrograman dan Flowchart',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221022',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Variabel dan Operator',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221023',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Conditional IF',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221024',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Looping FOR',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221025',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Looping While',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221026',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221027',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221028',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT10221029',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Java dari Variabel, Conditional IF, Loop FOR',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT102210210',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Java dari Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT102210211',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Java dari Recursive Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT102210212',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Phyton dari Looping FOR dan WHILE',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT102210213',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Phyton dari Function',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAT1022102',
            'kodeMingguRPS' => 'MAT102210214',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '2',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Implementasi Phyton dari Function',
        ]);

        //Bing 1
        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121021',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121022',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Penjelasan tugas perkuliahan Bahasa Inggris, Penjelasan penilaian Bahasa Inggris',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121023',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Games, GeometricalShapes',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121024',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Games, GeometricalShapes',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121025',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Games, GeometricalShapes',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121026',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Job Application',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121027',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Job Application',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121028',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Position',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE11121029',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Quantity Expression',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE111210210',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Natural and Artificial Process',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE111210211',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Manual',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE111210212',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'American and British English',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE111210213',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'American and British English',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1112102',
            'kodeMingguRPS' => 'BAE111210214',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Speaking in Public',
        ]);

        //Fisdas
        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221021',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kontrak perkuliahan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221022',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Besaran dan Satuan dalam fisika',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221023',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Vektor',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221024',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kinematika dan Dinamika gerak benda',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221025',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kinematika dan Dinamika gerak benda',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221026',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Usaha dan Energi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221027',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sistem Partikel dan Momentum',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221028',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sistem Partikel dan Momentum',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221029',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Mekanika Fluida',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221010',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Kesetimbangan Statik Benda Tegar',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221011',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Rotasi, Gravitasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221012',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Osilasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'FID1122102',
            'kodeMingguRPS' => 'FID11221013',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Gelombang dan Bunyi',
        ]);

        // Minggu_RPS::create([
        //     'id_rps' => 'FID1122102',
        //     'kodeMingguRPS' => 'FID11221013',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "1 x 3 x 50",
        //     'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
        //     'bahan_kajian' => 'Temperatur dan Termodinamika',
        // ]);
        //Sistem Enterprise
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0211',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Pengenalan Mata Kuliah, Aturan dan Kontrak Perkuliahan; 2. Review Fungsi Bisnis dan Bisnis Proses; 3. Pengenalan Konsep Sistem Informasi Enterprise',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221042',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0212',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Evolusi Sistem Informasi; 2. Perkembangan software ERP; 3. Keuntungan dari ERP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221043',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0213',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Sistem Informasi Marketing; 2. Proses Penjualan',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221044',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0214',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Aktivitas Dasar CRM; 2. Software CRM; 3. Keuntungan CRM',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221045',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0215',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Pengantar Proses Produksi; 2. Proses Perencanaan Produksi',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221046',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0216',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Manajemen Rantai Pasok',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221047',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0217',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Aktivitas keuangan; 2. Analisis Keuntungan Produk',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221048',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0218',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Proses pengelolaan sumber daya manusia; 2. Pengelolaan sumber daya manusia dengan ERP',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS20221049',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0219',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Pemodelan Proses; 2. Diagram-diagram pemodelan; 3. Menganalisis dan membangun model proses bisnis berdasarkan kasus tertentu',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS202210410',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0220',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Business Process Improvement; 2. Business Process Redesign; 3. Business Process Re-Engeneering; 4. Menganalisis dan memperbaiki model proses bisnis berdasarkan kasus tertentu',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SIS2022104',
            'kodeMingguRPS' => 'SIS202210411',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0221',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Business intelligence; 2. Business analytics',
        ]);

        //APS Prak
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421041',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0222',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '✔ Analisis sistem: mengidentifikasi masalah yang dihadapi bisnis / organisasi, analisis situasi (lingkungan), dan mendefinisikan kebutuhan sistem yang akan dikembangkan sebagai solusi. ✔ Identify, understand, analyze, report ✔ System analyst, business analyst',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421042',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0222',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '✔ Analisis sistem: mengidentifikasi masalah yang dihadapi bisnis / organisasi, analisis situasi (lingkungan), dan mendefinisikan kebutuhan sistem yang akan dikembangkan sebagai solusi. ✔ Identify, understand, analyze, report ✔ System analyst, business analyst',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421043',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0223',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '✔ Case Tools: Microsoft Visio dan Power Designer ✔ Data Flow Diagram (DFD): Komponen, Diagram, Diagram Konteks',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421044',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0223',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '✔ Case Tools: Microsoft Visio dan Power Designer ✔ Data Flow Diagram (DFD): Komponen, Diagram, Diagram Konteks, DFD Level 1',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421045',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0223',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '✔ Case Tools: Microsoft Visio dan Power Designer ✔ Data Flow Diagram (DFD): Komponen, Diagram, Diagram Konteks, DFD Level 1, DFD Level 2, dan seterusnya',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421046',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0224',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan BPMN sebagai tool analisis proses bisnis. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm untuk menggambar BPMN.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421047',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0225',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan use case sebagai tool analisis kebutuhan sistem. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm, StarUML, Rational Rose untuk menggambar use case.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421048',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0225',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan use case sebagai tool analisis kebutuhan sistem. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm, StarUML, Rational Rose untuk menggambar use case.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII31421049',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0225',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan use case sebagai tool analisis kebutuhan sistem. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm, StarUML, Rational Rose untuk menggambar use case.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII314210410',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0226',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan use case dan diagram sequence analisis sebagai tool analisis kebutuhan sistem. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm, StarUML, Rational Rose untuk menggambar use case.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII314210411',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0227',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan conceptual data model sebagai tool desain data sistem. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm, StarUML, Rational Rose untuk merancang conceptual data model.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII314210412',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0227',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• Mengenalkan conceptual data model sebagai tool desain data sistem. • Mahasiswa dapat menggunakan perangkat lunak CASE, seperti Microsoft Visio, Enterprise Architecture, Visual Paradigm, StarUML, Rational Rose untuk merancang conceptual data model.',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII314210413',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0228',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '• User Interface (UI) • User Experience (UX) • Hicks Law • Fitts Law • Miller’s Law • Jakob’s Law • Usability dan Kriterianya',
        ]);
        Minggu_RPS::create([
            'id_rps' => 'SII3142104',
            'kodeMingguRPS' => 'SII314210414',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '-',
            'kodeSubCPMK' => 'Sub-CPMK0229',
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50’",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '-',
        ]);

        //Bahasa Inggris 2
        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221051',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Normal Sentences Pattern',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221052',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            
// <<<<<<< HEAD
// >>>>>>> 6bca087ef18578b5180c8444a7243ef979fe5ebb
// =======
// >>>>>>> 6bca087ef18578b5180c8444a7243ef979fe5ebb
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami dan menguraikan jenis-jenis kalimat dalam bahasa inggris',
            'bahan_kajian' => 'Type of Sentence',
        ]); 
// <<<<<<< HEAD
// <<<<<<< HEAD
            
        
        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121061',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '
            1. Profesi bidang Sistem dan Teknologi Informasi,
            2. Area Fungsi Teknologi Informasi dan Komunikasi pada Peta Okupasi Nasional dalam Kerangka Kualifikasi Nasional Indonesia (KKNI).',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121062',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '
            1. Profesi bidang Sistem dan Teknologi Informasi,
            2. Area Fungsi Teknologi Informasi dan Komunikasi pada Peta Okupasi Nasional dalam Kerangka Kualifikasi Nasional Indonesia (KKNI).',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121063',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '
            1. Asosiasi bidang Teknologi Informasi dan Komunikasi global dan Indonesia
            2. Sertifikasi bidang Teknologi Informasi dan Komunikasi',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '
            1. Etika di dunia maya (internet)
            2. Karakteristik dunia maya
            3. Studi kasus penerapan etika pada pemanfataan Internet
            4. Strategi dan kebijakan pemerintah di sejumlah negara terkait Internet sehat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121065',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '
            1. Jenis cybercrime,
            2. Modus-modus kejahatan di bidang IT
            3. Contoh-contoh kasus cybercrime di Indonesia
            4. Karakteristik dan trend cybercrime',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121066',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '
            1. Jenis cybercrime,
            2. Modus-modus kejahatan di bidang IT
            3. Contoh-contoh kasus cybercrime di Indonesia
            4. Karakteristik dan trend cybercrime',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121067',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan, dan Kemampuan menerapkan teori pada studi kasus yang sesuai',
            'bahan_kajian' => '
            1. UU Informasi dan Transaksi Elektronik
            2. Aturan hukum yang berhubungan dengan etika pemanfaatan TIK
            3. Undang-undang tentang Hak Kekayaan Intelektual
            4. Aturan hukum terkait perlindungan data pribadi, keamanan data',
        ]);


        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121068',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan, dan Kemampuan menerapkan teori pada studi kasus yang sesuai',
            'bahan_kajian' => '
            1. UU Informasi dan Transaksi Elektronik
            2. Aturan hukum yang berhubungan dengan etika pemanfaatan TIK
            3. Undang-undang tentang Hak Kekayaan Intelektual
            4. Aturan hukum terkait perlindungan data pribadi, keamanan data',
        ]);



        

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT30121069',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => ' Kemampuan untuk menjelaskan, meyimpulkan dan mengaitkan materi yang diajarkan, dan Kemampuan menerapkan teori pada studi kasus yang sesuai',
            'bahan_kajian' => '
            1. Jenis media sosial
            2. Pemanfaatan media sosial dalam bidang pendidikan, bisnis, kesehatan, dan pemerintahan
            3. Analisis studi kasus tentang pemanfaatan dan kontroversi di media sosial: info kesehatan publik, layanan pemerintah, analisis sentimen bisnis',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT301210610',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => 'Kemampuan analisis pada studi kasus yang sesuai Presentasi tugas final',
            'bahan_kajian' => '
            1. Definisi data analytics
            2. Studi kasus data analytics di Internet
            3. Etika pengumpuluan data masyarakat / user oleh bisnis dan pemerintah
            4. Perlindungan hukum tentang privasi
            
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT301210611',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => 'Kemampuan analisis pada studi kasus yang sesuai Presentasi tugas final',
            'bahan_kajian' => '
            Isu-isu etika pada penerapan Teknologi Infomasi dan Komunikasi yang tepat di bidang bisnis, kesehatan, dan pemerintahan
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT301210612',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => 'Kemampuan analisis pada studi kasus yang sesuai Presentasi tugas final',
            'bahan_kajian' => '
            Isu-isu etika pada penerapan Teknologi Infomasi dan Komunikasi yang tepat di bidang bisnis, kesehatan, dan pemerintahan
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'ETT3012106',
            'kodeMingguRPS' => 'ETT301210613',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x2x50'",
            'pengalaman_belajar' => 'Kemampuan analisis pada studi kasus yang sesuai Presentasi tugas final',
            'bahan_kajian' => '
            Isu-isu etika pada penerapan Teknologi Infomasi dan Komunikasi yang tepat di bidang bisnis, kesehatan, dan pemerintahan
            ',
        ]);


        //manajemen layanan ti
        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621060',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Memahami tugas perkuliahan 1 semester kedepan',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621061',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Merencanakan layanan IT dalam organisasi',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621062',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Mendesain proses bisnis layanan dalam organisasi',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621063',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Mengidentifikasikan value creation untuk layanan TI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Merancang operasional layanan TI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621065',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Mempresentasikan rancangan layanan TI dalam organisasi',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621066',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Mempresentasikan rancangan layanan TI dalam organisasi',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621067',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Memahami konsep MLTI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621068',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Memahami konsep MLTI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG20621069',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Memahami konsep MLTI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG206210610',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Memahami konsep MLTI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG206210611',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Memahami konsep MLTI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG206210612',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Mengetahui perkembangan riset terkini terkait MLTI',
            'bahan_kajian' => '-',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG2062106',
            'kodeMingguRPS' => 'MNG206210613',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3x50'",
            'pengalaman_belajar' => 'Mengetahui perkembangan riset terkini terkait MLTI',
            'bahan_kajian' => '-',
        ]);


        //adb

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep Data Perusahaan',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Presentasi Data',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data Warehouse',
        ]);


        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Customer analysis',
        ]);

       

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Revenue generation',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Revenue generation',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Human Resource and Staff Utilization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Product Management, Productivity Analysis, and Cost Management',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Product Management, Productivity Analysis, and Cost Management',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS32421079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Finance and Risk Management',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS324210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Supply Chain Management',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS324210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Sales Channel Analytics',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS324210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Behavior Analysis',
        ]);


        
        Minggu_RPS::create([
            'id_rps' => 'MAS3242107',
            'kodeMingguRPS' => 'MAS324210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Behavior Analysis',
        ]);

        //computer vision

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pendahuluan Pemrosesan Citra Digital
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Konsep Dasar Citra Digital
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Sampling and Reconstruction
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Enhancement in the Spatial Domain
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Enhancement in the Frequency Domain
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Restoration Models
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Edge Detection
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Feature Extraction
            ',
        ]);

        
        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Segmentation
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC40421079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Image Detection and Registration
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC404210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pemrosesan Citra Berwarna
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC404210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klasifikasi citra
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4042107',
            'kodeMingguRPS' => 'SIC404210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klasterisasi citra
            ',
        ]);

        //data mining
        
        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Pengenalan Data:
            a. Mining
            b. Definisi & Latar Belakang Data Mining
            c. Tahapan-tahapan Proses Data Mining
            
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data:
            a. Jenis & Kualitas Data
            b. Attributes & Objects
            c. Types of Data
            d. Data Quality
            e. Data Preprocessing
            
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Eksplorasi Data:
            a. Statistik
            Data & Visualisasi
            Data
            - Modus,
            Persentil,
            Frekuensi
            b. Analisis data
            multi dimensional
            & OLAP
            - Histigram
            - Blox Plot
            - Scater Plot
            - Matrix Plot
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Teknik pengukuran data
            - Feature Selection
            - Reduksi Dimensi
            - PCA
            - Normalisasi
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klasifikasi :
                a. Konsep dasar
                klasifikasi
                b. Decision Tree &
                Model Overfitting
                c. Evaluasi Kinerja
                pengklasifikasi
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klasifikasi :
                a. Metoda untuk
                membandingkan
                pengklasifikasi
                b. Algoritma Nearest
                neighbor, Bayesian
                ensemble methods
                c. Imbalance class
                problem
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klasifikasi :
                a. Metoda untuk
                membandingkan
                pengklasifikasi
                b. Algoritma SVM
                c. Visualisasi SVM
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klustering:
            a. Definisi dan konsep
            dasar clustering
            b. Algoritma K-Means
            & Hierarchical
            Clustering
            c. Algoritma FCM
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Klustering:
            a. Evaluasi Clustering
            b. Karakteristik data,
            cluster dan algoritma
            clustering
            c. Prototype based &
            Density based
            clustering
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC40221079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Analisis Asosiasi:
            a. Rule generation,
            compact
            representation of
            frequent itemset
            b. Menangani atribut
            kategoris dan atribut
            kontinu dalam
            analisis asosiasi
            c. Pola sequential,
            subgraph dan
            infrequent
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC402210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Analisis Asosiasi:
            a. Algoritma Assosiasi
            Rule
            b. Frequent itemset
            generation
            c. Teknik evaluasi
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC402210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Analisis Asosiasi:
            a. Algoritma FP-Tree
            b. FP Growth
            c. Teknik evaluasi
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC402210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'a. Information Retrivel
            b. Techniques for Text
            mining
            c. Techniques for Web
            usage mining
            d. Similarity
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIC4022107',
            'kodeMingguRPS' => 'SIC402210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Aplikasi dan Trend
            Data Mining :
            a. Penerapan data
            mining dalam bidang
            financial, retail
            industri,
            telekomunikasi,
            biologi, dan aplikasi
            sains
            b. Produk-produk
            sistem data mining
            dan prototype riset
            ',
        ]);

        //biomedik

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Definisi dan
            pengertian
            informatika
            biomedik
            2. Ruang lingkup
            informatika
            biomedik
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Definisi dan
            pengertian
            informatika
            biomedik
            2. Ruang lingkup
            informatika
            biomedik
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data numerik
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data signal
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data citra
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data citra
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data gen
            ',
        ]);


        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Data gen
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Analisis dan permodelan data biomedis melalui telaah artikel ilmiah pilihan.
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR30121079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => 'Analisis dan permodelan data biomedis melalui telaah artikel ilmiah pilihan.
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR301210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Proses
            pembentukan
            standar
            2. Kategorisasi
            standar dalam
            informatika
            biomedik
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR301210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Proses
            pembentukan
            standar
            2. Kategorisasi
            standar dalam
            informatika
            biomedik
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR301210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Ruang lingkup
            informatika
            pencitraan
            medik
            2. Karakteristik
            citra digital
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SIR3012107',
            'kodeMingguRPS' => 'SIR301210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk memahami dan meyimpulkan materi yang diajarkan',
            'bahan_kajian' => '1. Ruang lingkup
            informatika
            pencitraan
            medik
            2. Karakteristik
            citra digital
            ',
        ]);

        //manajemen risiko


        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Pendahuluan manajemen Risiko TI:
            1. Definisi Risiko IT
            2. Definisi Risiko dan manajemen TI
            3. Cakupan manajemen Risiko IT
            4. Prinsip-prinsip dasar manajemen Risiko IT
            5. Siklus aktivitas proses manajemen Risiko IT
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Penentuan konteks Risiko
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Penilaian Risiko (Risk Assessment)
            - Penilaian Risiko secara kuantitatif
            - Penilaian Risiko secara kualitatif
            
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Identifikasi Risiko
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Analisis Risiko
            ',
        ]);
        
        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Evaluasi Risiko
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Perlakuan Risiko (Risk
            Treatment)
            1. Mitigasi Risiko (risk
            mitigation)
            2. Transfer Risiko (risk
            transference)
            3. Penerimaan Risiko
            (risk acceptance)
            4. Menghindari Risiko
            (risk avoidance)
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Monitoring dan review Risiko
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Studi kasus penerapan metode tertentu (FMEA, OCTAVE, FAIR, NIST, dan sebagainya) untuk manajemen risiko TI
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG40221079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Studi kasus penerapan metode tertentu (FMEA, OCTAVE, FAIR, NIST, dan sebagainya) untuk manajemen risiko TI
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG402210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Pengembangan metode pengelolaan Risiko, untuk mengatasi permasalahan seperti ketidakpastian, dependensi antar risiko, dependensi antar aset
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG402210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Pengembangan metode pengelolaan Risiko, untuk mengatasi permasalahan seperti ketidakpastian, dependensi antar risiko, dependensi antar aset
            
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG4022107',
            'kodeMingguRPS' => 'MNG402210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Strategi pengelolaan Risiko
            ',
        ]);
        
        //pengujian perangkat lunak

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Membaca buku dan diskusi terkait isi materi buku.',
            'bahan_kajian' => 'Pendahuluan & Konsep Dasar Pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Membaca buku dan diskusi terkait isi materi buku.',
            'bahan_kajian' => 'Dasar Dasar Pengujian
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Membaca buku dan diskusi terkait isi materi buku.',
            'bahan_kajian' => 'Daur hidup
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Membaca buku dan diskusi terkait isi materi buku.',
            'bahan_kajian' => 'Teknik desain pengujian
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Pengujian Static
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Manajemen Pengujian
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Alat pendukung pengujian
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Implementasi Pengujian Sistem dan Kakas untuk pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Implementasi Pengujian Sistem dan Kakas untuk pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII40821079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Implementasi Pengujian Sistem dan Kakas untuk pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII408210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Implementasi Pengujian Sistem dan Kakas untuk pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII408210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Implementasi Pengujian Sistem dan Kakas untuk pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII408210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Perkembangan terkini terkait riset/praktik pengujian PL
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII4082107',
            'kodeMingguRPS' => 'SII408210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => '-',
            'bahan_kajian' => 'Perkembangan terkini terkait riset/praktik pengujian PL
            ',
        ]);

        // ehealth

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721070',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Kontrak kuliah
            2. Definisi desain interaksi
            3. Komponen desain interaksi
            4. Penerapan desain interaksi pada sistem informasi/aplikasi e-health
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721071',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Desain interaksi sosial
            2. Desain interaksi
            emotional
            3. Penerapan desain
            interaksi sosial pada
            sistem
            informasi/aplikasi e-
            health
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721072',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. user-centered design
            2. goal directed design
            3. design thinking approach
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721073',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Sistem e-health
            2. Komponen sistem e-
            health
            3. Jenis-jenis e-health
            4. Telemedicine
            5. Consumer health
            informatics
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721074',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Sistem e-health
            2. Komponen sistem e-
            health
            3. Jenis-jenis e-health
            4. Telemedicine
            5. Consumer health
            informatics
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721075',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Prinsip desain
            interaksi pada sistem
            e-health
            2. Proses bisnis sistem
            e-health
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721076',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Review analisis
            kebutuhan
            2. Analisis kebutuhan
            sistem e-health
            3. Analisis user persona
            untuk sistem e-health
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721077',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan dan Kemampuan menerapkan konsep pada studi kasus e-health yang sesuai',
            'bahan_kajian' => '1. Studi kasus
            penerapan desain
            interaksi pada sistem
            telemedicine
            2. Studi kasus
            penerapan desain
            interaksi pada sistem
            Consumer Health
            Informatics
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721078',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan dan Kemampuan menerapkan konsep pada studi kasus e-health yang sesuai',
            'bahan_kajian' => '1. Studi kasus
            penerapan desain
            interaksi pada sistem
            telemedicine
            2. Studi kasus
            penerapan desain
            interaksi pada sistem
            Consumer Health
            Informatics
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII31721079',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan',
            'bahan_kajian' => '1. Eleactronic Health
            Record
            2. Perlindungan data
            pasien
            3. Regulasi dan aturan
            yang mengatur data
            kesehatan
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII317210710',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan dan Kemampuan menerapkan konsep pada studi kasus e-health yang sesuai',
            'bahan_kajian' => '1. Konsep gamification
            2. Tinjauan desain
            interaksi untuk
            gamification
            3. Penerapan
            gamification pada
            sistem e-health
            ',
        ]);

        
        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII317210711',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan untuk menjelaskan, menyimpulkan, dan mengaitkan materi yang diajarkan dan Kemampuan menerapkan konsep pada studi kasus e-health yang sesuai',
            'bahan_kajian' => '1. Konsep gamification
            2. Tinjauan desain
            interaksi untuk
            gamification
            3. Penerapan
            gamification pada
            sistem e-health
            ',
        ]);

        
        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII317210712',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan menerapkan konsep pada studi kasus e-health yang sesuai',
            'bahan_kajian' => '1. Studi kasus
            permasalahan desain
            interaksi pada sistem
            e-health
            2. Desain interaksi pada
            sistem e-health
            dengan virtual reality
            ',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'SII3172107',
            'kodeMingguRPS' => 'SII317210713',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => null,
            'id_media' => null,
            'id_metode' => null,
            'bobot_nilai' => '-',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1x3x50'",
            'pengalaman_belajar' => 'Kemampuan menerapkan konsep pada studi kasus e-health yang sesuai',
            'bahan_kajian' => '1. Studi kasus
            permasalahan desain
            interaksi pada sistem
            e-health
            2. Desain interaksi pada
            sistem e-health
            dengan virtual reality
            ',
        ]);


// =======
// =======
// >>>>>>> 6bca087ef18578b5180c8444a7243ef979fe5ebb
           

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221053',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu menuliskan penempatan besar kecilnya huruf dengan benar',
            'bahan_kajian' => 'Capitalization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221054',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu menuliskan penempatan besar kecilnya huruf dengan benar',
            'bahan_kajian' => 'Capitalization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221055',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami jenis klausa pada bahasa inggris',
            'bahan_kajian' => 'Noun clause, time clause, place clause, manner clause, disttance and frequency clause, purpose clause, contrast clause, relative clause',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221056',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami jenis klausa pada bahasa inggris',
            'bahan_kajian' => 'Noun clause, time clause, place clause, manner clause, disttance and frequency clause, purpose clause, contrast clause, relative clause',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221057',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami kata ganti yang digunakan pada bahasa inggris',
            'bahan_kajian' => 'Relative pronoun as subject, relative pronoun as object, possessive relative clause',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221058',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami kata ganti yang digunakan pada bahasa inggris',
            'bahan_kajian' => 'Relative pronoun as subject, relative pronoun as object, possessive relative clause',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221059',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampumemahami penggunaan participle phrase pada bahasa inggris',
            'bahan_kajian' => 'Participle phrase',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210510',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampumemahami penggunaan participle phrase pada bahasa inggris',
            'bahan_kajian' => 'Participle phrase',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210511',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami pola yang digunakan untuk menulis esai dalam bahasa inggris',
            'bahan_kajian' => 'Pattern of essay organization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210512',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami pola yang digunakan untuk menulis esai dalam bahasa inggris',
            'bahan_kajian' => 'Pattern of essay organization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210513',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami dan menuliskan abstrak berdasarkan aturan dalam bahasa inggris',
            'bahan_kajian' => 'Abstract',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210514',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami dan menuliskan abstrak berdasarkan aturan dalam bahasa inggris',
            'bahan_kajian' => 'Abstract',
        ]);
        


        //Metodologi Penelitian
        
        // Minggu_RPS::create([
        //     'id_rps' => 'PNT4972106',
        //     'kodeMingguRPS' => 'PNT49721061',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "2 x 2 x 50",
        //     'pengalaman_belajar' => 'Mahasiswa mampu menjelaskan tentang konsep metodologi penelitian',
        //     'bahan_kajian' => 'kontrak kuliah metodologi penelitian dan pengantar metodologi penelitian',
        // ]);

        // Minggu_RPS::create([
        //     'id_rps' => 'PNT4972106',
        //     'kodeMingguRPS' => 'PNT49721062',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "2 x 2 x 50",
        //     'pengalaman_belajar' => 'Mahasiswa mampu menjelaskan tentang penelitian di bidang sistem informasi ',
        //     'bahan_kajian' => 'a. Topik Penelitian bidang rekayasa sistem informasi 
        //                         b. Topik penelitian bidang Business Intelligence',
        // ]);

        // Minggu_RPS::create([
        //     'id_rps' => 'PNT4972106',
        //     'kodeMingguRPS' => 'PNT49721063',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "2 x 2 x 50",
        //     'pengalaman_belajar' => 'Mahasiswa mampu menjelaskan tentang penelitian di bidang sistem informasi ',
        //     'bahan_kajian' => 'a. Topik Penelitian bidang rekayasa sistem informasi 
        //                         b. Topik penelitian bidang Business Intelligence',
        // ]);

        // Minggu_RPS::create([
        //     'id_rps' => 'PNT4972106',
        //     'kodeMingguRPS' => 'PNT49721064',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "2 x 2 x 50",
        //     'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
        //     'bahan_kajian' => 'a. jenis jenis jurnal 
        //                         b. pengutipan yang tepat',
        // ]);

         //MKB
        //  Minggu_RPS::create([
        //     'id_rps' => 'MAS2352106',
        //     'kodeMingguRPS' => 'MAS23521061',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "1 x 3 x 50",
        //     'pengalaman_belajar' => 'Mampu mengidentifikasi ruang lingkup metode kuantitatif bisnis',
        //     'bahan_kajian' => 'Pengantar Quantitative Method for Bisnis (QMB)',
        // ]);

        // Minggu_RPS::create([
        //     'id_rps' => 'MAS2352106',
        //     'kodeMingguRPS' => 'MAS23521062',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "1 x 3 x 50",
        //     'pengalaman_belajar' => 'Menghubungkan permasalah bisnis dengan persamaan matematis dan grafis',
        //     'bahan_kajian' => '1. Linear Programming: solusi grafis 2. Linear Programming: simplex maximasi 3. Linear Programming: simplex minimasi',
        // ]);
        // Minggu_RPS::create([
        //     'id_rps' => 'MAS2352106',
        //     'kodeMingguRPS' => 'MAS23521063',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "1 x 3 x 50",
        //     'pengalaman_belajar' => 'Menghubungkan permasalah bisnis dengan persamaan matematis dan grafis',
        //     'bahan_kajian' => '1. Linear Programming: solusi grafis 2. Linear Programming: simplex maximasi 3. Linear Programming: simplex minimasi',
        // ]);

        // Minggu_RPS::create([
        //     'id_rps' => 'MAS2352106',
        //     'kodeMingguRPS' => 'MAS23521064',
        //     'id_kriteria_penilaians' => '1',
        //     'kodePenilaian' => '0001',
        //     'id_bentuk' => '1',
        //     'id_media' => '5',
        //     'id_metode' => '3',
        //     'bobot_nilai' => '5',
        //     'kodeSubCPMK' => null,
        //     'luring' => true,
        //     'penugasan' => '-',
        //     'waktuPembelajaran' => "1 x 3 x 50",
        //     'pengalaman_belajar' => 'Menghubungkan permasalah bisnis dengan persamaan matematis dan grafis',
        //     'bahan_kajian' => '1. Linear Programming: solusi grafis 2. Linear Programming: simplex maximasi 3. Linear Programming: simplex minimasi',
        // ]);
        /*

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'PNT4972106',
            'kodeMingguRPS' => 'PNT49721064',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "2 x 2 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu mempraktikan pencarian dan pemilihan referensi yang tepat serta mengutip dengan benar ',
            'bahan_kajian' => 'a. jenis jenis jurnal 
                                b. pengutipan yang tepat',
        ]);

         */


        /*Minggu_RPS::create([
            'id_rps' => 'MNG3102106',
            'kodeMingguRPS' => 'MNG31021061',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3 x 50",
            'pengalaman_belajar' => 'Mampu menjelaskan definisi proyek, manajemen proyek dan peran Manajemen Proyek secara umum Mampu menjelaskan fitur-fitur pada software untuk manajemen proyek',
            'bahan_kajian' => 'Pengenalan manajemen proyek',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'MNG3102106',
            'kodeMingguRPS' => 'MNG31021062',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "3 x 50",
            'pengalaman_belajar' => 'Mampu menganalisis proses yang dibutuhkan dan hal-hal apa saja yang perlu diintegrasikan agar proyek dapat berjalan dengan baik dan lancar',
            'bahan_kajian' => 'Mengelola proyek secara terintegrasi dan berkelanjutan dari tahapan perencanaan hingga penyelesaian proyek (Project Integration Management)',
        ]);


        /*
        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE11221059',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampumemahami penggunaan participle phrase pada bahasa inggris',
            'bahan_kajian' => 'Participle phrase',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210510',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampumemahami penggunaan participle phrase pada bahasa inggris',
            'bahan_kajian' => 'Participle phrase',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210511',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami pola yang digunakan untuk menulis esai dalam bahasa inggris',
            'bahan_kajian' => 'Pattern of essay organization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210512',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami pola yang digunakan untuk menulis esai dalam bahasa inggris',
            'bahan_kajian' => 'Pattern of essay organization',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210513',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami dan menuliskan abstrak berdasarkan aturan dalam bahasa inggris',
            'bahan_kajian' => 'Abstract',
        ]);

        Minggu_RPS::create([
            'id_rps' => 'BAE1122105',
            'kodeMingguRPS' => 'BAE112210514',
            'id_kriteria_penilaians' => '1',
            'kodePenilaian' => '0001',
            'id_bentuk' => '1',
            'id_media' => '5',
            'id_metode' => '3',
            'bobot_nilai' => '5',
            'kodeSubCPMK' => null,
            'luring' => true,
            'penugasan' => '-',
            'waktuPembelajaran' => "1 x 3 x 50",
            'pengalaman_belajar' => 'Mahasiswa mampu memahami dan menuliskan abstrak berdasarkan aturan dalam bahasa inggris',
            'bahan_kajian' => 'Abstract',
        ]);
        */



        //047
        // 1. RPS Bahasa Indonesia 
        // 1. RPS Biologi Dasar
        // 1. RPS Data dan Pustaka
        // 1. RPS Kalkulus
        // 1. RPS Kewarganegaraan
        // 1. RPS Kimia Dasar
// <<<<<<< HEAD
// >>>>>>> 6bca087ef18578b5180c8444a7243ef979fe5ebb
// =======
// >>>>>>> 6bca087ef18578b5180c8444a7243ef979fe5ebb


    }
}
