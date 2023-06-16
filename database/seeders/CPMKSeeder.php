<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
class CPMKSeeder extends Seeder
{
    use WithoutModelEvents;
 
    /**
     * Run the CPMK seeders.
     */
    public function run()
    {
        CPMK::create([
            'kodeCPMK' => 'CPMK011',
            'deskripsiCPMK' => 'Mampu memahami konsep dasar sistem informasi',
            'kodeCPL' => 'CPL01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK012',
            'deskripsiCPMK' => 'Mampu menganalisis proses dan sistem organisasi',
            'kodeCPL' => 'CPL01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK013',
            'deskripsiCPMK' => 'Mampu menilai proses dan sistem pengelolaan data pada organisas',
            'kodeCPL' => 'CPL01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK014',
            'deskripsiCPMK' => 'Mampu menilai peran sistem informasi dalam memberikan rekomendasi pengambilan keputusan di organisasi',
            'kodeCPL' => 'CPL01'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK021',
            'deskripsiCPMK' => 'Mampu merancang database',
            'kodeCPL' => 'CPL02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK022',
            'deskripsiCPMK' => 'Mampu menggunakan database',
            'kodeCPL' => 'CPL02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK023',
            'deskripsiCPMK' => ' Mampu mengolah data dengan alat dan teknik pengolahan data',
            'kodeCPL' => 'CPL02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK024',
            'deskripsiCPMK' => 'Mampu menganalisa data dengan alat dan teknik pengolahan data',
            'kodeCPL' => 'CPL02'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK031',
            'deskripsiCPMK' => 'Mampu memahami berbagai metodologi pengembangan sistem',
            'kodeCPL' => 'CPL03'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK032',
            'deskripsiCPMK' => 'Mampu menggunakan berbagai alat pengembangan sistem',
            'kodeCPL' => 'CPL03'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK033',
            'deskripsiCPMK' => 'Mampu menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi',
            'kodeCPL' => 'CPL03'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK041',
            'deskripsiCPMK' => 'Mampu membuat perencanaan infrastruktur TI, arsitektur jaringan, serta layanan fisik/cloud',
            'kodeCPL' => 'CPL04'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK042',
            'deskripsiCPMK' => 'Mampu menganalisis konsep identifikasi, otentikasi, otorisasi akses dalam konteks keamanan sistem',
            'kodeCPL' => 'CPL04'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK051',
            'deskripsiCPMK' => 'Mampu memahami kode etik dalam penggunaan informasi data pada perancangan, implementasi dan penggunaan suatu sistem',
            'kodeCPL' => 'CPL05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK052',
            'deskripsiCPMK' => 'Mampu menerapkan kode etik dalam penggunaan informasi data pada perancangan, implementasi dan penggunaan suatu sistem',
            'kodeCPL' => 'CPL05'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK061',
            'deskripsiCPMK' => 'Mampu merencanakan sistem informasi organisasi untuk mencapai tujuan dan sasaran organisasi jangka panjang',
            'kodeCPL' => 'CPL06'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK062',
            'deskripsiCPMK' => 'Mampu menerapkan sistem informasi untuk mencapai tujuan dan sasaran organisasi jangka pendek',
            'kodeCPL' => 'CPL06'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK063',
            'deskripsiCPMK' => 'Mampu memelihara sistem informasi organisasi untuk mencapai tujuan organisasi jangka pendek.',
            'kodeCPL' => 'CPL06'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK064',
            'deskripsiCPMK' => 'Mampu meningkatkan layanan sistem informasi yang strategis secara jangka pendek.',
            'kodeCPL' => 'CPL06'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK071',
            'deskripsiCPMK' => 'Mampu memahami konsep, teknik dan metodologi manajemen proyek sistem informasi',
            'kodeCPL' => 'CPL07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK072',
            'deskripsiCPMK' => 'Mampu mengidentifikasi konsep, teknik dan metodologi manajemen proyek sistem informasi',
            'kodeCPL' => 'CPL07'
        ]);

        CPMK::create([
            'kodeCPMK' => 'CPMK073',
            'deskripsiCPMK' => 'Mampu mengidentifikasi konsep, teknik dan metodologi manajemen proyek sistem informasi',
            'kodeCPL' => 'CPL07'
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK011',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK01',
            'kodeCPMK' => 'CPMK012',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK02',
            'kodeCPMK' => 'CPMK013',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK02',
            'kodeCPMK' => 'CPMK014',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK03',
            'kodeCPMK' => 'CPMK021',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK04',
            'kodeCPMK' => 'CPMK022',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK03',
            'kodeCPMK' => 'CPMK023',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK25',
            'kodeCPMK' => 'CPMK023',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK04',
            'kodeCPMK' => 'CPMK024',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK25',
            'kodeCPMK' => 'CPMK024',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK10',
            'kodeCPMK' => 'CPMK031',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK11',
            'kodeCPMK' => 'CPMK031',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK14',
            'kodeCPMK' => 'CPMK032',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK16',
            'kodeCPMK' => 'CPMK032',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK17',
            'kodeCPMK' => 'CPMK032',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK10',
            'kodeCPMK' => 'CPMK033',
        ]);
        
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK16',
            'kodeCPMK' => 'CPMK033',
        ]);
        
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK17',
            'kodeCPMK' => 'CPMK033',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK05',
            'kodeCPMK' => 'CPMK041',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK06',
            'kodeCPMK' => 'CPMK041',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK07',
            'kodeCPMK' => 'CPMK041',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK18',
            'kodeCPMK' => 'CPMK042',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK19',
            'kodeCPMK' => 'CPMK042',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK20',
            'kodeCPMK' => 'CPMK051',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK21',
            'kodeCPMK' => 'CPMK051',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK20',
            'kodeCPMK' => 'CPMK052',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK21',
            'kodeCPMK' => 'CPMK052',
        ]);
        
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK10',
            'kodeCPMK' => 'CPMK061',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK12',
            'kodeCPMK' => 'CPMK061',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK13',
            'kodeCPMK' => 'CPMK061',
        ]);
        
        Detail_MK_CPMK::create([
            'kodeMK' => 'MK15',
            'kodeCPMK' => 'CPMK062',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK12',
            'kodeCPMK' => 'CPMK063',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK13',
            'kodeCPMK' => 'CPMK063',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK15',
            'kodeCPMK' => 'CPMK064',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK08',
            'kodeCPMK' => 'CPMK071',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK08',
            'kodeCPMK' => 'CPMK072',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK09',
            'kodeCPMK' => 'CPMK072',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK22',
            'kodeCPMK' => 'CPMK072',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK09',
            'kodeCPMK' => 'CPMK073',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK22',
            'kodeCPMK' => 'CPMK073',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK23',
            'kodeCPMK' => 'CPMK073',
        ]);

        Detail_MK_CPMK::create([
            'kodeMK' => 'MK24',
            'kodeCPMK' => 'CPMK073',
        ]);
    }
}
