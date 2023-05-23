<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class organisasiMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testReadData(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah')
                ->assertSee('Matriks Organisasi Mata Kuliah')
                ->pause(1000)
                ->assertSee('MK01')
                ->pause(1000);
        });
    }

    public function testExportPDF(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah')
                ->assertSee('Matriks Organisasi Mata Kuliah')
                ->pause(2000)
                ->clickLink('Export PDF')
                ->pause(1000);
        });
    }

    public function testExportExcel(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://fiturobe.test/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah')
                ->assertSee('Matriks Organisasi Mata Kuliah')
                ->pause(2000)
                ->clickLink('Export Excel')
                ->pause(1000);
        });
    }
}
