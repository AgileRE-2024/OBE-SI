<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PemetaanCPLCPMKMKtest extends DuskTestCase
{
    /**
     * Test landing pemetaan CPL-CPMK-MK
     */
    public function testViewPemetaan()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/')
                ->assertSee('Tabel Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)')
                ->pause(1000);
        });
        
    }

    /**
     * Test input 1 CPMK
     */
    public function testTambahSatuCPMK()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/CPL01')
                ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)')
                // ->pause(1000)
                ->keys('textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero. Integer tincidunt ullamcorper nibh, ut feugiat ex luctus pellentesque. Aliquam nec ullamcorper nulla. Proin in placerat libero. Nulla facilisi. Aenean et tincidunt metus.')
                ->pause(1000)
                // ->assertValue('deskripsi-CPMK013','test')
                // // ->type('deskripsi-CPMK013','test')
                ->press('Kirim')
                ->waitForText('Sukses!')
                ->pause(1000);
        });
    }

    /**
     * Test input 3 CPMK
     */
    // public function testTambahBanyakCPMK()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/CPL07')
    //             ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)')
    //             // ->keys('textarea:nth-child(1)','Satu Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero. Integer tincidunt ullamcorper nibh, ut feugiat ex luctus pellentesque. Aliquam nec ullamcorper nulla. Proin in placerat libero. Nulla facilisi. Aenean et tincidunt metus.')
    //             ->pause(1000)
    //             ->press('Tambah field CPMK')
    //             ->press('Tambah field CPMK');
    //             foreach ($browser->elements('textarea') as $input) {
    //                 $input->sendKeys($input);
    //             break;
    //             }
    //         $browser->pause(1000);
    //         //     ->press('Kirim')
    //         //     ->waitForText('Sukses!')
    //         //     ->pause(1000);
    //     });
    // }

}
