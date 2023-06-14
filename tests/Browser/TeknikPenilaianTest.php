<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TeknikPenilaianTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    // public function testExample(): void
    // {
    //     $this->browse(function (Browser $browser) {
            
    //     });
    // }

public function testAddTP()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Teknik Penilaian")
                    ->type('teknikPenilaian', 'UAS')
                    ->type('bobotPenilaian',"90")
                    ->type('kriteriaPenilaian',"Rubrik Holistik")
                    ->click('select[name="tahapPenilaian"]')
                    ->click('option[value="Awal Semester"]')
                    ->type('instrumenPenilaian',"Instrumen")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee('Teknik Penilaian berhasil ditambahkan');
        });
    }
    public function testEditTP()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian')
                    ->clickLink('Edit')
                    ->assertSee("Edit Teknik Penilaian")
                    ->type('teknikPenilaian', 'UAS')
                    ->type('bobotPenilaian',"90")
                    ->type('kriteriaPenilaian',"Rubrik Holistik")
                    ->click('select[name="tahapPenilaian"]')
                    ->click('option[value="Tengah Semester"]')
                    ->type('instrumenPenilaian',"Instrumen")
                    ->pause(2000)
                    ->press('submit')
                    ->assertSee('Teknik Penilaian berhasil diupdate');
        });
    }
    public function testDeleteTP()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian')
                    ->assertSee("2")
                    ->clickLink('Delete')
                    ->pause(2000)
                    ->assertSee('Teknik Penilaian berhasil dihapus');
                    
        });
    }
};
