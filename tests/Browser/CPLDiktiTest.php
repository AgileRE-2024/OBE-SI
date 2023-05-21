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
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_dikti')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', 'CPL03')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit');
                    // ->assertSee("CPL SN Dikti");
        });
    }
    public function testAddCPLSNDiktiError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_dikti')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', '')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit');
                    // ->assertSee("CPL SN Dikti");
        });
    }
    public function testAddCPLSNDiktiErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_dikti')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', 'CPL03')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit');
                    // ->assertSee("CPL SN Dikti");
        });
    }
    public function testDeleteCPLSNDiktiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_dikti')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', 'CPL02')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit')
                    // ->assertSee("CPL SN Dikti");
                    ->clickLink('Delete')
                    ->pause(1000);
        });
    }

    public function testEditCPLSNDiktiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_dikti')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', 'CPL01')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit')
                    // ->assertSee("CPL SN Dikti");
                    ->clickLink('Edit')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', 'CPL02')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit')
                    // ->assertSee("CPL SN Dikti");
                    ->pause(1000);
        });
    }
    public function testEditCPLSNDiktiError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_dikti')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', 'CPL01')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit')
                    // ->assertSee("CPL SN Dikti");
                    ->clickLink('Edit')
                    ->assertSee("Tambah CPL SN Dikti")
                    ->type('kodeCPLSN', '')
                    ->type('deskripsiSN',"tes")
                    ->type('sumberSN',"tes")
                    ->select('kategoriSN')
                    ->select('jenisSN')
                    ->pause(2000)
                    ->press('submit')
                    // ->assertSee("CPL SN Dikti");
                    ->pause(1000);
        });
    }
    public function testPDFExportSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->assertSee("Bahan Kajian")
                    ->pause(1000)
                    ->click('.btn-outline-danger:nth-child(1)')
                    ->pause(1000);
        });
    }
    public function testExcelExportSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->assertSee("Bahan Kajian")
                    ->pause(1000)
                    ->click('.btn-success:nth-child(2)')
                    ->pause(1000);
        });
    }
}
