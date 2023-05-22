<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CplDikti;
use App\Models\CplProdi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S01',
            'deskripsi' => 'Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S02',
            'deskripsi' => 'Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S03',
            'deskripsi' => 'Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S04',
            'deskripsi' => 'Berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S05',
            'deskripsi' => 'Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S06',
            'deskripsi' => 'Bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S07',
            'deskripsi' => 'Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S08',
            'deskripsi' => 'Menginternalisasi nilai, norma, dan etika akademik.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S09',
            'deskripsi' => 'Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-S10',
            'deskripsi' => 'Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.',
            'kategori' => 'Sikap',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-KU01',
            'deskripsi' => 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya.',
            'kategori' => 'Keterampilan Umum',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-KU02',
            'deskripsi' => 'Mampu menunjukkan kinerja mandiri, bermutu, dan terukur.',
            'kategori' => 'Keterampilan Umum',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-KU03',
            'deskripsi' => 'Mampu mengkaji implikasi',
            'kategori' => 'Keterampilan Umum',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-KU04',
            'deskripsi' => 'Menyusun deskripsi saintifik hasil kajian tersebut di atas dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi.',
            'kategori' => 'Keterampilan Umum',
        ]);
        CplDikti::create([
            'kode_cpldikti' => 'CPL-KU05',
            'deskripsi' => 'Mampu mengambil keputusan secara tepat dalam konteks penyelesaian masalah di bidang keahliannya, berdasarkan hasil analisis informasi dan data.',
            'kategori' => 'Keterampilan Umum',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-01',
            'deskripsi' => 'Menunjukkan sikap excellence with morality',
            'referensi' => 'CPL-S01',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-02',
            'deskripsi' => 'Memiliki kemampuan untuk belajar seumur hidup (life-long learning)',
            'referensi' => 'CPL-KU01',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-03',
            'deskripsi' => 'Mampu menjelaskan, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.',
            'referensi' => 'CPL-KK01',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-04',
            'deskripsi' => 'Mampu merancang dan menggunakan database, serta mengolah, menganalisa, dan memvisualisasi data dengan alat dan teknik pengolahan data',
            'referensi' => 'CPL-KK02',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-05',
            'deskripsi' => 'Mampu menjelaskan dan menggunakan berbagai metodologi pengembangan sistem beserta alat pemodelan sistem dan menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi',
            'referensi' => 'CPL-KK03',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-06',
            'deskripsi' => 'Mampu menjelaskan dan menerapkan kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem',
            'referensi' => 'CPL-KK04',
        ]);
        CplProdi::create([
            'kode_cplprodi' => 'CPL-07',
            'deskripsi' => 'Mampu merencanakan, menerapkan, memelihara dan meningkatkan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi yang strategis baik jangka pendek maupun jangka panjang.',
            'referensi' => 'CPL-KK05',
        ]);
    }
}
