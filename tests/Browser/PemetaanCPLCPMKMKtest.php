<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PemetaanCPLCPMKMKtest extends DuskTestCase
{

    /**
     * IMPORTANT!!!
     * For testing, command the onDelete(restrict) on table CPMK, detail PL CPL Prodi and detail MK CPMK.
     * Don't forget to UNCOMMAND THE WHOLE THING BACK AFTER TESTING!
     */

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
                 ->type('kodeCPMK', 'CPMK012')
                 ->keys('textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero. Integer tincidunt ullamcorper nibh, ut feugiat ex luctus pellentesque. Aliquam nec ullamcorper nulla. Proin in placerat libero. Nulla facilisi. Aenean et tincidunt metus.')
                 ->pause(1000)
                 ->press('Kirim')
                 ->waitForText('Sukses!')
                 ->pause(1000);
         });
     }
 
     /**
      * Test input 3 CPMK
      */
 
     public function testTambahBanyakCPMK()
     {
         // $num = 3;
 
         $this->browse(function (Browser $browser) {
             $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/CPL03')
                 ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)')
                 ->type('#kode-1', 'CPMK031')
                 ->keys('#deskripsi-1','Lorem ipsum ini testing cpmk yang pertama.')
                 ->pause(1000)
                 ->press('Tambah field CPMK')
 
 
                 ->type('#kode-2', 'CPMK032')
                 ->keys('#deskripsi-2','Lorem ipsum ini testing cpmk yang kedua.')
                 ->pause(1000)
                 ->press('Tambah field CPMK')
 
                 ->type('#kode-3', 'CPMK033')
                 ->keys('#deskripsi-3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero ini testing cpmk yang ketiga.')
                 ->pause(1000)
 
                 ->press('Kirim')
                 ->waitForText('Sukses!')
                 ->pause(1000);
 
                 // for ($i = 1; $i <= $num; $i++) {
                 //     $inputId= "kode-$i";
                 //     $textareaId = "deskripsi-$i";
                 //     $browser->press('Tambah Field CPMK')
                 //             ->type("#$inputId", "CPMK031 $i")
                 //             ->keys("#$textareaId","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero. Integer tincidunt ullamcorper nibh, ut feugiat ex luctus pellentesque. Aliquam nec ullamcorper nulla. Proin in placerat libero. Nulla facilisi. Aenean et tincidunt metus.")
                 //             ->assertInputValue("#$textareaId", "Textarea $i")
                 //             ->pause(1000);
                 // }
             // $browser->pause(1000)
             //     ->press('Tambah field CPMK')
             //     ->press('Tambah field CPMK');
             //     foreach ($browser->elements('textarea') as $input) {
             //         $input->sendKeys($input);
             //     break;
             //     }
         });
     }
     
     /**
      * Test tambah MK
      */
 
     public function testTambahMK()
     {
         $this->browse(function (Browser $browser) {

            /**
             * Add CPMK
            */

            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/CPL02')
                 ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)')
                 ->type('kodeCPMK', 'CPMK021')
                 ->keys('textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero. Integer tincidunt ullamcorper nibh, ut feugiat ex luctus pellentesque. Aliquam nec ullamcorper nulla. Proin in placerat libero. Nulla facilisi. Aenean et tincidunt metus.')
                 ->pause(1000)
                 ->press('Kirim')
                 ->waitForText('Sukses!')
                 ->pause(1000);

            /**
             * Add MK
            */

            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/edit_cpmk/CPMK021') 
                 ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)')
                 ->check('#MK01')
                 ->pause(1000)
                 ->press('Kirim')
                 ->waitForText('Sukses!')
                 ->pause(1000);
         });
     }
 
     /**
      * Test edit deskripsi CPMK
      */
 
     public function testEditCPMK()
     {
         $this->browse(function (Browser $browser) {

            /**
             * Add CPMK
            */

            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/CPL03')
                 ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)')
                 ->type('kodeCPMK', 'CPMK031')
                 ->keys('textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere magna porta, imperdiet ligula tempor, pulvinar libero. Integer tincidunt ullamcorper nibh, ut feugiat ex luctus pellentesque. Aliquam nec ullamcorper nulla. Proin in placerat libero. Nulla facilisi. Aenean et tincidunt metus.')
                 ->pause(1000)
                 ->press('Kirim')
                 ->waitForText('Sukses!')
                 ->pause(1000);

            /**
             * Modify the added description
            */

            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/edit_cpmk/CPMK031') 
                 ->clear('textarea')   
                 ->keys('textarea','ubah deskripsi.')
                 ->pause(1000)
                 ->press('Kirim')
                 ->waitForText('Sukses!')
                 ->pause(1000);
         });
     }
 
     // /**
     //  * Test hapus CPMK
     //  */
     // 
     // public function testDelete()
     // {
     //     $this->browse(function (Browser $browser)  {
     //         $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/CPL07')
     //             ->assertSee('Input Capaian Pembelajaran Mata Kuliah (CPMK) Berdasarkan Capaian Pembelajaran Lulusan (CPL)');
     //     });
     // }
 
     /**
      * Test export PDF
      */
     
     public function testExportPDF()
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk')
                ->assertSee('Tabel Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)')
                ->pause(1000)
                ->click('#export-pdf')
                ->pause(2000)
                ->assertPathIs('/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/export')
                ->pause(2000);
                // ->visit(
                //     $browser->attribute('Export PDF', 'http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/export')
                // );
                // $browser->dump();
                 
         });
     }
 
     /**
      * Test export excel
      */
     
     public function testExportExcel()
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk')
                 ->assertSee('Tabel Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)')
                 ->pause(1000)
                 ->click('#export-excel')
                 ->pause(4000);
         });
     }

     /**
     * Test matriks pemetaan CPL-CPMK-MK
     */

     public function testViewMatriks()
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/matriks')
                 ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) - Capaian Pembelajaran Mata Kuliah (CPMK) - Mata Kuliah (MK)')
                 ->pause(1000);
         });
         
     }
 
     /**
      * Setup migration for new test
      */
 
     protected function setUp(): void
      {
          parent::setUp();
  
          $this->artisan(
              'migrate:fresh --seed'
          );
      }

}
