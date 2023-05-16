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
    /**
     * A basic browser test example.
     */
     public function testExample(): void
    {
        User::all();
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk');
            foreach (Mata_Kuliah::all() as $mk) {
                foreach (CPL_Prodi::all() as $cpl) {
                    foreach (CPMK::where('kodeCPL',$cpl->kodeCPL) as $cpmk) {
                        if(Detail_MK_CPMK::where('kodeCPMK', $cpmk->kodeCPMK)->where('kodeMK',$mk->kodeMK)->count()){
                            $browser->AssertAttribut($mk->kodeMK . '_' . $cpmk->kodeCPMK);
                       }
                    }
                }
            };
            
            // // Mengunjungi halaman yang akan diuji
            // $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk');

            // // Mendapatkan data dari tabel Detail_MK_CPMK dan CPMK
            // $detailMKCPMK = Detail_MK_CPMK::all();
            // $cpmks = CPMK::all();

            // // Memeriksa apakah data telah tercentang sesuai dengan database
            // foreach ($detailMKCPMK as $detail) {
            //     foreach ($cpmks as $cpmk) {
            //         $isChecked = $detail->where('kodeCPMK', $cpmk->kodeCPMK)->count() > 0;
            //         $browser->assertChecked("#checkbox-{$detail->id}-{$cpmk->id}", $isChecked);
            //     }
            // }
        });
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk')
        //             ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Mata Kuliah (MK)');
        //     $checkboxes = $browser->elements('.table-borderedinput[type="checkbox"]');
        //     foreach ($checkboxes as $checkbox) {
        //         $browser->with($checkbox, function (Browser $checkboxElement) {
        //             $isChecked = $checkboxElement->attribute('checked') !== null;

        //             if ($isChecked) {
        //                 $checkboxElement->assertAttribute('checked');
        //             } else {
        //                 $checkboxElement->assertMissingAttribut('checked');
        //             }
        //         });
        //     }
        // });

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
