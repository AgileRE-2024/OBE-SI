<?php

namespace Database\Seeders;

use App\Models\Mata_Kuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            ['AGI101', 'Agama I (Islam)', 2, 1, 1, 2, null, null, '-'],
            ['AGP101', 'Agama I (Protestan)', 2, 1, 1, 2, null, null, '-'],
            ['AGK101', 'Agama I (Katolik)', 2, 1, 1, 2, null, null, '-'],
            ['AGH101', 'Agama I (Hindu)', 2, 1, 1, 2, null, null, '-'],
            ['AGB101', 'Agama I (Budha)', 2, 1, 1, 2, null, null, '-'],
            ['AGC101', 'Agama I (Kong Hu Chu)', 2, 1, 1, 2, null, null, '-'],
            ['NOP103', 'Pancasila', 2, 1, 1, 2, null, null, '-'],
            ['NOP101', 'Kewarganegaraan', 2, 1, 1, 2, null, null, '-'],
            ['KID107', 'Kimia Dasar', 2, 1, 1, 1, null, null, '-'],
            ['BID108', 'Biologi Dasar', 2, 1, 1, 1, null, null, '-'],
            ['MAA101', 'Kalkulus', 3, 1, 1, 1, null, null, '-'],
            ['BAI101', 'Bahasa Indonesia', 2, 1, 1, 2, null, null, '-'],
            ['SIP107', 'Data dan Pustaka', 2, 1, 1, 1, null, null, '-'],
            ['SII103', 'Pengantar Sistem Informasi', 2, 1, 1, 1, null, null, '-'],
            ['FID112', 'Fisika Dasar', 2, 2, 1, 1, null, null, '-'],
            ['PHP103', 'Logika dan Pemikiran Kritis', 2, 2, 1, 1, null, null, '-'],
            ['MAL102', 'Matriks & Transformasi Linier', 2, 2, 1, 1, null, null, '-'],
            ['MAT101', 'Algoritma dan Pemrograman', 3, 2, 1, 1, null, null, '-'],
            ['MAT102', 'Algoritma dan Pemrograman (Praktikum)', 2, 2, 2, 1, null, null, '-'],
            ['MNM107', 'Pengantar Kolaborasi Keilmuan', 2, 2, 1, 1, null, null, '-'],
            ['MNM106', 'Komunikasi dan Pengembangan Diri', 2, 2, 1, 1, null, null, '-'],
            ['MAS118', 'Statistika Deskriptif', 3, 2, 1, 1, null, null, '-'],
            ['BAE111', 'Bahasa Inggris I', 2, 2, 1, 2, null, null, '-'],
            ['SIA204', 'Fungsi dan Proses Bisnis', 2, 3, 1, 1, 'SII103', null, '-'],
            ['SIA205', 'Fungsi dan Proses Bisnis (Praktikum)', 2, 3, 2, 1, 'SII103', null, '-'],
            ['SID201', 'Basis Data', 3, 3, 1, 1, null, null, '-'],
            ['SID203', 'Basis Data (Praktikum)', 2, 3, 2, 1, null, null, '-'],
            ['SIR201', 'Pemrograman Berorientasi Objek', 2, 3, 1, 1, 'MAT101', null, '-'],
            ['SIR203', 'Pemrograman Berorientasi Objek (Praktikum)', 1, 3, 2, 1, 'MAT101', null, '-'],
            ['MAS234', 'Statistika Inferensi', 3, 3, 1, 1, 'MAS118', null, '-'],
            ['SIJ201', 'Sistem Operasi', 2, 3, 1, 1, null, null, '-'],
            ['SIJ203', 'Sistem Operasi (Praktikum)', 1, 3, 2, 1, null, null, '-'],
            ['MAL204', 'Matematika Diskrit', 2, 3, 1, 1, null, null, '-'],
            ['SII301', 'Analisis dan Perancangan Sistem', 2, 4, 1, 1, 'MAT101', null, '-'],
            ['SII314', 'Analisis dan Perancangan Sistem (Praktikum)', 1, 4, 2, 1, 'MAT101', null, '-'],
            ['SIC201', 'Pembelajaran Mesin', 2, 4, 1, 1, 'MAL102', 'Mata Kuliah MAS234', '-'],
            ['SIC202', 'Pembelajaran Mesin (praktikum)', 1, 4, 2, 1, 'MAL102', 'Mata Kuliah MAS234', '-'],
            ['SIJ202', 'Jaringan Komputer', 3, 4, 1, 1, 'SIJ201', null, '-'],
            ['SIJ204', 'Jaringan Komputer(Praktikum)', 1, 4, 2, 1, 'SIJ201', null, '-'],
            ['SIS202', 'Sistem Enterprise', 2, 4, 1, 1, 'SIA204', null, '-'],
            ['MNM203', 'Kepemimpinan dan Manajemen Organisasi', 3, 4, 1, 1, null, null, '-'],
            ['SIS204', 'Pemrograman Web', 2, 4, 1, 1, 'MAT101', null, '-'],
            ['SIS205', 'Pemrograman Web (Praktikum)', 1, 4, 2, 1, 'MAT101', null, '-'],
            ['SIS304', 'Pemrograman Mobile', 2, 4, 1, 1, 'SIR201', null, '-'],
            ['SIS305', 'Pemrograman Mobile (Praktikum)', 2, 4, 2, 1, 'SIR201', null, '-'],
            ['SII213', 'Inovasi Sistem Informasi dan Teknologi', 2, 5, 1, 1, 'SIS202', null, '-'],
            ['BAE112', 'Bahasa Inggris II', 2, 5, 1, 2, 'BAE111', null, '-'],
            ['SIS309', 'Keamanan Sistem Informasi', 3, 5, 1, 0, 'SIJ202', null, '-'],
            ['MNW401', 'Kewirausahaan dan Bisnis Sistem Informasi', 2, 5, 1, 1, null, null, '-'],
            ['SII208', 'Desain Interaksi', 2, 5, 1, 1, 'SII301', null, '-'],
            ['SII209', 'Desain Interaksi (Praktikum)', 1, 5, 2, 1, 'SII301', null, '-'],
            ['SII318', 'Pembangunan Perangkat Lunak', 2, 5, 1, 1, 'SII301', null, '-'],
            ['SII319', 'Pembangunan Perangkat Lunak (Praktikum)', 1, 5, 2, 1, 'SII301', null, '-'],
            ['SID303', 'Analisis dan Visualisasi Data', 2, 5, 1, 1, 'SIC201', null, '-'],
            ['SID304', 'Analisis dan Visualisasi Data (Praktikum)', 1, 5, 2, 1, 'SIC201', null, '-'],
            ['SIA301', 'Perencanaan Arsitektur Perusahaan', 2, 5, 1, 1, 'SII301', null, '-'],
            ['SIA302', 'Perencanaan Arsitektur Perusahaan (Praktikum)', 1, 5, 2, 1, 'SII301', null, '-'],
            ['KNT401', 'Kuliah Kerja Nyata - Belajar Bersama Masyarakat', 3, 6, 3, 1, null, 'Sudah Lulus 95 SKS', '-'],
            ['ETT301', 'Etika Profesi', 2, 6, 1, 1, null, null, '-'],
            ['SII323', 'Tata Kelola Teknologi Informasi', 3, 6, 1, 1, 'SIA204', null, '-'],
            ['PNT497', 'Metodologi Penelitian', 2, 6, 1, 1, 'BAI101', null, '-'],
            ['KLT301', 'Praktek Kerja Lapangan', 6, 6, 3, 1, null, 'Sudah Lulus 100 SKS', '-'],
            ['MNG206', 'Manajemen Layanan Teknologi Informasi', 3, 6, 1, 0, null, null, '-'],
            ['MAS235', 'Metode Kuantitatif Bisnis', 3, 6, 1, 0, null, null, '-'],
            ['SII214', 'Teori Sistem Informasi', 3, 6, 1, 0, null, null, '-'],
            ['SII322', 'Temu Kembali Informasi', 3, 6, 1, 0, null, null, '-'],
            ['SIS308', 'Pembangunan Aplikasi Enterprise', 3, 6, 1, 0, null, null, '-'],
            ['MNG310', 'Manajemen Proyek Teknologi Informasi', 3, 6, 1, 0, null, null, '-'],
            ['SIC401', 'Sistem Berbasis Pengetahuan', 3, 7, 1, 0, null, null, '-'],
            ['SIC402', 'Data Mining', 3, 7, 1, 0, null, null, '-'],
            ['SIR301', 'Informatika Biomedik', 3, 7, 1, 0, null, null, '-'],
            ['MAS324', 'Analisis Data Bisnis', 3, 7, 1, 0, null, null, '-'],
            ['SII404', 'Audit Sistem Informasi', 3, 7, 1, 0, null, null, '-'],
            ['SIC404', 'Computer Vision', 3, 7, 1, 0, null, null, '-'],
            ['SII408', 'Pengujian Perangkat Lunak', 3, 7, 1, 0, null, null, '-'],
            ['MNG402', 'Manajemen Resiko Teknologi Informasi', 3, 7, 1, 0, null, null, '-'],
            ['SII317', 'Perancangan Sistem Interaksi E-Health', 3, 7, 1, 0, null, null, '-'],
            ['PNT499', 'Skripsi', 6, 8, 1, 1, 'PNT497', 'Sudah/sedang mengambil 12 sks mata kuliah pilihan bidang minat', '-'],
        ];


        foreach ($matkul as $m) {
            Mata_Kuliah::insert([
                'kodeMK' => $m[0],
                'namaMK' => $m[1],
                'sks' => $m[2],
                'semester' => $m[3],
                'jenisMK' => $m[4],
                'kategoriMK' => $m[5],
                'mat_kodeMK' => $m[6],
                'prasyaratTambahan' => $m[7],
                'deskripsiMK' => $m[8],
            ]);
        }
    }
}
