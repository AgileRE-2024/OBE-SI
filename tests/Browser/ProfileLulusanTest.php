<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileLulusanTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddProfileLulusanSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/profilLulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL03')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan");
        });
    }
    public function testAddProfileLulusanError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/profilLulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', '')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan");
        });
    }
    public function testAddProfileLulusanErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $$browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/profilLulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL03')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan");
        });
    }
    public function testDeleteProfileLulusanSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/profilLulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL02')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan")
                    ->clickLink('Delete')
                    ->pause(1000)
                    ->assertSee('Profil Lulusan');
        });
    }
    public function testEditProfileLulusanSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/profilLulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL01')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan")
                    ->clickLink('Edit')
                    ->type('kodePL', 'PL03')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee('Profil Lulusan');
        });
    }
    public function testEditProfileLulusanError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/profilLulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL01')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan")
                    ->clickLink('Edit')
                    ->type('kodePL', '')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit');
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
