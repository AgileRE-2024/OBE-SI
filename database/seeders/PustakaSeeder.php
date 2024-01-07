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

        //FPB Praktikum
        Pustaka::create([
            'nama_penulis' => 'Mathias Weske',
            'tahun' => '2007',
            'judul' => 'Business Process Management: Concepts, Languages, Architectures',
            'penerbit' => 'Springer'
        ]);

        Pustaka::create([
            'nama_penulis' => 'J.Jeston and J.Nelis',
            'tahun' => '2006',
            'judul' => 'Business Process Management, Practical Guidelines to Successful Implementation',
            'penerbit' => 'Elsevier'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Mike Havey',
            'tahun' => '2005',
            'judul' => 'Essential Business Process Modeling',
            'penerbit' => 'O’Reilly'
        ]);

        Pustaka::create([
            'nama_penulis' => 'Tore Dyba et al',
            'tahun' => '2004',
            'judul' => 'Process Improvement in Practice',
            'penerbit' => 'Kluwer Academic Publishers'
        ]); 
        
        Pustaka::create([
            'nama_penulis' => 'Margaret May',
            'tahun' => '2003',
            'judul' => 'Business Process Management: Integration to Web-Enabled Environment',
            'penerbit' => 'Prentice Hall'
        ]); 

        //Statistika Inferensi
        Pustaka::create([
            'nama_penulis' => 'Walpole, RE',
            'tahun' => '1995',
            'judul' => 'Pengantar Statistika, Edisi III',
            'penerbit' => 'Gramedia, Jakarta'
        ]); 

        Pustaka::create([
            'nama_penulis' => 'Johnson and Wichern',
            'tahun' => '2002',
            'judul' => 'Applied Multivariate Statistical Analysis',
            'penerbit' => 'Prentice Hall'
        ]); 
        
        Pustaka::create([
            'nama_penulis' => 'Sharma, Subash',
            'tahun' => '1996',
            'judul' => 'Applied Multivariate Technique',
            'penerbit' => 'John Wiley & Sons, Inc. New York'
        ]);

        //Statistika Deskriptif
        Pustaka::create([
            'nama_penulis' => 'Johnson and Wichern',
            'tahun' => '2002',
            'judul' => 'Applied Multivariate Statistical Analysis',
            'penerbit' => 'Prentice Hall'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Sharma, Subash',
            'tahun' => '1996',
            'judul' => 'Applied Multivariate Technique',
            'penerbit' => 'John Wiley & Sons, Inc. New York'
        ]);

        Pustaka::create([
            'nama_penulis' => 'Lebart, Morineau and Warwick',
            'tahun' => '1984',
            'judul' => 'Multivariate Descriptive Statistical Analysis, Correspondence Analysis and Related Techiniques for large matrices',
            'penerbit' => 'Wiley'
        ]);

        //Matriks dan Transformasi Linier
        Pustaka::create([
            'nama_penulis' => 'Leon, S.J',
            'tahun' => '2001',
            'judul' => 'Aljabar Linear dan Aplikasinya, Edisi 5',
            'penerbit' => 'Erlangga, Jakarta'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Anton, H., and Rorres, C.',
            'tahun' => '2000',
            'judul' => 'Aljabar Linear Elementer Versi Aplikasi, Edisi 8',
            'penerbit' => 'Erlangga, Jakarta'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Anton, H.',
            'tahun' => '1991',
            'judul' => 'Aljabar Linear Elementer, Edisi Kelima',
            'penerbit' => 'Erlangga, Jakarta'
        ]);
        
        // Pustaka::create([
        //     'nama_penulis' => '',
        //     'tahun' => '',
        //     'judul' => 'Modul Tutorial Matlab',
        //     'penerbit' => ''
        // ]);

        //Pengantar Kolaborasi Keilmuan
        Pustaka::create([
            'nama_penulis' => 'Hammick, M, Freeth, D, Koppel, I, Reeves, S & Barr, H',
            'tahun' => '2007',
            'judul' => 'A Best evidence systematic review of interproffesional education: BEME Guide no 9 Med Teach',
            'penerbit' => ''
        ]);

        Pustaka::create([
            'nama_penulis' => 'Word Health Organization',
            'tahun' => '2010',
            'judul' => 'Framework for action on interprofesional Education & Collaborative Practice',
            'penerbit' => ''
        ]);

        Pustaka::create([
            'nama_penulis' => 'Bosh, B, dan Mansell, H',
            'tahun' => '2015',
            'judul' => 'Interprofessional collaboration in health care Lesson to be leared from competitive sport',
            'penerbit' => ''
        ]);

        Pustaka::create([
            'nama_penulis' => 'Interprofessional Education Collaborative Expert Panel',
            'tahun' => '2011',
            'judul' => 'Core Competencies for interprofessional collaborative practice : Report of an expert panel',
            'penerbit' => 'Wangsington, DC: Interproffessiomal Eduvation Collaborative'
        ]);

        Pustaka::create([
            'nama_penulis' => 'Thistlethwaite J., Moran M',
            'tahun' => '2010',
            'judul' => 'Learning Outcome for Interprofesional Care',
            'penerbit' => ''
        ]);
    }
}
