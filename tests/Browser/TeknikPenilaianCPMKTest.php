<?php

namespace Tests\Browser;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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
            
            $browser->click('#exportPDFButton')
                    ->pause(5000)
                    ->assertPathIs('/dashboard/penilaian/penilaiancpmk');

            $browser->click('#exportExcelButton')
                    ->pause(5000)
                    ->assertPathIs('/dashboard/penilaian/cetak-excel-tpcpmk');


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
