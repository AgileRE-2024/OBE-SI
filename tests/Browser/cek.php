<?php

namespace Tests\Browser;

use App\Models\Detail_MK_CPMK;
use App\Models\CPMK;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            // Mengunjungi halaman yang akan diuji
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-mk');

            // Mendapatkan data dari tabel Detail_MK_CPMK dan CPMK
            $detailMKCPMK = Detail_MK_CPMK::all();
            $cpmks = CPMK::all();

            // Memeriksa apakah data telah tercentang sesuai dengan database
            foreach ($detailMKCPMK as $detail) {
                foreach ($cpmks as $cpmk) {
                    $isChecked = $detail->where('kodeCPMK', $cpmk->kodeCPMK)->count() > 0;
                    $browser->assertChecked("#checkbox-{$detail->id}-{$cpmk->id}", $isChecked);
                }
            }
        });
    }
}
