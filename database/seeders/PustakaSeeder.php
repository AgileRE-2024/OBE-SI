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

        //Pemograman mobile prak dan teo
        Pustaka::create([
            'nama_penulis' => 'Kuldii Project',
            'tahun' => 2021,
            'judul' => 'Flutter Indonesia',
            'penerbit' => 'Youtube'
        ],);
        Pustaka::create([
            'nama_penulis' => 'Raharjo, Budi',
            'tahun' => 2019,
            'judul' => 'Pemrograman Android Dengan Flutter',
            'penerbit' => 'Informatika'
        ],);

        //Pemograman Web
        Pustaka::create([
            'nama_penulis' => '',
            'tahun' => null,
            'judul' => 'https://devdocs.io/html/',
            'penerbit' => ''
        ],);
        Pustaka::create([
            'nama_penulis' => '',
            'tahun' => null,
            'judul' => 'https://devdocs.io/css/',
            'penerbit' => ''
        ],);
        Pustaka::create([
            'nama_penulis' => '',
            'tahun' => null,
            'judul' => 'https://devdocs.io/javascript/',
            'penerbit' => ''
        ],);
        Pustaka::create([
            'nama_penulis' => '',
            'tahun' => null,
            'judul' => 'https://www.php.net/docs.php',
            'penerbit' => ''
        ],);
        Pustaka::create([
            'nama_penulis' => '',
            'tahun' => null,
            'judul' => 'https://www.yiiframework.com/',
            'penerbit' => ''
        ],);
        Pustaka::create([
            'nama_penulis' => '',
            'tahun' => null,
            'judul' => 'https://laravel.com/docs/9.x/installation',
            'penerbit' => ''
        ],);
        //Sistem Enterprise
        Pustaka::create([
            'nama_penulis' => 'Ellen F Monk, Bret Wagner',
            'tahun' => 2012,
            'judul' => 'Concepts in Enterprise Resource Planning',
            'penerbit' => 'Thompson Course Technology, USA'
        ],);
        Pustaka::create([
            'nama_penulis' => 'O’Leary, D.E',
            'tahun' => 2000,
            'judul' => 'Enterprise Resource Planning Systems: Systems, Life Cycle, Electronic Commerce and Risk',
            'penerbit' => 'Cambridge University Press'
        ],);
        Pustaka::create([
            'nama_penulis' => 'Dhewanto, Wawan dan Falahah',
            'tahun' => 2007,
            'judul' => 'Enterprise Resource Planning : Menyelaraskan Teknologi Informasi dengan Strategi Bisnis',
            'penerbit' => 'Penerbit Informatika, Bandung'
        ],);

        //APS Prak
        Pustaka::create([
            'nama_penulis' => 'K. E. Kendall, J. E Kendall',
            'tahun' => 2019,
            'judul' => 'System Analysis and Design Global ED',
            'penerbit' => 'Pearson'
        ],);
        Pustaka::create([
            'nama_penulis' => 'Scott Tilley',
            'tahun' => 2019,
            'judul' => 'Systems Analysis and Design, Cencage',
            'penerbit' => ''
        ],);
        Pustaka::create([
            'nama_penulis' => 'Phillip A. Laplante',
            'tahun' => 2018,
            'judul' => 'Requirements Engineering for Software and Systems 3rd Ed',
            'penerbit' => 'CRC Press'
        ],);

        // Agama Konghucu I
        Pustaka::create([
            'judul' => 'Kitab Zhong Yong. Tt'
        ],);

        //Agama Budha I
        Pustaka::create([
            'nama_penulis' => 'Tim Penulis Pendidikan Agama Hindu',
            'tahun' => 2004, 
            'judul' => 'Kuliah Agama Buddha Untuk Perguruan Tinggi',
            'penerbit' => 'Dirjen Binbaga Budha, Kemenag, Jakarta'
        ],);

        //Agama Katolik I
        Pustaka::create([
            'nama_penulis' => 'Pandin, M.G.R.,',
            'tahun' => 2013, 
            'judul' => 'Hand Out Mata Kuliah Pendidikan Agama Katolik I',
            'penerbit' => 'Universitas Airlangga'
        ],);

        Pustaka::create([
            'judul' => 'Alkitab Deutrokanonika',
            'penerbit' => 'Ende: Nusa Indah'
        ],);

        Pustaka::create([
            'judul' => 'Cunningham: Introduction to Catholicsm',
        ],);

        Pustaka::create([
            'judul' => 'Dokumen Ajaran sosial Gereja lainnya dari sumber Gereja Katolik.',
        ],);

        Pustaka::create([
            'nama_penulis' => 'Frans H.',
            'judul' => 'Pengalaman Akan Allah',
            'penerbit' => 'Yogyakarta: Kanisius'
        ],);

        Pustaka::create([
            'nama_penulis' => 'KWI',
            'judul' => 'Iman Katolik: Buku Informasi dan referensi',
            'penerbit' => 'Yogyakarta: Kanisius'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Nico Syukur',
            'judul' => 'Kristologi sebuah Sketsa',
            'penerbit' => 'Penerbit Kanisius'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Universitas Airlangga',
            'judul' => 'Character Universitas Airlangga: Bahan PPKMB 2013'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Wijngaards',
            'judul' => 'Yesus Sang Pembebas',
            'penerbit' => 'Penerbit Kanisius'
        ],);

        //Agama Protestan I
        Pustaka::create([
            'nama_penulis' => 'J. Verkuyl',
            'tahun' => 2003, 
            'judul' => 'Etika Kristen Bagian Umum',
            'penerbit' => 'Gunung Mulia'
        ],);

        //Agama Hindu
        Pustaka::create([
            'tahun' => 2014, 
            'judul' => 'Kuliah Agama Hindu Untuk Perguruan Tinggi',
            'penerbit' => 'Dirjen Binbaga Hindu, Kemenag'
        ],);

        //Agama Islam
        Pustaka::create([
            'judul' => 'Al-Quran',
            'penerbit' => 'Departemen Agama'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Udji Asiyah',
            'tahun' => 2014, 
            'judul' => 'Sunan Fanani, Muadib Aminan,.',
            'penerbit' => 'Surabaya: AUP,.'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Udji Asiyah',
            'tahun' => 2002, 
            'judul' => 'Diktat Alam Semesta dan Alam Kehidupan',
            'penerbit' => 'Surabaya: AUP,.'
        ],);

        //pancasila
        Pustaka::create([
            'nama_penulis' => 'Yudi Latif',
            'tahun' => 2009, 
            'judul' => 'Negara Paripurna, Aktualitas dan Historisitas Pancasila',
            'penerbit' => 'Jakarta: Gramedia'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Yudi Latif',
            'tahun' => 2014, 
            'judul' => 'Mata Air Keteladanan, Pancasila dalam Perbuatan',
            'penerbit' => 'Bandung: Mizan'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Tim Dikti',
            'tahun' => 2016, 
            'judul' => 'Modul Pendidikan Pancasila untuk Perguruan Tinggi',
            'penerbit' => 'Jakarta: Kemenristekdikti'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Tim MKWU',
            'tahun' => 2016, 
            'judul' => 'Modul Terintegrasi MKWU'
        ],);

        //PSI
        Pustaka::create([
            'nama_penulis' => 'Jr. McLeod',
            'tahun' => 2001, 
            'judul' => 'Management Information systems, 8th edition',
            'penerbit' => 'Prentice-Hall International, Inc., New Jersey'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Shipsey',
            'tahun' => 2010,
            'judul' => 'Information Systems: Foundation for E-Business, Vol. 1',
            'penerbit' => 'University of London'
        ],);

        //alpro teo dan prak
        Pustaka::create([
            'nama_penulis' => 'Kindersley',
            'tahun' => 2019, 
            'judul' => 'Help Your Kids with Computer Coding. Second Edition.',
            'penerbit' => 'DK Publisher'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Liang',
            'tahun' => 2020,
            'judul' => 'Introduction to Java Programming and Data Structures, Comprehensive Version. Twelfth Edition',
            'penerbit' => 'Pearson Education Inc'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Sweigart,',
            'tahun' => 2020,
            'judul' => '2020. Automate the Boring Stuff with Python, Second Edition: Practical Programming for Total Beginners.',
            'penerbit' => 'No Starch Press, Inc'
        ],);

        //Bing 1
        Pustaka::create([
            'nama_penulis' => 'Azar',
            'tahun' => 1993, 
            'judul' => 'Understanding and Using English Grammar : Edisi Bahasa Inggris - Indonesia',
            'penerbit' => 'Jakarta : Binarupa Aksara.'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Alexander',
            'tahun' => 1990,
            'judul' => 'Practice and Progress',
            'penerbit' => 'Yogyakarta : Kanisius.'
        ],);
        
        //Fisdas
        Pustaka::create([
            'nama_penulis' => 'Tipler',
            'tahun' => 1996, 
            'judul' => 'Fisika Untuk Sains dan Teknik,Edisi ke tiga, jilid 1',
            'penerbit' => 'Penerbit Erlangga'
        ],);

        //Bing 2
        Pustaka::create([
            'nama_penulis' => 'Hogue',
            'tahun' => 1996, 
            'judul' => 'First Step In Academic Writing',
            'penerbit' => 'New York; Longman'
        ],);

        Pustaka::create([
            'nama_penulis' => 'Oshima',
            'tahun' => 1999,
            'judul' => 'Writing Academic English (the 3rd Edition)',
            'penerbit' => 'New York; Longman'
        ],);

 //Desain Interaksi Prakt
        /*Pustaka::create([
            'nama_penulis' => 'A.J. Dix, J.E. Finlay, G.D. Abowd dan R.Beale,',
            'tahun' => 2004, 
            'judul' => 'Human-Coumputer Interaction,',
            'penerbit' => 'Pearson Education'
        ],);

        Pustaka::create([
            'nama_penulis' => 'A.J. Dix, J.E. Finlay, G.D. Abowd dan R.Beale,',
            'tahun' => 2010, 
            'judul' => 'Designing The User Interface,',
            'penerbit' => 'Pearson '
        ],);*/


        //047
        // 1. RPS Bahasa Indonesia 
        Pustaka::create([
            'nama_penulis' => 'Anggraini, A dkk.',
            'tahun' => 2006, 
            'judul' => 'Mengasah Menulis Keterampilan Ilmiah di Perguruan Tinggi.',
            'penerbit' => 'Jakarta: Graha Ilmu'
        ],);
        Pustaka::create([
            'nama_penulis' => 'Tim MPK Bahasa Indonesia TPB Universitas Airlangga.',
            'tahun' => 2007,
            'judul' => 'Buku Ajar Matakuliah Pengembangan Kepribadian (MPK) Bahasa Indonesia untuk Perguruan Tinggi.',
            'penerbit' => 'Surabaya: TPB Universitas Airlangga'
        ],);
        Pustaka::create([
            'nama_penulis' => 'Nasuha, Yakub dkk.',
            'tahun' => 2009,
            'judul' => 'Bahasa Indonesia untuk Penulisan Karya Tulis Ilmiah.',
            'penerbit' => 'Yogyakarta: Media Perkasa'
        ],);
        Pustaka::create([
            'nama_penulis' => 'Nur Tanjung, B dan Ardial.',
            'tahun' => 2007,
            'judul' => 'Pedoman Penulisan Karya Ilmiah.',
            'penerbit' => 'Jakarta: Kencana'
        ],);
        // 1. RPS Biologi Dasar
        Pustaka::create([
            'nama_penulis' => 'Campbell Neil A., Mitchell and Reece',
            'tahun' => 2010,
            'judul' => 'Biologi, Jilid 1, Edisi Kedelapan',
            'penerbit' => 'Jakarta: Erlangga'
        ],);
        // 1. RPS Data dan Pustaka
        Pustaka::create([
            'nama_penulis' => 'Bailey, J.',
            'tahun' => 2008,
            'judul' => 'First step in qualitative data analysis: transcribing',
            'penerbit' => 'Family Practice, 25(2), 127-131. doi: https://doi.org/10.1093/fampra/cmn003'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Bowen, M. & Bartley, A.',
            'tahun' => 2014,
            'judul' => 'The Basics of Data Literacy',
            'penerbit' => 'Arlington: NSTA Press'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Davidson, C.',
            'tahun' => 2009,
            'judul' => 'Transcription: Imperatives for qualitative research',
            'penerbit' => 'International Journal of Qualitative Methods, 8(2), 35-52. doi: https://doi.org/10.1177/160940690900800206'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Durbin, C.G.',
            'tahun' => 2009,
            'judul' => 'How to read a scientific research paper',
            'penerbit' => 'Respiratory Care, 54(10), 1366-1371'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Field, A.',
            'tahun' => 2016,
            'judul' => 'An Adventure in Statistics: The Reality Enigma',
            'penerbit' => 'London: SAGE Publications'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Fosmire, A.',
            'tahun' => 2013,
            'judul' => 'How to read a scientific paper',
            'penerbit' => 'Purdue University Library. Diakses dari https://www.lib.purdue.edu/sites/default/files/libraries/engr/Tutorials/Newest%20Scientific%20Paper.pdf'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Hazra, A.',
            'tahun' => 2017,
            'judul' => 'Using the confidence interval confidently',
            'penerbit' => 'Journal of thoracic disease, 9(10), 4125. https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5723800/'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Leonelli, S.',
            'tahun' => 2020,
            'judul' => 'Scientific Research and Big Data',
            'penerbit' => 'The Stanford Encyclopedia of Philosophy. Diakses dari https://plato.stanford.edu/entries/science-big-data/'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Morrison, R.',
            'tahun' => 2020,
            'judul' => 'Don’t just “Google it”: 3 ways students can get the most from searching online',
            'penerbit' => 'The Conversation. Diakses dari https://theconversation.com/dont-just-google-it-3-ways-students-can-get-the-most-from-searching-online-116519'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Pain, E.',
            'tahun' => 2016,
            'judul' => 'How to (seriously) read a scientific paper',
            'penerbit' => 'Science Magazine. Diakses di https://www.sciencemag.org/careers/2016/03/how-seriously-read-scientific-paper'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Zein, R.A.',
            'tahun' => 2021,
            'judul' => 'Metode Penelitian Psikologi Politik',
            'penerbit' => 'dalam W. Yustisia, M. A. Hakim, & R. Ardi (Ed.), Psikologi politik (pp. 33-74). Jakarta: Penerbit Buku Kompas. http://repository.unair.ac.id/104471/'
        ]);
        
        // 1. RPS Kalkulus
        Pustaka::create([
            'nama_penulis' => 'Purcell',
            'tahun' => 2008,
            'judul' => 'Kalkulus I Jilid I, Edisi 8',
            'penerbit' => 'Erlangga, Jakarta. (edisi Bahasa Inggris terbaru)'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Stewart, J.',
            'tahun' => 2001,
            'judul' => 'Kalkulus Jilid II',
            'penerbit' => 'Erlangga, Jakarta. (edisi Bahasa Inggris terbaru)'
        ]);
        
        // 1. RPS Kewarganegaraan
        Pustaka::create([
            'nama_penulis' => 'Adib, Mohammad, Listiyono Santoso, dan Ajar Triharso',
            'tahun' => 2013,
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan: Sebuah Pengantar Membangun Karakter Bangsa',
            'penerbit' => 'Surabaya: Airlangga University Press'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Adib, Mohammad',
            'tahun' => 2016,
            'judul' => 'Bangunlah Jiwanya, Bangunlah Bangsanya: Penguatan Karakter Bangsa dalam Pembelajaran Pendidikan Kewarganegaraan',
            'penerbit' => 'Surabaya: Saga dan Direktorat Pendidikan Universitas Airalanga. (Cet. Kedua)'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Kemenristek Dikti, Ditjen Pembelajaran dan Kemahasiswaan',
            'tahun' => 2016,
            'judul' => 'Pendidikan Kewarganegaraan untuk Perguruan Tinggi. (Cet. I)',
            'penerbit' => 'Dirjen Dikti'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Kemendikbud, Dirjen Dikti',
            'tahun' => 2010,
            'judul' => 'Pendidikan Anti-Korupsi untuk Perguruan Tinggi',
            'penerbit' => 'Jakarta: Kemendikbud'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Oommen, T',
            'tahun' => 2009,
            'judul' => 'Kewarganegaraan, Kebangsaan dan Etnisitas',
            'penerbit' => 'Yogyakarta: Kreasi Wacana'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Srijanti, dkk',
            'tahun' => 2009,
            'judul' => 'Pendidikan Kewarganegaraan untuk Mahasiswa',
            'penerbit' => 'Jakarta: Graha Ilmu'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Sutrisno, Slamet',
            'tahun' => 2006,
            'judul' => 'Filsafat dan Ideologi Pancasila',
            'penerbit' => 'Yogyakarta: Penerbit Andi'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Tim ICCE UIN Jakarta',
            'tahun' => 2003,
            'judul' => 'Demokrasi, HAM dan Masyarakat Madani',
            'penerbit' => 'Jakarta: Prenada Media'
        ]);
        Pustaka::create([
            'nama_penulis' => 'Tim',
            'tahun' => 1945,
            'judul' => 'Undang-Undang Dasar Negara Republik Indonesia 1945 (Hasil Amandemen)',
            'penerbit' => 'Indonesia'
        ]);
        
        // 1. RPS Kimia Dasar
        Pustaka::create([
            'nama_penulis' => 'Brady, J.E.',
            'tahun' => 1992,
            'judul' => 'General Chemistry',
            'penerbit' => 'John Wiley and Sons, New York'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Brown, W.H.',
            'tahun' => 1982,
            'judul' => 'Introduction to Organic Chemistry',
            'penerbit' => 'Williard Grant Press, Boston'
        ]);
        
        Pustaka::create([
            'nama_penulis' => 'Wilbraham, A.C., Matta M.S.',
            'tahun' => 1992,
            'judul' => 'Pengantar Kimia Organik forensik dan Hayati',
            'penerbit' => 'Penerbit ITB'
        ]);
        

    }
}