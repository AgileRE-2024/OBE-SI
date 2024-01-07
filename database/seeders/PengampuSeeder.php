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
            'id_rps' => 'SIA2052103',
            'kodeMK' => 'SIA205',
            'nip' => '198206062007101001'
        ]);

        Pengampu::create([
            'id_rps' => 'SIA2052103',
            'kodeMK' => 'SIA205',
            'nip' => '198002172005012001'
        ]);

        //Statistika Inferensi
        Pengampu::create([
            'id_rps' => 'MAS2342103',
            'kodeMK' => 'MAS234',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAS2342103',
            'kodeMK' => 'MAS234',
            'nip' => '197206021998022001'
        ]);

        //Statistika Deskriptif
        Pengampu::create([
            'id_rps' => 'MAS1182102',
            'kodeMK' => 'MAS118',
            'nip' => '196609281991021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAS1182102',
            'kodeMK' => 'MAS118',
            'nip' => '197206021998022001'
        ]);

        //Matriks dan Transformasi Linier
        Pengampu::create([
            'id_rps' => 'MAL1032102',
            'kodeMK' => 'MAL103',
            'nip' => '197102111997021001'
        ]);

        Pengampu::create([
            'id_rps' => 'MAL1032102',
            'kodeMK' => 'MAL103',
            'nip' => '196609051991022001'
        ]);

        //Sistem Berbasis Pengetahuan
        Pengampu::create([
            'id_rps' => 'SIC4012107',
            'kodeMK' => 'SIC401',
            'nip' => '198002172005012001'
        ]);

        //Audit Sistem Informasi
        Pengampu::create([
            'id_rps' => 'SII4042107',
            'kodeMK' => 'SII404',
            'nip' => '198206062007101001'
        ]);

        Pengampu::create([
            'id_rps' => 'SII4042107',
            'kodeMK' => 'SII404',
            'nip' => '198105082005012001'
        ]);

        //Pengantar Kolaborasi Keilmuan
        Pengampu::create([
            'id_rps' => 'MNM1072102',
            'kodeMK' => 'MNM107',
            'nip' => '197606162014092006',
        ]);

        Pengampu::create([
            'id_rps' => 'MNM1072102',
            'kodeMK' => 'MNM107',
            'nip' => '197502222009122001',
        ]);

        Pengampu::create([
            'id_rps' => 'MNM1072102',
            'kodeMK' => 'MNM107',
            'nip' => '196605041996032001',
        ]);

        Pengampu::create([
            'id_rps' => 'MNM1072102',
            'kodeMK' => 'MNM107',
            'nip' => '196908152000032005',
        ]);

        Pengampu::create([
            'id_rps' => 'MNM1072102',
            'kodeMK' => 'MNM107',
            'nip' => '198012242005012002',
        ]);

        //Komunikasi dan Pengembangan Diri
        Pengampu::create([
            'id_rps' => 'MNM1062102',
            'kodeMK' => 'MNM106',
            'nip' => '196902031994031001',
        ]);

        // Pemograman mobile prak
        Pengampu::create([
            'id_rps' => 'SIS3052104',
            'kodeMK' => 'SIS305',
            'nip' => '197101042008121001',
        ]);

        // Pemograman mobile teo
        Pengampu::create([
            'id_rps' => 'SIS3042104',
            'kodeMK' => 'SIS304',
            'nip' => '197101042008121001',
        ]);

        // Pemograman web prak
        Pengampu::create([
            'id_rps' => 'SIS2052104',
            'kodeMK' => 'SIS205',
            'nip' => '197101042008121001',
        ]);

        // Pemograman web teo
        Pengampu::create([
            'id_rps' => 'SIS2042104',
            'kodeMK' => 'SIS204',
            'nip' => '197101042008121001',
        ]);

        // Sistem Enterprise
        Pengampu::create([
            'id_rps' => 'SIS2022104',
            'kodeMK' => 'SIS202',
            'nip' => '197812172005012001',
        ]);
        Pengampu::create([
            'id_rps' => 'SIS2022104',
            'kodeMK' => 'SIS202',
            'nip' => '198105082005012001',
        ]);

        //APS Prak
        Pengampu::create([
            'id_rps' => 'SII3142104',
            'kodeMK' => 'SII314',
            'nip' => '199203222019032018',
        ]);
        Pengampu::create([
            'id_rps' => 'SII3142104',
            'kodeMK' => 'SII314',
            'nip' => '198002172005012001',
        ]);
    }
}
