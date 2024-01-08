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
            ['kodeSubCPMK' => 'Sub-CPMK0111', 'deskripsiSubCPMK' => 'Mampu menjelaskan konsep dasar sistem', 'kodeCPMK' => 'CPMK011'],
            ['kodeSubCPMK' => 'Sub-CPMK0112', 'deskripsiSubCPMK' => 'Mampu menjelaskan konsep informasi dan sistem informasi', 'kodeCPMK' => 'CPMK011'],
            ['kodeSubCPMK' => 'Sub-CPMK0121', 'deskripsiSubCPMK' => 'Mampu menganalisis proses organisasi', 'kodeCPMK' => 'CPMK012'],
            ['kodeSubCPMK' => 'Sub-CPMK0122', 'deskripsiSubCPMK' => 'Mampu menganalisis sistem organisasi', 'kodeCPMK' => 'CPMK012'],
            ['kodeSubCPMK' => 'Sub-CPMK0131', 'deskripsiSubCPMK' => 'Mampu menilai proses yang ada pada organisasi', 'kodeCPMK' => 'CPMK013'],
            ['kodeSubCPMK' => 'Sub-CPMK0132', 'deskripsiSubCPMK' => 'Mampu menilai sistem pengolahan data pada organisasi', 'kodeCPMK' => 'CPMK013'],
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
        ];

        foreach ($subs as $sub) {
            SubCPMK::create($sub);
        }
    }
}
