<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverWait;

class CPLBKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-bk"
                )
                ->assertSee(
                    "Matriks Bahan Kajian (BK) & Capaian Pembelajaran Lulusan (CPL)"
                )
                ->check("#checkbox_1A-A1")
                ->check("#checkbox_1B-A2")
                ->pause(4000)
                ->click("#submitbutton")
                ->assertSee("Apakah Anda ingin menyimpan perubahan ?")
                ->click(".swal2-confirm")
                ->pause(2000)
                ->uncheck("#checkbox_1A-A1")
                ->click("#submitbutton")
                ->assertSee("Apakah Anda ingin menyimpan perubahan ?")
                ->click(".swal2-cancel")
                ->refresh()
                ->pause(4000);
        });
    }

    public function test1Example()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-bk"
                )
                ->assertSee(
                    "Matriks Bahan Kajian (BK) & Capaian Pembelajaran Lulusan (CPL)"
                )
                ->clicklink("Export PDF")
                ->pause(2000)
                ->back()
                ->assertSee(
                    "Matriks Bahan Kajian (BK) & Capaian Pembelajaran Lulusan (CPL)"
                )
                ->clicklink("Export Excel")
                ->pause(10000);
        });
    }
}
