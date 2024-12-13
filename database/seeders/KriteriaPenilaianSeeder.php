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
        // Pemahaman Materi Sistem Berbasis Pengetahuan
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Pemahaman Materi Sistem Berbasis Pengetahuan",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Pemahaman materi, kejelasan dalam memahami tugas, keaktifan dalam mengerjakan dan diskusi."
        ]);

        // Menjelaskan Fungsi dan Komponen Proses Bisnis
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Menjelaskan Fungsi dan Komponen Proses Bisnis",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menjelaskan fungsi proses bisnis dan menguraikan komponen-komponen bisnis."
        ]);

        // Proses Bisnis Umum dalam Organisasi
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Proses Bisnis Umum dalam Organisasi",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menjelaskan dan menguraikan tentang proses bisnis umum dalam organisasi, termasuk human resource, produksi, marketing, dan keuangan."
        ]);

        // Identifikasi Proses Bisnis Perusahaan
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Identifikasi Proses Bisnis Perusahaan",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan mengidentifikasi proses bisnis perusahaan seperti aplikasi bisnis, rencana bisnis, sistem yang ada, pernyataan misi, sifat bisnis, serta jaringan atau orang-orang dalam organisasi."
        ]);

        // Kemampuan Operasi Matriks Dasar
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kemampuan Operasi Matriks Dasar",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menghitung penjumlahan, pengurangan, perkalian, determinan, inverse matriks, dan menghitung eigen value serta eigen vector."
        ]);

        // Pemahaman Transformasi Linier
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Pemahaman Transformasi Linier",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan memahami pengertian transformasi linier, syarat transformasi linier, dan menyajikan transformasi linier."
        ]);

        // Sikap Curiosity dan Berpikir Kritis
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Sikap Curiosity dan Berpikir Kritis",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Menunjukkan sikap curiosity, disiplin, teliti, dan berpikir kritis dalam pembelajaran."
        ]);

        // Kemampuan Komunikasi dan Kolaborasi
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kemampuan Komunikasi dan Kolaborasi",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Mahasiswa mampu menjelaskan konsep komunikasi, proses komunikasi, kerjasama interdisipliner, dan aktif bertanya."
        ]);

        // Partisipasi dalam Evaluasi dan Diskusi
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Partisipasi dalam Evaluasi dan Diskusi",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Mahasiswa aktif bertanya, mampu memberikan pendapat, dan menghasilkan produk luaran project."
        ]);

        // Kreativitas dalam Penyelesaian Masalah
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kreativitas dalam Penyelesaian Masalah",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menghasilkan solusi kreatif dan inovatif terhadap masalah yang diberikan."
        ]);

        // Pengelolaan Waktu dan Tugas
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Pengelolaan Waktu dan Tugas",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan mengelola waktu dengan baik untuk menyelesaikan tugas secara tepat waktu dan efisien."
        ]);

        // Kemampuan Analisis Data
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kemampuan Analisis Data",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menganalisis data secara kuantitatif maupun kualitatif sesuai dengan kebutuhan tugas."
        ]);

        // Pemahaman Konsep Dasar Pemrograman
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Pemahaman Konsep Dasar Pemrograman",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Pemahaman terhadap konsep dasar pemrograman seperti variabel, logika, dan alur kontrol."
        ]);

        // Kolaborasi dalam Tim
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kolaborasi dalam Tim",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan bekerja sama dengan anggota tim untuk mencapai tujuan bersama."
        ]);

        // Kemampuan Menggunakan Teknologi Terkini
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kemampuan Menggunakan Teknologi Terkini",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menggunakan teknologi atau perangkat lunak terkini yang relevan dengan tugas yang diberikan."
        ]);

        // Pemahaman Dasar-dasar Jaringan Komputer
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Pemahaman Dasar-dasar Jaringan Komputer",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Pemahaman dasar tentang jaringan komputer, termasuk topologi, protokol, dan konsep konektivitas."
        ]);

        // Kesiapan Menghadapi Perubahan
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Kesiapan Menghadapi Perubahan",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan beradaptasi terhadap perubahan situasi dan kondisi selama proses pembelajaran."
        ]);

        // Penerapan Konsep Logika Matematika
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Penerapan Konsep Logika Matematika",
            "indikatorPenilaian" => "Hard Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan menerapkan konsep logika matematika dalam pemecahan masalah."
        ]);

        // Penguasaan Bahasa Inggris Teknis
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Penguasaan Bahasa Inggris Teknis",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan memahami dan menggunakan bahasa Inggris dalam konteks teknis dan profesional."
        ]);

        // Pemanfaatan Sumber Belajar Online
        Kriteria_Penilaian::create([
            "nama_kriteria_penilaians" => "Pemanfaatan Sumber Belajar Online",
            "indikatorPenilaian" => "Soft Skill",
            "deskripsi_kriteria_penilaians" => "Kemampuan memanfaatkan sumber belajar online seperti e-book, video tutorial, dan forum diskusi untuk mendukung pembelajaran."
        ]);
    }
}
