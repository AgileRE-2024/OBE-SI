<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPLDiktiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddCPLSNDiktiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->clickLink('Tambah')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', 'CPL-KK01')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit');
        });
    }
    public function testAddCPLSNDiktiError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->clickLink('Tambah')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', '')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit');
        });
    }
    public function testAddCPLSNDiktiErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->clickLink('Tambah')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', 'CPL-KK01')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit');
        });
    }
    public function testDeleteCPLSNDiktiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->clickLink('Tambah')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', 'CPL-KK00')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit')
                ->clickLink('Delete')
                ->pause(1000);
        });
    }

    public function testEditCPLSNDiktiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->clickLink('Tambah')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', 'CPL-KK00')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit')
                ->clickLink('Edit')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', 'CPL-KK99')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit')
                ->pause(1000);
        });
    }
    public function testEditCPLSNDiktiError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->clickLink('Tambah')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', 'CPL-KK00')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit')
                ->clickLink('Edit')
                ->assertSee("Tambah CPL SN Dikti")
                ->type('kodeCPLSN', '')
                ->type('deskripsiSN', "tes")
                ->type('sumberSN', "tes")
                ->select('kategoriSN')
                ->select('jenisSN')
                ->pause(2000)
                ->press('submit')
                ->pause(1000);
        });
    }
    public function testPDFExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->pause(1000)
                ->click('.btn-outline-danger:nth-child(1)')
                ->pause(1000);
        });
    }
    public function testExcelExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPL SNDikti')
                ->pause(1000)
                ->click('a.btn.btn-success i.bi.bi-file-earmark-excel')
                ->pause(1000);
        });
    }
}
