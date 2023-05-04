<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPLMKTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk')
                    ->click('#exportExcelButton')
                    ->pause(5000)
                    ->assertPathIs('/dashboard/kurikulum/pemetaan/cpl-mk');
        
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk')
                    ->click('#exportPDFButton')
                    ->pause(5000)
                    ->assertPathIs('/dashboard/kurikulum/pemetaan/cetak-pdf-cplmk');
        });

        
        });
    }
}
