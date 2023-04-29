<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProfilLulusan;
use App\Models\CPLProdi;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        ProfilLulusan::create([
            'kodePL' => 'PL01',
            'deskripsiPL' => 'Lulusan memiliki kemampuan menganalisis, merancang, membuat, dan mengevaluasi sistem informasi secara efektif dan komprehensif yang selaras dengan tujuan organisasi.'
        ]);
        ProfilLulusan::create([
            'kodePL' => 'PL02',
            'deskripsiPL' => 'Lulusan memiliki kemampuan memahami, menerapkan dan mengintegrasikan model sistem, menggunakan berbagai metode dan teknik kecerdasan bisnis untuk mengidentifikasi peluang dan optimalisasi bisnis organisasi.'
        ]);
        ProfilLulusan::create([
            'kodePL' => 'PL03',
            'deskripsiPL' => 'Lulusan memiliki kemampuan mengelola penerapan sistem informasi di dalam organisasi, serta mampu berkomunikasi secara efektif, baik lisan maupun tulisan.'
        ]);
        ProfilLulusan::create([
            'kodePL' => 'PL04',
            'deskripsiPL' => 'Lulusan memiliki kemampuan mengelola penerapan sistem informasi di dalam organisasi, serta mampu berkomunikasi secara efektif, baik lisan maupun tulisan.'
        ]);

        CPLProdi::create([
            'kodeCPL' => 'CPL01',
            'deskripsiCPL' => 'Menunjukkan sikap excellence with morality'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL02',
            'deskripsiCPL' => 'Memiliki kemampuan untuk belajar seumur hidup (life-long learning).'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL03',
            'deskripsiCPL' => 'Mampu menjelaskan, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL04',
            'deskripsiCPL' => 'Mampu merancang dan menggunakan database, serta mengolah, menganalisa, dan memvisualisasi data dengan alat dan teknik pengolahan data.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL05',
            'deskripsiCPL' => 'Mampu menjelaskan dan menggunakan berbagai metodologi pengembangan sistem beserta alat pemodelan sistem dan menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL06',
            'deskripsiCPL' => 'Mampu menjelaskan dan menerapkan kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL07',
            'deskripsiCPL' => 'Mampu merencanakan, menerapkan, memelihara dan meningkatkan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi yang strategis baik jangka pendek maupun jangka panjang.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL08',
            'deskripsiCPL' => 'Mampu menjelaskan, mengidentifikasi dan menerapkan konsep, teknik dan metodologi manajemen proyek sistem informasi.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL09',
            'deskripsiCPL' => 'Mampu menjelaskan konsep dan membuat perencanaan infrastruktur TI, arsitektur jaringan, layanan fisik dan cloud, menganalisa konsep identifikasi, otentikasi, otorisasi akses dalam konteks melindungi orang dan perangkat.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL10',
            'deskripsiCPL' => 'Mampu menerapkan konsep kecerdasan bisnis untuk menyelesaikan permasalahan dalam organisasi.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL11',
            'deskripsiCPL' => 'Mampu menjelaskan konsep matematika dan statistika yang digunakan dalam sistem informasi.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL12',
            'deskripsiCPL' => 'Mampu mengidentifikasi peluang yang diciptakan oleh inovasi teknologi informasi menjadi nilai organisasi yang berkelanjutan melalui proses yang sistematis.'
        ]);
        CPLProdi::create([
            'kodeCPL' => 'CPL13',
            'deskripsiCPL' => 'Mampu menggunakan konsep logika dan algoritma untuk memecahkan permasalahan serta menerapkannya ke dalam beberapa bahasa pemrograman.'
        ]);

    }
}
