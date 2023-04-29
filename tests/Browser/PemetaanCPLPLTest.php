<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PemetaanCPLPLTest extends DuskTestCase
{

    public function testPemetaanCPLPL() : void
    {
        // Check
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->check('#checkbox_CPL01-PL01')
            ->pause(1000)
            ->waitForText('Berhasil')
            ->pause(1000)
            ->refresh()
            ->pause(1000)
            ->assertChecked('#checkbox_CPL01-PL01')
            ->pause(1000);
        });

        // Uncheck
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->uncheck('#checkbox_CPL01-PL01')
            ->pause(1000)
            ->waitForText('Berhasil')
            ->pause(1000)
            ->refresh()
            ->pause(2000)
            ->assertNotChecked('#checkbox_CPL01-PL01')
            ->pause(1000);
        });
    }

}
