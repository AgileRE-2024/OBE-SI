<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TeknikPenliaianCPMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/penilaian/penilaiancpmk')
                    ->pause(1000);
            
            $browser->click('#exportExcelButton')
                    ->pause(5000)
                    ->assertPathIs('/dashboard/penilaian/cetak-excel-tpcpmk');

            $browser->click('#exportPDFButton')
                    ->pause(5000)
                    ->assertPathIs('/dashboard/penilaian/cetak-pdf-tpcpmk');
        });
    }
}
