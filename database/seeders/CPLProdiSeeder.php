<?php

namespace Database\Seeders;

use App\Models\CPL_Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CPLProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cpls = [
            [
                "kodeCPL" => "LO-01",
                "deskripsiCPL" => "Menunjukkan sikap excellence with morality",
                "referensiCPL" => "-",
            ],
            [
                "kodeCPL" => "LO-02",
                "deskripsiCPL" =>
                    "Memiliki kemampuan untuk belajar seumur hidup (life-long learning)",
                "referensiCPL" => "-",
            ],
            [
                "kodeCPL" => "LO-03",
                "deskripsiCPL" =>
                    "Mampu menjelaskan, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.",
                "referensiCPL" => "IS2020 A3.1 - Foundations Competency Realm",
            ],
            [
                "kodeCPL" => "LO-04",
                "deskripsiCPL" =>
                    "Mampu merancang dan menggunakan database, serta mengolah, menganalisa, dan memvisualisasi data dengan alat dan teknik pengolahan data",
                "referensiCPL" => "IS2020 A3.2.1 - Data/Information Management",
            ],
            [
                "kodeCPL" => "LO-05",
                "deskripsiCPL" =>
                    "Mampu menjelaskan dan menggunakan berbagai metodologi pengembangan sistem beserta alat pemodelan sistem dan menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi",
                "referensiCPL" =>
                    "IS2020 A3.4.1 - System Analysis and Design, A3.4.2 Application Development and Programming",
            ],
            [
                "kodeCPL" => "LO-06",
                "deskripsiCPL" =>
                    "Mampu menjelaskan dan menerapkan kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem",
                "referensiCPL" =>
                    "IS2020. A3.5.1 - IS Ethics, Sustainability, User and Implication",
            ],
            [
                "kodeCPL" => "LO-07",
                "deskripsiCPL" =>
                    "Mampu merencanakan, menerapkan, memelihara dan meningkatkan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi yang strategis baik jangka pendek maupun jangka panjang.",
                "referensiCPL" =>
                    "IS2020 A3.5.2 - Competency Area – IS Management and Strategy,",
            ],
            [
                "kodeCPL" => "LO-08",
                "deskripsiCPL" =>
                    "Mampu menjelaskan, mengidentifikasi dan menerapkan konsep, teknik dan metodologi manajemen proyek sistem informasi.",
                "referensiCPL" => "IS2020 A3.6.1 - IS Project Management",
            ],
            [
                "kodeCPL" => "LO-09",
                "deskripsiCPL" =>
                    "Mampu menjelaskan konsep dan membuat perencanaan infrastruktur TI, arsitektur jaringan, layanan fisik dan cloud, menganalisa konsep identifikasi, otentikasi, otorisasi akses dalam konteks melindungi orang dan perangkat",
                "referensiCPL" => "IS2020 A3.3 - Technology Competency Realm",
            ],
            [
                "kodeCPL" => "LO-10",
                "deskripsiCPL" =>
                    "Mampu menerapkan konsep kecerdasan bisnis untuk menyelesaikan permasalahan dalam organisasi",
                "referensiCPL" => "-",
            ],
            [
                "kodeCPL" => "LO-11",
                "deskripsiCPL" =>
                    "Mampu menjelaskan konsep matematika dan statistika yang digunakan dalam sistem informasi",
                "referensiCPL" => "-",
            ],
            [
                "kodeCPL" => "LO-12",
                "deskripsiCPL" =>
                    "Mampu mengidentifikasi peluang yang diciptakan oleh inovasi teknologi informasi menjadi nilai organisasi yang berkelanjutan melalui proses yang sistematis",
                "referensiCPL" => "-",
            ],
            [
                "kodeCPL" => "LO-13",
                "deskripsiCPL" =>
                    "Mampu menggunakan konsep logika dan algoritma untuk memecahkan permasalahan serta menerapkannya ke dalam beberapa bahasa pemrograman",
                "referensiCPL" => "-",
            ],
            // ['kodeCPL' => 'LO-14', 'deskripsiCPL' => 'Menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara mandiri', 'referensiCPL' => '-'],
        ];

        foreach ($cpls as $item) {
            CPL_Prodi::create($item);
        }
    }
}
