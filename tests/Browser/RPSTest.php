<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RPSTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */

     public function testCariRPSDitemukan(): void
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('http://127.0.0.1:8000/dashboard/rps')->assertSee('Cari RPS')
             ->click('select[name="kodeMK"]')
             ->click('option[value="MK01"]')
             ->type('tahunAjaran', '2022')
             ->pause(500)
             ->press('submit')
             ->pause(500);
         });
     }

    public function testCariRPSTidakDitemukan(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps')->assertSee('Cari RPS')
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->type('tahunAjaran', '2023')
            ->pause(500)
            ->press('submit')
            ->pause(500);
        });
    }
    
    public function testCreateRPS(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps')->assertSee('Cari RPS')
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->type('tahunAjaran', '2023')
            ->pause(500)
            ->press('submit')
            ->pause(500)
            ->click('a[id="buatRPS"]')
            ->pause(500)
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->click('select[name="kps"]')
            ->click('option[value="123456789987654321"]')
            ->type('tahunAjaran', '2023')
            ->type('pustaka', 'David Loshin, (2013). Business Intelligence, Second Edition, Elsevier, Inc.Pustaka MK01 2023')
            ->press('submit')
            ->pause(500)
            ->assertSee('Teknik Penilaian');
        });
    }

    public function testAddMinggutRPSBerhasil(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps')->assertSee('Cari RPS')
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->type('tahunAjaran', '2023')
            ->pause(2500)
            ->press('submit')
            ->pause(2500)
            ->click('a[id="edit"]')
            ->pause(2500)
            ->click('a[id="rencana"]')
            ->click('a[id="tambah"]')
            ->click('select[name="kodeSubCPMK"]')
            ->click('option[value="Sub-CPMK0121"]')
            ->type('mingguKe', '1')
            ->click('select[name="bentukPembelajaran"]')
            ->click('option[value="1"]')
            ->type('indikatorMingguRPS', 'Mahasiswa mengetahui informasi terkait kontrak kuliah')
            ->type('kriteriaMingguRPS', 'Mahasiswa mengetahui informasi terkait kontrak kuliah')
            ->type('deskripsiPembelajaran', 'Penyampaian Kontrak Perkuliahan')
            ->type('materiPembelajaran', 'Kontrak perkuliahan')
            ->press('submit')
            ->pause(5000);
        });
    }

    public function testAddMingguRPSEror(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/minggu_rps/MK0112023')->assertSee('Tambah')
            ->click('a[id="tambah"]')
            ->click('select[name="kodeSubCPMK"]')
            ->click('option[value="Sub-CPMK0122"]')
            ->type('mingguKe', '2')
            ->click('select[name="bentukPembelajaran"]')
            ->click('option[value="1"]')
            ->type('indikatorMingguRPS', '')
            ->type('kriteriaMingguRPS', 'Mahasiswa mengetahui konsep data perusahaan')
            ->type('deskripsiPembelajaran', 'Mengenalkan Konsep Data Perusahaan')
            ->type('materiPembelajaran', 'Konsep Data Perusahaan')
            ->press('submit')
            ->pause(5000);
        });
    }

    public function testEditMingguRPS(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/minggu_rps/MK0112023')->assertSee('Tambah')
            ->click('a[id="edit"]')
            ->click('select[name="kodeSubCPMK"]')
            ->click('option[value="Sub-CPMK0122"]')
            ->type('mingguKe', '2')
            ->click('select[name="bentukPembelajaran"]')
            ->click('option[value="0"]')
            ->type('indikatorMingguRPS', 'Mahasiswa dapat mengetahui dan menjelaskan konsep data perusahaan')
            ->type('kriteriaMingguRPS', 'Mahasiswa melakukan survei untuk memperoleh data perusahaan')
            ->type('deskripsiPembelajaran', 'Mengenalkan Konsep Data Perusahaan')
            ->type('materiPembelajaran', 'Konsep Data Perusahaan')
            ->click('button[id="confirm"]')
            ->pause(5000);
        });
    }
    public function testDeleteMingguRPS(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/minggu_rps/MK0112023')->assertSee('Delete')
            ->click('a[id="delete"]')
            ->assertSee('Minggu RPS berhasil dihapus')
            ->pause(1000);
        });
    }

    public function testExportRPS(): void
    {
        $this->browse(function (Browser $browser) {
            //Skenario 1 : dari halaman minggu rps
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/minggu_rps/MK0112023')->assertSee('RPS')
            ->click('a[id="rps"]')
            ->click('a[id="pdf"]')
            ->pause(2500);

            //Skenario 2 : dari halaman cari rps
            $browser->visit('http://127.0.0.1:8000/dashboard/rps')->assertSee('Cari RPS')
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->type('tahunAjaran', '2023')
            ->pause(2500)
            ->press('submit')
            ->pause(2500)
            ->click('a[id="pdf"]')
            ->pause(2500);
        });
    }
}
