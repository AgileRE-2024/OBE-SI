<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPMKTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test adding a new Bahan Kajian successfully
     *
     * @return void
     */
    public function testAddCPMKSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah CPMK")
                ->select('kodeCPL')
                ->type('kodeCPMK', 'CPMK001')
                ->type('deskripsi', "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }
    public function testAddCPMKErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah CPMK")
                ->select('kodeCPL')
                ->type('kodeCPMK', 'CPMK001')
                ->type('deskripsi', "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }
    public function testAddCPMKError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah CPMK")
                ->select('kodeCPL')
                ->type('kodeCPMK', '')
                ->type('deskripsi', "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }

    public function testDeleteCPMKSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->clickLink('Delete')
                ->pause(2000);
        });
    }

    public function testEditCPMKSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->clickLink('Tambah')
                ->assertSee("Tambah CPMK")
                ->select('kodeCPL')
                ->type('kodeCPMK', 'CPMK001')
                ->type('deskripsi', "tes")
                ->press("#submit")
                ->pause(2000)
                ->clickLink('Edit')
                ->select('kodeCPL')
                ->type('kodeCPMK', 'CPMK002')
                ->type('deskripsi', "tes")
                ->pause(2000)
                ->press("#submit")
                ->pause(2000);
        });
    }

    public function testEditCPMKError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->clickLink('Edit')
                ->select('kodeCPL')
                ->type('kodeCPMK', '')
                ->type('deskripsi', "tes")
                ->pause(2000)
                ->press("#submit")
                ->pause(2000);
        });
    }

    public function testPDFExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->click('.btn-outline-danger:nth-child(1)')
                ->pause(1000);
        });
    }
    public function testExcelExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '123456789987654321')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('CPMK')
                ->pause(2000)
                ->click('a.btn.btn-success i.bi.bi-file-earmark-excel')
                ->pause(1000);
        });
    }
}
