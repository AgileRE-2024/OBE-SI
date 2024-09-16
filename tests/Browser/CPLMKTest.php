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

class CPLMKTest extends DuskTestCase
{
    use DatabaseTransactions;

    public function testExample(): void
    {
        // User::all();

        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk"
                )
                ->pause(1000);

            $browser
                ->click("#exportExcelButton")
                ->pause(5000)
                ->assertPathIs("/dashboard/kurikulum/pemetaan/cpl-mk");

            $browser
                ->click("#exportPDFButton")
                ->pause(5000)
                ->assertPathIs("/dashboard/kurikulum/pemetaan/cetak-pdf-cplmk");

            foreach (Mata_Kuliah::all() as $mk) {
                foreach (CPL_Prodi::all() as $cpl) {
                    foreach (
                        CPMK::all()->where("kodeCPL", $cpl->kodeCPL)
                        as $cpmk
                    ) {
                        if (
                            Detail_MK_CPMK::all()
                                ->where("kodeMK", $mk->kodeMK)
                                ->where("kodeCPMK", $cpmk->kodeCPMK)
                                ->count()
                        ) {
                            $browser
                                ->scrollIntoView(
                                    "#" . $mk->kodeMK . "_" . $cpmk->kodeCPMK
                                )
                                ->pause(1000)
                                ->assertVisible(
                                    "#" . $mk->kodeMK . "_" . $cpmk->kodeCPMK
                                );
                        }
                    }
                }
            }

            // $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk');
            // foreach (Mata_Kuliah::all() as $mk) {
            //     foreach (CPL_Prodi::all() as $cpl) {
            //         foreach (CPMK::where('kodeCPL', $cpl->kodeCPL)->get() as $cpmk) {
            //             if (Detail_MK_CPMK::where('kodeCPMK', $cpmk->kodeCPMK)->where('kodeMK', $mk->kodeMK)->count()) {
            //                 $browser->assertAttribute($mk->kodeMK . '_' . $cpmk->kodeCPMK);
            //             }
            //         }
            //     }
            // }

            // $browser->click('#exportExcelButton')
            //     ->pause(5000)
            //     ->assertPathIs('/dashboard/kurikulum/pemetaan/cpl-mk');

            // $browser->click('#exportPDFButton')
            //     ->pause(5000)
            //     ->assertPathIs('/dashboard/kurikulum/pemetaan/cetak-pdf-cplmk');
        });
    }
}
