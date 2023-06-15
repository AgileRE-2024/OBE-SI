<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CPL_SN_Dikti;

class CplDiktiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cpl = [
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S01', 'deskripsiSN' => 'Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S02', 'deskripsiSN' => 'Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S03', 'deskripsiSN' => 'Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S04', 'deskripsiSN' => 'Berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S05', 'deskripsiSN' => 'Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S06', 'deskripsiSN' => 'Bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S07', 'deskripsiSN' => 'Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S08', 'deskripsiSN' => 'Menginternalisasi nilai, norma, dan etika akademik.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S09', 'deskripsiSN' => 'Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Sikap', 'kodeCPLSN' => 'CPL-S10', 'deskripsiSN' => 'Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU01', 'deskripsiSN' => 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU02', 'deskripsiSN' => 'Mampu menunjukkan kinerja mandiri, bermutu, dan terukur.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU03', 'deskripsiSN' => 'Mampu mengkaji implikasi pengembangan atau implementasi ilmu pengetahuan teknologi yang memperhatikan dan menerapkan nilai humaniora sesuai dengan keahliannya berdasarkan kaidah, tata cara dan etika ilmiah dalam rangka menghasilkan solusi, gagasan, desain atau kritik seni, menyusun deskripsi saintifik hasil kajiannya dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU04', 'deskripsiSN' => 'Menyusun deskripsi saintifik hasil kajian tersebut di atas dalam bentuk skripsi atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU05', 'deskripsiSN' => 'Mampu mengambil keputusan secara tepat dalam konteks penyelesaian masalah di bidang keahliannya, berdasarkan hasil analisis informasi dan data.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU06', 'deskripsiSN' => 'Mampu memelihara dan mengembangkan jaringan kerja dengan pembimbing, kolega, sejawat baik di dalam maupun di luar lembaganya.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU07', 'deskripsiSN' => 'Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU08', 'deskripsiSN' => 'Mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggung jawabnya, dan mampu mengelola pembelajaran secara mandiri.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU09', 'deskripsiSN' => 'Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Umum', 'kodeCPLSN' => 'CPL-KU10', 'deskripsiSN' => 'Berkomunikasi secara efektif dalam berbagai konteks profesional.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK01', 'deskripsiSN' => 'Mampu memahami, menganalisis, dan menilaikonsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK02', 'deskripsiSN' => 'Mampu membangun, mengelola, menggunakan dan mengamankan database dengan alat dan teknik dalam sistem basis data yang akan menghasilkan model relasional.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK03', 'deskripsiSN' => 'Mampu membuat perencanaan infrastruktur TI, arsitektur jaringan, layanan fisik dan cloud, menganalisa konsep identifikasi, otentikasi, otorisasi akses dalam konteks melindungi rang dan perangkat.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK04', 'deskripsiSN' => 'Mampu menerapkan metodologi pengembangan sistem informasi beserta alat pemodelannya meliputi pengembangan sistem berorientasi objek, system development life cycle (SDLC).'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK05', 'deskripsiSN' => 'Mampu menerapkan dasar logika, prinsip matematika, ekspresi, aspek modular, linearitas dan non-linearitas struktur data pada pemrograman perangkat lunak.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK06', 'deskripsiSN' => 'Mampu memahami, menerapkan kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK07', 'deskripsiSN' => 'Memiliki kemampuan merencanakan, menerapkan, memelihara dan meningkatkan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi yang strategis baik jangka pendek maupun jangka panjang.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK08', 'deskripsiSN' => 'Memiliki kemampuan untuk memantau, mengevaluasi dan mengendalikan sumberdaya sistem informasi untuk memastikan keselarasan, pencapaian dan sasaran strategis organisasi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK09', 'deskripsiSN' => 'Mampu membangun perangkat lunak dalam sebuah proyek sistem informasi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK10', 'deskripsiSN' => 'Mampu menerapkan paradigma pemrograman berorientasi objek secara fundamental berdasarkan object, kelas, pewarisan, enkapsulasi, abstraksi dan polimorfisme.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK11', 'deskripsiSN' => 'Mampu menerapkan fungsi dan bahasa pemrograman serta memperhatikan aspek keamanan pada aplikasi berbasis web di sisi client dan server.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK12', 'deskripsiSN' => 'Mampu menerapkan fungsi dan bahasa pemrograman pada aplikasi berbasis perangkat bergerak.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK13', 'deskripsiSN' => 'Mampu menerapkan konsep, metode dan teknik dalam merancang UI/UX.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK14', 'deskripsiSN' => 'Memiliki kemampuan pengolahan data yaitu pemfilteran, agregasi dan pengorganisasian serta menyajikan informasi yang efektif, efisien, estetik dalam analisis dan visualisasi data.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK15', 'deskripsiSN' => 'Memiliki kemampuan dalam mengidentifikasi, menilai, menganalisis dan memberikan rekomendasi terkait manajemen risiko teknologi informasi dalam organisasi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK16', 'deskripsiSN' => 'Memiliki kemampuan dalam pengelolaan bisnis dengan memanfaatkan teknologi informasi.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK17', 'deskripsiSN' => 'Memiliki kemampuan dalam melakukan fungsi klasifikasi, klasterisasi, regresi, deteksi anomali, pembelajaran aturan asosiasi, perangkuman, baik secara deskriptif maupun prediktif di dalam memahami masalah data secara tepat.'],
            ['sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Keterampilan Khusus', 'kodeCPLSN' => 'CPL-KK18', 'deskripsiSN' => 'Memiliki kemampuan menerapkan hash, crypto dan bitcoin pada teknologi blockchain.'],
            ['kodeCPLSN' => 'CPL-P01', 'deskripsiSN' => 'Mampu memahami, menganalisis, dan menilai konsep dasar dan peran sistem informasi dalam mengelola data dan memberikan rekomendasi pengambilan keputusan pada proses dan sistem organisasi.', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P02', 'deskripsiSN' => 'Mampu memahami dan menjelaskan konsep basis data, struktur data dan visualisasi data secara menyeluruh', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P03', 'deskripsiSN' => 'Mampu memahami dan menjelaskan konsep infrastruktur TI, arsitektur jaringan, layanan fisik dan cloud untuk menganalisa konsep identifikasi, otentikasi, otorisasi akses dalam konteks melindungi orang dan perangkat', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P04', 'deskripsiSN' => 'Mampu memahami dan menjelaskan metodologi pengembangan sistem informasi mulai dari pengembangan sistem berorientasi objek, software development life cycle (SDLC), dan pengembangan agile', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P05', 'deskripsiSN' => 'Mampu memahami dan menjelaskan dasar logika, prinsip matematika, ekspresi, aspek modular, linearitas dan non-linearitas struktur data pada perangkat lunak', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P06', 'deskripsiSN' => 'Mampu memahami dan mengkaji dasar hukum kode etik dalam penggunaan informasi dan data pada perancangan, implementasi, dan penggunaan suatu sistem', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P07', 'deskripsiSN' => 'Mampu memahami dan menjelaskan konsep perencanaan strategis, resiko organisasi, serta kerangka kerja tata kelola sistem informasi', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P08', 'deskripsiSN' => 'Mampu memahami konsep, teknik pada manajemen proyek untuk memenuhi business requirement berdasarkan kriteria pengambilan keputusan', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P09', 'deskripsiSN' => 'Mampu memahami, mengidentifikasi, merekomendasikan kebutuhan bisnis terhadap dampak penggunaan teknologi di dalam masyarakat dan bisnis', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P10', 'deskripsiSN' => 'Mampu memahami permasalahan bisnis berdasarkan analisis data di dalam organisasi sebagai pendukung pengambilan keputusan', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P11', 'deskripsiSN' => 'Mampu memahami konsep, metode, teknik dan tahapan data mining serta visualisasi data sebagai pengetahuan yang berkaitan dengan teknologi informasi', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P12', 'deskripsiSN' => 'Mampu memahami fungsi dan bahasa pemrograman serta memperhatikan aspek keamanan pada aplikasi berbasis web di sisi client dan server', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P13', 'deskripsiSN' => 'Mampu memahami fungsi dan bahasa pemrograman pada aplikasi berbasis perangkat bergerak', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P14', 'deskripsiSN' => 'Mampu memahami konsep, metode dan teknik dalam merancang UI/UX', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P15', 'deskripsiSN' => 'Mampu memahami dan melihat peluang inovasi digital untuk mengembangkan model bisnis digital yang baru', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P16', 'deskripsiSN' => 'Mampu memahami model sistem, metode dan berbagai teknik peningkatan bisnis proses yang mendatangkan suatu nilai untuk organisasi.', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
            ['kodeCPLSN' => 'CPL-P17', 'deskripsiSN' => 'Memiliki pemahaman mengenai dasar-dasar bisnis dan pengetahuan pendukung lainnya yang berkaitan dengan teknologi informasi', 'sumberSN' => 'SN-Dikti', 'kategoriSN' => true, 'jenisSN' => 'Pengetahuan'],
        ];
        foreach ($cpl as $item) {
            CPL_SN_Dikti::create($item);
        }
    }
}
