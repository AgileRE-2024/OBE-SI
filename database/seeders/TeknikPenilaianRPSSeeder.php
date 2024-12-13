<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeknikPenilaianRPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('teknik_penilaian_rps')->insert([
            [
                'id_teknik_penilaian' => 1,
                'nama_teknik_penilaian' => 'Softskill',
                'deskripsi_teknik_penilaian' => 'Penilaian berdasarkan softskill mahasiswa'
            ],
            [
                'id_teknik_penilaian' => 2,
                'nama_teknik_penilaian' => 'Tugas',
                'deskripsi_teknik_penilaian' => 'Penilaian berdasarkan tugas yang diberikan'
            ],
            [
                'id_teknik_penilaian' => 3,
                'nama_teknik_penilaian' => 'Quiz',
                'deskripsi_teknik_penilaian' => 'Penilaian berdasarkan quiz yang diberikan'
            ],
            [
                'id_teknik_penilaian' => 4,
                'nama_teknik_penilaian' => 'UTS',
                'deskripsi_teknik_penilaian' => 'Penilaian berdasarkan Ujian Tengah Semester'
            ],
            [
                'id_teknik_penilaian' => 5,
                'nama_teknik_penilaian' => 'UAS',
                'deskripsi_teknik_penilaian' => 'Penilaian berdasarkan Ujian Akhir Semester'
            ],
        ]);
    }
}
