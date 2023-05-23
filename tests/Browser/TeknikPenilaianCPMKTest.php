<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TeknikPenilaianCPMKTest extends DuskTestCase
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

                    foreach (Mata_Kuliah::all() as $mk) {
                        foreach (CPL_Prodi::all() as $cpl) {
                            foreach (CPMK::all()->where('kodeCPL', $cpl->kodeCPL) as $cpmk) {
                                if (Detail_MK_CPMK::all()->where('kodeMK', $mk->kodeMK)->where('kodeCPMK', $cpmk->kodeCPMK)->count()) {
                                    $browser->scrollIntoView('#' . $mk->kodeMK . '_' . $cpmk->kodeCPMK)
                                            ->pause(1000)
                                            ->assertVisible('#' . $mk->kodeMK . '_' . $cpmk->kodeCPMK);
                                }
                            }
                        }
                    }
        });
    }
}
