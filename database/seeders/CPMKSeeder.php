<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;

class CPMKSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the CPMK seeders.
     */
    public function run()
    {
        CPMK::create([
            'kodeCPMK' => 'CPMK001',
            'deskripsiCPMK' => 'Setelah mengikuti perkuliahan, mahasiswa dapat : a). mengimplementasikan berbagai macam cara memperkuat Iman dan Takwa, b). mengembangkan akhlak mulia serta c). menjadikan ajaran Kristen Protestan sebagai landasan berfikir & berperilaku dalam pengembangan profesi.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK002',
            'deskripsiCPMK' => 'Setelah mengikuti perkuliahan, mahasiswa dapat : a). mengimplementasikan berbagai macam cara memperkuat Iman dan Takwa, b). mengembangkan akhlak mulia serta c). menjadikan ajaran Katolik sebagai landasan berfikir & berperilaku dalam pengembangan profesi.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK003',
            'deskripsiCPMK' => 'Setelah mengikuti perkuliahan, mahasiswa dapat : a). mengimplementasikan berbagai macam cara memperkuat Iman dan Takwa, b). mengembangkan akhlak mulia serta c). menjadikan ajaran Islam sebagai landasan berfikir & berperilaku dalam pengembangan profesi.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK004',
            'deskripsiCPMK' => 'Setelah mengikuti perkuliahan, mahasiswa dapat : a). mengimplementasikan berbagai macam cara memperkuat Iman dan Takwa, b). mengembangkan akhlak mulia serta c). menjadikan ajaran Hindu sebagai landasan berfikir & berperilaku dalam pengembangan profesi.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK005',
            'deskripsiCPMK' => 'Setelah mengikuti perkuliahan, mahasiswa dapat : a). mengimplementasikan berbagai macam cara memperkuat Iman dan Takwa, b). mengembangkan akhlak mulia serta c). menjadikan ajaran Budha sebagai landasan berfikir & berperilaku dalam pengembangan profesi.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK006',
            'deskripsiCPMK' => 'Setelah mengikuti perkuliahan, mahasiswa dapat : a). mengimplementasikan berbagai macam cara memperkuat Iman dan Takwa, b). mengembangkan akhlak mulia serta c). menjadikan ajaran Konghucu sebagai landasan berfikir & berperilaku dalam pengembangan profesi.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK007',
            'deskripsiCPMK' => 'Mahasiswa mampu membangun paradigma baru dalam dirinya sendiri berdasar nilai-nilai Pancasila melalui
            kemampuan menjelaskan proses sejarah, kedudukan dan hakikat sila-sila Pancasila, merespon persoalan aktual
            bangsa dan negara, dan menerapkan nilai-nilai Pancasila dalam kehidupan berbangsa dan bermasyarakat dengan
            capaian akhir mahasiswa mampu:
            1. memecahkan (C4) masalah-masalah kebangsaan terkait Pancasila,
            2. merancang (C6) project kebangsaan sebagai berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, bernegara, dan kemajuan peradaban berdasarkan Pancasila',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK008',
            'deskripsiCPMK' => 'Pada akhir perkuliahan ini, diharapkan mahasiswa mampu menganalisis masalah-masalah kontekstual kebangsaan,
            dengan mengembangkan sikap positif dan menampilkan perilaku sebagai cerminan: (i) semangat kebangsaan dan cinta tanah air, (ii) demokrasi berkeadaban, dan (iii) kesadaran hukum dan keragaman.',
            'kodeCPL' => 'LO-01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK009',
            'deskripsiCPMK' => 'Mahasiswa dapat menguraikan komposisi materi, reaksi dasar dan perhitungan, serta senyawa karbon',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK010',
            'deskripsiCPMK' => 'Mahasiswa memiliki pengetahuan, pengertian, & pemahaman tentang konsep-konsep dan prinsip-prinsip dasar Biologi serta
            kaitannya dengan ilmu-ilmu lain sehingga memiliki wawasan biologi secara menyeluruh.',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK011',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah Kalkulus, mahasiswa diharapkan dapat menggunakan konsep-konsep kalkulus, khususnya dalam ilmu kehayatan.',
            'kodeCPL' => 'LO-12'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK012',
            'deskripsiCPMK' => 'Mahasiswa mampu (1) menjelaskan sejarah, kedudukan, dan fungsi bahasa Indonesia dalam kehidupan berbangsa dan
            bernegara; (2) menggunakan bahasa Indonesia untuk mengungkapkan pikiran, gagasan, dan sikap ilmiah ke dalam berbagai
            bentuk karya ilmiah yang berkualitas (memenuhi syarat objektivitas, koherensi, kohesi, efektivitas, efisiensi, dan komunikatif);
            (3) memanfaatkan soft skills kemahiran berbahasa Indonesia untuk pengembangan dirinya sebagai INTELEKTUAL MUDA
            yang berwawasan entrepreneurship',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK013',
            'deskripsiCPMK' => 'Mahasiswa mampu menggunakan data dan referensi ilmiah untuk mengambil keputusan dan mempersuasi',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK014',
            'deskripsiCPMK' => 'Mahasiswa mampu menjelaskan konsep teoritis bidang pengetahuan Sistem Informasi secara umum.',
            'kodeCPL' => 'LO-03'
        ]);

        // SEMESTER 2
        CPMK::create([
            'kodeCPMK' => 'CPMK015',
            'deskripsiCPMK' => 'Mahasiswa mampu menyelesaikan persoalan-persoalan fisis yang berkaitan dengan Mekanika Newton, Gelombang serta Termodinamika.',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK016',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah Matriks dan Transformasi Linier, mahasiswa mampu menyelesaikan Operasi Matrik, Sistem
            Persamaan Linier, Operasi Vektor, dan Aljabar Linier Numerik (K3).',
            'kodeCPL' => 'LO-12'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK017',
            'deskripsiCPMK' => 'Mahasiswa mampu membuat algoritma dan mengimplementasikannya pada bahasa pemprograman (K3).',
            'kodeCPL' => 'LO-13'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK018',
            'deskripsiCPMK' => 'Mahasiswa mampu membuat algoritma dan mengimplementasikannya pada bahasa pemprograman',
            'kodeCPL' => 'LO-13'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK019',
            'deskripsiCPMK' => '1. Mampu menerapkan kerjasama dan berkolaborasi interdisiplin, membina kerjasama berdasarkan kompetensi dalam
            menyelesaikan masalah di dalam kehidupan bermasyrakat baik berupa masalah kesehatan, sosilan dan humaniora.
            2. Mampu melakukan komunikasi yang efektif dan menggunakan keterampilan interpersonal dalam kehidupan bermasyarakat
            3. Mampu menggunakan langkah-langkah pengambilan keputusan etis dan legal.
            4. Mampu mengevaluasi dampak pemberian pelayanan kepada masyarakat dari hasil kolaborasi dan kerjasama interprofesi.',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK020',
            'deskripsiCPMK' => '1. Mampu memahami dan mengembangkan diri serta meningkatkan kapasitas belajarnya;
            2. Mampu memimpin dan bekerjasama dalam tim;
            3. Mampu meningkatkan mutu sumber daya yang dimiliki untuk pengembangan organisasi, jaringan kerja dan
            bertanggungjawab atas pekerjaan sesuai etik profesi;
            4. Mampu menginternalisasi nilai, norma, etik akademik, semangat kemandirian, kejuangan, dan kewirausahaan
            sesuai prinsip dasar civitas akademika UNAIR HEBAT dan Excellent with Morallity',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK021',
            'deskripsiCPMK' => 'Mahasiswa mampu meringkas dan menyajikan informasi numerik sehingga menjadi jelas dan berguna (K2).',
            'kodeCPL' => 'LO-12'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK022',
            'deskripsiCPMK' => 'Mahasiswa mengenal kosa kata khusus dalam wacana sains dan teknologi yang disusun dalam struktur gramatika yang lazim
            digunakan untuk penulisan sains dan teknologi sehingga mahasiswa memahami wacana tersebut untuk membantu dalam
            kegiatan membaca buku ajar dalam bidangnya dan mampu menjawab pertanayaan baik secara lisan maupun tulisan.',
            'kodeCPL' => 'LO-02'
        ]);

        // SEMESTER 3
        CPMK::create([
            'kodeCPMK' => 'CPMK023',
            'deskripsiCPMK' => 'Mahasiswa diharapkan dapat melakukan pemodelan dan perbaikan proses bisnis (K3).',
            'kodeCPL' => 'LO-03'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK024',
            'deskripsiCPMK' => 'Mahasiswa diharapkan dapat melakukan pemodelan dan perbaikan proses bisnis dengan menggunakan tools yang sesuai (K3).',
            'kodeCPL' => 'LO-03'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK025',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah Basis Data, mahasiswa diharapkan dapat membangun model basis data relasional
            secara benar dan tepat sesuai studi kasus tertentu. Mahasiswa diharapkan dapat:
            a) Menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara mandiri
            b) Menjelaskan prinsip-prinsip dasar dalam pengembangan basis data
            c) Mengidentifikasi dan merancang basis data sesuai dengan kebutuhan organisasi
            d) Mengimplementasikan rancangan basis data pada suatu DBMS
            e) Menjelaskan prinsip-prinsip dasar dari integritas, keamanan dan tingkat kerahasiaan data pada suatu basis
            data',
            'kodeCPL' => 'LO-04'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK026',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu membangun model basis data relasional secara benar dan tepat sesuai
            studi kasus tertentu',
            'kodeCPL' => 'LO-04'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK027',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat menggunakan Konsep Pemrograman Berorientasi Obyek
            dengan benar (K3).',
            'kodeCPL' => 'LO-13'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK028',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat membuat modul yang di tulis dalam bahasa pemrograman yang
            berorientasi pada obyek (K3)',
            'kodeCPL' => 'LO-13'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK029',
            'deskripsiCPMK' => 'Mahasiswa mampu mengambil kesimpulan dari data sampel (K2).',
            'kodeCPL' => 'LO-12'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK030',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah Sistem Operasi, Mahasiswa diharapkan mampu menentukan kebutuhan
            sistem operasi dari sistem komputer (K4).',
            'kodeCPL' => 'LO-09'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK031',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat menyelesaikan permasalahan praktis dalam matematika diskrit.',
            'kodeCPL' => 'LO-12'
        ]);

        // SEMESTER 4

        CPMK::create([
            'kodeCPMK' => 'CPMK032',
            'deskripsiCPMK' => 'Mahasiswa diharapkan dapat menggunakan metode yang tepat untuk membuat rancangan sistem informasi berdasarkan
            requirement yang ditentukan (K3)',
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK033',
            'deskripsiCPMK' => 'Setelah mengikuti Mata Ajar ini, mahasiswa diharapkan dapat menentukan algoritma pembelajaran mesin pada kasus tertentu.',
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK034',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah praktikum pembelajaran mesin, mahasiswa diharapkan dapat menggunakan algoritma pembelajaran
            mesin pada kasus tertentu. Mahasiswa diharapkan dapat:
            a. Memahami konsep data
            b. Menggunakan transformasi data untuk preprosessing data sesuai dengan kasus tertentu
            c. Menggunakan algoritma klasifikasi dan clustering pada kasus tertentu
            d. Menggunakan algoritma optimasi pada kasus tertentu',
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK035',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, Mahasiswa dapat menerapkan konsep, teori dan aturan-aturan yang berlaku dalam
            perancangan jaringan komputer sebagai dasar untuk membangun sebuah jaringan komputer untuk dapat menunjang
            pengembangan teknologi informasi (K3).',
            'kodeCPL' => 'LO-09'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK036',
            'deskripsiCPMK' => 'Mahasiswa diharapkan dapat mengintegrasikan prinsip-prinsip sistem enterprise ke dalam operasional organisasi agar menjadi
            lebih efektif dan efisien (K4)',
            'kodeCPL' => 'LO-07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK037',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu menggunakan konsep kepemimpinan dan manajemen
            organisasi dalam studi kasus tertentu. (K3)',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK038',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu mengembangkan aplikasi berbasis mobile (K3)',
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK039',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, Mahasiswa dapat menerapkan konsep, teori dan aturan-aturan yang berlaku dalam pemrograman web untuk membangun web sederhana untuk dapat menunjang pengembangan teknologi informasi (K3).',
            'kodeCPL' => 'LO-05'
        ]);

        // SEMESTER 5

        CPMK::create([
            'kodeCPMK' => 'CPMK040',
            'deskripsiCPMK' => 'Mahasiswa diharapkan dapat menggunakan teknologi terbaru dalam menyusun inovasi untuk menyelesaikan permasalahan
            sistem informasi (K3).',
            'kodeCPL' => 'LO-11'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK041',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini mahasiswa mampu menyusun beberapa paragraph mengenai suatu topik dan esai secara
            sistematis. (K3)',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK042',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini mahasiswa semester 5 diharapkan dapat:
            1. membedakan jenis-jenis serangan siber dan dapat membuat simulasi jaringan sederhana yang aman sesuai kebutuhan dengan
            menerapkan konsep security.
            2. memahami teori tentang manajemen risiko dan pentingnya aturan, terutama yang berkaitan dengan keamanan organisasi.
            3. mengenal konsep tentang incident handling dan mampu menerapkan checklist untuk keamanan jaringan di dalam simulasi.
            4. mengidentifikasi serangan yang terjadi pada jaringan Virtual Machine (VM) menggunakan Sguil, Elsa, security onion dan
            Wireshark.
            5. menerapkan prosedur NIST 800-61r2.',
            'kodeCPL' => 'LO-09'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK043',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu menyusun proposal bisnis sesuai konsep kewirausahaan di
            bidang sistem informasi (K3).',
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK044',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu menerapkan prinsip-prinsip desain interaksi dalam
            merancang sistem',
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK045',
            'deskripsiCPMK' => 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan dapat merancang desain interaksi dengan menggunakan tools (K3).',
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK046',
            'deskripsiCPMK' => 'Setelah mengikuti mata ajaran ini mahasiswa semester 6 diharapkan mampu membangun Perangkat Lunak dengan baik,
            membuat dokumen pengembangan sistem informasi, dan melakukan pengujian perangkat lunak secara baik',
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK047',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu menganalisis data dan membuat visualisasi hasil analisis
            data",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK048',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah praktikum analisa dan visualisasi data, mahasiswa diharapkan dapat membuat analasisa dan visualisasi
            data berdasarkan metode dan data yang digunakan. Mahasiswa diharapkan dapat:
            a. Menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara mandiri
            c. Membuat preprosessing data dengan mengeksplorasi data yang digunakan
            b. Membuat visualisasi data berdasarkan metode dan datanya
            c. Menjelaskan analisa data berdasarkan visualisasi data yang telah dibuat",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK049',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat menggunakan kerangka kerja arsitektur enterprise untuk
            perencanaan sistem informasi strategis yang selaras dengan strategi bisnis organisasi (K3).",
            'kodeCPL' => 'LO-07'
        ]);

        // SEMESTER 6

        CPMK::create([
            'kodeCPMK' => 'CPMK050',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah Etika Profesi, mahasiswa diharapkan dapat menerapkan konsep-konsep Etika
            Profesi dalam pengembangan dan operasionalisasi Sistem Informasi (K3).",
            'kodeCPL' => 'LO-06'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK051',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat menggunakan kerangka kerja/standar tertentu untuk melakukan
            tata kelola teknologi informasi.",
            'kodeCPL' => 'LO-07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK052',
            'deskripsiCPMK' => "Setelah mengikuti kuliah ini mahasiswa diharapkan mampu menyusun metodologi penelitian yang tepat
            sesuai dengan permasalahan yang akan diselesaikan (K4).",
            'kodeCPL' => 'LO-11'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK053',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah manajemen layanan teknologi informasi, mahasiswa diharapkan dapat menggunakan kerangka
            kerja/standar manajemen layanan TI tertentu untuk pengelolaan layanan teknologi informasi. Mahasiswa diharapkan pula untuk:
            a. mampu menggunakan kerangka kerja/standar manajemen layanan TI tertentu untuk pengelolaan layanan teknologi
            informasi
            b. mampu berpikir kritis, mengidentifikasi akar masalah dan pemecahannya secara komprehensif, serta mengambil
            keputusan yang tepat berdasarkan analisis informasi dan data",
            'kodeCPL' => 'LO-07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK054',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah Metode Kuantitatif Bisnis ini, mahasiswa diharapkan mampu menggunakan alat-alat kuantitatif dalam
            pengambilan keputusan manajemen dengan tepat (K3).",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK055',
            'deskripsiCPMK' => "Mahasiswa diharapkan mampu menerapkan konsep teori sistem informasi untuk menganalisis berbagai
            macam teori dan model yang digunakan dalam riset sistem informasi (K3)",
            'kodeCPL' => 'LO-03'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK056',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu membuat rancangan sistem untuk mendapatkan
            informasi yang relevan dari koleksi informasi berdasarkan prinsip temu kembali informasi. (K3)",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK057',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini mahasiswa semester mampu mengintegrasikan aplikasi sesuai dengan kebutuhan
            enterprise (K4)",
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK058',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat menerapkan konsep pengelolaan proyek sistem informasi pada suatu
            proyek teknologi informasi (K3).",
            'kodeCPL' => 'LO-08'
        ]);

        // SEMESTER 7
        CPMK::create([
            'kodeCPMK' => 'CPMK059',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini mahasiswa diharapkan mampu
            untuk menggunakan dan menerapkan metode dalam sistem berbasis pengetahuan untuk menyelesaikannya
            dan memodelkan masalah dunia nyata",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK060',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu memilih metode yang tepat untuk mendapatkan pengetahuan
            dari sekumpulan data besar (K4).",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK061',
            'deskripsiCPMK' => "Mahasiswa mampu menerapkan metode-metode pada bidang biomedis dari telaah artikel jurnal ilmiah pilihan
            (K3)",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK062',
            'deskripsiCPMK' => "Mahasiswa mampu melakukan analisis data pada kasus bisnis terutama pada domain marketing, production, human resource,
            dan financial (K4).",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK063',
            'deskripsiCPMK' => "Mahasiswa diharapkan dapat menggunakan kerangka kerja/standar tertentu untuk melakukan audit sistem informasi (K3).",
            'kodeCPL' => 'LO-07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK064',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu memilih metode yang tepat untuk memecahkan dan
            memodelkan permasalahan dunia nyata dari sekumpulan data image (K4).",
            'kodeCPL' => 'LO-10'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK065',
            'deskripsiCPMK' => "Mahasiswa diharapkan dapat menggunakan konsep, proses, pendekatan, dan prinsip-prinsip pengujian dalam merancang,
            memprioritaskan, dan mengeksekusi pengujian terhadap perangkat lunak (K3).",
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK066',
            'deskripsiCPMK' => "Mahasiswa diharapkan dapat melakukan pengelolaan risiko teknologi informasi di organisasi berdasarkan kasus tertentu (K4)",
            'kodeCPL' => 'LO-07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK067',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini, mahasiswa mampu merancan desain interaksi yang tepat untuk sistem E-Health (K3)",
            'kodeCPL' => 'LO-05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK068',
            'deskripsiCPMK' => "Mahasiswa mampu menyusun menyelesaikan permasalahan dalam bidang sistem informasi
            dengan metode ilmiah, memiliki prakarsa untuk mengembangkan pengetahuan dan
            keterampilan sistem informasi yang dimiliki secara mandiri, dan membuat karya tulis ilmiah
            dengan jujur dan bertanggung jawab.",
            'kodeCPL' => 'LO-11'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK069',
            'deskripsiCPMK' => "Mahasiswa mampu berkolaborasi dan berkoordinasi dengan sebuah organisasi untuk menerapkan
            ilmu dan pengetahuan Sistem Informasi yang telah dipelajari selama perkuliahan dengan cara
            terjun secara langsung ke dunia kerja.",
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK070',
            'deskripsiCPMK' => "Mahasiswa mampu menjalankan peran, fungsi, dan posisinya dalam sebuah tim dengan baik,
            serta mampu bekerja sama untuk memecahkan permasalahan di masyarakat secara
            multidisipliner.",
            'kodeCPL' => 'LO-02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK071',
            'deskripsiCPMK' => "Setelah mengikuti mata kuliah ini mahasiswa diharapkan mampu
            melakukan tinjauan kritis terhadap perkembangan dan permasalahan
            ilmu pengetahuan modern.",
            'kodeCPL' => 'LO-02'
        ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK011',
        //     'deskripsiCPMK' => 'Mampu memahami konsep dasar sistem informasi',
        //     'kodeCPL' => 'CPL-01'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK012',
        //     'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
        //     'kodeCPL' => 'CPL-02'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK013',
        //     'deskripsiCPMK' => 'Mampu menilai proses dan sistem pengelolaan data pada organisas',
        //     'kodeCPL' => 'CPL-01'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK021',
        //     'deskripsiCPMK' => 'Mampu merancang database',
        //     'kodeCPL' => 'CPL-02'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK022',
        //     'deskripsiCPMK' => 'Mampu menggunakan database',
        //     'kodeCPL' => 'CPL-02'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK023',
        //     'deskripsiCPMK' => ' Mampu mengolah data dengan alat dan teknik pengolahan data',
        //     'kodeCPL' => 'CPL-02'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK024',
        //     'deskripsiCPMK' => 'Mampu menganalisa data dengan alat dan teknik pengolahan data',
        //     'kodeCPL' => 'CPL-02'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK031',
        //     'deskripsiCPMK' => 'Mampu memahami berbagai metodologi pengembangan sistem',
        //     'kodeCPL' => 'CPL-03'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK032',
        //     'deskripsiCPMK' => 'Mampu menggunakan berbagai alat pengembangan sistem',
        //     'kodeCPL' => 'CPL-03'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK033',
        //     'deskripsiCPMK' => 'Mampu menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi',
        //     'kodeCPL' => 'CPL-03'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK041',
        //     'deskripsiCPMK' => 'Mampu membuat perencanaan infrastruktur TI, arsitektur jaringan, serta layanan fisik/cloud',
        //     'kodeCPL' => 'CPL-04'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK042',
        //     'deskripsiCPMK' => 'Mampu menganalisis konsep identifikasi, otentikasi, otorisasi akses dalam konteks keamanan sistem',
        //     'kodeCPL' => 'CPL-04'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK051',
        //     'deskripsiCPMK' => 'Mampu memahami kode etik dalam penggunaan informasi data pada perancangan, implementasi dan penggunaan suatu sistem',
        //     'kodeCPL' => 'CPL-05'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK052',
        //     'deskripsiCPMK' => 'Mampu menerapkan kode etik dalam penggunaan informasi data pada perancangan, implementasi dan penggunaan suatu sistem',
        //     'kodeCPL' => 'CPL-05'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK061',
        //     'deskripsiCPMK' => 'Mampu merencanakan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi jangka panjang',
        //     'kodeCPL' => 'CPL-06'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK062',
        //     'deskripsiCPMK' => 'Mampu menerapkan sistem informasi untuk mencapai tujuan dan sasaran organisasi jangka pendek',
        //     'kodeCPL' => 'CPL-06'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK063',
        //     'deskripsiCPMK' => 'Mampu memelihara sistem informasi organisasi untuk mencapai tujuan organisasi jangka pendek.',
        //     'kodeCPL' => 'CPL-06'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK064',
        //     'deskripsiCPMK' => 'Mampu meningkatkan layanan sistem informasi yang strategis secara jangka pendek.',
        //     'kodeCPL' => 'CPL-06'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK071',
        //     'deskripsiCPMK' => 'Mampu memahami konsep, teknik dan metodologi manajemen proyek sistem informasi',
        //     'kodeCPL' => 'CPL-07'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK072',
        //     'deskripsiCPMK' => 'Mampu mengidentifikasi konsep, teknik dan metodologi manajemen proyek sistem informasi',
        //     'kodeCPL' => 'CPL-07'
        // ]);

        // CPMK::create([
        //     'kodeCPMK' => 'CPMK073',
        //     'deskripsiCPMK' => 'Mampu mengidentifikasi konsep, teknik dan metodologi manajemen proyek sistem informasi',
        //     'kodeCPL' => 'CPL-07'
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK01',
        //     'kodeCPMK' => 'CPMK011',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK01',
        //     'kodeCPMK' => 'CPMK012',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK02',
        //     'kodeCPMK' => 'CPMK013',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK02',
        //     'kodeCPMK' => 'CPMK014',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK03',
        //     'kodeCPMK' => 'CPMK021',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK04',
        //     'kodeCPMK' => 'CPMK022',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK03',
        //     'kodeCPMK' => 'CPMK023',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK25',
        //     'kodeCPMK' => 'CPMK023',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK04',
        //     'kodeCPMK' => 'CPMK024',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK25',
        //     'kodeCPMK' => 'CPMK024',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK10',
        //     'kodeCPMK' => 'CPMK031',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK11',
        //     'kodeCPMK' => 'CPMK031',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK14',
        //     'kodeCPMK' => 'CPMK032',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK16',
        //     'kodeCPMK' => 'CPMK032',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK17',
        //     'kodeCPMK' => 'CPMK032',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK10',
        //     'kodeCPMK' => 'CPMK033',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK16',
        //     'kodeCPMK' => 'CPMK033',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK17',
        //     'kodeCPMK' => 'CPMK033',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK05',
        //     'kodeCPMK' => 'CPMK041',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK06',
        //     'kodeCPMK' => 'CPMK041',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK07',
        //     'kodeCPMK' => 'CPMK041',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK18',
        //     'kodeCPMK' => 'CPMK042',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK19',
        //     'kodeCPMK' => 'CPMK042',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK20',
        //     'kodeCPMK' => 'CPMK051',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK21',
        //     'kodeCPMK' => 'CPMK051',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK20',
        //     'kodeCPMK' => 'CPMK052',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK21',
        //     'kodeCPMK' => 'CPMK052',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK10',
        //     'kodeCPMK' => 'CPMK061',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK12',
        //     'kodeCPMK' => 'CPMK061',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK13',
        //     'kodeCPMK' => 'CPMK061',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK15',
        //     'kodeCPMK' => 'CPMK062',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK12',
        //     'kodeCPMK' => 'CPMK063',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK13',
        //     'kodeCPMK' => 'CPMK063',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK15',
        //     'kodeCPMK' => 'CPMK064',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK08',
        //     'kodeCPMK' => 'CPMK071',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK08',
        //     'kodeCPMK' => 'CPMK072',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK09',
        //     'kodeCPMK' => 'CPMK072',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK22',
        //     'kodeCPMK' => 'CPMK072',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK09',
        //     'kodeCPMK' => 'CPMK073',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK22',
        //     'kodeCPMK' => 'CPMK073',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK23',
        //     'kodeCPMK' => 'CPMK073',
        // ]);

        // Detail_MK_CPMK::create([
        //     'kodeMK' => 'MK24',
        //     'kodeCPMK' => 'CPMK073',
        // ]);
    }
}
