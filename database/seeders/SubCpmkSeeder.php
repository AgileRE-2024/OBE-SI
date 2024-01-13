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

            //Sistem Operasi Praktikum kode dummy
            // ['kodeSubCPMK' => 'Sub-CPMK0239', 'deskripsiSubCPMK' => 'Mahasiswa mampu Memahami struktur dasar sistem komputer dan Sistem operasi komputer serta perkembangan dan fungsi fungsinya.', 'kodeCPMK' => 'CPMK072'],
            // ['kodeSubCPMK' => 'Sub-CPMK0240', 'deskripsiSubCPMK' => 'MANAJEMEN PROSES Mahasiswa dapat memahami konsep dasar manajemen prosesor dan Komunikasi antar proses, dan Proses dalam sistem terdistribusi.', 'kodeCPMK' => 'CPMK072'],
            // ['kodeSubCPMK' => 'Sub-CPMK0241', 'deskripsiSubCPMK' => 'TEKNIK PENJADWALAN PROSESOR Mahasiswa dapat memahami macam-macam teknik penjadwalan prosesor satu tingkat maupun multi tingkat,serta metode evaluasi penjadwalan.', 'kodeCPMK' => 'CPMK072'],
            // ['kodeSubCPMK' => 'Sub-CPMK0242', 'deskripsiSubCPMK' => 'MANAJEMEN MEMORI Mahasiswa dapat memahami memori, penggunaan memori, dan teknik pengalokasian memori', 'kodeCPMK' => 'CPMK072'],
            // ['kodeSubCPMK' => 'Sub-CPMK0243', 'deskripsiSubCPMK' => 'SISTEM FILE (BERKAS) Mahasiswa dapat
            // mengetahui tentang file,
            // directory, sekuritas file, dan
            // implementasi sistem file', 'kodeCPMK' => 'CPMK072'],
            // ['kodeSubCPMK' => 'Sub-CPMK0244', 'deskripsiSubCPMK' => 'Mahasiswa mampu
            // mengkonfigurasi dan
            // mengelola sistem operasi
            // berbasis windows, linux dan
            // Java Virtual Machine', 'kodeCPMK' => 'CPMK072'],



            //Basis Data
            ['kodeSubCPMK' => 'Sub-CPMK0239', 'deskripsiSubCPMK' => '- Mampu menjelaskan definisi entitas, instance, atribut
            - Mampu menjelaskan entitas kuat dan lemah
            - Mampu mengidentifikasi entitas dari suatu kasus
            - Mampu mencontohkan instance dari suatu entitas
            - Mampu menentukan atribut dari suatu entitas
            - Mampu membedakan definisi atribut single dan multivalued
            - Mampu mencontohkan atribut single dan atribut multivalued
            - Mampu membedakan definisi atribut simple, composite dan derived
            - Mampu mencontohkan atribut simple, composite, dan derived
            - Mampu mengklasifikasikan atribut dari suatu entitas sesuai dengan jenisnya
            - Mampu membedakan tipe data atribut (CHAR, VARCHAR, INTEGER, FLOAT, DOUBLE, BOOLEAN, DATE, TIME, TIMESTAMP, BLOB)
            - Mampu menerapkan tipe data atribut (CHAR, VARCHAR, INTEGER, FLOAT, DOUBLE, BOOLEAN, DATE, TIME, TIMESTAMP, BLOB)
            - Mampu menerapkan tipe data yang sesuai untuk suatu atribut', 'kodeCPMK' => 'CPMK014'],
            ['kodeSubCPMK' => 'Sub-CPMK0240', 'deskripsiSubCPMK' => '- Mampu menjelaskan definisi atribut mandatory
            - Mampu menjelaskan definisi atribut opsional
            - Mampu menerapkan pemakaian atribut mandatory dan opsional
            - Mampu menjelaskan definisi atribut volatile
            - Mampu menjelaskan definisi atribut non-volatile
            - Mampu mengklasifikasikan atributvolatile dan non-volatile
            - Mampu menjelaskan definisi atribut unique
            - Mampu menjelaskan definisi atribut primary
            - Mampu menerapkan pemakaian atribut primary dan unique', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0241', 'deskripsiSubCPMK' => '- Mampu mengidentifikasi pentingnya relasi dalam proses bisnis
            - Mampu menjelaskan definisi relasi unary, binary, dan n-ary (degree of relationship)
            - Mampu menentukan degree of relationship dari relasi
            - Mampu menentukan opsionalitas pada relasi
            - Mampu menjelaskan kardinalitas relasi
            - Mampu menerapkan kardinalitas dalam relasi
            - Mampu menjelaskan definisi foreign key
            - Mampu menjelaskan hubungan foreign key dan primary key', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0242', 'deskripsiSubCPMK' => '- Menjelaskan definisi relasi inheritance
            - Mampu menjelaskan definisi super type dan sub type
            - Mampu menerapkan relasi inheritance 1 subtype
            - Mampu menerapkan pemakaian relasi inheritance 2 subtype dengan 2 subtype tersebut berbeda sama sekali dari supertype
            - Mampu menerapkan pemakaian relasi inhertiance 2 subtype, dengan 1 subtype yang menyerupai supertype
            - Mampu menerapkan pemakaian relasi inhertiance lebih dari 2 subtype
            - Mampu menjelaskan definisi relasi rekursi
            - Mampu menerapkan pemakaian relasi rekursi di berbagai variasi studi kasus', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0243', 'deskripsiSubCPMK' => '- Mampu menjelaskan kegunaan perancangan sistem dengan Entity Relationship Diagram
            - Mampu menerapkan transaksi sederhana dengan Entity Relationship Diagram
            - Mampu menerapkan 1 proses bisnis dengan Entity Relationship Diagram Mampu menerapkan 2 proses bisnis dengan Entity Relationship Diagram
            - Mampu merancang sistem sesuai kebutuhan bisnis dengan Entity Relationship Diagram', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0244', 'deskripsiSubCPMK' => '- Mampu menjelaskan tujuan perancangan dengan Conceptual Data Model
            - Mampu membandingkan perbedaan rancangan dengan Conceptual Data Model dan Entity Relationship Diagram
            - Mampu merancang transaksi sederhana dengan Conceptual Data Model menggunakan tools
            - Mampu merancang basis data untuk 1 proses bisnis dengan Conceptual Data Model menggunakan tools
            - Mampu merancang basis data untuk 2 proses bisnis dengan Conceptual Data Model menggunakan tools
            - Mampu merancang sistem sesuai dengan kebutuhan bisnis dengan format Conceptual Data Model menggunakan tools', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0245', 'deskripsiSubCPMK' => '- Mampu menjelaskan tujuan historical modelling
            - Mampu menjelaskan tujuan historical modelling time
            - Mampu menerapkan historical modelling time pada rancangan basis data
            - Mampu menjelaskan tujuan historical modelling price
            - Mampu menerapkan historical modelling price pada rancangan basis data
            - Mampu menerapkan historical modelling pada studi kasus', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0246', 'deskripsiSubCPMK' => '- Mampu menjelaskan definisi dependensi dalam relasi
            - Mampu menerapkan konsep dependensi dalam relasi', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0247', 'deskripsiSubCPMK' => '- Mampu menjelaskan tujuan normalisasi
            - Mampu menjelaskan tujuan normalisasi 1NF
            - Mampu menjelaskan syarat normalisasi 1NF
            - Mampu menerapkan normalisasi 1NF
            - Mampu menjelaskan tujuan normalisasi 2NF
            - Mampu menjelaskan syarat normalisasi 2NF
            - Mampu menerapkan normalisasi 2NF
            - Mampu menjelaskan tujuan normalisasi 3NF
            - Mampu menjelaskan syarat normalisasi 3NF
            - Mampu menerapkan normalisasi 3NF
            - Mampu menerapkan normalisasi 1NF-3NF pada studi kasus', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0248', 'deskripsiSubCPMK' => '- Mampu menjelaskan definisi aljabar relational
            - Mampu memahami operasi dalam aljabar relational
            - Mampu menerapkan aljabar relational
            - Mampu menjelaskan definisi kalkulus relational
            - Mampu menerapkan kalkulus relational', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0249', 'deskripsiSubCPMK' => '- Mampu menjelaskan tujuan Data Definition Language
            - Mampu mencontohkan SQL yang termasuk Data Definition Language
            - Mampu menerapkan SQL Create Database menggunakan tools
            - Mampu menerapkan SQL Create Table menggunakan tools
            - Mampu menerapkan Add Constraint Not Null
            - Mampu menerapkan Add Constraint Unique
            - Mampu menerapkan Add Constraint Primary Key menggunakan tools
            - Mampu menerapkan SQL Add Constraint Foreign Key (Cascade, Restrict menggunakan tools
            - Mampu menerapkan SQL Alter Table
            - Mampu menerapkan SQL Insert
            - Mampu menerapkan SQL Insert sebagian atribut
            - Mampu menerapkan SQL Update 1 atribut
            - Mampu menerapkan SQL Update multi atribut
            - Mampu menerapkan SQL Drop Table
            - Mampu menerapkan SQL Drop Database', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0250', 'deskripsiSubCPMK' => '- Mampu menjelaskan tujuan Data Manipulation Language
            - Mampu mencontohkan SQL yang termasuk Data Manipulation Language
            - Mampu menerapkan SQL Select 1 tabel
            - Mampu menerapkan SQL Select 2 tabel
            - Mampu menerapkan SQL Select lebih dari 2 tabel
            - Mampu menerapkan SQL Select Distinct
            - Mampu menerapkan SQL Select Order By
            - Mampu menerapkan nested query
            - Mampu menerapkan SQL Maximum Group By
            - Mampu menerapkan SQL Minimum Group By
            - Mampu menerapkan SQL Count Group By
            - Mampu menerapkan SQL Sum Group By
            - Mampu menerapkan SQL Order By pada SQL Agregasi
            - Mampu menerapkan SQL Join 2 tabel
            - Mampu menerapkan SQL Join lebih dari 2 tabel
            - Mampu menerapkan SQL Inner Join 2 tabel
            - Mampu menerapkan SQL Inner Join lebih dari 2 tabel
            - Mampu menerapkan SQL Left Join 2 tabel
            - Mampu menerapkan SQL Left Join lebih dari 2 tabel
            - Mampu menerapkan SQL RightJoin 2 tabel
            - Mampu menerapkan SQL Right Join lebih dari 2 tabel
            - Mampu menerapkan SQL Full Outer Join 2 tabel
            - Mampu menerapkan SQL Left Outer Join 2 tabel
            - Mampu menerapkan SQL Left Outer Join lebih dari 2 tabel
            - Mampu menerapkan SQL Right Outer Join 2 tabel
            - Mampu menerapkan SQL Right Outer Join lebih dari 2 tabel
            ', 'kodeCPMK' => 'CPMK025'],
            ['kodeSubCPMK' => 'Sub-CPMK0251', 'deskripsiSubCPMK' => '- Mampu menjelaskan definisi trigger
            - Mampu menjelaskan penggunaan trigger
            - Mampu memahami syntax pembuatan trigger
            - Mampu menerapkan trigger untuk update stok
            - Mampu menerapkan trigger untuk log audit
            - Mampu menerapkan trigger untuk membangkitkan primary key', 'kodeCPMK' => 'CPMK025'],

            //Basis Data Praktikum
            ['kodeSubCPMK' => 'Sub-CPMK0252', 'deskripsiSubCPMK' => 'Mahasiswa dapat mampu menjelaskan lingkungan basis data dan entitas dalam database', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0253', 'deskripsiSubCPMK' => 'Mahasiswa dapat memahami dan mengetahui tentang menjelaskan atribut dan tipe data dalam database', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0254', 'deskripsiSubCPMK' => 'Mahasiswa dapat menjelaskan relasi dalam database', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0255', 'deskripsiSubCPMK' => 'Mahasiswa dapat membuat mapping diagram', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0256', 'deskripsiSubCPMK' => 'Mahasiswa dapat menjelaskan dan menerapkan historical modelling', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0257', 'deskripsiSubCPMK' => 'Mahasiswa dapat menjelaskan dependency data.', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0258', 'deskripsiSubCPMK' => 'Mahasiswa dapat menjelaskan normalisasi data dan menerapkan normalisasi data dalam tabel dan PDM', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0259', 'deskripsiSubCPMK' => 'Mahasiswa dapat menerapkan penggunaan sintaks Data Definition Language (DDL)', 'kodeCPMK' => 'CPMK026'],
            ['kodeSubCPMK' => 'Sub-CPMK0260', 'deskripsiSubCPMK' => 'Mahasiswa dapat menerapkan penggunaan sintaks Data Manipulation Language (DML)', 'kodeCPMK' => 'CPMK026'],

            //Pemrograman Berbasis Objek
            ['kodeSubCPMK' => 'Sub-CPMK0261', 'deskripsiSubCPMK' => 'Mahasiswa dapat memahami konsep dasar pemrograman berorientasi objek dan Basic expression', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0262', 'deskripsiSubCPMK' => 'Mahasiswa mampu mendefinisikan fungsi dan penggunaan Method', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0263', 'deskripsiSubCPMK' => 'Mahasiswa mampu membuatkan class dan objek dalam program JAVA yang sederhana', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0264', 'deskripsiSubCPMK' => 'Mahasiswa memahami overloading dan konversi tipe data', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0265', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menggunakan konstruktor', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0266', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menerapkan Array', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0267', 'deskripsiSubCPMK' => 'Mahasiswa memahami konsep inheritance', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0268', 'deskripsiSubCPMK' => 'Mahasiswa memahami konsep abstract class', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0269', 'deskripsiSubCPMK' => 'Mahasiswa memahami konsep Interface', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0270', 'deskripsiSubCPMK' => 'Mahasiswa memahami konsep Polymorphism', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0271', 'deskripsiSubCPMK' => 'Mahasiswa memahami dan mampu membuat Package', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0272', 'deskripsiSubCPMK' => 'Mahasiswa memahami dan mampu menggunakan Static', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0273', 'deskripsiSubCPMK' => 'Mahasiswa memahami konsep Exception Handling', 'kodeCPMK' => 'CPMK027'],
            ['kodeSubCPMK' => 'Sub-CPMK0274', 'deskripsiSubCPMK' => 'Mahasiswa memahami konsep Stream input output', 'kodeCPMK' => 'CPMK027'],

            //047
            // 1. RPS Bahasa Indonesia
            // 1. RPS Biologi Dasar
            // 1. RPS Data dan Pustaka
            // 1. RPS Kalkulus
            // 1. RPS Kewarganegaraan
            // 1. RPS Kimia Dasar

            //etika profesi
            ['kodeSubCPMK' => 'Sub-CPMK0601', 'deskripsiSubCPMK' => 'Mahasiswa mampu mendefinisikan pengertian etika, membedakan etika dan etiket, membedakan etika dan moralitas, menyebutkan pentingnya etika untuk bidang TI', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0602', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan menguraikan profesi dan kompetensi bidang Teknologi Informasi dan Komunikasi ', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0603', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan menguraikan profesi dan kompetensi bidang Teknologi Informasi dan Komunikasi', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0604', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan asosiasi dan sertifikasi bidang Teknologi Informasi dan Komunikasi', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0605', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan etika di dunia maya (Internet)', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0606', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang cybercrime', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0607', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang cybercrime', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0608', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisis aturan hukum dan regulasi terkait etika profesi dalam bidang teknologi informasi dan komunikasi', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0609', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisis aturan hukum dan regulasi terkait etika profesi dalam bidang teknologi informasi dan komunikasi', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0610', 'deskripsiSubCPMK' => 'Mahasiswa mampu menentukan etika yang sesuai dalam pemanfaatan media sosial', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0611', 'deskripsiSubCPMK' => 'Mahasiswa mampu menguraikan penerapan data analytics di Internet dan etikanya', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0612', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisis isu-isu etika pada penerapan Teknologi Informasi dan Komunikasi yang tepat di bidang bisnis, kesehatan, dan pemerintahan', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0613', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisis isu-isu etika pada penerapan Teknologi Informasi dan Komunikasi yang tepat di bidang bisnis, kesehatan, dan pemerintahan', 'kodeCPMK' => 'CPMK050'],
            ['kodeSubCPMK' => 'Sub-CPMK0614', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisis isu-isu etika pada penerapan Teknologi Informasi dan Komunikasi yang tepat di bidang bisnis, kesehatan, dan pemerintahan', 'kodeCPMK' => 'CPMK050'],
            
            
            
            //manajemen layanan ti
            ['kodeSubCPMK' => 'Sub-CPMK0621', 'deskripsiSubCPMK' => 'Pendahuluan', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0622', 'deskripsiSubCPMK' => 'Service Management as a Practice', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0623', 'deskripsiSubCPMK' => 'Proses Bisnis', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0624', 'deskripsiSubCPMK' => 'Value Creation', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0625', 'deskripsiSubCPMK' => 'Operational', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0626', 'deskripsiSubCPMK' => 'Operational', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0627', 'deskripsiSubCPMK' => 'Operational', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0628', 'deskripsiSubCPMK' => 'Service Strategy', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0629', 'deskripsiSubCPMK' => 'Service Design', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0630', 'deskripsiSubCPMK' => 'Service Transition', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0631', 'deskripsiSubCPMK' => 'Service Operation', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0632', 'deskripsiSubCPMK' => 'Continual Service Improvement', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0633', 'deskripsiSubCPMK' => 'Riset Terkait Manajemen Layanan TI', 'kodeCPMK' => 'CPMK053'],
            ['kodeSubCPMK' => 'Sub-CPMK0634', 'deskripsiSubCPMK' => 'Riset Terkait Manajemen Layanan TI', 'kodeCPMK' => 'CPMK053'],
            
            
            //adb
            ['kodeSubCPMK' => 'Sub-CPMK0701', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami konsep data perusahaan', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0702', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan tentang konsep presentasi data', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0703', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan menguraikan jenis-jenis data warehouse', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0704', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan analisa konsumen', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0705', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan pendapatan yang akan diperoleh masa mendatang', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0706', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan pendapatan yang akan diperoleh masa mendatang', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0707', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami pemanfaatan sumber daya manusia dan staff', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0708', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami kebutuhan dalam bisnis', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0709', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami kebutuhan dalam bisnis', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0710', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan manajemen risiko dan keuangan', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0711', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan manajemen pasokan dalam analisis data bisnis', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0712', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami dan menjelaskan record penjualan', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0713', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisa perilaku bisnis', 'kodeCPMK' => 'CPMK062'],
            ['kodeSubCPMK' => 'Sub-CPMK0714', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisa perilaku bisnis', 'kodeCPMK' => 'CPMK062'],

            //computer vision
            ['kodeSubCPMK' => 'Sub-CPMK0715', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami apa yang disebut dengan pemrosesan citra digital', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0716', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami konsep dasar citra digital', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0717', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode yang terdapat pada image sampling dan reconstruction', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0718', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode yang terdapat pada image enhancement di domain Spatial', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0719', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode yang terdapat pada image enhancement di domain Frequency', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0720', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode untuk melakukan image restoration', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0721', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode pada edge detection', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0722', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode pada image feature extraction', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0723', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode pada image segmentation', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0724', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode pada image detection and registration', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0725', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode pemrosesan citra berwarna', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0726', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode klasifikasi citra', 'kodeCPMK' => 'CPMK064'],
            ['kodeSubCPMK' => 'Sub-CPMK0727', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami metode klasterisasi citra', 'kodeCPMK' => 'CPMK064'],


            //data mining

            ['kodeSubCPMK' => 'Sub-CPMK0728', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan latar belakang munculnya teknik data mining, serta tahapan-tahapan umum dalam proses data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0729', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan definisi data, pengertian attributes dan objects, types of data, data quality, data preprocessing', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0730', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan teknik-teknik merepresentasikan data', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0731', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan proses awal yang dilakukan terhadap data agar dapat menjadi inputan yang baik dalam teknik data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0732', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan teknik klasifikasi dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0733', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan teknik klasifikasi dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0734', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan teknik klasifikasi dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0735', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan teknik klustering dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0736', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan teknik klustering dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0737', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami teknik/metoda analisis asosiasi dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0738', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami teknik/metoda analisis asosiasi dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0739', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami teknik/metoda analisis asosiasi dalam data mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0740', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan Text Mining dan Web Mining', 'kodeCPMK' => 'CPMK060'],
            ['kodeSubCPMK' => 'Sub-CPMK0741', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan gambaran aplikasi data mining dalam berbagai bidang', 'kodeCPMK' => 'CPMK060'],



            //biomedik

            ['kodeSubCPMK' => 'Sub-CPMK0742', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami konsep informatika biomedik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0743', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami konsep informatika biomedik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0744', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami data-data biomedis', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0745', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami data-data biomedis', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0746', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami data-data biomedis', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0747', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami data-data biomedis', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0748', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami data-data biomedis', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0749', 'deskripsiSubCPMK' => 'Mahasiswa mampu menjelaskan dan memahami data-data biomedis', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0750', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisa pemodelan data biomedik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0751', 'deskripsiSubCPMK' => 'Mahasiswa mampu menganalisa pemodelan data biomedik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0752', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami standar dalam informatika biomedik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0753', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami standar dalam informatika biomedik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0754', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami informatika pencitraan medik', 'kodeCPMK' => 'CPMK061'],
            ['kodeSubCPMK' => 'Sub-CPMK0755', 'deskripsiSubCPMK' => 'Mahasiswa mampu memahami informatika pencitraan medik', 'kodeCPMK' => 'CPMK061'],



            //manajemen risiko
            
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],
            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK066'],



            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK064'],

            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK064'],

            ['kodeSubCPMK' => 'Sub-CPMK07', 'deskripsiSubCPMK' => '', 'kodeCPMK' => 'CPMK064'],




        ];

        foreach ($subs as $sub) {
            SubCPMK::create($sub);
        }
    }
}
