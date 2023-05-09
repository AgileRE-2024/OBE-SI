<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPLProdiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddCPLProdiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_prodi')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL Prodi")
                    ->type('kodeCPL', 'CPL03')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("CPL Program Studi");
        });
    }
    public function testAddCPLProdiError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_prodi')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL Prodi")
                    ->type('kodeCPL', '')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("CPL Program Studi");
        });
    }
    public function testAddCPLProdiErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_prodi')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL Prodi")
                    ->type('kodeCPL', 'CPL03')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("CPL Program Studi");
        });
    }
    public function testDeleteCPLProdiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_prodi')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL Prodi")
                    ->type('kodeCPL', 'CPL02')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("CPL Program Studi")
                    ->clickLink('Delete')
                    ->pause(1000);

        });
    }
    public function testCPLEditSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_prodi')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL Prodi")
                    ->type('kodeCPL', 'CPL01')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("CPL Program Studi")
                    ->clickLink('Edit')
                    ->type('kodeCPL', 'CPL05')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit');
        });
    }
    public function testCPLEditError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/cpl_prodi')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah CPL Prodi")
                    ->type('kodeCPL', 'CPL01')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("CPL Program Studi")
                    ->clickLink('Edit')
                    ->type('kodeCPL', '')
                    ->type('deskripsiCPL',"tes")
                    ->type('referensiCPL',"tes")
                    ->pause(2000)
                    ->press('submit');
        });
    }
}
