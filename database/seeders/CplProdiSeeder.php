<?php

namespace Database\Seeders;

use App\Models\CPL_Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CplProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cpls = [
            ['kodeCPL' => 'CPL-01', 'deskripsiCPL' => 'Menunjukkan sikap excellence with morality', 'referensiCPL' => '-'],
            ['kodeCPL' => 'CPL-02', 'deskripsiCPL' => 'Memiliki kemampuan untuk belajar seumur hidup (life-long learning)', 'referensiCPL' => '-'],
            ['kodeCPL' => 'CPL-03', 'deskripsiCPL' => 'Mampu menjelaskan, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.', 'referensiCPL' => 'IS2020 A3.1 - Foundations Competency Realm'],
            ['kodeCPL' => 'CPL-04', 'deskripsiCPL' => 'Mampu merancang dan menggunakan database, serta mengolah, menganalisa, dan memvisualisasi data dengan alat dan teknik pengolahan data', 'referensiCPL' => 'IS2020 A3.2.1 - Data/Information Management'],
            ['kodeCPL' => 'CPL-05', 'deskripsiCPL' => 'Mampu menjelaskan dan menggunakan berbagai metodologi pengembangan sistem beserta alat pemodelan sistem dan menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi', 'referensiCPL' => 'IS2020 A3.4.1 - System Analysis and Design, A3.4.2 Application Development and Programming'],
            ['kodeCPL' => 'CPL-06', 'deskripsiCPL' => 'Mampu menjelaskan dan menerapkan kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem', 'referensiCPL' => 'IS2020. A3.5.1 - IS Ethics, Sustainability, User and Implication'],
            ['kodeCPL' => 'CPL-07', 'deskripsiCPL' => 'Mampu merencanakan, menerapkan, memelihara dan meningkatkan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi yang strategis baik jangka pendek maupun jangka panjang.', 'referensiCPL' => 'IS2020 A3.5.2 - Competency Area – IS Management and Strategy,'],
            ['kodeCPL' => 'CPL-08', 'deskripsiCPL' => 'Mampu menjelaskan, mengidentifikasi dan menerapkan konsep, teknik dan metodologi manajemen proyek sistem informasi.', 'referensiCPL' => 'IS2020 A3.6.1 - IS Project Management'],
            ['kodeCPL' => 'CPL-09', 'deskripsiCPL' => 'Mampu menjelaskan konsep dan membuat perencanaan infrastruktur TI, arsitektur jaringan, layanan fisik dan cloud, menganalisa konsep identifikasi, otentikasi, otorisasi akses dalam konteks melindungi orang dan perangkat', 'referensiCPL' => 'IS2020 A3.3 - Technology Competency Realm'],
            ['kodeCPL' => 'CPL-10', 'deskripsiCPL' => 'Mampu menerapkan konsep kecerdasan bisnis untuk menyelesaikan permasalahan dalam organisasi', 'referensiCPL' => '-'],
            ['kodeCPL' => 'CPL-11', 'deskripsiCPL' => 'Mampu menjelaskan konsep matematika dan statistika yang digunakan dalam sistem informasi', 'referensiCPL' => '-'],
            ['kodeCPL' => 'CPL-12', 'deskripsiCPL' => 'Mampu mengidentifikasi peluang yang diciptakan oleh inovasi teknologi informasi menjadi nilai organisasi yang berkelanjutan melalui proses yang sistematis', 'referensiCPL' => '-'],
            ['kodeCPL' => 'CPL-13', 'deskripsiCPL' => 'Mampu menggunakan konsep logika dan algoritma untuk memecahkan permasalahan serta menerapkannya ke dalam beberapa bahasa pemrograman', 'referensiCPL' => '-'],
        ];

        foreach ($cpls as $item) {
            CPL_Prodi::create($item);
        }

        // CPL_Prodi::create([
        //     'kodeCPL' => 'CPL01',
        //     'deskripsiCPL' => 'Mampu memahami, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi',
        //     'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        // ]);

        // CPL_Prodi::create([
        //     'kodeCPL' => 'CPL02',
        //     'deskripsiCPL' => 'Menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi',
        //     'referensiCPL' => 'IS2020 A3.1 Foundations Competency Realm'
        // ]);
    }
}
