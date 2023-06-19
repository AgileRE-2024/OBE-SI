<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SubCPMKTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test adding a new Bahan Kajian successfully
     *
     * @return void
     */
    public function testAddSubCPMKSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah Sub CPMK")
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', 'SUB-CPMK0110')
                ->type('deskripsiSubCPMK', "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }
    public function testAddSubCPMKErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah Sub CPMK")
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', 'SUB-CPMK0110')
                ->type('deskripsiSubCPMK', "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }
    public function testAddSubCPMKError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah Sub CPMK")
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', '')
                ->type('deskripsiSubCPMK', "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }

    public function testDeleteSubCPMKSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah Sub CPMK")
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', 'SUB-CPMK0000')
                ->type('deskripsiSubCPMK', "tes")
                ->press("#submit")
                ->pause(2000)
                ->clickLink('Delete')
                ->pause(2000);
        });
    }

    public function testEditSubCPMKSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah Sub CPMK")
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', 'SUB-CPMK0000')
                ->type('deskripsiSubCPMK', "tes")
                ->press("#submit")
                ->pause(2000)
                ->clickLink('Edit')
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', 'SUB-CPMK0001')
                ->type('deskripsiSubCPMK', "tes")
                ->pause(2000)
                ->press("#submit")
                ->pause(2000);
        });
    }

    public function testEditSubCPMKError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah Sub CPMK")
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', 'SUB-CPMK0000')
                ->type('deskripsiSubCPMK', "tes")
                ->press("#submit")
                ->pause(2000)
                ->clickLink('Edit')
                ->select('kodeCPMK')
                ->type('kodeSubCPMK', '')
                ->type('deskripsiSubCPMK', "tes")
                ->pause(2000)
                ->press("#submit")
                ->pause(2000);
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
                ->clickLink('Sub-CPMK')
                ->pause(2000)
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
                ->clickLink('Sub-CPMK')
                ->pause(2000)
                ->click('a.btn.btn-success i.bi.bi-file-earmark-excel')
                ->pause(1000);
        });
    }
}
