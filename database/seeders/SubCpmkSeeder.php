<?php

namespace Database\Seeders;

use App\Models\SubCPMK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCpmkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs = [
            ['kodeSubCPMK' => 'Sub-CPMK0111', 'deskripsiSubCPMK' => 'Mampu menjelaskan konsep dasar sistem', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0112', 'deskripsiSubCPMK' => 'Mampu menjelaskan konsep informasi dan sistem informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0121', 'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0122', 'deskripsiSubCPMK' => 'Mampu menganalisis sistem organisasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0131', 'deskripsiSubCPMK' => 'Mampu menilai proses yang ada pada organisasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0132', 'deskripsiSubCPMK' => 'Mampu menilai sistem pengolahan data pada organisasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0141', 'deskripsiSubCPMK' => 'Mampu menilai peran sistem informasi pada organisasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0142', 'deskripsiSubCPMK' => 'Mampu memberikan rekomendasi pengambilan keputusan di organisasi', 'kodeCPMK' => 'CPMK014'],

            // Sistem Berbasis Pengetahuan (kode CPMK masih dummy)
            ['kodeSubCPMK' => 'Sub-CPMK0151', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami data, Informasi, dan Pengetahuan (Knowledge) dalam system berbasis pengetahuan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0152', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami jenis cara representasi pengetahuan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0153', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses reasoning dan inferensi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0154', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan Sistem Pakar Berbasis Pengetahuan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0155', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami factor ketidakpastian', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0156', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan konsep dasar logika fuzzy', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0157', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan konsep CBR', 'kodeCPMK' => 'CPMK014'],

            // Audit Sistem Informasi (kode CPMK masih dummy)
            ['kodeSubCPMK' => 'Sub-CPMK0160', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami tujuan dan fungsi Audit Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0161', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami resiko Sistem Informasi dan konsep dasar audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0162', 'deskripsiSubCPMK' => 'Mahasiswa mampu mengetahui Standard dan Guideline untuk Audit Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0163', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami konsep dasar kontrol internal', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0164', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami manajemen resiko dari Fungsi Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0165', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses perencanaan Audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0166', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0167', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami tools dan teknik yang digunakan saat Audit Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0168', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses pengelolaan audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0169', 'deskripsiSubCPMK' => 'Mahasiswa mampu mamahami proses pembuktian pada saat audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0170', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami proses follow-up laporan audit', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0171', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami perumusan strategi dan tata kelola IT', 'kodeCPMK' => 'CPMK014'],

            //Pemograman mobile prak dan teo
            ['kodeSubCPMK' => 'Sub-CPMK0181', 'deskripsiSubCPMK' => 'Memahami Flutter, Dart Basic, Extends, Mixin Stateless & Stateful, dan menggunakan komponen Widget Dasar Text Widget, Visible & Invisible Widget', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0182', 'deskripsiSubCPMK' => 'Menggunakan komponen List view, List Title Image Widget, Extract Widget, Penggunaan stateful, Mapping list, Date Format dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0183', 'deskripsiSubCPMK' => 'Menggunakan komponen AppBar Widget, TabBar Widget, Fitur Text Field, Dekorasi Text, Penggunaan Text Field, Grid View, Dialog dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0184', 'deskripsiSubCPMK' => 'Menggunakan komponen Dismissible, Navigation, Routes, Drawer, Switch, Model dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0185', 'deskripsiSubCPMK' => 'Menggunakan Thema Responsive vs adaptive, Media Query, Flexible dan Expanded, Fitted Box, Layout Builder, Cupertino dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0186', 'deskripsiSubCPMK' => 'Menggunakan komponen : Date Picker, State Management Provider, Nested Model + Provider, Consumer + Provider dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0187', 'deskripsiSubCPMK' => 'Menggunakan : Multi Provider, State Management Provider - Review HTTP Request / Rest Api, HTTP Request Post Method dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0188', 'deskripsiSubCPMK' => 'Menggunakan : HTTP Request dengan Firebase dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0189', 'deskripsiSubCPMK' => 'Memahami Application Lifecycle Menggunakan Future Builder, Key, CheckBox, DropDown dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0190', 'deskripsiSubCPMK' => 'Mengimplementasikan Authentication dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0191', 'deskripsiSubCPMK' => 'Mengimplementasikan : Bloc Provider, Bloc vs Cubit, Multi Bloc Provider dan Bloc Listener dalam studi kasus', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0192', 'deskripsiSubCPMK' => 'Mengimplementasikan :Bloc consumer, Equatable dalam studi kasus', 'kodeCPMK' => 'CPMK014'],

            //Pemograman web prak dan teo
            ['kodeSubCPMK' => 'Sub-CPMK0123', 'deskripsiSubCPMK' => 'Memahami dasar-dasar kerja web dan dasar pemroraman web', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0124', 'deskripsiSubCPMK' => 'Mengimplementasikan HTML pada Proyek Web Sederhana', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0125', 'deskripsiSubCPMK' => 'Mengimplementasikan frontend programming (CSS) pada Proyek Web Sederhana', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0126', 'deskripsiSubCPMK' => 'Mengimplementasikan frontend programming (Javascript) pada Proyek Web Sederhana', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0127', 'deskripsiSubCPMK' => 'Memahami dasar-dasar backend programming (PHP)', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0128', 'deskripsiSubCPMK' => 'Memahami dasar-dasar OOP pada backend programming (PHP)', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0129', 'deskripsiSubCPMK' => 'Mengimplementasikan Backend programming (Framework berbasis PHP) pada Proyek Web Sederhana', 'kodeCPMK' => 'CPMK014'],

            //Sistem Enterprise
            ['kodeSubCPMK' => 'Sub-CPMK0211', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang konsep dasar Sistem Informasi Enterprise', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0212', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang perkembangan sistem perencanaan sumber daya enterprise', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0213', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang fungsi marketing dan proses penjualan', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0214', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang Customer Relationship Management (CRM)', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0215', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang perencanaan produksi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0216', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang manajemen rantai pasok', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0217', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang proses akuntansi dalam sistem enterprise', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0218', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang manajemen sumber daya manusia dalam sistem enterprise', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0219', 'deskripsiSubCPMK' => 'Mahasiswa mampu melakukan analisis dan membangun model proses dalam enterprise', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0220', 'deskripsiSubCPMK' => 'Mahasiswa mampu melakukan analisis dan perbaikan terhadap model proses bisnis', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0221', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang pengelolaan informasi pada sistem enterprise', 'kodeCPMK' => 'CPMK014'],

            //APS Prak
            ['kodeSubCPMK' => 'Sub-CPMK0222', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan definisi analisis sistem dan menjelaskan tahapan analisis sistem.', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0223', 'deskripsiSubCPMK' => 'Mahasiswa mampu melakukan analisis terhadap suatu sistem informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0224', 'deskripsiSubCPMK' => 'Mahasiswa mampu membuat pemodelan proses dengan menggunakan BPMN', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0225', 'deskripsiSubCPMK' => 'Mahasiswa mampu membuat pemodelan proses dengan menggunakan Use Case dan Diagram Kelas', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0226', 'deskripsiSubCPMK' => 'Mahasiswa mampu membuat pemodelan proses dengan menggunakan Diagram Sequence', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0227', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan konsep dan pemodelan data pada suatu Sistem Informasi', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0228', 'deskripsiSubCPMK' => 'Mahasiswa dapat merancang antarmuka sistem sesuai dengan hasil analisis kebutuhan.', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0229', 'deskripsiSubCPMK' => 'Kompilasi', 'kodeCPMK' => 'CPMK014'],

            //Agama Katolik
            ['kodeSubCPMK' => 'Sub-CPMK0230', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mendiskusikan (A2) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK002'],
            ['kodeSubCPMK' => 'Sub-CPMK0231', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mengaitkan (A4) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK002'],
            
            //Agama Protestan
            ['kodeSubCPMK' => 'Sub-CPMK0232', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mendiskusikan (A2) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK001'],
            
            // Agama Budha
            ['kodeSubCPMK' => 'Sub-CPMK0233', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mendiskusikan (A2) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK005'],
            
            //Agama Hindu
            ['kodeSubCPMK' => 'Sub-CPMK0234', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mendiskusikan (A2) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK004'],
            ['kodeSubCPMK' => 'Sub-CPMK0235', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mengaitkan (A4) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK004'],
            
            // Agama Budha
            ['kodeSubCPMK' => 'Sub-CPMK0236', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mendiskusikan (A2) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK006'],
            
            //Agama Islam
            ['kodeSubCPMK' => 'Sub-CPMK0237', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mendiskusikan (A2) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK003'],
            ['kodeSubCPMK' => 'Sub-CPMK0238', 'deskripsiSubCPMK' => 'Mahasiswa mampu menunjukkan (C3), mengaitkan (A4) dan mengerjakan (P4).', 'kodeCPMK' => 'CPMK003'],
            
            //047
            // 1. RPS Bahasa Indonesia 
            // 1. RPS Biologi Dasar
            // 1. RPS Data dan Pustaka
            // 1. RPS Kalkulus
            // 1. RPS Kewarganegaraan
            // 1. RPS Kimia Dasar

            //FPB Praktikum
            ['kodeSubCPMK' => 'Sub-CPMK0240', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami definisi, pemodelan bisnis, proses operasi, informasi dan manajemen pada suatu bisnis', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0241', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan proses bisnis umum dalam organisasi', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0242', 'deskripsiSubCPMK' => 'Mahasiswa mampu melakukan identifikasi proses bisnis dalam perusahaan', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0243', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan pengertian analisis proses bisnis', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0244', 'deskripsiSubCPMK' => 'Mampu membuat model proses bisnis dengan diagram BPMN', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0245', 'deskripsiSubCPMK' => 'Mampu menganalisa proses bisnis dan membuat model proses bisnis', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0246', 'deskripsiSubCPMK' => 'Mengetahui abstraksi dari model bisnis proses', 'kodeCPMK' => 'CPMK024'],
            ['kodeSubCPMK' => 'Sub-CPMK0247', 'deskripsiSubCPMK' => 'Mampu menjelaskan transformasi suatu model proses', 'kodeCPMK' => 'CPMK024'],

            //Statistika Inferensi
            ['kodeSubCPMK' => 'Sub-CPMK0248', 'deskripsiSubCPMK' => '1.Mampu menjelaskan alasan sebuah sampel menjadi satu-satunya media dalam mempelajari populasi 2.Mampu menjelaskan dan menghitung kesalahan sampling (sampling error) 3.Mampu menjelaskan Teorema Limit Sentral dalam estimasi 4.Mampu mengestimasi titik dan interval kepercayaan untuk rerata dan proporsi 5.Mampu menghitung besar sampel 6.Mampu melakukan estimasi parameter mean 7.Mampu melakukan estimasi parameter selisih 2 mean', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0249', 'deskripsiSubCPMK' => '1.Mampu melakukan Estimasi Parameter Varians 2.Mampu melakukan Estimasi Parameter rasio 2 varians 3.Mampu melakukan Estimasi Parameter Proporsi 4.Mampu melakukan Estimasi Parameter selisih 2 proporsi', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0250', 'deskripsiSubCPMK' => '1.Mampu menjelaskan dan menerapkan lima tahap uji hipotesis 2.Mampu membedakan uji hipotesis satu arah versus dua arah 3.Mampu menguji hipotesis tentang rerata populasi dan proporsi populasi', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0251', 'deskripsiSubCPMK' => '1.Mampu menguji hipotesis tentang rerata dua populasi 2.Mampu menguji hipotesis tentang proporsi dua populasi 3.Mampu membedakan dua sampel independen dan sampel dependen (pasangan) 4.Mampu menguji hipotesis tentang rerata untuk sampel pasangan', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0252', 'deskripsiSubCPMK' => 'Mampu menjelaskan tentang Categorical association', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0253', 'deskripsiSubCPMK' => '1. Mampu menjelaskan karakteristik distribusi F 2. Mampu menguji homogenitas data (membandingkan dua variansi) 3. Mampu menggunakan ANOVA dan MANOVA', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0254', 'deskripsiSubCPMK' => '1. Mampu menghitung nilai beberapa jenis korelasi 2. Mampu menguji signifikansi hubungan dua peubah', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0255', 'deskripsiSubCPMK' => '1. Mampu menguji signifikansi pengaruh peubah bebas Model regresi linier sederhana 2. Mampu menginterpretasikan kekuatan Model regresi linier sederhana', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0256', 'deskripsiSubCPMK' => '1. Mampu menguji signifikansi pengaruh peubah bebas Model regresi linier Berganda 2. Mampu menginterpretasikan kekuatan Model regresi linier Berganda', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0257', 'deskripsiSubCPMK' => '1. Mampu menjelaskan kerangka memilih teknik analisis nonparametrik yang tepat 2. Mampu menguji hipotesis pada saat data tidak normal, seperti uji tanda, uji keacakan 3. Mampu menguji hubungan dua peubah saat data tidak normal 4. Mampu menguji hipotesis untuk tiga atau lebih kelompok saat data tidak normal', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0258', 'deskripsiSubCPMK' => 'Mampu menggunakan Analiss Faktor dan meng-interpretasikan hasilnya', 'kodeCPMK' => 'CPMK029'],
            ['kodeSubCPMK' => 'Sub-CPMK0259', 'deskripsiSubCPMK' => 'Mampu menggunakan Analiss Deskriminan dan meng-interpretasikan hasilnya', 'kodeCPMK' => 'CPMK029'],

            //Matriks dan Tranformasi Linier
            ['kodeSubCPMK' => 'Sub-CPMK0260', 'deskripsiSubCPMK' => 'Mampu menjelaskan persamaan dasar pendukung pada aljabar linear', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0261', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang matriks, sifat-sifat matriks, melakukan perhitungan terhadap penjumlahan, pengurangan dan perkalian matriks', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0262', 'deskripsiSubCPMK' => 'Mahasiswa dapat menghitung operasi matriks dengan menggunakan sifat -sifat matriks', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0263', 'deskripsiSubCPMK' => 'Mahasiswa mampu menghitung determinan matriks', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0264', 'deskripsiSubCPMK' => 'Mahasiswa dapat menghitung inverse matriks', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0265', 'deskripsiSubCPMK' => 'Mahasiswa mampu menghitung Determinan menggunakan Ekspansi Laplace', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0266', 'deskripsiSubCPMK' => 'Mahasiswa mampu menyelesaikan matriks menggunakan operasi baris elementer', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0267', 'deskripsiSubCPMK' => 'Sistem Persamaan Linier', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0268', 'deskripsiSubCPMK' => 'Mahasiswa mampu menghitung Vector, menghitung sudut vektor', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0269', 'deskripsiSubCPMK' => 'Mahasiswa mampu membuat matriks Eigen Value dan Eigen Vektor', 'kodeCPMK' => 'CPMK016'],
            ['kodeSubCPMK' => 'Sub-CPMK0270', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami pengertian transformasi linier, syarat transformasi linier dan matriks penyajian transformasi linier', 'kodeCPMK' => 'CPMK016'],
        ];

        foreach ($subs as $sub) {
            SubCPMK::create($sub);
        }
    }
}
