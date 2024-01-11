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
            ['AGI101', 'Agama I (Islam)', 2, 1, 1, 2, null, "<p>Mata kuliah Agama Islam I membahas tentang :&nbsp;</p><p>a). Konsep ke Tuhanan dalam Islam,&nbsp;<br>b).Keimanan, Ketakwaan dan Implementasinya dalam Kehidupan,&nbsp;<br>c). Hakikat Manusia Menurut Islam,&nbsp;<br>d). Hukum, HAM dan Demokrasi dalam Islam,&nbsp;<br>e). Hukum Islam dan Kontribusi Umat Islam Indonesia,&nbsp;<br>f). Etika, Moral dan Akhlak,&nbsp;<br>g). IPTEK dalam Islam,&nbsp;<br>h). Masyarakat Madani,&nbsp;<br>i). Kerukunan Antar Umat Beragama,&nbsp;<br>j). Ekonomi Islam dan Kesejahteraan Umat,&nbsp;<br>k). Kebudayaan dan Seni dalam Islam, serta&nbsp;<br>l). Sistem Politik Islam.</p>", "S1 Sistem Informasi"],
            ['AGP101', 'Agama I (Protestan)', 2, 1, 1, 2, null, "Membahas tentang Protestan merupakan sebuah mata kuliah yang menjadikan agama sebagai sumber nilai dan pedoman dalam
            pengembangan kepribadian Kristiani yang menjunjung tinggi harkat dan martabat manusia. Mata kuliah ini disajikan berdasarkan
            komponen Kurikulum Berbasis Kompetensi (KBK), yang terdiri dari Kompetensi, Substansi Kajian, Sub Kajian dan seluruh proses
            pembelajaran termasuk metodologi dan evaluasi. Substansi kajian merupakan topik yang telah ditetapkan oleh Ditjen Dikti melalui SK
            No. 38/Dikti/Kep/2002.", "S1 Sistem Informasi"],
            ['AGK101', 'Agama I (Katolik)', 2, 1, 1, 2, null, "<p>1. Tuhan Yang Maha Esa&nbsp;<br>2. Manusia&nbsp;<br>3. Etika Moral&nbsp;<br>4.Dialog dan Kerukunan Umat Beragama&nbsp;<br>5. IPTEKS dan Iman Katolik&nbsp;<br>6.Budaya dan Iman Katolik&nbsp;<br>7. Iman dan Sosial Politik&nbsp;<br>8. Hukum, HAM dan Demokrasi</p>", "S1 Sistem Informasi"],
            ['AGH101', 'Agama I (Hindu)', 2, 1, 1, 2, null, "<p>Mata kuliah ini membahas tentang :&nbsp;</p><p>a). Konsepsi Ketuhanan (Brahma Widya),&nbsp;<br>b). Catur Marga Yoga,&nbsp;<br>c). Hakekat Manusia Hindu I,&nbsp;<br>d). Hakekat Manusia Hindu II,&nbsp;<br>e). Etika dan Moralitas I,&nbsp;<br>f). Etika dan Moralitas II,&nbsp;<br>g). Ilmu Pengetahuan Teknologi Dalam Perspektif Hindu I, II,&nbsp;<br>h). Kerukunan Hidup Umat Beragama,&nbsp;<br>i). Masyarakat Kerja Jagadhita,&nbsp;<br>j). Budaya Sebagai Pengalaman Ajaran Hindu,&nbsp;<br>k). Politik Menurut Perspektif Hindu, Hindu Dalam Kerangka Menegakkan Keadilan.</p>", "S1 Sistem Informasi"],
            ['AGB101', 'Agama I (Budha)', 2, 1, 1, 2, null, "<p>1) Hakekat Tuhan Yang Maha Esa, didalam kitab suci UDANA VIII : 3 dilukiskan sebagai berikut : Yang Mutlak dan tidak berkondisi dan tidak dilahirkan adalah Nibbana (orang yang telah mencapai kesucian) Arahat&nbsp;</p><p>2) Lahirnya P. Sidarta selama enam tahun dan pencapain penerangan sempurna (menjadi) Buddha, pembabaran Dharma di Taman Isipatana terbentuknya Sangha&nbsp;</p><p>3) Sebelum seseorang menjadi Buddha harus menajdi seorang Bodisatva, mempunyai sifat Metta Karuna dan Mudita dan lebih mementingkan orang lain daripada diri sensiri&nbsp;</p><p>4) Humum ke-Sunyataan yang berlaku di 31 alam kehidupan, alam Arupa Loka, Rupa Loka dan Karma Loka&nbsp;</p><p>5) Hukum karma perbuatan yang dilakukan oleh mano Vacci dan karma dan didorong oleh cetana, tanpa cetana tidak akan ada satu karma. Karma adalah hasil dari perbuatan dan akan menerima, menerapkan serta melaksanakan</p>", "S1 Sistem Informasi"],
            ['AGC101', 'Agama I (Kong Hu Chu)', 2, 1, 1, 2, null, "<p>Mata kuliah ini membahas tentang :&nbsp;</p><p>a). pengetahuan, nilai-nilai dasar dan contoh-contoh penerapan agama Khonghucu,&nbsp;</p><p>b) Mendorong menjadi seorang Junzi (insan berbudi luhur) yang mengharmoniskan hubungan antara Tian (Tuhan), Di (Alam Semesta), dan Ren (Manusia);&nbsp;</p><p>c). memuliakan Lima Hubungan Kemasyarakatan (Wu Lun), menerapkan prinsip ZhiRen Yong (Bijaksana, Cinta Kasih dan Berani) sebagai wujud nyata memuliakan Tian,&nbsp;</p><p>d). menjunjung leluhur.&nbsp;</p><p>e). nilai-nilai Kebajikan hakiki dalam kehidupan</p>", "S1 Sistem Informasi"],
            ['NOP103', 'Pancasila', 2, 1, 1, 2, null, "Mata kuliah ini membahas:

            1. Pancasila dalam kajian sejarah bangsa, Pancasila sebagai dasar negara,
            2. Pancasila sebagai ideologi negara,
            3. Pancasila sebagai sistem filsafat,
            4. Pancasila sebagai sistem etika,
            5. Nilai Pancasila sebagai dasar pengembangan ilmu,
            6. Pemaknaan Sila-sila Pancasila, dan contoh penerapan dalam kehidupan berbangsa dan bermasyarakat", "S1 Sistem Informasi"],
            ['NOP101', 'Kewarganegaraan', 2, 1, 1, 2, null, "Mata Kuliah ini membahas tentang: PKn sebagai orientasi penguatan (dan pemantapan) karakter Bangsa Indonesia,
            identitas nasional, Negara dan Konstitusi, Hubungan Negara dengan Warga Negara, Demokrasi Indonesia dan Pendidikan
            Demokrasi di Indonesia, Negara Hukum dan HAM, Geopolitik Indonesia (Wawasan Nusantara), Geostrategi Indonesia
            (Ketanahan Nasional), Integrasi Nasional, Bela Negara, serta Pendidikan Antikorupsi yang mampu memberikan landasan
            aksiologis bagi perilaku mahasiswa dalam kehidupan berkeluarga, bermasyarakat, berbangsa dan bernegara.", "S1 Sistem Informasi"],
            ['KID107', 'Kimia Dasar', 2, 1, 1, 1, null, "Pembelajaran kimia dasar ini membahas tentang :Struktur atom dan sistem periodik ; ikatan kimia : Ikatan ionik, kovalen, koordinasi
            Ikatan hidrogen; stoikhiometri ; redoks dan termokimia ; laju reaksi kesetimbangan reaksi, Larutan : jenis dan konsentrasi ; sifat
            
            koligatif larutan ; teori dan pH asam - basa ; Hidrokarbon alifatis dan aromatis; Alkil dan aril halida; Alkohol dan Eter; Aldehida dan
            Keton; Asam karboksilat serta Amina.", "S1 Sistem Informasi"],
            ['BID108', 'Biologi Dasar', 2, 1, 1, 1, null, "Hakekat biologi, Keanekaragaman organisme, Klasifikasi organisme, Organisme dengan lingkungannya (termasuk Adaptasi pada
            kelangsungan hidup organisme & Perilaku organisme), Evolusi, Struktur bentuk & fungsi organisme (Tumbuhan, Hewan & Manusia),
            Regulasi & homeostasis (dalam Biologi Hewan), Keterkaitan teknologi & Prospek biologi.", "S1 Sistem Informasi"],
            ['MAA101', 'Kalkulus', 3, 1, 1, 1, null, "Persamaan dan pertidaksamaan (polinomial derajat sampai dengan tiga, rasional, dan mutlak), fungsi (polinomial kurang dari tiga, akar rasional, trigonometri, siklometri,
            eksponen, logaritma, tangga, implisit, dan parametrik), operasi fungsi, komposisi fungsi dan balikan fungsi. Limit, kekontinuan dan terapannya, definisi dan sifat turunan,
            turunan fungsi (fungsi khusus, aturan rantai, dan turunan kedua) dan penggunaannya (limit bentuk tak tentu, laju, aturan L’hospital, Maksimum-minimum dan
            mengambar grafik), Integral tak tentu (integral tak tentu sebagai anti turunan, substitusi sederhana, integral parsial, pecah rasional sederhana), Pengantar
            persamaan differensial (definisi, jenis PD: PD terpisah, PD dapat dipisahkan, PD Homogen, PD eksak), Integral tentu dan terapannya (Teorema
            Fundamental Kalkulus, luasan, integral tak wajar).", "S1 Sistem Informasi"],
            ['BAI101', 'Bahasa Indonesia', 2, 1, 1, 2, null, "Matakuliah ini merupakan salah satu mata kuliah wajib yang masuk kategori mata kuliah pengembangan kepribadian (SK Dirjen Dikti
            No 43/DIKTI/Kep./2006). Mata kuliah ini tidak semata-mata berorientasi pragmatis, tetapi juga mengemban visi politis dan ideologis
            untuk pembentukan character building. Dalam mata kuliah ini akan dibahas (1) sejarah, kedudukan, dan fungsi bahasa Indonesia; (2)
            penggunaan bahasa Indonesia untuk mengungkapkan pikiran, gagasan, dan sikap ilmiah ke dalam berbagai bentuk karya ilmiah yang
            berkualitas (memenuhi syarat objektivitas, koherensi, kohesi, efektivitas, efisiensi, dan komunikatif); (3) kemahiran berbahasa
            Indonesia untuk mengembangkan soft skills mahasiswa sebagai INTELEKTUAL MUDA yang berwawasan entrepreneurship
            (pembuatan surat-surat bisnis, company profile, presentasi business plan, dan sebagainya); dan jati diri bangsa", "S1 Sistem Informasi"],
            ['SIP107', 'Data dan Pustaka', 2, 1, 1, 1, null, "Mata kuliah ini bertujuan untuk mendorong mahasiswa belajar untuk memahami cara menginterpretasi dan menggunakan data dengan baik dan bertanggung jawab, sehingga
            mahasiswa dapat menyusun argumentasi yang kuat dan koheren, serta membekali mahasiswa dengan kemampuan untuk mengevaluasi kualitas argumentasi pihak/orang lain.
            Tidak semua orang akan menjadi ilmuwan yang harus merencanakan desain penelitian, mengumpulkan data, menganalisisnya dan menarik kesimpulan, namun literasi data
            akan membantu mahasiswa untuk mengambil keputusan-keputusan dalam kehidupan sehari-hari yang terpandu oleh data. Selain itu, mahasiswa didorong untuk berlatih
            mencari, membaca, mengevaluasi, dan memilah klaim atau informasi yang dimuat dalam literatur ilmiah. Dalam mata kuliah ini, mahasiswa juga diberi kesempatan untuk berlatih
            mengorganisasi referensi ilmiah dengan bantuan aplikasi pengelola referensi.", "S1 Sistem Informasi"],
            ['SII103', 'Pengantar Sistem Informasi', 2, 1, 1, 1, null, "a. Kegunaan, teknologi, manusia dan komponen sistem informasi;

            b. Globalisasi dan peran sistem informasi;
            c. Komponen perangkat keras dalam infrastruktur sistem Informasi;
            d. Komponen perangkat lunak dalam infrastruktur sistem Informasi;
            e. Manajemen sumber data pada infrastruktur sistem informasi
            f. Telekomunikasi dan jaringan untuk mendukung infrastruktur sistem informasi;
            g. Sistem bisnis elektronik pada sebuah arsitektur sistem informasi;
            h. Bisnis di dalam perusahaan;
            i. Sistem perdagangan elektronik;
            j. Business Intelligence untuk pengambilan keputusan dalam organisasi;
            k. Strategi Bisnis/IT untuk pengembangan sistem informasi
            l. Implementasi solusi bisnis/IT pada sebuah arsitektur sistem informasi;
            m. Tantangan keamanan dan etika dalam sistem informasi;
            n. Teknologi informasi dalam perusahaan dan manajemen global", "S1 Sistem Informasi"],
            ['FID112', 'Fisika Dasar', 2, 2, 1, 1, null, "Besaran dan Satuan dalam fisika, Vektor,
            Kinematika dan Dinamika gerak benda,
            Usaha dan Energi, Sistem Partikel dan Momentum, Mekanika Fluida, Kesetimbangan Statik Benda Tegar, Rotasi, Gravitasi, Osilasi,
            Gelombang dan Bunyi, Temperatur dan Termodinamika.", "S1 Sistem Informasi"],
            ['PHP103', 'Logika dan Pemikiran Kritis', 2, 2, 1, 1, null, null, "S1 Sistem Informasi"],
            ['MAL103', 'Matriks dan Transformasi Linier', 2, 2, 1, 1, null, '<p>Mata kuliah ini menjelaskan tentang:&nbsp;</p><ol><li>Persamaan Linier, Aljabar Linier&nbsp;</li><li>Matriks: Sifat-sifat matriks, Determinan Matriks, Inverse matriks, Operasi Baris Elementer</li><li>Analisis varians satu arah (Anova sederhana) dan Analisis varians dua arah</li><li>Sistem Persamaan Linier</li><li>Vektor</li><li>Eigen Value, Eigen Vektor</li><li>Transformasi Linier</li>', "S1 Sistem Informasi"],
            ['MAT101', 'Algoritma dan Pemrograman', 3, 2, 1, 1, null, "Mahasiswa mendapatkan materi mengenai:

            a. Pengantar Algoritma dan Pemrograman dan Flowchart
            
            b. Variabel dan Operator
            c. Conditional IF
            d. Looping FOR
            e. Looping While
            f. Function
            g. Recursive Function
            h. Implementasi Java dari Variabel, Conditional IF, Loop FOR
            i. Implementasi Java dari Recursive Function
            j. Implementasi Phyton dari Looping FOR dan WHILE
            k. Implementasi Phyton dari Function", "S1 Sistem Informasi"],
            ['MAT102', 'Algoritma dan Pemrograman (Praktikum)', 2, 2, 2, 1, null, "Mahasiswa mendapatkan materi mengenai:

            a. Pengantar Algoritma dan Pemrograman dan Flowchart
            
            b. Variabel dan Operator
            c. Conditional IF
            d. Looping FOR
            e. Looping While
            f. Function
            g. Recursive Function
            h. Implementasi Java dari Variabel, Conditional IF, Loop FOR
            i. Implementasi Java dari Recursive Function
            j. Implementasi Phyton dari Looping FOR dan WHILE
            k. Implementasi Phyton dari Function", "S1 Sistem Informasi"],
            ['MNM107', 'Pengantar Kolaborasi Keilmuan', 2, 2, 1, 1, null, 'Mata kuliah ini membahas tentang dasar pelaksanaan kolaborasi dan kerjasama tim dan topik terkait mata kuliah meliputi konsep dasar Interprofesional education (IPE), leadership dan manajerial dan konsep pengambilan keputusan dalam persoalan yang terjadi di masyarakat baik berupa masalah kesehatan, sosial, humaniora, langkah-langkah pengambilan keputusan, penerapan pengambilan keputusan pada beberapa setting pelayanan di masyarakat dengan saling berkolaborasi interprofesi berdasarkan etik, praktis, teori, dan organisasi.', "S1 Sistem Informasi"],
            ['MNM106', 'Komunikasi dan Pengembangan Diri', 2, 2, 1, 1, null, 'Mata kuliah ini memberikan wawasan dan kesempatan bagi mahasiswa untuk dapat menggali potensi diri agar mampu mengembangkan serta meningkatkan kapasitas diri melalui sinergi dengan aktivitas pembinaan di Unit Kegiatan Mahasiswa dan kegiatan organisasi kemahaiswaan lainnya', "S1 Sistem Informasi"],
            ['MAS118', 'Statistika Deskriptif', 3, 2, 1, 1, null, '<p>Mata kuliah ini menjelaskan tentang:&nbsp;</p><ol><li>Visualisasi data dengan membuat dan menginterpretasikan grafik&nbsp;</li><li>Central Tendency: menghitung dan menginterpretasi-kan ukuran pemusatan data&nbsp;</li><li>Variability: mengukur penyebaran data menggunakan rentang dan deviasi standar serta mengidentifikasi outlier dalam data set menggunakan konsep rentang interkuartil&nbsp;</li><li>Kemiringan dan Keruncingan&nbsp;</li><li>Variabel random dan distribusi probabilitas : distribusi diskrit dan kontinu&nbsp;</li><li>Sampling Distribusi : menerapkan konsep probabilitas dan normalisasi untuk set data sampel</li><li>Deskripsi data untuk data data multivariate</li><ol type="a"><li>Vilsualisasi data dengan grafik</li><li>Principal Komponent Analysis</li><li>Cluster Analysis</li><li>Analisis Korespondensi</li>', "S1 Sistem Informasi"],
            ['BAE111', 'Bahasa Inggris I', 2, 2, 1, 2, null, "Wacana-wacana bahasa inggris yang berkaiatan dengan sains dan teknologi. Wacana-wacana yang berkaiatan dengan penggunaan
            gramatika bahasa.", "S1 Sistem Informasi"],
            ['SIA204', 'Fungsi dan Proses Bisnis', 2, 3, 1, 1, 'SII103', "<p>Mata kuliah ini menjelaskan tentang:</p> 
            <ol>
            <li>Pengenalan fungsi dan proses bisnis</li>
            <li>Proses bisnis umum dalam organisasi (Human Resource, Produksi, Marketing, dan Keuangan)</li>
            <li>Identifikasi proses bisnis dalam perusahaan (pendidikan, manufaktur, kesehatan, pemerintahan, jasa, dan lain-lain</li>
            <li>Analisis proses bisnis</li>
            <li>Pemodelan proses bisnis</li>
            <li>Desain dan rekayasa ulang proses bisnis</li></ol>"
            , "S1 Sistem Informasi"],
            ['SIA205', 'Fungsi dan Proses Bisnis (Praktikum)', 2, 3, 2, 1, 'SII103', "<p>Mata kuliah ini menjelaskan tentang:&nbsp;</p><ol><li>Pengenalan tools untuk analisis dan pemodelan proses bisnis&nbsp;</li><li>Teknik pemodelan proses bisnis umum dalam organisasi (Human Resource, Produksi, Marketing, dan Keuangan)&nbsp;</li><li>Identifikasi proses bisnis dalam perusahaan (pendidikan, manufaktur, kesehatan, pemerintahan, jasa, dan lain-lain)&nbsp;</li><li>Analisis proses bisnis&nbsp;</li><li>Pemodelan proses bisnis&nbsp;</li><li>Desain dan rekayasa ulang proses bisnis</li>", "S1 Sistem Informasi"],
            ['SID201', 'Basis Data', 3, 3, 1, 1, null, "<p>Mata kuliah ini menjelaskan tentang:</p><ol>
            <li>Pengantar basis data, meliputi pengertian basis data, latar belakang penggunaan basis data, keuntungan basis data
            <li>Entitas, Instance, Atribut, Tipe Data
            <li>Atribut Mandatory, Optional, Volatile, Non Volatile, Unique, dan Primary
            <li>Relasi
            <li>Inheritance dan recursive modeling
            <li>ER-Diagram
            <li>Conceptual dan Physical Data Model
            <li>Changes dan historical modeling
            <li>Dependensi / Ketergantungan dalam relasi
            <li>Perbaikan skema dan normalisasi
            <li>Aljabar Relational dan Kalkulus Relational
            <li>SQL : Data Definition Language
            <li>SQL : Data Manipulation Language
            <li>SQL : Trigger
            <li>Ruang penyimpanan dan pengindeksan data
            <li>Studi Kasus: Merancang ER model (CDM) dan relational model (PDM), evaluasi dengan normalisasi,
            implementasi di DBMS
            ", "S1 Sistem Informasi"],
            ['SID203', 'Basis Data (Praktikum)', 2, 3, 2, 1, null, "<p>Mata kuliah ini membahas tentang:</p><ol>
            <li>Pengantar basis data, meliputi pengertian basis data, latar belakang penggunaan basis data, keuntungan basis data</li>
            <li>Entitas, Instance, Atribut, Tipe Data</li>
            <li>Atribut Mandatory, Optional, Volatile, Non Volatile, Unique, dan Primary</li>
            <li>Relasi</li>
            <li>Inheritance dan recursive modeling</li>
            <li>ER-Diagram</li>
            <li>Conceptual Data Modelling (CDM) dan Physical Data Model (PDM)</li>
            <li>Changes dan historical modeling</li>
            <li>Dependensi / Ketergantungan dalam relasi</li>
            <li>Perbaikan skema dan normalisasi</li>
            <li>Aljabar Relational dan Kalkulus Relational</li>
            <li>SQL : Data Definition Language (DDL)</li>
            <li>SQL : Data Manipulation Language (DML)</li></ol>", "S1 Sistem Informasi"],
            ['SIR201', 'Pemrograman Berorientasi Objek', 2, 3, 1, 1, 'MAT101', "<p>Mata kuliah ini menjelaskan tentang:</p><ol>
            <li>Pengantar Pemrograman Berorientasi Objek</li>
            <li>Basic expression</li>
            <li>Functions</li>
            <li>Class dan Object</li>
            <li>Constuctor dan Destructor</li>
            <li>Operator overloading dan konversi tipe data</li>
            <li>Inheritance</li>
            <li>Abstract Clas dan Interface</li>
            <li>Polymorphism</li>
            <li> Exception Handling</li>
            <li>Stream input output</li></ol>", "S1 Sistem Informasi"],
            ['SIR203', 'Pemrograman Berorientasi Objek (Praktikum)', 1, 3, 2, 1, 'MAT101', "<p>Mata kuliah ini menjelaskan tentang:</p><ol>
            <li>Ekpresi dasar</li>
            <li>Fungsi</li>
            <li>Class dan Object</li>
            <li>Constuctor dan Destructor</li>
            <li>Operator overloading dan konversi tipe data</li>
            <li>Inheritance</li>
            <li>Abstract Class dan Interface</li>
            <li>Polymorphism</li>
            <li>Exception Handling</li>
            <li>Stream input output</li></ol>", "S1 Sistem Informasi"],
            ['MAS234', 'Statistika Inferensi', 3, 3, 1, 1, 'MAS118', '<p>Mata kuliah ini menjelaskan tentang:&nbsp;</p><ol><li>Estimasi parameter didasarkan atas 1 atau 2 sampel&nbsp;</li><li>Pengujian hipotesis didasarkan atas 1 atau 2 sampel&nbsp;</li><li>Categorical association (Chi-squared test for association, Chi-squared test for goodness of fit, Sidenotes and an alternative to the Chi-squared test)&nbsp;</li><li>Analisis variance (ANOVA sederhana, Factorial ANOVA and MANOVA)&nbsp;</li><li>Analisis korelasi dan regression&nbsp;</li><li>Non-parametric tests</li><li>Analisis Faktor</li><li>Analisis Deskriminan</li>', "S1 Sistem Informasi"],
            ['SIJ201', 'Sistem Operasi', 2, 3, 1, 1, null, null, "S1 Sistem Informasi"],
            ['SIJ203', 'Sistem Operasi (Praktikum)', 1, 3, 2, 1, null, null, "S1 Sistem Informasi"],
            ['MAL204', 'Matematika Diskrit', 2, 3, 1, 1, null, "<p>Logika, Himpunan, Relasi dan Fungsi, Kombinatorial dan Peluang Diskrit, Graph dan Pohon</p>", "S1 Sistem Informasi"],
            ['SII301', 'Analisis dan Perancangan Sistem', 2, 4, 1, 1, 'MAT101', "<p>Mata Kuliah ini menjelaskan tentang:</p><ol><li>Pengumpulan data untuk identifikasi kebutuhan bisnis</li><li>Strukturisasi dan validasi kebutuhan bisnis;</li><li>Penyusunan kebutuhan solusi TI berdasarkan kebutuhan bisnis</li><li>Penyelarasan kebutuhan TI berdasarkan kebutuhan bisnis</li><li>Identifikasi spesifikasi komponen sistem</li><li>Metode desain sistem</li><li>Desain proses</li><li>Desain database</li><li>Desain berorientasi objek</li><li>Pembangunan prototype</li><li>Manajemen keberlanjutan perencanaan TI dan proyek pembangunan desain</li></ol>", "S1 Sistem Informasi"],
            ['SII314', 'Analisis dan Perancangan Sistem (Praktikum)', 1, 4, 2, 1, 'MAT101', "<p>Mata kuliah ini membahas tentang:</p><ol><li>Definisi dan tahapan analisis sistem</li><li>Data Flow Diagram (DFD)/Diagram Alir Data (DAD)</li><li>BPMN</li><li>Use Case</li><li>Class Diagram</li><li>Sequence Diagram</li><li>ERD</li><li>Perancangan Antar Muka</li></ol>", "S1 Sistem Informasi"],
            ['SIC201', 'Pembelajaran Mesin', 2, 4, 1, 1, 'MAL103', 'Mata Kuliah MAS234', "S1 Sistem Informasi"],
            ['SIC202', 'Pembelajaran Mesin (praktikum)', 1, 4, 2, 1, 'MAL103', 'Mata Kuliah MAS234', "S1 Sistem Informasi"],
            ['SIJ202', 'Jaringan Komputer', 3, 4, 1, 1, 'SIJ201', null, "S1 Sistem Informasi"],
            ['SIJ204', 'Jaringan Komputer(Praktikum)', 1, 4, 2, 1, 'SIJ201', "<p>Materi yang dibahas dalam praktikum ini adalah:</p><ol><li>Alat dan perangkat jaringan komputer (dasar jaringan komputer)</li><li>Perangkat lunak praktikum jaringan komputer (Packet Tracert/ GNS3)</li><li>Subnetting</li><li>Routing</li><li>DHCP</li><li>Samba Server</li><li>Web Server</li><li>FTP Server</li><li>Domain Name System</li><li>Monitoring</li></ol>", "S1 Sistem Informasi"],
            ['SIS202', 'Sistem Enterprise', 2, 4, 1, 1, 'SIA204', "<p>Mata kuliah disampaikan melalui ceramah, diskusi, dan pemberian tugas, membahas tentang: Software Enterprise Resource Planning (ERP); Modul Sistem Enterprise (manufacturing, supply chain management/SCM, finansial, proyek, human resource management, customer relationship management/CRM; Mengelola Informasi dalam Enterprise (Transaction processing systems, decision support system, executive information); Enterprise Modeling dan Business Process Re-engineering.</p>", "S1 Sistem Informasi"],
            ['MNM203', 'Kepemimpinan dan Manajemen Organisasi', 3, 4, 1, 1, null, null, "S1 Sistem Informasi"],
            ['SIS204', 'Pemrograman Web', 2, 4, 1, 1, 'MAT101', "<p>Materi yang dibahas dalam mata kuliah ini adalah:<ol><li>Konsep pemrograman web</li><li>Dasar HTML</li><li>Frontend Programming (CSS, Javascript)</li><li>Dasar-dasar PHP</li><li>OOP PHP</li><li>Backend Programming (Framework PHP)</li></ol></p>", "S1 Sistem Informasi"],
            ['SIS205', 'Pemrograman Web (Praktikum)', 1, 4, 2, 1, 'MAT101', "<p>Materi yang dibahas dalam mata kuliah ini adalah:<ol><li>Konsep pemrograman web</li><li>Dasar HTML</li><li>Frontend Programming (CSS, Javascript)</li><li>Dasar-dasar PHP</li><li>OOP PHP</li><li>Backend Programming (Framework PHP)</li></ol></p>", "S1 Sistem Informasi"],
            ['SIS304', 'Pemrograman Mobile', 2, 4, 1, 1, 'SIR201', "<p>Materi yang dibahas dalam mata kuliah ini adalah: <ol><li>Pengenalan Flutter</li><li>Dasar pemrograman Dart</li><li>Struktur Flutter</li><li>Mengembangkan UI dengan Flutter</li><li>Stateless dan Stateful Widget</li><li>Akses Database</li></ol></p>", "S1 Sistem Informasi"],
            ['SIS305', 'Pemrograman Mobile (Praktikum)', 2, 4, 2, 1, 'SIR201', "<p>Materi yang dibahas dalam mata kuliah ini adalah: <ol><li>Pengenalan Flutter</li><li>Dasar pemrograman Dart</li><li>Struktur Flutter</li><li>Mengembangkan UI dengan Flutter</li><li>Stateless dan Stateful Widget</li><li>Akses Database</li></ol></p>", "S1 Sistem Informasi"],
            ['SII213', 'Inovasi Sistem Informasi dan Teknologi', 2, 5, 1, 1, 'SIS202', "<p>Mata kuliah ini membahas tentang:</p><ol><li>Pengenalan pada inovasi</li><li>Disruptive innovation</li><li>Ekplorasi terhadap Inovasi Sistem Informasi dan Teknologi ( mengeksporasi teknologi seperti Digital Signature, Augmented Reality, Wearable Computing, RFID, Big data, data analytic dll. Selain itu juga belajar dari studi kasus di dunia tentang bagaimana perusahaan bisa mendobrak pasar dengan pemanfaatan teknologi)</li><li>Memformulasikan Inovasi yang terkait dengan sistem informasi.</li></ol>", "S1 Sistem Informasi"],
            ['BAE112', 'Bahasa Inggris II', 2, 5, 1, 2, 'BAE111', null, "S1 Sistem Informasi"],
            ['SIS309', 'Keamanan Sistem Informasi', 3, 5, 1, 0, 'SIJ202', "<p>Mata kuliah ini membahas Cybersecurity Essentials (CE) dan CyberOps Associate, yang meliputi materi:</p><ol><li>CE Cybersecurity: A World of Wizardry, Criminals, and Heroes</li><li>CE The Cybersecurity Sorcery Cube</li><li>CE Cybersecurity Threats, Vulnerabilities and Attacks</li><li>CE The Art of Protecting Secrets</li><li>CE The Art of Ensuring Integrity</li><li>CE The Realm of Five Nines</li><li>CE Fortifying the Kingdom</li><li>CE Joining the Order of Cyber Hero's</li><li>COA The Danger</li><li>COA Fighters in the War Against Cybercrime</li><li>COA The Windows Operating System</li><li>COA Linux Overview</li><li>COA Network Protocols</li><li>COA Ethernet and Internet Protocol (IP)</li><li>COA Principles of Network Security</li><li>COA Address Resolution Protocol</li><li>COA The Transport Layer</li><li>COA Network Services</li><li>COA Network Communication Devices</li><li>COA Network Security Infrastructure</li><li>COA Attackers and Their Tools</li><li>COA Common Threats and Attacks</li><li>COA Observing Network Operation</li><li>COA Attacking the Foundation</li><li>COA Attacking What We Do</li><li>COA Understanding Defense</li><li>COA Access Control</li><li>COA Threat Intelligence</li><li>COA Cryptography</li><li>COA Endpoint Protection</li><li>COA Endpoint Vulnerability Assessment</li><li>COA Technologies and Protocols</li><li>COA Network Security Data</li><li>COA Evaluating Alerts</li><li>COA Working with Network Security Data</li><li>COA Digital Forensics and Incident Analysis and Response</li></ol>", "S1 Sistem Informasi"],
            ['MNW401', 'Kewirausahaan dan Bisnis Sistem Informasi', 2, 5, 1, 1, null, "<p>Mata kuliah ini membahas tentang:</p><ol><li>Menjadi Wirausaha</li><li>Berpikir Perubahan dan Kreatif</li><li>Berorientasi pada Tindakan</li><li>Pengambilan Resiko dan Kepemimpinan</li><li>Etika Bisnis</li><li>Faktor “X”</li><li>Mencari Gagasan Usaha</li><li>Pemasaran</li><li>Manajemen Keuangan dan Pembiayaan Usaha</li><li>Memulai Sebuah Usaha Baru</li><li>Perencanaan Bisnis dan Contoh Rencana Bisnis</li></ol>", "S1 Sistem Informasi"],
            ['SII208', 'Desain Interaksi', 2, 5, 1, 1, 'SII301', "<p>Mata kuliah ini membahas tentang:</p><ol><li>Pengantar desain interaksi</li><li>Konsep interaksi</li><li>Aspek Cognitive</li><li>Interaksi Sosial</li><li>Interaksi Emosional</li><li>Sistem Interaktif</li><li>Data Gathering, analysis, interpretation, and presentation</li><li>Analisa kebutuhan</li><li>Designing, prototyping, and construction</li><li>Evaluasi</li></ol>", "S1 Sistem Informasi"],
            ['SII209', 'Desain Interaksi (Praktikum)', 1, 5, 2, 1, 'SII301', null, "S1 Sistem Informasi"],
            ['SII318', 'Pembangunan Perangkat Lunak', 2, 5, 1, 1, 'SII301', null, "S1 Sistem Informasi"],
            ['SII319', 'Pembangunan Perangkat Lunak (Praktikum)', 1, 5, 2, 1, 'SII301', null, "S1 Sistem Informasi"],
            ['SID303', 'Analisis dan Visualisasi Data', 2, 5, 1, 1, 'SIC201', null, "S1 Sistem Informasi"],
            ['SID304', 'Analisis dan Visualisasi Data (Praktikum)', 1, 5, 2, 1, 'SIC201', null, "S1 Sistem Informasi"],
            ['SIA301', 'Perencanaan Arsitektur Perusahaan', 2, 5, 1, 1, 'SII301', null, "S1 Sistem Informasi"],
            ['SIA302', 'Perencanaan Arsitektur Perusahaan (Praktikum)', 1, 5, 2, 1, 'SII301', null, "S1 Sistem Informasi"],
            ['KNT401', 'Kuliah Kerja Nyata - Belajar Bersama Masyarakat', 3, 6, 3, 1, null, 'Sudah Lulus 95 SKS', "S1 Sistem Informasi"],
            ['ETT301', 'Etika Profesi', 2, 6, 1, 1, null, "<p>Mata kuliah ini membahas tentang:</p>

            <ol>
                <li><b>Pengertian etika profesi dan tantangan etika dalam pemanfaatan teknologi informasi</b></li>
                <li><b>Profesi dan sertifikasi di bidang teknologi informasi</b></li>
                <li><b>Etika profesi di bidang teknologi informasi</b></li>
                <li><b>Hukum telematika dan cyberlaw</b></li>
                <li><b>Upaya pemerintah mendorong gerakan internet sehat dan aman</b></li>
                <li><b>Penerapan etika profesi bidang teknologi informasi di bidang pemerintahan, pendidikan, kesehatan, dan bisnis</b></li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['SII323', 'Tata Kelola Teknologi Informasi', 3, 6, 1, 1, 'SIA204', null, "S1 Sistem Informasi"],
            ['PNT497', 'Metodologi Penelitian', 2, 6, 1, 1, 'BAI101', null, "S1 Sistem Informasi"],
            ['KLT301', 'Praktek Kerja Lapangan', 6, 6, 3, 1, null, 'Sudah Lulus 100 SKS', "S1 Sistem Informasi"],
            ['MNG206', 'Manajemen Layanan Teknologi Informasi', 3, 6, 1, 0, null, "<p>Mata kuliah ini menjelaskan tentang:</p>

            <ol>
                <li><b>Penerapan manajemen layanan teknologi informasi</b></li>
                <li><b>Siklus hidup layanan teknologi informasi</b></li>
                <li><b>Konsep dan definisi umum manajemen layanan teknologi informasi</b></li>
                <li><b>Prinsip utama dan pemodelan manajemen layanan teknologi informasi</b></li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['MAS235', 'Metode Kuantitatif Bisnis', 3, 6, 1, 0, null, null, "S1 Sistem Informasi"],
            ['SII214', 'Teori Sistem Informasi', 3, 6, 1, 0, null, null, "S1 Sistem Informasi"],
            ['SII322', 'Temu Kembali Informasi', 3, 6, 1, 0, null, null, "S1 Sistem Informasi"],
            ['SIS308', 'Pembangunan Aplikasi Enterprise', 3, 6, 1, 0, null, null, "S1 Sistem Informasi"],
            ['MNG310', 'Manajemen Proyek Teknologi Informasi', 3, 6, 1, 0, null, null, "S1 Sistem Informasi"],
            ['SIC401', 'Sistem Berbasis Pengetahuan', 3, 7, 1, 0, null, "<p>Mata kuliah ini membahas tentang:&nbsp;</p><ol><li>Pengantar sistem berbasis pengetahuan&nbsp;</li><li>Representasi pengetahuan&nbsp;</li><li>Logika Predikat&nbsp;</li><li>Faktor ketidakpastian&nbsp;</li><li>Mesin Inferensi dan Reasoning&nbsp;</li><li>Sistem Pakar&nbsp;</li><li>Sistem fuzzy&nbsp;</li><li>Studi Kasus: Menggunakan metode rule based pada kasus tertentu</li></ol>", "S1 Sistem Informasi"],
            ['SIC402', 'Data Mining', 3, 7, 1, 0, null, "<p>Mata kuliah ini membahas tentang:</p>

            <ol>
                <li><b>Penggalian Pengetahuan dan Data Mining</b></li>
                <li><b>Pengertian Data</b></li>
                <li><b>Exploring Data</b></li>
                <li><b>Data Preprocessing</b></li>
                <li><b>Klassifikasi</b></li>
                <li><b>Clustering</b></li>
                <li><b>Association Rules</b></li>
                <li><b>Text dan Web Mining</b></li>
                <li><b>Eksplorasi Data Mining di berbagai bidang (Analisa Data Finansial dan Industri Retail)</b></li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['SIR301', 'Informatika Biomedik', 3, 7, 1, 0, null, "<p>Mata kuliah ini membahas tentang:</p>

            <ol>
                <li><b>Pengantar biomedis</b></li>
                <li><b>Deskripsi data biomedis (data numerik, data signal, data citra, dan data gen)</b></li>
                <li><b>Analisis dan permodelan data biomedis melalui telaah artikel ilmiah pilihan</b></li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['MAS324', 'Analisis Data Bisnis', 3, 7, 1, 0, null, "<p>Materi mata ajaran ini disampaikan secara tatap muka dan diskusi yang membahas tentang:</p>

            <ul>
                <li><b>Konsep Data Perusahaan</b></li>
                <li><b>Presentasi Data</b></li>
                <li><b>Data Warehouse</b></li>
                <li><b>Customer Analysis</b></li>
                <li><b>Revenue Generation</b></li>
                <li><b>Human Resource and Staff Utilization</b></li>
                <li><b>Product Management</b></li>
                <li><b>Productivity Analysis</b></li>
                <li><b>Cost Management</b></li>
                <li><b>Finance and Risk Management</b></li>
                <li><b>Supply Chain Management</b></li>
                <li><b>Sales Channel Analytics</b></li>
                <li><b>Behavior Analysis</b></li>
            </ul>
            
            <p>Studi kasus diberikan dalam penganalisaan data bisnis.</p>
            ", "S1 Sistem Informasi"],
            ['SII404', 'Audit Sistem Informasi', 3, 7, 1, 0, null, "<p>Materi disajikan dalam bentuk ceramah, diskusi, dan studi kasus, yang meliputi:&nbsp;</p><ol><li>Pendahuluan Audit Sistem Informasi&nbsp;</li><li>Perencanaan Audit Sistem Informasi&nbsp;</li><li>Identifikasi Resiko dan Kendali&nbsp;</li><li>Pelaksanaan Audit: Evaluasi Kendali dan Pengumpulan Bukti (Evidence)&nbsp;</li><li>Dokumentasi dan penyusunan laporan hasil audit&nbsp;</li><li>Verifikasi kelayakan prosedur dan dokumentasi audit&nbsp;</li><li>Penyusunan rekomendasi hasil audit&nbsp;</li><li>Identifikasi tindak lanjut audit&nbsp;</li><li>Verifikasi kelayakan tindak lanjut audit&nbsp;</li></ol><p>Studi kasus dilakukan terkait penyusunan dokumen perangkat audit, yang harus dibuat oleh auditor dengan mengacu ke standar atau kerangka kerja tertentu, pada ruang lingkup tertentu, dan domain bisnis tertentu.</p>", "S1 Sistem Informasi"],
            ['SIC404', 'Computer Vision', 3, 7, 1, 0, null, "<p>Mata kuliah ini membahas tentang:</p>

            <ol>
                <li><b>Pendahuluan Pemrosesan Citra</b></li>
                <li><b>Image Enhancement</b></li>
                <li><b>Edge dan Image Detection</b></li>
                <li><b>Image Feature Extraction</b></li>
                <li><b>Segmentation algorithms</b></li>
                <li><b>Klasifikasi pada data gambar</b></li>
                <li><b>Clustering pada data gambar</b></li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['SII408', 'Pengujian Perangkat Lunak', 3, 7, 1, 0, null, "<p>Materi disajikan dalam bentuk ceramah, diskusi, dan studi kasus, yang meliputi:</p>

            <ol>
                <li><b>Pendahuluan & Konsep Dasar Pengujian PL</b></li>
                <li><b>Dasar Dasar Pengujian</b></li>
                <li><b>Daur hidup</b></li>
                <li><b>Teknik desain pengujian</b></li>
                <li><b>Pengujian Static</b></li>
                <li><b>Manajemen Pengujian</b></li>
                <li><b>Alat pendukung pengujian</b></li>
                <li><b>Implementasi Pengujian Sistem dan Kakas untuk pengujian PL</b></li>
                <li><b>Perkembangan terkini terkait riset/praktik pengujian PL</b></li>
            </ol>
            
            <p>Studi kasus (case method) dilakukan terkait pengujian perangkat lunak terutama untuk teknik black box dan white box testing, implementasi menggunakan kakas (misalnya melakukan unit testing, atau Behavior-driven development), dan juga menyusun dokumen pengujian untuk proyek perangkat lunak sebagai final project. Final proyek bisa juga berupa draft paper terkait pengujian perangkat lunak.</p>
            ", "S1 Sistem Informasi"],
            ['MNG402', 'Manajemen Resiko Teknologi Informasi', 3, 7, 1, 0, null, "<p>Materi disajikan dalam bentuk ceramah, diskusi, dan studi kasus, yang meliputi:</p>

            <ol>
                <li><b>Pendahuluan manajemen Risiko TI</b></li>
                <li><b>Penentuan konteks Risiko</b></li>
                <li><b>Penilaian Risiko (risk assessment)</b>
                    <ul>
                        <li>Penilaian Risiko secara kuantitatif</li>
                        <li>Penilaian Risiko secara kualitatif</li>
                    </ul>
                </li>
                <li><b>Identifikasi Risiko</b></li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['SII317', 'Perancangan Sistem Interaksi E-Health', 3, 7, 1, 0, null, "<p>Mata kuliah ini membahas tentang:</p>

            <ol>
                <li>Sistem interaksi</li>
                <li>Konsep data, informasi, dan pengetahuan kesehatan</li>
                <li>Standar data dan kode medis</li>
                <li>Electronic Medical Record</li>
                <li>Proses bisnis yang terkait dengan e-health</li>
                <li>Tren dan perkembangan e-health</li>
                <li>Consumer Health Informatics</li>
                <li>Analisis kebutuhan e-health</li>
                <li>Desain sistem e-health</li>
                <li>Public Health Informatics</li>
            </ol>
            ", "S1 Sistem Informasi"],
            ['PNT499', 'Skripsi', 6, 8, 1, 1, 'Sudah/sedang mengambil 12 sks mata kuliah pilihan bidang minat', null, "S1 Sistem Informasi"],
        ];


        foreach ($matkul as $m) {
            Mata_Kuliah::insert([
                'kodeMK' => $m[0],
                'namaMK' => $m[1],
                'sks' => $m[2],
                'semester' => $m[3],
                'jenisMK' => $m[4],
                'kategoriMK' => $m[5],
                'prasyaratTambahan' => $m[6],
                'deskripsiMK' => $m[7],
                'namaProdi' => $m[8]
            ]);
        }
    }
}
