<?php

namespace Database\Seeders;

use App\Models\Pengampu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FPB Praktikum
        Pengampu::create([
            "id_rps" => "SIA2052103",
            "kodeMK" => "SIA205",
            "nip" => "198206062007101001",
        ]);

        Pengampu::create([
            "id_rps" => "SIA2052103",
            "kodeMK" => "SIA205",
            "nip" => "198002172005012001",
        ]);

        //Statistika Inferensi
        Pengampu::create([
            "id_rps" => "MAS2342103",
            "kodeMK" => "MAS234",
            "nip" => "197102111997021001",
        ]);

        Pengampu::create([
            "id_rps" => "MAS2342103",
            "kodeMK" => "MAS234",
            "nip" => "197206021998022001",
        ]);

        //Statistika Deskriptif
        Pengampu::create([
            "id_rps" => "MAS1182102",
            "kodeMK" => "MAS118",
            "nip" => "196609281991021001",
        ]);

        Pengampu::create([
            "id_rps" => "MAS1182102",
            "kodeMK" => "MAS118",
            "nip" => "197206021998022001",
        ]);

        //Matriks dan Transformasi Linier
        Pengampu::create([
            "id_rps" => "MAL1032102",
            "kodeMK" => "MAL103",
            "nip" => "197102111997021001",
        ]);

        Pengampu::create([
            "id_rps" => "MAL1032102",
            "kodeMK" => "MAL103",
            "nip" => "196609051991022001",
        ]);

        //Sistem Berbasis Pengetahuan
        Pengampu::create([
            "id_rps" => "SIC4012107",
            "kodeMK" => "SIC401",
            "nip" => "198002172005012001",
        ]);

        //Audit Sistem Informasi
        Pengampu::create([
            "id_rps" => "SII4042107",
            "kodeMK" => "SII404",
            "nip" => "198206062007101001",
        ]);

        Pengampu::create([
            "id_rps" => "SII4042107",
            "kodeMK" => "SII404",
            "nip" => "198105082005012001",
        ]);

        //Pengantar Kolaborasi Keilmuan
        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "197606162014092006",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "197502222009122001",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "196605041996032001",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "196908152000032005",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "198012242005012002",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "196906211997032001",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "198206182015041001",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "139040676",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "197703162005012001",
        ]);

        Pengampu::create([
            "id_rps" => "MNM1072102",
            "kodeMK" => "MNM107",
            "nip" => "198604122015043101",
        ]);

        //Komunikasi dan Pengembangan Diri
        Pengampu::create([
            "id_rps" => "MNM1062102",
            "kodeMK" => "MNM106",
            "nip" => "196902031994031001",
        ]);

        // Pemograman mobile prak
        Pengampu::create([
            "id_rps" => "SIS3052104",
            "kodeMK" => "SIS305",
            "nip" => "197101042008121001",
        ]);

        // Pemograman mobile teo
        Pengampu::create([
            "id_rps" => "SIS3042104",
            "kodeMK" => "SIS304",
            "nip" => "197101042008121001",
        ]);

        // Pemograman web prak
        Pengampu::create([
            "id_rps" => "SIS2052104",
            "kodeMK" => "SIS205",
            "nip" => "197101042008121001",
        ]);

        // Pemograman web teo
        Pengampu::create([
            "id_rps" => "SIS2042104",
            "kodeMK" => "SIS204",
            "nip" => "197101042008121001",
        ]);

        // Sistem Enterprise
        Pengampu::create([
            "id_rps" => "SIS2022104",
            "kodeMK" => "SIS202",
            "nip" => "197812172005012001",
        ]);
        Pengampu::create([
            "id_rps" => "SIS2022104",
            "kodeMK" => "SIS202",
            "nip" => "198105082005012001",
        ]);

        //KWU
        Pengampu::create([
            "id_rps" => "MNW4012104",
            "kodeMK" => "MNW401",
            "nip" => "196004211986011001",
        ]);

        //KSI
        Pengampu::create([
            "id_rps" => "SIS3092104",
            "kodeMK" => "SIS309",
            "nip" => "197801262006041001",
        ]);

        //ISIT
        Pengampu::create([
            "id_rps" => "SII2132104",
            "kodeMK" => "SII213",
            "nip" => "198410272010122005",
        ]);

        //Desain Interaksi
        Pengampu::create([
            "id_rps" => "SII2082104",
            "kodeMK" => "SII208",
            "nip" => "197812172005012001",
        ]);

        //Desain Interaksi praktikum
        // Pengampu::create([
        //     'id_rps' => 'SII2092105',
        //     'kodeMK' => 'SII209',
        //     'nip' => '197812172005012001',
        // ]);

        //Manpro
        // Pengampu::create([
        //     'id_rps' => 'MNG3102106',
        //     'kodeMK' => 'MNG310',
        //     'nip' => '197812172005012001',
        // ]);

        //PAE
        // Pengampu::create([
        //     'id_rps' => 'SIS3082106',
        //     'kodeMK' => 'SIS308',
        //     'nip' => '197812172005012001',
        // ]);

        //MKB
        // Pengampu::create([
        //     'id_rps' => 'MAS2352106',
        //     'kodeMK' => 'MAS235',
        //     'nip' => '197812172005012001',
        // ]);

        //TKTI

        // Pengampu::create([
        //     'id_rps' => 'SII3232106',
        //     'kodeMK' => 'SII323',
        //     'nip' => '197812172005012001',
        // ]);

        //TKI

        // Pengampu::create([
        //     'id_rps' => 'SII3222106',
        //     'kodeMK' => 'SII322',
        //     'nip' => '197812172005012001',
        // ]);

        //METPEN
        // Pengampu::create([
        //     'id_rps' => 'PNT4972106',
        //     'kodeMK' => 'PNT497',
        //     'nip' => '197812172005012001',
        // ]);

        //TSI
        //  Pengampu::create([
        //     'id_rps' => 'SII2142106',
        //     'kodeMK' => 'SII214',
        //     'nip' => '197812172005012001',
        // ]);

        //Jarkom Prak
        Pengampu::create([
            "id_rps" => "SIJ2042104",
            "kodeMK" => "SIJ204",
            "nip" => "197101042008121001",
        ]);

        //APS Teori
        Pengampu::create([
            "id_rps" => "SII3012104",
            "kodeMK" => "SII301",
            "nip" => "198410272010122005",
        ]);

        //APS Prak
        Pengampu::create([
            "id_rps" => "SII3142104",
            "kodeMK" => "SII314",
            "nip" => "199203222019032018",
        ]);
        Pengampu::create([
            "id_rps" => "SII3142104",
            "kodeMK" => "SII314",
            "nip" => "198002172005012001",
        ]);

        //Pancasila
        Pengampu::create([
            "id_rps" => "AGK1012101",
            "kodeMK" => "NOP103",
            "nip" => "197102111997021001", // pak hendra dulu
        ]);

        //PSI
        Pengampu::create([
            "id_rps" => "SII1032101",
            "kodeMK" => "SII103",
            "nip" => "197102111997021001",
        ]);

        //alpro teo
        Pengampu::create([
            "id_rps" => "MAT1012102",
            "kodeMK" => "MAT101",
            "nip" => "196004211986011001",
        ]);

        //alpro prak
        Pengampu::create([
            "id_rps" => "MAT1022102",
            "kodeMK" => "MAT102",
            "nip" => "196004211986011001",
        ]);

        //Bing 1
        Pengampu::create([
            "id_rps" => "BAE1112102",
            "kodeMK" => "BAE111",
            "nip" => "197102111997021001", // pak hendra dulu
        ]);

        //Fisdas
        Pengampu::create([
            "id_rps" => "FID1122102",
            "kodeMK" => "FID112",
            "nip" => "197102111997021001", // pak hendra dulu
        ]);

        //etika profesi
        Pengampu::create([
            "id_rps" => "ETT3012106",
            "kodeMK" => "ETT301",
            "nip" => "198410272010122005",
        ]);

        //manajemen layanan ti
        Pengampu::create([
            "id_rps" => "MNG2062106",
            "kodeMK" => "MNG206",
            "nip" => "198110282006041003",
        ]);

        //manajemen layanan ti
        Pengampu::create([
            "id_rps" => "MNG2062106",
            "kodeMK" => "MNG206",
            "nip" => "198105082005012001",
        ]);

        //adb
        Pengampu::create([
            "id_rps" => "MAS3242107",
            "kodeMK" => "MAS324",
            "nip" => "197102111997021001",
        ]);

        //adb
        Pengampu::create([
            "id_rps" => "MAS3242107",
            "kodeMK" => "MAS324",
            "nip" => "198002172005012001",
        ]);

        //computer vision
        Pengampu::create([
            "id_rps" => "SIC4042107",
            "kodeMK" => "SIC404",
            "nip" => "198002172005012001",
        ]);

        //computer vision
        Pengampu::create([
            "id_rps" => "SIC4042107",
            "kodeMK" => "SIC404",
            "nip" => "197107122008122001",
        ]);

        //data mining
        Pengampu::create([
            "id_rps" => "SIC4022107",
            "kodeMK" => "SIC402",
            "nip" => "198002172005012001",
        ]);

        //biomedik
        Pengampu::create([
            "id_rps" => "SIR3012107",
            "kodeMK" => "SIR301",
            "nip" => "197102111997021001",
        ]);

        //manajemen risiko
        Pengampu::create([
            "id_rps" => "MNG4022107",
            "kodeMK" => "MNG402",
            "nip" => "198105082005012001",
        ]);

        //manajemen risiko
        Pengampu::create([
            "id_rps" => "MNG4022107",
            "kodeMK" => "MNG402",
            "nip" => "198002172005012001",
        ]);

        //pengujian perangkat lunak
        Pengampu::create([
            "id_rps" => "SII4082107",
            "kodeMK" => "SII408",
            "nip" => "198110282006041003",
        ]);

        //ehealth
        Pengampu::create([
            "id_rps" => "SII3172107",
            "kodeMK" => "SII317",
            "nip" => "198410272010122005",
        ]);

        //047
        // 1. RPS Bahasa Indonesia
        Pengampu::create([
            "id_rps" => "BAI1012101",
            "kodeMK" => "BAI101",
            "nip" => "111111111111111",
        ]);
        // 1. RPS Biologi Dasar
        Pengampu::create([
            "id_rps" => "BID1082101",
            "kodeMK" => "BID108",
            "nip" => "111111111111112",
        ]);
        // 1. RPS Data dan Pustaka
        Pengampu::create([
            "id_rps" => "SIP1072101",
            "kodeMK" => "SIP107",
            "nip" => "111111111111113",
        ]);
        // 1. RPS Kalkulus
        Pengampu::create([
            "id_rps" => "MAA1012101",
            "kodeMK" => "MAA101",
            "nip" => "111111111111114",
        ]);
        // 1. RPS Kewarganegaraan
        Pengampu::create([
            "id_rps" => "NOP1012101",
            "kodeMK" => "NOP101",
            "nip" => "111111111111115",
        ]);
        // 1. RPS Kimia Dasar
        Pengampu::create([
            "id_rps" => "KID1072101",
            "kodeMK" => "KID107",
            "nip" => "111111111111116",
        ]);

        //Bahasa Inggris 2
        Pengampu::create([
            "id_rps" => "BAE1122105",
            "kodeMK" => "BAE112",
            "nip" => "197102111997021001", // pak hendra dulu
        ]);

        // RPS Agama
        Pengampu::create([
            "id_rps" => "AGP1012101",
            "kodeMK" => "AGP101",
            "nip" => "111111111111117",
        ]);

        Pengampu::create([
            "id_rps" => "AGK1012101",
            "kodeMK" => "AGK101",
            "nip" => "111111111111117",
        ]);

        Pengampu::create([
            "id_rps" => "AGC1012101",
            "kodeMK" => "AGC101",
            "nip" => "111111111111117",
        ]);

        Pengampu::create([
            "id_rps" => "AGB1012101",
            "kodeMK" => "AGB101",
            "nip" => "111111111111117",
        ]);

        Pengampu::create([
            "id_rps" => "AGH1012101",
            "kodeMK" => "AGK101",
            "nip" => "111111111111117",
        ]);

        Pengampu::create([
            "id_rps" => "AGI1012101",
            "kodeMK" => "AGI101",
            "nip" => "111111111111117",
        ]);

        // RPS Analisis dan Visualisasi Data
        // Pengampu::create([
        //     'id_rps' => 'SID3032107',
        //     'kodeMK' => 'SID303',
        //     'nip' => '197102111997021001',
        // ]);

        // Pengampu::create([
        //     'id_rps' => 'SID3032107',
        //     'kodeMK' => 'SID303',
        //     'nip' => '197102111997021001',
        // ]);
    }
}
