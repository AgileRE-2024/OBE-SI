<?php

namespace Database\Seeders;

use App\Models\Kriteria_Penilaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sistem Berbasis Pengetahuan
        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "1",
            "nama_kriteria_penilaians" => "Kriteria SBP",
            "indikatorPenilaian" => "Indikator SBP",
            "deskripsi_kriteria_penilaians" =>
                "Pemahaman materi, kejelasan dalam memahami tugas, keaktifan dalam mengerjakan dan diskusi",
        ]);

        //FPB Praktikum
        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "2",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan : 1. Menjelaskan fungsi proses bisnis Menguraikan komponen-komponen bisnis",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "3",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan : Menjelaskan dan menguraikan tentang proses bisnis umum dalam organisasi mengenai human resource, produksi, marketing, dan keuangan",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "4",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan : Mengidentifikasi proses bisnis perusahaan a. Aplikasi bisnis b. Rencana bisnis c. Sistem yang ada d. Pernyataan misi e. Sifat bisnis f. Jaringan atau orang-orang dalam organisasi",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "5",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan menghitung penjumlahan , pengurangan, perkalian dan kesamaan dua matriks",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "6",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan menghitung determinan menggunakan sifat-sifat matrix",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "7",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan menghitung Determinan pada ordo 3x3",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "8",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan mengolah data dari inverse matriks",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "9",
            "deskripsi_kriteria_penilaians" =>
                "Menggunakan ekspansi laplace utk ordo nxn",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "10",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan mahasiswa menyelesaikan matriks menghitung baris elementer",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "11",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan mahasiswa menghitung, SPL",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "12",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan menghitung Eigen Value dan Eigen Vektor",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "13",
            "deskripsi_kriteria_penilaians" =>
                "Kemampuan memahami pengertian transformasi linier, syarat transformasi linier, dan menyajikan transformasi liner",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "14",
            "deskripsi_kriteria_penilaians" =>
                "1. Menunjukkan sikap curiousity, disiplin, teliti dan berpikir kritis dalam pembelajaran.",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "15",
            "deskripsi_kriteria_penilaians" =>
                "Kriteria penilaian Tes MC, menjawab evaluasi secara langsung 1. Mahasiswa aktif bertanya. 2. Mahasiswa mampu memberikan pendapat.",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "16",
            "deskripsi_kriteria_penilaians" =>
                "1. Mahasiswa mampu menjelaskan konsep komunikasi 2. Proses komunikasi dan kerjasama interdisipliner 3. Mahasiswa aktif bertanya.",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "17",
            "deskripsi_kriteria_penilaians" =>
                "Kriteria penilaian Tes MC 1. Mahasiswa aktif bertanya. 2. Mahasiswa mampu memberikan pendapat.",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "18",
            "deskripsi_kriteria_penilaians" =>
                "Kriteria penilaian Tes MC dan Quiz 1. Mahasiswa aktif bertanya. 2. Mahasiswa mampu memberikan pendapat.",
        ]);

        Kriteria_Penilaian::create([
            "id_kriteria_penilaians" => "19",
            "deskripsi_kriteria_penilaians" =>
                "Kriteria penilaian Tes MC, output project 1. Mahasiswa aktif bertanya. 2. Mahasiswa mampu memberikan pendapat. 3. Produk luaran project",
        ]);
    }
}
