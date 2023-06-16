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
            $browser->visit('http://127.0.0.1:8000/login')
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            $browser->type('input[name="nip"]', '123456789987654321');
            $browser->type('input[name="password"]', 'coba123');
            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();
            $browser->pause(1*6000);
            // $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk');
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum')->assertSee('Kurikulum');
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id="kurikulum"]'))->click();
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id="pemetaan"]'))->click();
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id= "mkcpmksubcpmk"]'))->click();
            $browser->assertUrlIs('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk');
            $browser->pause(1*600);
        });
    }
    public function testExcel(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            $browser->type('input[name="nip"]', '123456789987654321');
            $browser->type('input[name="password"]', 'coba123');
            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();
            $browser->pause(1*6000);
            // $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk');
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum')->assertSee('Kurikulum');
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id="kurikulum"]'))->click();
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id="pemetaan"]'))->click();
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id= "mkcpmksubcpmk"]'))->click();
            $browser->assertUrlIs('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk');
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('a[id="excel"]'))->click();
            $browser->pause(1*1500);
        });
    }
    public function testPdf(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            $browser->type('input[name="nip"]', '123456789987654321');
            $browser->type('input[name="password"]', 'coba123');
            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();
            $browser->pause(1*6000);
            // $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk');
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum')->assertSee('Kurikulum');
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id="kurikulum"]'))->click();
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id="pemetaan"]'))->click();
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('li[id= "mkcpmksubcpmk"]'))->click();
            $browser->assertUrlIs('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/mk-cpmk-subcpmk');
            $browser->pause(1*600);
            $browser->driver->findElement(WebDriverBy::cssSelector('a[id="pdf"]'))->click();
            $browser->pause(1*1500);
        });
    }
}
