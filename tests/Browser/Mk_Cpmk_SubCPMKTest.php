<?php

namespace Tests\Browser;

use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Mk_Cpmk_SubCPMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Silakan memasukkan NIP dan kata sandi")
                ->type('input[name="nip"]', "198110282006041003")
                ->type('input[name="password"]', "coba123")
                ->press('button[name="tombolLogin"]')
                ->pause(6000)
                ->click('li[id="kurikulum"]')
                ->pause(600)
                ->click('li[id="pemetaan"]')
                ->pause(600)
                ->click('li[id="mkcpmksubcpmk"]')
                ->assertUrlIs(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk"
                )
                ->pause(600);
        });
    }

    public function testExcel(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk"
                )
                ->pause(1000)
                ->click('a[id="excel"]')
                ->pause(1500);
        });
    }

    public function testPdf(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk"
                )
                ->pause(1000)
                ->click('a[id="pdf"]')
                ->pause(1500);
        });
    }
}
