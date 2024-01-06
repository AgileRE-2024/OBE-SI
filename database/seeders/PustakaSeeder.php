<?php

namespace Database\Seeders;

use App\Models\Pustaka;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PustakaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pustaka::create([
            'nama_penulis' => 'Johnson and Wichern',
            'tahun' => 2002,
            'judul' => 'Applied Multivariate Statistical Analysis',
            'penerbit' => 'Prentice Hall'
        ],);

        //Sistem Berbasis Pengetahuan
        Pustaka::create([
            'nama_penulis' => 'Turban Elraum, Aronson E. Jay, Liang Peng Ting',
            'tahun' => 2005,
            'judul' => 'Decision Support System and Intelligent Systm',
            'penerbit' => 'Prentice-Hall Inc, New Jersey'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Russell J Stuart, Norvig Peter',
            'tahun' => 2010,
            'judul' => 'Artificial Intelligence A Modern Approach Third Edition',
            'penerbit' => 'Prentice-Hall Inc, New Jersey'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Dalkir Kimiz',
            'tahun' => 2005,
            'judul' => ' Knowledge Management In Theory And Practice',
            'penerbit' => 'Elsevier'
        ],);

        //Audit Sistem Informasi
        Pustaka::create([
            'nama_penulis' => 'IT Governance Institute',
            'tahun' => 2008,
            'judul' => 'IT Governance Implementation Guide, COBIT',
            'penerbit' => 'ISACA'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Cascarino, Richard E.',
            'tahun' => 2007,
            'judul' => 'Auditor’s Guide to Information Systems Auditing',
            'penerbit' => 'John Willey & Sons'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Davis, Chris., Wheeler Mike S.',
            'tahun' => 2007,
            'judul' => ' IT Auditing: Using Controls to Protect Information Assets',
            'penerbit' => 'McGraw-Hill'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Senft, Sandra., Gallegos, Frederick.',
            'tahun' => 2009,
            'judul' => ' Information Technology Control and Audit, 3rd edt',
            'penerbit' => 'CRC Press'
        ],);

        Pustaka::create([
            'nama_penulis' => 'ISACA',
            'tahun' => 2010,
            'judul' => ' CISA Review Manual',
            'penerbit' => 'ISACA'
        ],);
    }
}
