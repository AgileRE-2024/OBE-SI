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
    }
}
