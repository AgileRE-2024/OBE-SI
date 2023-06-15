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
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL99')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->pause(2000);
        });
    }
    public function testAddProfileLulusanError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', '')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->pause(2000);
        });
    }
    public function testAddProfileLulusanErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL98')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->pause(2000);
        });
    }
    public function testDeleteProfileLulusanSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL00')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan")
                    ->clickLink('Delete')
                    ->pause(1000);
        });
    }
    public function testEditProfileLulusanSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL00')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan")
                    ->clickLink('Edit')
                    ->type('kodePL', 'PL88')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->pause(2000);
        });
    }
    public function testEditProfileLulusanError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Profil Lulusan")
                    ->type('kodePL', 'PL00')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee("Profil Lulusan")
                    ->clickLink('Edit')
                    ->type('kodePL', '')
                    ->type('deskripsiPL',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->pause(2000);
        });
    }

    public function testPDFExportSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->pause(1000)
                    ->click('.btn-outline-danger:nth-child(1)')
                    ->pause(1000);
        });
    }
    public function testExcelExportSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','123456789987654321')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->clickLink('Data')
                    ->clickLink('Profil Lulusan')
                    ->pause(1000)
                    ->click('a.btn.btn-success i.bi.bi-file-earmark-excel')
                    ->pause(1000);
        });
    }
}
