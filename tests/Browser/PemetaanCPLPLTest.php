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
